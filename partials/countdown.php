<?php /* Countdown to the event. Expects $event from config.php. */ ?>
<section class="relative overflow-hidden border-b border-white/10 bg-ink-800 py-12 sm:py-14">
    <div aria-hidden="true" class="pointer-events-none absolute -right-20 top-0 h-60 w-60 rounded-full bg-brand/15 blur-3xl"></div>
    <div class="relative mx-auto max-w-3xl px-5 text-center lg:px-8">
        <p class="font-head text-sm font-bold uppercase tracking-[0.2em] text-accent">Event starts in</p>

        <div class="js-countdown mt-6 grid grid-cols-4 gap-3 sm:gap-5"
             data-deadline="<?= e($event['iso']) ?>"
             role="timer" aria-label="Time remaining until the event">
            <?php foreach (['days' => 'Days', 'hours' => 'Hours', 'minutes' => 'Minutes', 'seconds' => 'Seconds'] as $key => $label): ?>
                <div class="rounded-2xl border border-white/10 bg-white/[0.05] px-1 py-5 backdrop-blur sm:px-2">
                    <span class="cd-<?= $key ?> block font-head text-4xl font-extrabold leading-none tabular-nums text-white sm:text-5xl">00</span>
                    <span class="mt-2 block text-[11px] font-semibold uppercase tracking-wide text-white/55 sm:text-xs"><?= e($label) ?></span>
                </div>
            <?php endforeach; ?>
        </div>

        <p class="js-countdown-live mt-6 hidden font-head text-lg font-bold text-accent">The session is live now</p>
        <p class="mt-5 text-sm text-white/55"><?= e($event['date']) ?> &middot; <?= e($event['time']) ?></p>
    </div>
</section>
