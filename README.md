# 23 Theme

23 Theme is the reusable block-theme foundation for client websites built by 23 Web and for the 23 Web business website. It is deliberately small: WordPress core blocks, `theme.json`, templates, template parts, and patterns provide the presentation layer without a framework or build process.

## Requirements

- WordPress 6.6 or later
- PHP 7.4 or later

Install the repository folder as `wp-content/themes/twentythree-theme`, then activate **23 Theme** in WordPress.

## Architecture

```text
twentythree-theme/
├── parts/       Header and footer template parts
├── patterns/    Reusable, insertable page sections
├── templates/   Index, page, and single-post templates
├── functions.php
├── style.css
└── theme.json
```

- `theme.json` is the source of truth for colour, typography, spacing, layout, and core-block defaults.
- HTML block templates define the document structure and defer content rendering to WordPress blocks.
- PHP pattern files provide translated starter content and are discovered automatically by WordPress.
- `functions.php` contains only theme setup, presentation asset loading, and the theme pattern category.
- `style.css` contains theme metadata plus the small amount of CSS that is not appropriate for `theme.json`.

No site functionality belongs in this theme. It does not define content types, memberships, directory features, structured-data systems, integrations, deployment behaviour, or updates.

## Editing model

The Phase 1 section patterns use WordPress content-only locking on their outer container. Within inserted sections, clients are intended to edit:

- headings and paragraph text;
- button labels and destinations;
- images and their alternative text, where supported by the active WordPress editor;
- normal page content assembled from approved sections.

The patterns retain structural control over:

- section hierarchy and internal block arrangement;
- columns, alignment, spacing, and responsive layout;
- the shared colour and typography system;
- removal, insertion, and movement of nested layout blocks while content-only locking is active.

Content-only locking protects layout in the editor; it is not a permissions or security boundary. Administrators can modify theme files, templates, global styles, or stored block markup. Future governance may narrow block availability and user capabilities after the real editorial roles are defined.

Header, footer, and template files provide controlled defaults. WordPress administrators with Site Editor access can create database-stored overrides, so production access should be assigned deliberately.

## Included patterns

- **Hero** — introductory heading, copy, and primary action.
- **Text and image** — a two-column explanation with an editable image.
- **Call to action** — a high-contrast closing prompt and action.

All three appear in the inserter under **23 Theme sections**. They contain neutral prompts rather than demo-site content and do not rely on external images. The text-and-image pattern includes a small local placeholder graphic that should be replaced and given context-appropriate alternative text.

## Accessibility and security foundations

- Semantic `header`, `main`, and `footer` landmarks are used in templates.
- A keyboard-visible skip link targets the main content area.
- Focus indicators, restrained line lengths, fluid type, and sufficient default colour contrast are provided.
- Dynamic PHP pattern strings are translated and escaped for their output context.
- `functions.php` blocks direct execution and uses the `twentythree_` prefix for global PHP functions.
- The theme introduces no forms, database writes, remote requests, user input processing, or bundled third-party code.

Accessibility still depends on editorial choices. Content authors must provide meaningful image alternative text, logical heading levels, descriptive link text, captions where needed, and accessible colour combinations.

## Future 23 Core plugin

The planned **23 Core** plugin will own portable site functionality independently of presentation. Future custom post types, fields, directory features, memberships, schema, integrations, and update services should live there (or in narrower feature plugins). 23 Theme may style the output of those features, but activating or changing the theme must not remove data or core behaviour.

## Phase 1 boundaries

This version intentionally excludes custom blocks, JavaScript, package dependencies, build tooling, bundled fonts, sample media, deployment configuration, schema, updater code, memberships, and directory functionality.
