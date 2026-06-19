<?php
/**
 * IMPACT | Registration
 * Links out to the external ESH / MME registration system.
 *
 * HOW TO SET THE REGISTRATION LINK:
 *   Set EXT_REGISTER_URL in partials/config.php to the registration page URL.
 *   While it is empty, the button falls back to an email registration request.
 */

require __DIR__ . '/partials/config.php';

$pageTitle = 'Register | IMPACT Multiple Myeloma Meeting';
$pageDesc  = 'Register for IMPACT, the in-person Multiple Myeloma meeting on 28 June 2026 at Vida Emirates Hills, Dubai. CME accredited, endorsed by the Emirates Society of Haematology.';
$page      = 'register';

$hasLink = EXT_REGISTER_URL !== '';

require __DIR__ . '/partials/header.php';
?>

<main id="top">

<!-- ============================ REGISTER HEADER ============================ -->
<section class="hero-bg relative overflow-hidden py-14 sm:py-16">
    <div class="relative mx-auto max-w-5xl px-5 text-center lg:px-8">
        <div class="mb-5 flex flex-wrap items-center justify-center gap-3">
            <span class="inline-flex items-center gap-2 rounded-full border border-brand/40 bg-brand/15 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-brand-light">
                <svg class="h-3.5 w-3.5 text-accent" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/></svg>
                CME Accredited
            </span>
            <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-white">
                Endorsed by ESH
            </span>
        </div>
        <h1 class="font-head text-3xl font-extrabold tracking-tight text-white sm:text-5xl">Register for IMPACT</h1>
        <p class="mx-auto mt-4 max-w-xl text-white/75">
            Secure your place at the in-person meeting. Confirmation and joining details will be sent to your email.
        </p>
        <p class="mt-6 inline-flex flex-wrap items-center justify-center gap-x-3 gap-y-1 rounded-full bg-white/5 px-5 py-2 text-sm font-semibold text-white">
            <span><?= e($event['day']) ?>, <?= e($event['date']) ?></span><span class="text-white/40">&middot;</span>
            <span><?= e($event['time']) ?></span><span class="text-white/40">&middot;</span>
            <span><?= e($event['venue']) ?>, <?= e($event['city']) ?></span>
        </p>
    </div>
</section>

<!-- ============================ STATS ============================ -->
<?php require __DIR__ . '/partials/stats.php'; ?>

<!-- ============================ REGISTRATION CTA ============================ -->
<section class="bg-ink-800 py-16">
    <div class="mx-auto max-w-2xl px-5 lg:px-8">
        <div class="overflow-hidden rounded-3xl border border-brand/20 bg-gradient-to-br from-ink-700 to-ink-800 p-8 text-center shadow-xl shadow-black/30 sm:p-12">
            <div class="mx-auto grid h-16 w-16 place-items-center rounded-2xl bg-accent/15 text-accent">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z"/></svg>
            </div>
            <h2 class="mt-6 font-head text-2xl font-extrabold tracking-tight text-white sm:text-3xl">Complete your registration</h2>
            <p class="mx-auto mt-3 max-w-md text-white/70">
                <?php if ($hasLink): ?>
                    Registration is handled on our secure registration page. Select the button below to reserve your seat at IMPACT.
                <?php else: ?>
                    The online registration page opens here soon. In the meantime, request your place by email and our team will confirm your registration.
                <?php endif; ?>
            </p>

            <a href="<?= e(register_link()) ?>"<?= register_target_attr() ?>
               class="mt-8 inline-flex items-center justify-center gap-2 rounded-full bg-accent px-8 py-4 text-base font-bold text-ink-900 shadow-lg shadow-accent/25 transition-transform hover:-translate-y-0.5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                <?= $hasLink ? 'Proceed to registration' : 'Request your place by email' ?>
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
            </a>

            <p class="mt-6 text-xs text-white/45">Your details are used only to manage your attendance at this meeting.</p>
        </div>
    </div>
</section>

<!-- ============================ CONTACT ============================ -->
<section id="subscribe" class="border-t border-white/10 bg-ink-900 py-16">
    <div class="mx-auto max-w-2xl px-5 text-center lg:px-8">
        <p class="font-head text-sm font-bold uppercase tracking-[0.2em] text-brand-light">Questions</p>
        <h2 class="mt-2 font-head text-2xl font-extrabold tracking-tight text-white sm:text-3xl">Need help registering?</h2>
        <p class="mx-auto mt-3 max-w-md text-white/70">
            Our team is happy to help with registration, group bookings, or any questions about the meeting.
        </p>

        <div class="mx-auto mt-8 max-w-md">
            <a href="mailto:virtual@meetingmindsexperts.com?subject=IMPACT%20Meeting%20enquiry"
               class="inline-flex items-center gap-2 rounded-full bg-brand px-7 py-3.5 text-base font-bold text-white shadow-lg shadow-brand/25 transition-transform hover:-translate-y-0.5">
                Contact the team
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M3 4a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H3Zm0 2 7 4 7-4v.01L10 12 3 6.01V6Z"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ============================ PARTNERS ============================ -->
<section class="bg-white py-16">
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
