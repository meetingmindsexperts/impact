<?php
/**
 * Shared configuration and content for the IMPACT site.
 * Included by index.php. Single source of truth.
 */

declare(strict_types=1);

/** HTML escape helper. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/* ----------------------------------------------------------------------------
 * Links and IDs to update in one place
 * ------------------------------------------------------------------------- */

// Public base URL of the live site (no trailing slash). Used for absolute
// canonical, Open Graph and Twitter URLs. >>> Confirm the real domain. <<<
const SITE_URL = 'https://myeloma-impact.com';

// Google Analytics measurement ID (set when available).
const GA_MEASUREMENT_ID = 'G-581DH9C7Y9';

// Register buttons link straight to the external registration system.
const REGISTER_URL  = 'https://events.meetingmindsgroup.com/e/impact2026/register/standard';
const SUBSCRIBE_URL = 'mailto:support@meetingmindsexperts.com?subject=IMPACT%20Meeting%20enquiry';

// Replaceable hero banner artwork (desktop + mobile). Swap these files to
// update the hero without touching markup.
const HERO_DESKTOP = 'assets/hero-desktop.jpg';
const HERO_MOBILE  = 'assets/hero-mobile.jpg';

/* ----------------------------------------------------------------------------
 * Event content (single source of truth)
 * ------------------------------------------------------------------------- */

$event = [
    'name'    => 'IMPACT',
    'theme'   => 'Innovative Myeloma Patient-Centered Advances and Clinical Transformation',
    'day'     => 'Sunday',
    'date'    => '28 June 2026',
    'time'    => '9:00 AM to 1:00 PM (GST)',
    'format'  => 'In-Person Meeting',
    'venue'   => 'Vida Emirates Hills',
    'city'    => 'Dubai, UAE',
    'iso'     => '2026-06-28T09:00:00+04:00', // start, used by countdown + Event schema
    'iso_end' => '2026-06-28T13:00:00+04:00',
];

$stats = [
    ['num' => '13',    'label' => 'Expert Faculty',      'icon' => 'users'],
    ['num' => '5',     'label' => 'Scientific Sessions', 'icon' => 'presentation'],
    ['num' => 'Vida Emirates Hills', 'label' => 'In-Person Meeting', 'icon' => 'location', 'numCls' => 'text-xl sm:text-2xl'],
    ['num' => 'CME',   'label' => 'Accredited',          'icon' => 'shield-check'],
];

// Faculty wall. First entry is featured as the meeting chair. The brief
// supplies names and roles only; cards render photo (or initials) + role + name.
$faculty = [
    ['role' => 'Meeting Chairman',  'name' => 'Mahmoud Marashi',      'initials' => 'MM', 'img' => 'assets/faculty/mahmoud-marashi.jpg'],
    ['role' => 'Speaker',           'name' => 'Asma Al-Olama',        'initials' => 'AO', 'img' => 'assets/faculty/asma-al-olama.jpg'],
    ['role' => 'Session Moderator', 'name' => 'Hasan Al Yaseen',      'initials' => 'HY', 'img' => 'assets/faculty/hasan-al-yaseen.jpg'],
    ['role' => 'Session Moderator', 'name' => 'Husni Al Hateeti',     'initials' => 'HH', 'img' => 'assets/faculty/husni-al-hateeti.jpg'],
    ['role' => 'Session Moderator', 'name' => 'Hani Osman',           'initials' => 'HO', 'img' => 'assets/faculty/hani-osman.jpg'],
    ['role' => 'Session Moderator', 'name' => 'Hesham Alsabbah',      'initials' => 'HA'],
    ['role' => 'Speaker',           'name' => 'Emmanouil Nikolousis', 'initials' => 'EN', 'img' => 'assets/faculty/emmanouil-nikolousis.jpg'],
    ['role' => 'Speaker',           'name' => 'Amna Almuhairi',       'initials' => 'AM', 'img' => 'assets/faculty/amna-almuhairi.jpg'],
    ['role' => 'Speaker',           'name' => 'Khalil Alfarsi',       'initials' => 'KA'],
    ['role' => 'Speaker',           'name' => 'Lotfi Kourosh',        'initials' => 'LK'],
    ['role' => 'Speaker',           'name' => 'Inas El Najjar',       'initials' => 'IN', 'img' => 'assets/faculty/inas-el-najjar.jpg'],
    ['role' => 'Speaker',           'name' => 'Khaled Al Qawasmeh',   'initials' => 'KQ', 'img' => 'assets/faculty/khaled-al-qawasmeh.jpg'],
    ['role' => 'Speaker',           'name' => 'Amar Lal',             'initials' => 'AL'],
];

// Session-level programme. Full talk-by-talk detail is shared on registration.
$agenda = [
    ['9:00 to 9:20 AM',   'Registration and Opening Ceremony',                                                          'Mahmoud Marashi'],
    ['9:20 to 10:05 AM',  'Session 1: NDMM Transplant Ineligible or Deferred, Treatment Strategies and Evidence',       'Moderator: Hasan Al Yaseen'],
    ['10:05 to 10:50 AM', 'Session 2: NDMM Transplant Eligible, From Induction to Maintenance',                         'Moderator: Husni Al Hateeti'],
    ['10:50 to 10:55 AM', 'Coffee Break',                                                                               'All Attendees'],
    ['10:55 to 11:40 AM', 'Session 3: Innovative Anti-CD38 Administration, Patient Preference and Home Administration', 'Moderator: Hani Osman'],
    ['11:40 to 12:25 PM', 'Session 4: Case Discussions',                                                                'Moderator: Hesham Alsabbah'],
    ['12:25 to 12:55 PM', 'Session 5: Expert Debate and Open Discussion',                                               'Moderated by Mahmoud Marashi'],
    ['12:55 to 1:00 PM',  'Closing Remarks and Next Steps',                                                             'Mahmoud Marashi'],
    ['1:00 to 2:00 PM',   'Lunch',                                                                                      'All Attendees'],
];

// On-page partner band. Sanofi sits between ESH (endorsing) and MME (managing).
$partners = [
    ['label' => 'Endorsed by',  'img' => 'assets/logos/esh.png',    'alt' => 'Emirates Society of Haematology'],
    ['label' => 'Supported by', 'img' => 'assets/logos/sanofi.png', 'alt' => 'Sanofi', 'cls' => 'max-h-10'],
    ['label' => 'Managed by',   'img' => 'assets/logos/mme.png',    'alt' => 'Meeting Minds Experts'],
];

/**
 * Inline SVG icon (Heroicons outline) by name.
 */
function icon_svg(string $name, string $class = 'h-6 w-6'): string
{
    $paths = [
        'users'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>',
        'presentation' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605"/>',
        'clock'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>',
        'shield-check' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/>',
        'chart-bar'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/>',
        'globe'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/>',
        'chat'         => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"/>',
        'location'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>',
        'phone'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>',
        'mail'         => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>',
        'calendar'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/>',
        'beaker'       => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/>',
    ];
    $inner = $paths[$name] ?? '';
    return '<svg class="' . e($class) . '" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" aria-hidden="true">' . $inner . '</svg>';
}
