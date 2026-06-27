# AME Bazaar Development Rules

## Purpose

This document defines the mandatory development standards for the AME Bazaar Digital Platform.

It ensures that every component, page, template, style, and future feature follows a consistent architecture.

These rules apply to all AI-generated code, human-written code, and future contributions.

---

# General Principles

Every implementation must prioritize:

* Scalability
* Maintainability
* Performance
* Accessibility
* Security
* SEO
* AI Readability
* Responsive Design
* Clean Architecture

Never sacrifice long-term maintainability for short-term convenience.

---

# Documentation Priority

Before generating any code, always read the project documentation in this order:

1. 01-brand.md
2. 02-business.md
3. 03-design-system.md
4. 04-homepage.md
5. 05-categories.md
6. 06-blog.md
7. 07-ai-visibility.md
8. 08-seo.md
9. 09-content-style.md
10. 10-roadmap.md
11. This document

If any documentation conflicts, stop and request clarification instead of making assumptions.

---

# Development Workflow

Every task must follow this process:

1. Read the relevant documentation.
2. Understand the requested task.
3. Explain the implementation approach.
4. Generate only the requested component.
5. Stop and wait for approval.

Never generate multiple unrelated components in a single response.

---

# Platform Requirements

Platform

* WordPress

Theme

* Astra Child Theme

Future Compatibility

* WooCommerce
* Custom Post Types
* Blog
* AI Features
* Multiple Locations

The code must remain compatible with future platform expansion.

---

# Shopify Reference

The existing Shopify website is a design reference only.

Do not copy:

* Liquid templates
* Shopify-specific code
* Shopify architecture

Instead:

* Analyse the design
* Recreate the experience
* Use WordPress-compatible architecture

---

# Existing Assets

Always use the official project assets.

This includes:

* Brand logo
* Brand colours
* Typography
* Store images
* Product images
* Existing design assets

Never generate replacement logos or placeholder branding if official assets are available.

---

# HTML Standards

Use semantic HTML.

Prefer:

* header
* nav
* main
* section
* article
* aside
* footer

Avoid unnecessary wrapper elements.

HTML should remain clean, readable, and accessible.

---

# CSS Standards

Styles should be:

* Modular
* Reusable
* Maintainable
* Mobile-first

Avoid:

* Inline styles
* Duplicate rules
* Excessive specificity
* !important unless absolutely necessary

Use consistent spacing and naming conventions.

---

# JavaScript Standards

Use JavaScript only when required.

Requirements:

* Lightweight
* Modular
* Progressive enhancement
* Accessible

Avoid unnecessary dependencies and animations.

---

# Responsive Design

Every component must function correctly on:

* Mobile
* Tablet
* Laptop
* Desktop

Mobile is the primary design target.

---

# Accessibility

Every page should support:

* Keyboard navigation
* Screen readers
* Proper focus states
* Accessible forms
* High colour contrast
* Descriptive alt text

Accessibility is a mandatory requirement.

---

# Performance

Prioritize:

* Fast loading
* Optimized images
* Efficient CSS
* Minimal JavaScript
* Lazy loading where appropriate

The website should aim for excellent Core Web Vitals.

---

# SEO

Every page should include:

* Proper heading hierarchy
* Metadata
* Internal linking
* Semantic structure
* Optimized images
* Schema readiness

Never create duplicate content.

---

# AI Visibility

Every component should help AI systems understand:

* The page purpose
* The business
* The products
* The customer journey

Content and code should be structured for both humans and machines.

---

# Reusable Components

Build reusable components whenever possible.

Examples:

* Header
* Footer
* Buttons
* Cards
* Product Grid
* Category Cards
* Testimonials
* FAQ
* CTA Sections

Avoid duplicating component logic.

---

# Security

Follow WordPress security best practices.

Never expose:

* API keys
* Sensitive credentials
* Internal configuration

Validate and sanitize all user inputs.

---

# File Organization

Maintain a clear and logical project structure.

Group related files together and avoid unnecessary duplication.

---

# Code Quality

Generated code should be:

* Production-ready
* Well-organized
* Readable
* Consistent
* Commented only where necessary

Avoid experimental or incomplete implementations.

---

# Error Handling

Handle unexpected situations gracefully.

Do not allow broken layouts, inaccessible content, or silent failures.

---

# Future Expansion

The architecture should support future additions including:

* WooCommerce
* Customer Accounts
* AI Shopping Assistant
* Loyalty Program
* Franchise Pages
* Multi-location Support
* Private Label Products

New features should extend the existing architecture instead of replacing it.

---

# Final Verification

Before considering any task complete, confirm:

* Documentation has been followed.
* Brand consistency has been maintained.
* Design system has been respected.
* Accessibility requirements have been met.
* SEO standards have been followed.
* AI visibility has been considered.
* Performance has been optimized.
* The implementation is compatible with WordPress and Astra Child Theme.

---

# Documentation Rule

This document defines the official development standards for the AME Bazaar Digital Platform.

Every future implementation must comply with these rules to ensure a scalable, maintainable, high-performance, and future-ready platform that reflects the quality and vision of the AME Bazaar brand.
