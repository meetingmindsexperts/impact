<?php
/**
 * Shared <head> + sticky navigation (IMPACT dark violet theme).
 * Expects (optional) before include: $pageTitle, $pageDesc, $page.
 */
$pageTitle = $pageTitle ?? 'IMPACT | Multiple Myeloma Meeting';
$pageDesc  = $pageDesc  ?? 'IMPACT, Innovative Myeloma Patient-Centered Advances and Clinical Transformation. A CME accredited in-person meeting on Multiple Myeloma. 28 June 2026, Vida Emirates Hills, Dubai.';
$page      = $page      ?? 'home';
$home = $page === 'home' ? '' : 'index.php';
$canonical = SITE_URL . ($page === 'home' ? '/' : '/register.php');
$ogImage   = SITE_URL . '/assets/og-image.jpg';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDesc) ?>">
    <meta name="keywords" content="IMPACT, Multiple Myeloma, myeloma, hematology, haematology, NDMM, anti-CD38, CME, ESH, Emirates Society of Haematology, Dubai, in-person meeting, Sanofi, Meeting Minds Experts">
    <meta name="author" content="Meeting Minds Experts">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0d0826">
    <link rel="canonical" href="<?= e($canonical) ?>">

    <link rel="icon" type="image/png" href="assets/favicon.png">
    <link rel="apple-touch-icon" href="assets/apple-touch-icon.png">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="IMPACT Multiple Myeloma Meeting">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($pageDesc) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:image" content="<?= e($ogImage) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="IMPACT, Multiple Myeloma meeting, 28 June 2026, Vida Emirates Hills, Dubai">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($pageTitle) ?>">
    <meta name="twitter:description" content="<?= e($pageDesc) ?>">
    <meta name="twitter:image" content="<?= e($ogImage) ?>">

    <!-- Event structured data -->
    <script type="application/ld+json">
    <?= json_encode([
        '@context'            => 'https://schema.org',
        '@type'               => 'Event',
        'name'                => 'IMPACT | Multiple Myeloma Meeting',
        'description'         => 'IMPACT, Innovative Myeloma Patient-Centered Advances and Clinical Transformation. A CME accredited scientific meeting on the latest advancements in Multiple Myeloma management.',
        'startDate'           => $event['iso'],
        'endDate'             => $event['iso_end'],
        'eventAttendanceMode' => 'https://schema.org/OfflineEventAttendanceMode',
        'eventStatus'         => 'https://schema.org/EventScheduled',
        'image'               => $ogImage,
        'location'            => [
            '@type'   => 'Place',
            'name'    => 'Vida Emirates Hills',
            'address' => [
                '@type'           => 'PostalAddress',
                'addressLocality' => 'Dubai',
                'addressCountry'  => 'AE',
            ],
        ],
        'organizer'           => [
            '@type' => 'Organization',
            'name'  => 'Meeting Minds Experts',
            'url'   => 'https://www.meetingmindsexperts.com',
        ],
        'sponsor'             => [
            '@type' => 'Organization',
            'name'  => 'Sanofi',
        ],
        'offers'              => [
            '@type'         => 'Offer',
            'price'         => '0',
            'priceCurrency' => 'AED',
            'availability'  => 'https://schema.org/InStock',
            'url'           => SITE_URL . '/register.php',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>

    <?php if (GA_MEASUREMENT_ID !== ''): ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= e(GA_MEASUREMENT_ID) ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?= e(GA_MEASUREMENT_ID) ?>');
    </script>
    <?php endif; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800;900&family=Noto+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // Deep violet-navy base
                        ink:    { 900: '#08051c', 800: '#0d0826', 700: '#1c0f47', 600: '#2b1a63' },
                        // Primary accent: IMPACT violet (eyebrows, links, icon badges)
                        brand:  { DEFAULT: '#8b15f0', light: '#b06bff', dark: '#6b10c0' },
                        // CTA accent: gold (echoes the CME badge in the artwork)
                        accent: { DEFAULT: '#e8a31a', light: '#f0b842', dark: '#c4870f' },
                    },
                    fontFamily: {
                        sans: ['"Noto Sans"', 'system-ui', 'sans-serif'],
                        head: ['Figtree', 'system-ui', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <style>
        body { font-family: 'Noto Sans', system-ui, sans-serif; }
        h1, h2, h3, .font-head { font-family: 'Figtree', system-ui, sans-serif; }
        .hero-bg {
            background-image: linear-gradient(90deg, rgba(13,8,38,0.97) 0%, rgba(13,8,38,0.88) 42%, rgba(13,8,38,0.55) 70%, rgba(13,8,38,0.35) 100%), url('assets/hero-desktop.jpg');
            background-size: cover;
            background-position: center right;
        }
        .agenda-time { background: linear-gradient(135deg, #6b10c0 0%, #8b15f0 100%); }
        .reveal { opacity: 0; transform: translateY(18px); transition: opacity .6s ease, transform .6s ease; }
        .reveal.is-visible { opacity: 1; transform: none; }
        @media (prefers-reduced-motion: reduce) {
            * { animation: none !important; scroll-behavior: auto !important; }
            .reveal { opacity: 1 !important; transform: none !important; transition: none !important; }
        }
    </style>
</head>
<body class="bg-ink-800 text-white antialiased">

<header class="sticky top-0 z-40 w-full border-b border-white/10 bg-ink-900/85 backdrop-blur">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-3 lg:px-8" aria-label="Primary">
        <a href="<?= $home ?: '#top' ?>" class="flex items-center" aria-label="IMPACT home">
            <img src="assets/logo-white.png" alt="IMPACT" class="h-9 w-auto sm:h-12">
        </a>

        <div class="hidden items-center gap-8 text-lg font-semibold text-white/80 lg:flex">
            <a href="<?= $home ?>#about" class="transition-colors hover:text-brand-light">About</a>
            <a href="<?= $home ?>#faculty" class="transition-colors hover:text-brand-light">Faculty</a>
            <a href="<?= $home ?>#agenda" class="transition-colors hover:text-brand-light">Agenda</a>
            <a href="<?= $home ?>#venue" class="transition-colors hover:text-brand-light">Venue</a>
        </div>

        <a href="<?= REGISTER_URL ?>"
           class="inline-flex items-center whitespace-nowrap rounded-full bg-accent px-4 py-2.5 text-sm font-bold text-ink-900 shadow-lg shadow-accent/20 transition-transform hover:-translate-y-0.5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:px-5">
            Register Now
        </a>
    </nav>
</header>
