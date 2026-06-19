<?php /* Shared stats band. Expects $stats from config.php. */ ?>
<section class="border-y border-white/10 bg-ink-900">
    <div class="mx-auto max-w-6xl px-5 py-12 lg:px-8 lg:py-16">
        <div class="grid grid-cols-2 gap-4 sm:gap-5 lg:grid-cols-4">
            <?php foreach ($stats as $i => $stat): ?>
                <div class="reveal group flex flex-col items-center rounded-2xl border border-white/10 bg-white/[0.04] px-4 py-7 text-center transition-all duration-300 hover:-translate-y-1 hover:border-brand/40 hover:bg-white/[0.07]"
                     style="transition-delay: <?= $i * 80 ?>ms">
                    <span class="mb-4 grid h-12 w-12 place-items-center rounded-xl bg-brand/10 text-brand-light">
                        <?= icon_svg($stat['icon'], 'h-6 w-6') ?>
                    </span>
                    <p class="font-head text-3xl font-extrabold leading-none text-brand-light sm:text-4xl"><?= e($stat['num']) ?></p>
                    <p class="mt-2 text-sm font-semibold text-white/70"><?= e($stat['label']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
