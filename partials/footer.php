<footer class="border-t border-white/10 bg-ink-900 py-14 text-white/70">
    <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="grid gap-10 md:grid-cols-3">
            <div>
                <img src="assets/logo-white.png" alt="IMPACT" class="h-9 w-auto">
                <p class="mt-5 max-w-xs text-sm leading-relaxed text-white/60">
                    Innovative Myeloma Patient-Centered Advances and Clinical Transformation. A CME accredited in-person meeting on Multiple Myeloma.
                </p>
            </div>

            <div>
                <h3 class="font-head text-sm font-bold uppercase tracking-wide text-white">Explore</h3>
                <ul class="mt-4 space-y-2 text-sm text-white/65">
                    <li><a href="index.php#faculty" class="transition-colors hover:text-white">Faculty</a></li>
                    <li><a href="index.php#agenda" class="transition-colors hover:text-white">Agenda</a></li>
                    <li><a href="index.php#venue" class="transition-colors hover:text-white">Venue</a></li>
                    <li><a href="<?= REGISTER_URL ?>" class="transition-colors hover:text-white">Register</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-head text-sm font-bold uppercase tracking-wide text-white">Contact</h3>
                <p class="mt-4 font-head text-base font-bold text-white">Meeting Minds Experts</p>
                <ul class="mt-4 space-y-3.5 text-sm text-white/65">
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 grid h-8 w-8 flex-none place-items-center rounded-lg bg-white/5 text-brand-light"><?= icon_svg('location', 'h-4 w-4') ?></span>
                        <span>Dubai Studio City, DSC Tower 508 and 509, Dubai, UAE</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="grid h-8 w-8 flex-none place-items-center rounded-lg bg-white/5 text-brand-light"><?= icon_svg('phone', 'h-4 w-4') ?></span>
                        <a href="tel:+97142761444" class="transition-colors hover:text-white">+971 4 276 1444</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="grid h-8 w-8 flex-none place-items-center rounded-lg bg-white/5 text-brand-light"><?= icon_svg('mail', 'h-4 w-4') ?></span>
                        <a href="mailto:virtual@meetingmindsexperts.com" class="break-all transition-colors hover:text-white">virtual@meetingmindsexperts.com</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="grid h-8 w-8 flex-none place-items-center rounded-lg bg-white/5 text-brand-light"><?= icon_svg('clock', 'h-4 w-4') ?></span>
                        <span>Mon to Fri, 9:00 AM to 6:00 PM</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 flex flex-col items-center justify-between gap-3 border-t border-white/10 pt-6 text-xs text-white/45 sm:flex-row">
            <p>&copy; <?= date('Y') ?> Meeting Minds Experts. All rights reserved.</p>
            <p>Supported by Sanofi &middot; Endorsed by Emirates Society of Haematology &middot; CME Accredited</p>
        </div>
    </div>
</footer>

<script>
    // Reveal on scroll (skips if reduced motion is on).
    (function () {
        var els = document.querySelectorAll('.reveal');
        if (!('IntersectionObserver' in window) ||
            window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            els.forEach(function (el) { el.classList.add('is-visible'); });
            return;
        }
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) { entry.target.classList.add('is-visible'); io.unobserve(entry.target); }
            });
        }, { threshold: 0.15 });
        els.forEach(function (el) { io.observe(el); });
    })();

    // Countdown timers.
    (function () {
        var nodes = document.querySelectorAll('.js-countdown');
        if (!nodes.length) return;
        function pad(n) { return (n < 10 ? '0' : '') + n; }
        function set(el, sel, v) { var n = el.querySelector(sel); if (n) n.textContent = v; }
        function tick() {
            var now = Date.now();
            nodes.forEach(function (el) {
                var diff = new Date(el.getAttribute('data-deadline')).getTime() - now;
                if (diff <= 0) {
                    set(el, '.cd-days', '00'); set(el, '.cd-hours', '00');
                    set(el, '.cd-minutes', '00'); set(el, '.cd-seconds', '00');
                    var live = el.parentNode.querySelector('.js-countdown-live');
                    if (live) { el.classList.add('hidden'); live.classList.remove('hidden'); }
                    return;
                }
                var s = Math.floor(diff / 1000);
                var d = Math.floor(s / 86400); s -= d * 86400;
                var h = Math.floor(s / 3600);  s -= h * 3600;
                var m = Math.floor(s / 60);    s -= m * 60;
                set(el, '.cd-days', pad(d)); set(el, '.cd-hours', pad(h));
                set(el, '.cd-minutes', pad(m)); set(el, '.cd-seconds', pad(s));
            });
        }
        tick();
        setInterval(tick, 1000);
    })();
</script>

</body>
</html>
