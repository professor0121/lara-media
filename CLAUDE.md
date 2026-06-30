# AGENTS.md — MediaBundle (Laravel + Webflow Conversion)

## Project
Laravel project converting a Webflow HTML export (in `pages/`) into a 
pixel-perfect, fully functional Laravel app. App name constant: "MediaBundle" 
— always read from `config('app.name')`, never hardcoded as a literal string.

## 1. Blade Conversion Rules
- Convert each Webflow HTML page in `pages/` into a Blade view under `resources/views/`.
- DO NOT restructure, "clean up", reorder, or remove any HTML element, class, 
  or data-attribute during conversion — Webflow's CSS is selector-dependent 
  and structural changes WILL break the layout silently.
- Preserve exact `class` lists and `data-w-id` / `data-animation` attributes 
  even if they look redundant.
- Convert inline `<script>` blocks last, only after markup is verified to match.

## 2. Layout & Components
- Extract shared header/nav/footer into `resources/views/layouts/app.blade.php` 
  or Blade components under `resources/views/components/`.
- Use `@extends`/`@section` or `<x-layout>` consistently — pick ONE pattern 
  and apply it to every page (no mixing).
- Repeated card/list markup (blog posts, products, team members, etc.) must 
  become a `@foreach` over an Eloquent collection — never leave duplicated 
  static HTML blocks for things that are clearly CMS content in Webflow.

## 3. Asset Management
- Move Webflow assets (`css/`, `js/`, `images/`, `fonts/`) into `public/` 
  preserving original filenames/folder structure so unconverted CSS `url()` 
  references don't break.
- Replace raw asset paths in Blade with `{{ asset('...') }}`.
- If migrating to Vite: do NOT let Vite's CSS reset/normalize conflict with 
  Webflow's own reset — keep Webflow CSS files raw/unbundled initially, 
  optimize/bundle only after visual parity is confirmed.
- Webflow's own JS (`webflow.js`, IX2 interactions) often depends on 
  Webflow-hosted CDN calls or Webflow.com runtime — audit and flag any script 
  that won't function standalone; replace with vanilla JS or Alpine.js 
  equivalents and note the replacement in the PR/commit description.

## 4. Clean Code & Style
- Run `./vendor/bin/pint` before committing any PHP changes.
- Follow PSR-12 / Laravel conventions for controllers, models, requests.
- Form submissions (Webflow `data-name="..."` forms) must be converted to 
  real routes with Form Request validation classes — never inline validation 
  in controllers for anything user-facing.

## 5. Database & Migrations
- Any repeated/listable content in the Webflow export (blog posts, products, 
  team bios, testimonials, FAQs, etc.) gets a migration + Eloquent model — 
  do not leave it as hardcoded Blade markup.
- Migrations go in standard `database/migrations/`, models in `app/Models/`.
- Seed realistic fake data via factories/seeders so converted pages can be 
  visually verified against the original Webflow HTML.

## 6. Verification Before Marking a Page "Done"
- Compare converted Blade output against the original Webflow HTML for the 
  same page — structurally and visually — before considering it complete.
- Do not mark a page done if any Webflow interaction (dropdown, slider, 
  modal, tab) is silently non-functional.

## 7. Out of Scope / Do Not
- Do not introduce Tailwind/Bootstrap as a CSS reset alongside Webflow CSS.
- Do not rename Webflow CSS classes for "readability."
- Do not delete the original files in `pages/` — they're the source of truth 
  for visual comparison until conversion is fully verified.
