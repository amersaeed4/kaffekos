/* Kaffekos theme: small, dependency-free behaviours */
(function () {
    'use strict';

    var doc = document;
    var $ = function (sel, root) { return (root || doc).querySelector(sel); };
    var $$ = function (sel, root) { return Array.prototype.slice.call((root || doc).querySelectorAll(sel)); };

    /* ---------- header: solid after scrolling, mobile menu ---------- */
    var header = $('#site-header');
    var toggle = $('.nav-toggle');
    function onScroll() {
        if (header) header.classList.toggle('is-scrolled', window.scrollY > 24);
    }
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    if (toggle) {
        toggle.addEventListener('click', function () {
            var open = doc.body.classList.toggle('nav-open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        });
        $$('#main-nav a').forEach(function (a) {
            a.addEventListener('click', function () { doc.body.classList.remove('nav-open'); toggle.setAttribute('aria-expanded', 'false'); });
        });
    }

    /* ---------- open now / closed (always Lahore time) ---------- */
    var DAYS = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
    function toMin(t) {
        var m = /^(\d{1,2}):(\d{2})/.exec(t || '');
        return m ? parseInt(m[1], 10) * 60 + parseInt(m[2], 10) : null;
    }
    function fmt(t) {
        var m = toMin(t);
        if (m === null) return '';
        var h = Math.floor(m / 60) % 24, mm = m % 60, ap = h >= 12 ? 'PM' : 'AM';
        return ((h % 12) || 12) + ':' + (mm < 10 ? '0' : '') + mm + ' ' + ap;
    }
    function cap(s) { return s.charAt(0).toUpperCase() + s.slice(1); }

    function lahoreNow() {
        try {
            var parts = new Intl.DateTimeFormat('en-US', { timeZone: 'Asia/Karachi', weekday: 'long', hour: '2-digit', minute: '2-digit', hour12: false }).formatToParts(new Date());
            var o = {};
            parts.forEach(function (p) { o[p.type] = p.value; });
            return { day: o.weekday.toLowerCase(), min: (parseInt(o.hour, 10) % 24) * 60 + parseInt(o.minute, 10) };
        } catch (e) {
            var d = new Date();
            return { day: DAYS[d.getDay()], min: d.getHours() * 60 + d.getMinutes() };
        }
    }

    function openStatus(hours) {
        var now = lahoreNow();
        var byDay = {};
        hours.forEach(function (h) { byDay[(h.day || '').toLowerCase()] = h; });
        var idx = DAYS.indexOf(now.day);
        var today = byDay[now.day];
        var yest = byDay[DAYS[(idx + 6) % 7]];

        // still open from yesterday's late session (e.g. closes 01:00)?
        if (yest && !yest.closed) {
            var yo = toMin(yest.open), yc = toMin(yest.close);
            if (yo !== null && yc !== null && yc <= yo && now.min < yc) return { open: true, text: 'Open now · until ' + fmt(yest.close) };
        }
        if (today && !today.closed) {
            var o = toMin(today.open), c = toMin(today.close);
            if (o !== null && c !== null) {
                var overnight = c <= o;
                if (now.min >= o && (overnight || now.min < c)) return { open: true, text: 'Open now · until ' + fmt(today.close) };
                if (now.min < o) return { open: false, text: 'Closed now · opens today at ' + fmt(today.open) };
            }
        }
        for (var i = 1; i <= 7; i++) {
            var nd = byDay[DAYS[(idx + i) % 7]];
            if (nd && !nd.closed && nd.open) {
                return { open: false, text: 'Closed now · opens ' + (i === 1 ? 'tomorrow' : cap(DAYS[(idx + i) % 7])) + ' at ' + fmt(nd.open) };
            }
        }
        return { open: false, text: 'Closed' };
    }

    var hoursEl = $('#kk-hours');
    if (hoursEl) {
        var hours = [];
        try { hours = JSON.parse(hoursEl.textContent) || []; } catch (e) { hours = []; }
        if (hours.length) {
            var st = openStatus(hours);
            $$('[data-open-status]').forEach(function (el) {
                el.classList.add(st.open ? 'is-open' : 'is-closed');
                el.setAttribute('data-ready', '1');
                var t = $('[data-open-text]', el);
                if (t) t.textContent = st.text;
            });
            var today = lahoreNow().day;
            $$('[data-hours-table] tr[data-day]').forEach(function (tr) {
                if (tr.getAttribute('data-day') === today) tr.classList.add('today');
            });
        }
    }

    /* ---------- home: event banner flips to "Happening now" / hides itself when over (no reload needed) ---------- */
    var evBanner = $('.hm-event[data-start]');
    if (evBanner) {
        var evStart = +evBanner.getAttribute('data-start'), evEnd = +evBanner.getAttribute('data-end'), evLabel = $('[data-ev-label]', evBanner);
        var evTick = function () {
            var now = Date.now() / 1000;
            if (now >= evEnd) { evBanner.hidden = true; return; }
            if (now >= evStart && !evBanner.classList.contains('is-live')) {
                evBanner.classList.add('is-live');
                if (evLabel) evLabel.textContent = 'Happening now';
            }
        };
        evTick();
        setInterval(evTick, 30000);
    }

    /* ---------- scroll reveal (only below-the-fold items) ---------- */
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
            });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
        $$('.section-head, .feature, .menu-item, .menu-block, .review, .split-media, .split-text, .photo, .member, .post-card, .card, .visit-info, .visit-map, .kos-inner, .ab-card, .ab-eq, .ab-hello-grid, .hm-stat')
            .forEach(function (el) {
                if (el.getBoundingClientRect().top > window.innerHeight) { el.classList.add('reveal'); io.observe(el); }
            });
    }

    /* ---------- contact: topic chips drive the subject select ---------- */
    var topics = $('[data-topics]');
    var subject = topics && $('.contact-form select[name="data[subject]"]');
    if (topics && subject) {
        var chips = $$('[data-topic]', topics);
        var syncTopics = function () {
            chips.forEach(function (c) { c.classList.toggle('is-active', c.getAttribute('data-topic') === subject.value); });
        };
        chips.forEach(function (c) {
            c.addEventListener('click', function () {
                subject.value = c.getAttribute('data-topic');
                subject.dispatchEvent(new Event('change', { bubbles: true }));
                var msg = $('.contact-form textarea');
                if (msg) msg.focus({ preventScroll: true });
            });
        });
        subject.addEventListener('change', syncTopics);
        topics.hidden = false;
        syncTopics();
    }

    /* ---------- menu: highlight the category you are reading ---------- */
    var tabs = $$('.menu-tabs a');
    if (tabs.length && 'IntersectionObserver' in window) {
        var map = {};
        tabs.forEach(function (a) { map[a.getAttribute('href').slice(1)] = a; });
        var spy = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) {
                    tabs.forEach(function (a) { a.classList.remove('active'); });
                    var a = map[e.target.id];
                    if (a) {
                        a.classList.add('active');
                        /* scroll the tab bar sideways only; scrollIntoView would also move the page and cancel the smooth scroll */
                        var bar = a.parentNode;
                        bar.scrollTo({ left: bar.scrollLeft + a.getBoundingClientRect().left - bar.getBoundingClientRect().left - (bar.clientWidth - a.offsetWidth) / 2, behavior: 'smooth' });
                    }
                }
            });
        }, { rootMargin: '-30% 0px -60% 0px' });
        $$('.menu-section').forEach(function (s) { spy.observe(s); });
    }

    /* ---------- menu: section switch, live search, favourites, surprise ---------- */
    var menuBlocks = $$('[data-menu-block]');
    if (menuBlocks.length) {
        var q = $('#menu-search'), none = $('#menu-empty'), ctl = $('#menu-controls');
        var groups = $$('.menu-group'), tabsAll = $$('.menu-tabs a');
        var state = { term: '', group: '', favs: false };
        var FAV_KEY = 'kk-menu-favs', favs = {};
        try { favs = JSON.parse(localStorage.getItem(FAV_KEY) || '{}') || {}; } catch (err) { favs = {}; }
        var saveFavs = function () { try { localStorage.setItem(FAV_KEY, JSON.stringify(favs)); } catch (err) { /* private mode */ } };
        var keyOf = function (it) { return it.closest('[data-menu-block]').id + '|' + it.querySelector('h3').textContent.trim(); };
        var heart = '<svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M12 21s-7.5-4.6-9.6-9.2C.9 8.4 2.8 5 6.2 5c2.1 0 3.7 1.2 4.6 2.7h.4C12.1 6.2 13.7 5 15.8 5c3.4 0 5.3 3.4 3.8 6.8C19.5 16.4 12 21 12 21z" fill="currentColor" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>';

        /* a heart on every item */
        var allItems = [];
        menuBlocks.forEach(function (b) {
            $$('.menu-item', b).forEach(function (it) {
                allItems.push(it);
                var btn = document.createElement('button');
                btn.type = 'button'; btn.className = 'menu-fav'; btn.innerHTML = heart;
                btn.setAttribute('aria-label', 'Add ' + it.querySelector('h3').textContent.trim() + ' to my picks');
                var k = keyOf(it);
                var paint = function () { var on = !!favs[k]; btn.classList.toggle('is-on', on); btn.setAttribute('aria-pressed', on); it.classList.toggle('is-fav', on); };
                btn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    if (favs[k]) delete favs[k]; else favs[k] = 1;
                    saveFavs(); paint(); update();
                });
                paint();
                it.appendChild(btn);
            });
        });

        /* controls: section switch + my picks + surprise me */
        var mk = function (cls, html, onclick) {
            var b = document.createElement('button');
            b.type = 'button'; b.className = 'menu-chip ' + cls; b.innerHTML = html; b.addEventListener('click', onclick);
            ctl.appendChild(b); return b;
        };
        var chips = [];
        if (groups.length > 1) {
            var all = mk('', 'All', function () { state.group = ''; update(); });
            all.dataset.group = ''; chips.push(all);
            groups.forEach(function (g) {
                var c = mk('', g.getAttribute('data-group-label'), function () { state.group = g.getAttribute('data-group'); update(); });
                c.dataset.group = g.getAttribute('data-group'); chips.push(c);
            });
        }
        var favChip = mk('chip-fav', heart + ' <span>My picks</span> <b class="chip-count">0</b>', function () { state.favs = !state.favs; update(); });
        mk('chip-surprise', '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l1.9 5.1L19 10l-5.1 1.9L12 17l-1.9-5.1L5 10l5.1-1.9z"/><path d="M19 17v4M17 19h4"/></svg> Surprise me', function () {
            var pool = allItems.filter(function (it) { return !it.hidden && !it.closest('[hidden]'); });
            if (!pool.length) return;
            var it = pool[Math.floor(Math.random() * pool.length)];
            $$('.is-picked').forEach(function (x) { x.classList.remove('is-picked'); });
            it.scrollIntoView({ block: 'center', behavior: 'smooth' });
            void it.offsetWidth; it.classList.add('is-picked');
            setTimeout(function () { it.classList.remove('is-picked'); }, 3200);
        });

        /* apply the search, section and favourites filters together */
        var update = function () {
            var term = state.term.toLowerCase(), any = false, filtering = !!(term || state.group || state.favs);
            groups.forEach(function (g) {
                var gHidden = !!state.group && g.getAttribute('data-group') !== state.group, gAny = false;
                $$('[data-menu-block]', g).forEach(function (b) {
                    var titleHit = term && b.querySelector('h2').textContent.toLowerCase().indexOf(term) > -1, shown = 0;
                    $$('.menu-item', b).forEach(function (it) {
                        var hit = (!term || titleHit || it.textContent.toLowerCase().indexOf(term) > -1) && (!state.favs || favs[keyOf(it)]);
                        it.hidden = !hit; if (hit) shown++;
                    });
                    b.hidden = gHidden || !shown;
                    if (!b.hidden) { gAny = true; b.classList.add('is-visible'); }
                });
                $$('.menu-filler', g).forEach(function (f) { f.hidden = filtering; });
                g.hidden = gHidden || !gAny;
                if (!g.hidden) any = true;
            });
            tabsAll.forEach(function (a) { var t = $(a.getAttribute('href')); a.hidden = !t || t.hidden; });
            chips.forEach(function (c) { var on = c.dataset.group === state.group; c.classList.toggle('is-active', on); c.setAttribute('aria-pressed', on); });
            var n = Object.keys(favs).length;
            favChip.classList.toggle('is-active', state.favs); favChip.setAttribute('aria-pressed', state.favs);
            favChip.classList.toggle('has-favs', n > 0);
            favChip.querySelector('.chip-count').textContent = n;
            if (none) {
                none.hidden = any || !filtering;
                none.textContent = state.favs && !term ? 'No picks yet. Tap the heart on any item to save it here.' : 'Nothing matches your search. Try another word.';
            }
        };
        if (q) q.addEventListener('input', function () { state.term = q.value.trim(); update(); });
        update();
    }

    /* ---------- gallery: filters, shuffle, saved hearts, tilt, lightbox ---------- */
    var grid = $('[data-gallery]');
    if (grid) {
        var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        var cards = function () { return $$('.gal-card', grid); };
        var shown = function () { return cards().filter(function (c) { return !c.hidden; }); };
        var filterBtns = $$('.gal-fchip');
        var countEl = $('[data-shown]'), emptyEl = $('.gal-empty'), savedEls = $$('[data-saved-count]');
        var current = 'all';

        /* saved photos live in this browser only */
        var KEY = 'kk-gallery-saved', saved = [];
        try { saved = JSON.parse(localStorage.getItem(KEY)) || []; } catch (e) { saved = []; }
        var persist = function () { try { localStorage.setItem(KEY, JSON.stringify(saved)); } catch (e) { /* private mode */ } };
        var paintSaved = function () {
            cards().forEach(function (c) {
                var on = saved.indexOf(c.getAttribute('data-id')) > -1, b = $('.gal-heart', c);
                b.classList.toggle('is-saved', on);
                b.setAttribute('aria-pressed', on ? 'true' : 'false');
                b.setAttribute('aria-label', on ? 'Remove from saved' : 'Save this photo');
            });
            savedEls.forEach(function (el) { el.textContent = saved.length; });
        };

        /* entrance pop: staggered, and only for cards that are actually on screen */
        var popIn = function (list) {
            if (reduce) return;
            list.forEach(function (c, i) {
                c.classList.remove('gal-in', 'gal-pre');
                void c.offsetWidth;
                c.style.setProperty('--d', Math.min(i, 8) * 70 + 'ms');
                c.classList.add('gal-in');
            });
        };

        var apply = function (name) {
            current = name;
            filterBtns.forEach(function (b) {
                var on = b.getAttribute('data-filter') === name;
                b.classList.toggle('is-on', on);
                b.setAttribute('aria-pressed', on ? 'true' : 'false');
            });
            cards().forEach(function (c) {
                c.hidden = !(name === 'all' || (name === 'saved' ? saved.indexOf(c.getAttribute('data-id')) > -1 : c.getAttribute('data-cat') === name));
            });
            var vis = shown();
            if (countEl) countEl.textContent = vis.length;
            if (emptyEl) emptyEl.hidden = !(name === 'saved' && !vis.length);
            popIn(vis);
        };
        filterBtns.forEach(function (b) { b.addEventListener('click', function () { apply(b.getAttribute('data-filter')); }); });

        var shuffle = $('[data-shuffle]');
        if (shuffle) {
            shuffle.addEventListener('click', function () {
                var list = cards();
                for (var i = list.length - 1; i > 0; i--) {
                    var j = Math.floor(Math.random() * (i + 1)), t = list[i]; list[i] = list[j]; list[j] = t;
                }
                list.forEach(function (c) { grid.appendChild(c); });
                shuffle.classList.remove('spin'); void shuffle.offsetWidth; shuffle.classList.add('spin');
                popIn(shown());
            });
        }

        /* heart burst */
        var burst = function (btn) {
            if (reduce || !btn.animate) return;
            var r = btn.getBoundingClientRect(), x0 = r.left + r.width / 2, y0 = r.top + r.height / 2;
            ['💖', '✨', '💜', '⭐', '💛', '🩷', '✨', '💖'].forEach(function (ch, i) {
                var p = doc.createElement('span');
                p.className = 'gal-burst'; p.textContent = ch;
                p.style.left = x0 + 'px'; p.style.top = y0 + 'px';
                doc.body.appendChild(p);
                var ang = (Math.PI * 2 * i) / 8 + Math.random() * 0.6, dist = 50 + Math.random() * 50;
                p.animate([
                    { transform: 'translate(-50%,-50%) scale(.3)', opacity: 1 },
                    { transform: 'translate(calc(-50% + ' + Math.cos(ang) * dist + 'px), calc(-50% + ' + (Math.sin(ang) * dist - 30) + 'px)) scale(1.3) rotate(' + (Math.random() * 80 - 40) + 'deg)', opacity: 0 }
                ], { duration: 750 + Math.random() * 300, easing: 'cubic-bezier(.2,.8,.3,1)' }).onfinish = function () { p.remove(); };
            });
        };
        grid.addEventListener('click', function (e) {
            var b = e.target.closest('.gal-heart');
            if (!b) return;
            var id = b.closest('.gal-card').getAttribute('data-id'), at = saved.indexOf(id);
            if (at > -1) saved.splice(at, 1); else { saved.push(id); burst(b); }
            persist(); paintSaved();
            filterBtns.forEach(function (f) { if (f.getAttribute('data-filter') === 'saved') { f.classList.remove('bump'); void f.offsetWidth; f.classList.add('bump'); } });
            if (current === 'saved') apply('saved');
        });

        /* tilt toward the pointer (mouse only) */
        if (!reduce && window.matchMedia('(pointer: fine)').matches) {
            grid.addEventListener('pointermove', function (e) {
                var c = e.target.closest('.gal-card');
                if (!c) return;
                var r = c.getBoundingClientRect();
                c.style.setProperty('--rx', ((0.5 - (e.clientY - r.top) / r.height) * 9).toFixed(2) + 'deg');
                c.style.setProperty('--ry', (((e.clientX - r.left) / r.width - 0.5) * 11).toFixed(2) + 'deg');
            });
            grid.addEventListener('pointerout', function (e) {
                var c = e.target.closest('.gal-card');
                if (c && !c.contains(e.relatedTarget)) { c.style.removeProperty('--rx'); c.style.removeProperty('--ry'); }
            });
        }

        paintSaved();

        /* first paint: pop in what is on screen, hold back the rest until scrolled to */
        if (!reduce) {
            var seen = 0;
            var io2 = 'IntersectionObserver' in window ? new IntersectionObserver(function (entries) {
                var n = 0;
                entries.forEach(function (en) {
                    if (en.isIntersecting) {
                        io2.unobserve(en.target);
                        en.target.classList.remove('gal-pre');
                        en.target.style.setProperty('--d', (n++ % 4) * 90 + 'ms');
                        en.target.classList.add('gal-in');
                    }
                });
            }, { rootMargin: '0px 0px -6% 0px', threshold: 0.05 }) : null;
            cards().forEach(function (c) {
                if (!io2) return;
                if (c.getBoundingClientRect().top > window.innerHeight) { c.classList.add('gal-pre'); io2.observe(c); }
                else { c.style.setProperty('--d', (seen++ % 6) * 90 + 'ms'); c.classList.add('gal-in'); }
            });
        }

        /* lightbox: walks through the photos currently shown */
        var box = $('#lightbox');
        if (box && typeof box.showModal === 'function') {
            var fig = $('figure', box), img = $('img', box), txt = $('.lightbox-text', box), num = $('.lightbox-count', box), cur = 0, list = [];
            var show = function (i) {
                cur = (i + list.length) % list.length;
                var card = list[cur], a = $('.gallery-item', card);
                img.src = a.getAttribute('href');
                img.alt = a.getAttribute('data-caption') || '';
                txt.textContent = a.getAttribute('data-caption') || '';
                num.textContent = (cur + 1) + ' / ' + list.length;
                fig.style.setProperty('--lb', getComputedStyle(card).getPropertyValue('--c').trim() || '');
                fig.classList.remove('swap'); void fig.offsetWidth; fig.classList.add('swap');
            };
            grid.addEventListener('click', function (e) {
                var a = e.target.closest('.gallery-item');
                if (!a) return;
                e.preventDefault();
                list = shown();
                show(list.indexOf(a.closest('.gal-card')));
                box.showModal();
            });
            $('.lightbox-close', box).addEventListener('click', function () { box.close(); });
            $('.lightbox-prev', box).addEventListener('click', function () { show(cur - 1); });
            $('.lightbox-next', box).addEventListener('click', function () { show(cur + 1); });
            box.addEventListener('click', function (e) { if (e.target === box) box.close(); });
            box.addEventListener('keydown', function (e) {
                if (e.key === 'ArrowLeft') show(cur - 1);
                if (e.key === 'ArrowRight') show(cur + 1);
            });
            var tx = null;
            box.addEventListener('touchstart', function (e) { tx = e.changedTouches[0].clientX; }, { passive: true });
            box.addEventListener('touchend', function (e) {
                if (tx === null) return;
                var dx = e.changedTouches[0].clientX - tx; tx = null;
                if (Math.abs(dx) > 50) show(cur + (dx < 0 ? 1 : -1));
            }, { passive: true });
        }
    }
    /* ---------- events: filter by type ---------- */
    var evGrid = $('[data-events]');
    if (evGrid) {
        var evBtns = $$('[data-ev-filter]');
        evBtns.forEach(function (b) {
            b.addEventListener('click', function () {
                var f = b.getAttribute('data-ev-filter');
                evBtns.forEach(function (o) { var on = o === b; o.classList.toggle('is-on', on); o.setAttribute('aria-pressed', on ? 'true' : 'false'); });
                $$('.ev-card', evGrid).forEach(function (c) {
                    c.hidden = !(f === 'all' || c.getAttribute('data-kind') === f);
                });
                $$('[data-ev-group]', evGrid).forEach(function (h) { h.hidden = f !== 'all'; });
            });
        });
    }
})();
