# AME Bazaar Folder Structure

## Purpose

This document defines the official directory structure for the AME Bazaar Digital Platform.

Every file, asset, component, template, stylesheet, script, image, and future feature must follow this structure.

The objective is to keep the project organized, scalable, maintainable, and AI-friendly.

---

# Repository Structure

```
AME-Bazaar/

├── docs/
├── prompts/
├── assets/
├── references/
├── theme/
├── screenshots/
├── README.md
```

---

# Documentation

```
docs/

01-brand.md
02-business.md
03-design-system.md
04-homepage.md
05-categories.md
06-blog.md
07-ai-visibility.md
08-seo.md
09-content-style.md
10-roadmap.md
11-development-rules.md
12-folder-structure.md
13-component-library.md
```

Purpose

The official project documentation.

No implementation files should be stored here.

---

# Prompts

```
prompts/

master-system-prompt.md

homepage.md

category-page.md

blog-page.md

woo-commerce.md

seo.md
```

Purpose

Contains AI prompts used during development.

Prompts should remain reusable and version controlled.

---

# Assets

```
assets/

logo/

icons/

fonts/

images/

hero/

categories/

products/

store/

team/

banners/

backgrounds/
```

Purpose

Contains all official brand assets.

Only approved project assets should be stored here.

---

# References

```
references/

shopify/

homepage/

header/

footer/

collection/

product/

mobile/

desktop/

wordpress/

competitors/
```

Purpose

Design inspiration and reference material.

These files must never be copied directly into production.

---

# Theme

```
theme/

astra-child/

style.css

functions.php

screenshot.png

templates/

template-parts/

components/

assets/

inc/
```

Purpose

Contains the complete WordPress child theme.

No documentation should be placed inside the theme directory.

---

# Theme Assets

```
theme/astra-child/assets/

css/

js/

images/

icons/

fonts/
```

Purpose

Static assets used by the theme.

---

# CSS

```
css/

base/

layout/

components/

pages/

utilities/

responsive/
```

Examples

```
base/

reset.css

typography.css

variables.css
```

```
layout/

header.css

footer.css

grid.css

navigation.css
```

```
components/

button.css

card.css

hero.css

testimonial.css

faq.css

category-card.css

product-card.css
```

```
pages/

home.css

about.css

contact.css

blog.css

category.css
```

Purpose

Keep styling modular.

Avoid one large stylesheet.

---

# JavaScript

```
js/

global/

components/

pages/
```

Examples

```
global/

navigation.js

search.js

accessibility.js
```

```
components/

slider.js

accordion.js

tabs.js
```

Purpose

Separate reusable logic from page-specific scripts.

---

# Images

```
images/

branding/

hero/

homepage/

categories/

products/

blog/

store/

icons/
```

Guidelines

* Optimized
* Responsive
* Modern formats where possible
* Descriptive filenames

---

# Components

```
components/

header/

footer/

hero/

buttons/

cards/

category-grid/

product-grid/

testimonials/

faq/

cta/

breadcrumbs/

search/
```

Purpose

Reusable UI components.

Every component should have a single responsibility.

---

# Templates

```
templates/

home/

about/

contact/

blog/

category/

archive/

single/

search/

404/
```

Purpose

Page templates for the WordPress theme.

---

# Includes

```
inc/

enqueue.php

setup.php

customizer.php

schema.php

seo.php

helpers.php

security.php
```

Purpose

Theme configuration and reusable PHP functionality.

---

# Screenshots

```
screenshots/

homepage/

categories/

blog/

mobile/

desktop/
```

Purpose

Visual references used during development and reviews.

---

# Naming Convention

Use:

* lowercase
* hyphen-separated names
* descriptive filenames

Examples

```
hero-banner.jpg

product-card.css

category-grid.php

search-form.php
```

Avoid:

```
New File.php

Final.css

Home123.js

Test.css
```

---

# File Organization Rules

Every file should have one clear purpose.

Avoid:

* Duplicate components
* Duplicate CSS
* Duplicate JavaScript
* Mixed responsibilities

Reusable code should always be preferred.

---

# Future Expansion

The folder structure must support:

* WooCommerce
* Multi-location stores
* Franchise pages
* Private label products
* Customer accounts
* AI shopping assistant
* Marketing automation
* Additional languages

New features should extend the existing structure rather than replace it.

---

# Documentation Rule

This document defines the official folder architecture for the AME Bazaar Digital Platform.

All developers, AI systems, and future contributors must follow this structure to ensure consistency, maintainability, scalability, and efficient collaboration.
