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

    /* ---------- scroll reveal (only below-the-fold items) ---------- */
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
            });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
        $$('.section-head, .feature, .menu-item, .menu-section-head, .review, .split-media, .split-text, .photo, .member, .post-card, .card, .visit-info, .visit-map, .kos-inner')
            .forEach(function (el) {
                if (el.getBoundingClientRect().top > window.innerHeight) { el.classList.add('reveal'); io.observe(el); }
            });
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

    /* ---------- gallery lightbox ---------- */
    var box = $('#lightbox');
    var items = $$('[data-gallery] .gallery-item');
    if (box && items.length && typeof box.showModal === 'function') {
        var img = $('img', box), cap_ = $('figcaption', box), cur = 0;
        var show = function (i) {
            cur = (i + items.length) % items.length;
            var a = items[cur];
            img.src = a.getAttribute('href');
            img.alt = a.getAttribute('data-caption') || '';
            cap_.textContent = a.getAttribute('data-caption') || '';
        };
        items.forEach(function (a, i) {
            a.addEventListener('click', function (e) { e.preventDefault(); show(i); box.showModal(); });
        });
        $('.lightbox-close', box).addEventListener('click', function () { box.close(); });
        $('.lightbox-prev', box).addEventListener('click', function () { show(cur - 1); });
        $('.lightbox-next', box).addEventListener('click', function () { show(cur + 1); });
        box.addEventListener('click', function (e) { if (e.target === box) box.close(); });
        box.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowLeft') show(cur - 1);
            if (e.key === 'ArrowRight') show(cur + 1);
        });
    }
})();
