<?php
/**
 * IMPACT | Multiple Myeloma Meeting
 * Single page event landing. Register buttons link out to the external
 * registration system (REGISTER_URL in config.php).
 */

require __DIR__ . '/partials/config.php';

$pageTitle = 'IMPACT | Multiple Myeloma Meeting';
$pageDesc  = 'IMPACT, Innovative Myeloma Patient-Centered Advances and Clinical Transformation. A CME accredited in-person meeting on Multiple Myeloma. 28 June 2026, Vida Emirates Hills, Dubai.';
$page      = 'home';

require __DIR__ . '/partials/header.php';
?>

<main id="top">

<!-- ============================ HERO (replaceable banner) ============================ -->
<section class="relative bg-ink-900">
    <h1 class="sr-only">IMPACT, Multiple Myeloma Meeting, 28 June 2026, Vida Emirates Hills, Dubai</h1>

    <!-- Banner artwork. Swap HERO_DESKTOP / HERO_MOBILE in config.php to update. -->
    <picture>
        <source media="(max-width: 639px)" srcset="<?= e(HERO_MOBILE) ?>">
        <img src="<?= e(HERO_DESKTOP) ?>" alt="IMPACT Meeting, Innovative Myeloma Patient-Centered Advances and Clinical Transformation, Sunday 28 June 2026, 9:00 AM to 1:00 PM, CME accredited, endorsed by ESH"
             class="w-full" width="2200" height="736" fetchpriority="high">
    </picture>

    <!-- CTA bar under the banner -->
    <div class="border-t border-white/10 bg-gradient-to-b from-ink-900 to-ink-800">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-5 px-5 py-6 lg:flex-row lg:px-8">
            <dl class="flex flex-wrap items-center justify-center gap-x-8 gap-y-3 text-center lg:justify-start lg:text-left">
                <div class="flex items-center gap-3">
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-accent/15 text-accent" aria-hidden="true"><?= icon_svg('calendar', 'h-5 w-5') ?></span>
                    <div>
                        <dt class="text-[11px] font-semibold uppercase tracking-wide text-white/50">Date</dt>
                        <dd class="text-sm font-bold text-white"><?= e($event['day']) ?>, <?= e($event['date']) ?></dd>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-brand/20 text-brand-light" aria-hidden="true"><?= icon_svg('clock', 'h-5 w-5') ?></span>
                    <div>
                        <dt class="text-[11px] font-semibold uppercase tracking-wide text-white/50">Time</dt>
                        <dd class="text-sm font-bold text-white"><?= e($event['time']) ?></dd>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-accent/15 text-accent" aria-hidden="true"><?= icon_svg('location', 'h-5 w-5') ?></span>
                    <div>
                        <dt class="text-[11px] font-semibold uppercase tracking-wide text-white/50">Venue</dt>
                        <dd class="text-sm font-bold text-white"><?= e($event['venue']) ?>, <?= e($event['city']) ?></dd>
                    </div>
                </div>
            </dl>

            <div class="flex flex-none items-center gap-3">
                <a href="#agenda"
                   class="inline-flex items-center gap-2 rounded-full border-2 border-white/25 px-6 py-3 text-sm font-bold text-white transition-colors hover:border-brand-light hover:text-brand-light">
                    View Agenda
                </a>
                <a href="<?= REGISTER_URL ?>" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 rounded-full bg-accent px-7 py-3.5 text-base font-bold text-ink-900 shadow-xl shadow-accent/25 transition-transform hover:-translate-y-0.5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                    Register Now
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============================ COUNTDOWN ============================ -->
<?php require __DIR__ . '/partials/countdown.php'; ?>

<!-- ============================ STATS ============================ -->
<?php require __DIR__ . '/partials/stats.php'; ?>

<!-- ============================ ABOUT ============================ -->
<section id="about" class="relative overflow-hidden bg-ink-800 py-20 sm:py-24">
    <div aria-hidden="true" class="pointer-events-none absolute -left-24 top-10 h-72 w-72 rounded-full bg-brand/10 blur-3xl"></div>
    <div aria-hidden="true" class="pointer-events-none absolute -right-24 bottom-0 h-72 w-72 rounded-full bg-accent/10 blur-3xl"></div>

    <div class="relative mx-auto max-w-5xl px-5 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <p class="font-head text-sm font-bold uppercase tracking-[0.2em] text-accent">About the meeting</p>
            <h2 class="mt-2 font-head text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Advancing Multiple Myeloma care</h2>
            <p class="mx-auto mt-5 text-lg leading-relaxed text-white/70">
                IMPACT brings together leading hematologists and oncology specialists from across the Gulf region to discuss emerging treatment strategies, frontline evidence, patient-centered innovations, real-world clinical challenges, and future directions in myeloma care.
            </p>
        </div>

        <div class="mt-14 grid gap-5 sm:grid-cols-3">
            <?php
            $pillars = [
                ['Frontline evidence', 'Treatment strategies and key clinical trial data across newly diagnosed Multiple Myeloma.', 'chart-bar'],
                ['Patient-centered', 'Patient preference, quality of life, and innovative anti-CD38 home administration.', 'beaker'],
                ['Real-world cases', 'Expert case discussions and an open debate moderated by the meeting faculty.', 'chat'],
            ];
            foreach ($pillars as $i => [$title, $copy, $icon]): ?>
                <div class="reveal group rounded-2xl border border-white/10 bg-white/[0.04] p-7 text-left transition-all duration-300 hover:-translate-y-1 hover:border-brand/40 hover:bg-white/[0.07]"
                     style="transition-delay: <?= $i * 90 ?>ms">
                    <span class="mb-5 grid h-12 w-12 place-items-center rounded-xl bg-gradient-to-br from-brand to-brand-dark text-white shadow-lg shadow-brand/25">
                        <?= icon_svg($icon, 'h-6 w-6') ?>
                    </span>
                    <h3 class="font-head text-lg font-bold text-white"><?= e($title) ?></h3>
                    <p class="mt-2 text-sm leading-relaxed text-white/65"><?= e($copy) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-14 text-center">
            <a href="<?= REGISTER_URL ?>" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 rounded-full bg-accent px-8 py-3.5 text-base font-bold text-ink-900 shadow-xl shadow-accent/25 transition-transform hover:-translate-y-0.5">
                Register Now
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ============================ FACULTY ============================ -->
<section id="faculty" class="relative overflow-hidden bg-ink-900 py-20 sm:py-24">
    <div aria-hidden="true" class="pointer-events-none absolute -right-20 top-16 h-80 w-80 rounded-full bg-brand/10 blur-3xl"></div>
    <div aria-hidden="true" class="pointer-events-none absolute -left-20 bottom-8 h-80 w-80 rounded-full bg-accent/10 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-5 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="font-head text-sm font-bold uppercase tracking-[0.2em] text-brand-light">Meet the experts</p>
            <h2 class="mt-2 font-head text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Faculty</h2>
            <p class="mx-auto mt-4 text-white/60">A distinguished panel of hematologists and oncologists leading the discussion.</p>
        </div>

        <?php
        $chair = $faculty[0];
        $speakers = array_slice($faculty, 1);

        // Glass faculty card. $tone = 'accent' (chair) | 'brand' (others).
        $card = function (array $p, string $tone = 'brand') {
            $badge = $tone === 'accent' ? 'bg-accent text-ink-900' : 'bg-brand text-white';
            ob_start(); ?>
            <article class="reveal group relative flex h-full flex-col items-center overflow-hidden rounded-3xl border border-white/10 bg-white/[0.04] px-6 pb-7 pt-9 text-center backdrop-blur transition-all duration-300 hover:-translate-y-1.5 hover:border-brand/40 hover:bg-white/[0.07] hover:shadow-2xl hover:shadow-brand/10">
                <span aria-hidden="true" class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-brand via-brand-light to-accent opacity-80"></span>

                <?php if (!empty($p['img'])): ?>
                    <img src="<?= e($p['img']) ?>" alt="<?= e($p['name']) ?>" loading="lazy"
                         class="h-28 w-28 flex-none rounded-full object-cover ring-1 ring-white/15 shadow-xl shadow-black/40 transition group-hover:ring-brand/40">
                <?php else: ?>
                    <div class="grid h-28 w-28 flex-none place-items-center rounded-full bg-gradient-to-br from-brand to-brand-dark text-3xl font-extrabold text-white ring-1 ring-white/15 shadow-xl" aria-hidden="true">
                        <?= e($p['initials']) ?>
                    </div>
                <?php endif; ?>

                <span class="mt-4 inline-flex whitespace-nowrap rounded-full px-3 py-1 text-[10px] font-bold uppercase tracking-wider shadow-sm <?= $badge ?>">
                    <?= e($p['role']) ?>
                </span>

                <h3 class="mt-3 font-head text-lg font-extrabold text-white"><?= e($p['name']) ?></h3>
            </article>
            <?php return ob_get_clean();
        };
        ?>

        <!-- Chairperson, featured -->
        <div class="mx-auto mt-14 max-w-xs sm:max-w-sm">
            <?= $card($chair, 'accent') ?>
        </div>

        <!-- Faculty -->
        <div class="mt-7 grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-4">
            <?php foreach ($speakers as $p): ?>
                <?= $card($p, 'brand') ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ AGENDA ============================ -->
<section id="agenda" class="bg-ink-800 py-20 sm:py-24">
    <div class="mx-auto max-w-3xl px-5 lg:px-8">
        <div class="text-center">
            <p class="font-head text-sm font-bold uppercase tracking-[0.2em] text-accent">Programme</p>
            <h2 class="mt-2 font-head text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Agenda</h2>
            <p class="mt-3 text-sm text-white/55"><?= e($event['day']) ?>, <?= e($event['date']) ?> &middot; <?= e($event['time']) ?> &middot; <?= e($event['venue']) ?></p>
        </div>

        <?php
        // Map speaker name -> headshot so the timeline echoes the faculty.
        $whoImg = [];
        foreach ($faculty as $f) {
            if (!empty($f['img'])) { $whoImg[$f['name']] = $f['img']; }
        }
        ?>

        <ol class="relative mt-14 ml-2 border-l-2 border-white/10 sm:ml-4">
            <?php foreach ($agenda as $i => [$time, $topic, $who]):
                $img     = $whoImg[$who] ?? null;
                $isBreak = $topic === 'Coffee Break' || $topic === 'Lunch';
                $nodeCls = $isBreak ? 'bg-brand-light' : 'bg-accent';
            ?>
                <li class="reveal relative mb-4 pl-8 last:mb-0 sm:pl-10" style="transition-delay: <?= min($i * 60, 350) ?>ms">
                    <span aria-hidden="true" class="absolute left-0 top-6 grid h-5 w-5 -translate-x-1/2 place-items-center rounded-full ring-4 ring-ink-800 <?= $nodeCls ?>">
                        <span class="h-1.5 w-1.5 rounded-full bg-ink-900"></span>
                    </span>

                    <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-5 transition-all duration-300 hover:-translate-y-0.5 hover:border-brand/40 hover:bg-white/[0.07] sm:flex sm:items-center sm:gap-5">
                        <span class="agenda-time mb-3 inline-flex w-fit items-center justify-center whitespace-nowrap rounded-lg px-3 py-1.5 text-sm font-bold text-white sm:mb-0 sm:w-32 sm:flex-none">
                            <?= e($time) ?>
                        </span>
                        <div class="min-w-0 flex-1">
                            <p class="font-head text-base font-bold leading-snug text-white"><?= e($topic) ?></p>
                            <div class="mt-2 flex items-center gap-2">
                                <?php if ($img): ?>
                                    <img src="<?= e($img) ?>" alt="" loading="lazy" class="h-7 w-7 flex-none rounded-full object-cover ring-1 ring-accent/40">
                                <?php else: ?>
                                    <span class="grid h-7 w-7 flex-none place-items-center rounded-full bg-brand/15 text-brand-light ring-1 ring-brand/30" aria-hidden="true">
                                        <?= icon_svg('users', 'h-4 w-4') ?>
                                    </span>
                                <?php endif; ?>
                                <p class="text-sm font-semibold text-brand-light"><?= e($who) ?></p>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>

        <p class="mt-8 text-center text-xs text-white/45">Programme is subject to change. Full talk-by-talk detail is shared on registration.</p>
    </div>
</section>

<!-- ============================ VENUE ============================ -->
<section id="venue" class="relative overflow-hidden bg-ink-900 py-20 sm:py-24">
    <div aria-hidden="true" class="pointer-events-none absolute -right-24 top-10 h-72 w-72 rounded-full bg-brand/10 blur-3xl"></div>
    <div class="relative mx-auto max-w-5xl px-5 lg:px-8">
        <div class="overflow-hidden rounded-3xl border border-white/10 bg-gradient-to-br from-ink-700 to-ink-800 shadow-xl shadow-black/30">
            <div class="grid items-stretch gap-0 lg:grid-cols-5">
                <div class="p-9 sm:p-12 lg:col-span-3">
                    <p class="font-head text-sm font-bold uppercase tracking-[0.2em] text-brand-light">Venue</p>
                    <h2 class="mt-2 font-head text-3xl font-extrabold tracking-tight text-white sm:text-4xl"><?= e($event['venue']) ?></h2>
                    <p class="mt-4 max-w-md text-white/70">
                        IMPACT is an in-person meeting held at <?= e($event['venue']) ?>, <?= e($event['city']) ?>. Join leading faculty and peers for a focused half day of Multiple Myeloma science.
                    </p>
                    <dl class="mt-7 space-y-4 text-sm">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 grid h-9 w-9 flex-none place-items-center rounded-lg bg-accent/15 text-accent"><?= icon_svg('location', 'h-5 w-5') ?></span>
                            <div>
                                <dt class="font-semibold text-white"><?= e($event['venue']) ?></dt>
                                <dd class="text-white/60"><?= e($event['city']) ?></dd>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 grid h-9 w-9 flex-none place-items-center rounded-lg bg-brand/20 text-brand-light"><?= icon_svg('calendar', 'h-5 w-5') ?></span>
                            <div>
                                <dt class="font-semibold text-white"><?= e($event['day']) ?>, <?= e($event['date']) ?></dt>
                                <dd class="text-white/60"><?= e($event['time']) ?></dd>
                            </div>
                        </div>
                    </dl>
                    <a href="https://www.google.com/maps/search/?api=1&query=<?= rawurlencode($event['venue'] . ', ' . $event['city']) ?>"
                       target="_blank" rel="noopener"
                       class="mt-8 inline-flex items-center gap-2 rounded-full border-2 border-white/25 px-6 py-3 text-sm font-bold text-white transition-colors hover:border-brand-light hover:text-brand-light">
                        <?= icon_svg('location', 'h-4 w-4') ?>
                        View on map
                    </a>
                </div>
                <div class="relative min-h-[260px] lg:col-span-2">
                    <iframe
                        title="Map to <?= e($event['venue']) ?>"
                        class="absolute inset-0 h-full w-full grayscale"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        src="https://maps.google.com/maps?q=<?= rawurlencode($event['venue'] . ', ' . $event['city']) ?>&output=embed"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================ REGISTER CTA ============================ -->
<section id="register" class="bg-ink-800 py-20">
    <div class="mx-auto max-w-5xl px-5 lg:px-8">
        <div class="overflow-hidden rounded-3xl border border-brand/20 bg-gradient-to-br from-ink-700 to-ink-800 p-9 shadow-xl shadow-black/30 sm:p-12">
            <div class="grid items-center gap-8 lg:grid-cols-5">
                <div class="lg:col-span-3">
                    <h2 class="font-head text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Reserve your place</h2>
                    <p class="mt-4 max-w-lg text-white/70">
                        Registration is quick and free. Secure your seat at the IMPACT meeting and receive confirmation and joining details by email.
                    </p>
                    <ul class="mt-6 flex flex-wrap gap-x-6 gap-y-2 text-sm">
                        <?php foreach (['CME accredited', 'Endorsed by ESH', 'No cost to attend'] as $perk): ?>
                            <li class="flex items-center gap-2 text-white/85">
                                <svg class="h-4 w-4 flex-none text-brand-light" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/></svg>
                                <?= e($perk) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="flex flex-col gap-3 lg:col-span-2 lg:items-end">
                    <a href="<?= REGISTER_URL ?>" target="_blank" rel="noopener"
                       class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-accent px-8 py-4 text-base font-bold text-ink-900 shadow-lg shadow-accent/25 transition-transform hover:-translate-y-0.5 lg:w-auto">
                        Register Now
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                    </a>
                    <a href="<?= SUBSCRIBE_URL ?>" class="text-sm font-semibold text-brand-light transition-colors hover:text-white">
                        Have a question? Get in touch
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================ PARTNERS ============================ -->
<section id="partners" class="bg-white py-16">
    <div class="mx-auto max-w-5xl px-5 lg:px-8">
        <div class="grid items-center gap-x-12 gap-y-10 sm:grid-cols-3">
            <?php foreach ($partners as $partner): ?>
                <div class="text-center">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-ink-700/50"><?= e($partner['label']) ?></p>
                    <div class="mt-4 flex h-20 items-center justify-center">
                        <img src="<?= e($partner['img']) ?>" alt="<?= e($partner['alt']) ?>" class="<?= e($partner['cls'] ?? 'max-h-14') ?> w-auto object-contain">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
