# Build Homepage Layout

## Task

Build the structural layout for the AME Bazaar Homepage.

This task is **not** to design the homepage.

This task is **not** to build individual sections.

This task is only to create the homepage architecture and page template that will contain all future homepage components.

Stop after the layout structure is complete.

---

# Before You Start

Before generating any code:

1. Read every document inside `/docs`.
2. Read `prompts/00-master-system-prompt.md`.
3. Review the Shopify homepage reference.
4. Review official brand assets.
5. Understand the Homepage Documentation.
6. Understand the Component Library.
7. Understand the Design Tokens.
8. Understand the Folder Structure.

Do not begin implementation until the project architecture has been fully understood.

---

# Platform

Platform

* WordPress

Theme

* Astra Child Theme

Future Compatibility

* WooCommerce
* Custom Post Types
* Blog
* AI Features

The homepage architecture must support future expansion without requiring structural changes.

---

# Objective

Create a scalable homepage layout that serves as the foundation for all homepage components.

The layout should:

* Be semantic
* Be modular
* Be reusable
* Be responsive
* Be accessible
* Be performance optimized

Do not focus on visual styling at this stage.

---

# Homepage Architecture

Create placeholders for the following sections in this exact order:

1. Header
2. Hero
3. Trust Section
4. Shop By Category
5. Featured Collections
6. Why Choose AME Bazaar
7. About Preview
8. Customer Testimonials
9. Google Reviews
10. Store Experience
11. Frequently Asked Questions
12. Blog Preview
13. Contact Information
14. Footer

Each section should exist as an independent component placeholder.

---

# Component Structure

Every homepage section should:

* Have its own wrapper
* Have semantic HTML
* Support independent styling
* Support independent templates
* Support future replacement without affecting other sections

Avoid tightly coupling sections together.

---

# WordPress Integration

The homepage should:

* Use WordPress template hierarchy
* Follow Astra Child Theme conventions
* Support reusable template parts
* Support dynamic content
* Support future Gutenberg compatibility

Do not hardcode content into the layout.

---

# Layout Rules

The homepage should use:

* One `<main>` element
* Semantic `<section>` elements
* Proper heading hierarchy
* Logical content flow
* Consistent containers
* Responsive structure

Avoid unnecessary wrapper elements.

---

# Component Loading

Each homepage section should be designed so it can be loaded independently.

Examples include:

* Header Component
* Hero Component
* Category Component
* Testimonials Component
* FAQ Component
* Footer Component

Future developers should be able to replace a component without modifying the rest of the homepage.

---

# Accessibility

The layout must support:

* Keyboard navigation
* Screen readers
* Proper landmarks
* Semantic HTML
* Logical reading order

Accessibility should be built into the structure from the beginning.

---

# SEO

The homepage structure should support:

* Proper heading hierarchy
* Crawlable content
* Internal linking
* Structured data
* Fast rendering

Do not hide important content inside JavaScript.

---

# AI Visibility

The homepage architecture should make it easy for AI systems to identify:

* Business information
* Product categories
* Trust signals
* Educational content
* Contact information

Every section should have a clear semantic purpose.

---

# Performance

Prioritize:

* Lightweight markup
* Minimal nesting
* Modular templates
* Efficient rendering

Avoid unnecessary complexity.

---

# Deliverables

Generate:

* Homepage template
* Template structure
* Component placeholders
* WordPress template integration
* Astra Child Theme compatible architecture

Do not generate CSS for individual components.

Do not generate JavaScript for individual components.

---

# Review Checklist

Before completion verify:

* Documentation followed
* Homepage architecture respected
* Semantic HTML used
* Accessibility supported
* SEO ready
* AI readable
* Performance optimized
* Astra Child Theme compatible
* WooCommerce ready

---

# Completion Rule

When the homepage layout has been created:

Stop.

Do not build the Header.

Do not build the Hero.

Do not build Categories.

Do not add placeholder content.

Wait for the next implementation task.

The homepage layout should act as the permanent structural foundation for all future homepage components.
