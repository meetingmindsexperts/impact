# IMPACT | Multiple Myeloma Meeting

Single-page PHP landing site for **IMPACT** (Innovative Myeloma Patient-Centered
Advances and Clinical Transformation), a CME accredited in-person meeting.

- **Date:** Sunday, 28 June 2026, 9:00 AM to 1:00 PM (GST)
- **Venue:** Vida Emirates Hills, Dubai, UAE
- **Sponsor:** Sanofi (supported by) · **Endorsed by:** Emirates Society of Haematology (ESH) · **Managed by:** Meeting Minds Experts (MME)

## Structure

```
index.php            hero banner, countdown, stats, about, faculty, agenda, venue, register CTA, partners
partials/
  config.php         ALL event content + SITE_URL + GA id + REGISTER_URL + icon_svg()
  header.php         <head>, SEO/OG/Twitter, Event JSON-LD (in-person), brand theme, nav
  footer.php         contact + explore + Sanofi "Supported by" + scripts
  stats.php          shared stats band
  countdown.php      countdown to the event
assets/
  logo-white.png         nav/footer logo
  hero-desktop.jpg       desktop hero banner  (replaceable, set in config.php HERO_DESKTOP)
  hero-mobile.jpg        mobile hero banner   (replaceable, set in config.php HERO_MOBILE)
  og-image.jpg           1200x630 social card
  favicon.png, apple-touch-icon.png
  faculty/               speaker headshots
  logos/                 esh.png, mme.png, sanofi.png
```

## Editing

Everything is driven from `partials/config.php`:

- **Registration link** — set `REGISTER_URL` to the registration URL. All
  Register buttons link straight there (opens in a new tab).
- **Hero banners** — replace `assets/hero-desktop.jpg` / `assets/hero-mobile.jpg`,
  or repoint `HERO_DESKTOP` / `HERO_MOBILE`.
- **Domain** — set `SITE_URL` (also update `robots.txt` and `sitemap.xml`).
- **Faculty / agenda / stats** — edit the `$faculty`, `$agenda`, `$stats` arrays.

## Local development

```bash
php -S 127.0.0.1:8800
# open http://127.0.0.1:8800/
```

## Deploy

Push to `main` triggers `.github/workflows/deploy.yml` (FTP). Add repo secrets:
`FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`.
