/* Admin 2 dashboard widget: Google rating limiter status (Kaffekos theme).
   The dashboard sets window.__GRAV_WIDGET_TAG and the API globals before loading this file. */
(function () {
    var tag = window.__GRAV_WIDGET_TAG;
    if (!tag || customElements.get(tag)) return;

    var COLORS = { ok: '#16a34a', warn: '#d97706', limit: '#dc2626', off: '#6b7280' };

    function esc(v) { return String(v == null ? '' : v).replace(/[&<>"]/g, function (c) { return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;' }[c]; }); }
    function bar(label, used, max) {
        var pct = Math.min(100, Math.round(used / max * 100));
        var color = pct >= 100 ? COLORS.limit : pct >= 80 ? COLORS.warn : COLORS.ok;
        return '<div style="margin-top:.55rem"><div style="display:flex;justify-content:space-between;font-size:.75rem;opacity:.8"><span>' + esc(label) +
            '</span><b>' + used + ' of ' + max + '</b></div><div style="height:7px;border-radius:99px;background:rgba(127,127,127,.25);overflow:hidden;margin-top:3px">' +
            '<div style="height:100%;width:' + pct + '%;background:' + color + ';border-radius:99px"></div></div></div>';
    }
    function nextText(sec) {
        if (sec == null) return '';
        if (sec <= 0) return 'next refresh at the next visit';
        return 'next refresh in about ' + (sec >= 3600 ? (Math.round(sec / 360) / 10) + ' hours' : Math.max(1, Math.ceil(sec / 60)) + ' minutes');
    }

    class KaffekosGoogleWidget extends HTMLElement {
        connectedCallback() {
            this.style.display = 'block';
            this.style.height = '100%';
            this.render({ loading: true });
            this.load();
            var self = this;
            this._obs = new MutationObserver(function () { self.load(); });
            this._obs.observe(this, { attributes: true, attributeFilter: ['data-endpoint'] });
        }
        disconnectedCallback() { if (this._obs) this._obs.disconnect(); }
        load() {
            /* The server puts the numbers into the widget definition as JSON (see kaffekos-admin.php). */
            try {
                this.render({ data: JSON.parse(this.getAttribute('data-endpoint') || '{}') });
            } catch (e) {
                this.render({ error: 'unreadable status' });
            }
        }
        render(state) {
            var body;
            if (state.loading) {
                body = '<div style="opacity:.6;font-size:.85rem">Loading…</div>';
            } else if (state.error) {
                body = '<div style="color:' + COLORS.warn + ';font-size:.85rem">Could not load the status (' + esc(state.error) + ').</div>';
            } else {
                var d = state.data, color = COLORS[d.level] || COLORS.off;
                var head = d.rating != null
                    ? '<div style="display:flex;align-items:baseline;gap:.5rem;flex-wrap:wrap"><span style="font-size:1.8rem;font-weight:700;line-height:1">' + d.rating.toFixed(1) +
                      ' <span style="color:#fbbc04">★</span></span><span style="opacity:.8;font-size:.9rem">' + esc(d.count) + ' Google reviews</span></div>'
                    : '<div style="font-size:1rem;font-weight:600">No rating from Google yet</div>';
                body = head;
                if (d.setup) {
                    body += bar('Calls today', d.calls_day, d.max_day) + bar('Calls this month', d.calls_month, d.max_month);
                    var n = nextText(d.next_in);
                    if (n) body += '<div style="margin-top:.55rem;font-size:.75rem;opacity:.7">Refreshes every ' + esc(d.refresh_hours) + ' hours · ' + esc(n) + '</div>';
                }
                if (d.generated) body += '<div style="margin-top:.4rem;font-size:.7rem;opacity:.55">Status as of ' + esc(new Date(d.generated * 1000).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })) + '. Press Refresh on the dashboard to update.</div>';
                if (d.message) body += '<div style="margin-top:.6rem;font-size:.8rem;font-weight:600;color:' + color + '">' + esc(d.message) + '</div>';
            }
            var dot = state.data ? COLORS[state.data.level] || COLORS.off : COLORS.off;
            this.innerHTML = '<div style="height:100%;box-sizing:border-box;padding:1rem 1.1rem;border:1px solid rgba(127,127,127,.3);border-radius:.6rem;background:rgba(127,127,127,.06)">' +
                '<div style="display:flex;align-items:center;gap:.5rem;margin-bottom:.7rem;font-size:.8rem;font-weight:600;letter-spacing:.04em;text-transform:uppercase;opacity:.85">' +
                '<span style="width:9px;height:9px;border-radius:50%;background:' + dot + '"></span>Google rating · Kaffekos</div>' + body + '</div>';
        }
    }
    customElements.define(tag, KaffekosGoogleWidget);
})();
