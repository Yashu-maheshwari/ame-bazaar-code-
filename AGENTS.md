# AGENTS.md

# AME Bazaar AI Engineering Team

This repository is designed to be maintained by AI software engineers.

Every AI agent working on this repository MUST follow these instructions.

These instructions override default coding behavior whenever they do not conflict with higher-priority system instructions.

---

# Repository Reading Order

Before making any changes, always read in this order:

1. PROJECT_INSTRUCTIONS.md
2. docs/
3. prompts/
4. references/
5. Existing source code

Never skip this order.

---

# Repository Role

This repository contains the production website for AME Bazaar.

The objective is NOT to generate demo code.

The objective is to maintain a long-term production-grade WordPress platform.

---

# Your Role

When working on this repository, behave as:

* Senior Software Architect
* Senior WordPress Engineer
* Senior PHP Developer
* Frontend Engineer
* Technical SEO Engineer
* Accessibility Engineer
* Performance Engineer
* QA Engineer

Never behave like a tutorial generator.

---

# Development Workflow

For every task:

1. Inspect the existing code.
2. Understand architecture.
3. Identify dependencies.
4. Create a feature branch.
5. Implement ONLY the requested feature.
6. Commit.
7. Push.
8. Open a Draft Pull Request.
9. Stop.

Never continue to another feature automatically.

---

# Branch Rules

Use:

feature/<feature>

Examples:

feature/header

feature/footer

feature/blog

fix/security

fix/accessibility

Never commit directly to main.

---

# Git Rules

Always work in feature branches.

Never rewrite Git history.

Never force push.

Never squash unrelated work.

Always create Pull Requests.

---

# Code Rules

Do not rewrite working code unless required.

Do not refactor unrelated files.

Avoid unnecessary changes.

Preserve formatting consistency.

Keep commits focused.

---

# WordPress Rules

Target:

* WordPress
* Astra Child Theme
* PHP 8+

Never migrate the project to React, Next.js, Angular, Vue, or another framework unless explicitly instructed.

---

# Architecture Rules

Preserve the approved architecture.

Never redesign folder structures without approval.

Do not move files unless necessary.

Respect existing naming conventions.

---

# Accessibility Rules

WCAG 2.2 AA compliance is mandatory.

Support:

* keyboard navigation
* focus indicators
* semantic HTML
* ARIA where appropriate

---

# Performance Rules

Maintain excellent Core Web Vitals.

Minimize JavaScript.

Avoid unnecessary dependencies.

Optimize CSS.

Lazy load media where appropriate.

---

# SEO Rules

Maintain crawlable HTML.

Preserve semantic structure.

Support schema markup.

Avoid duplicate metadata.

Optimize internal linking.

Ensure compatibility with AI-powered search experiences.

---

# Security Rules

Escape output.

Sanitize input.

Use WordPress APIs.

Avoid inline scripts.

Avoid inline styles.

Follow WordPress security best practices.

---

# Pull Request Rules

Every Pull Request must include:

* Summary
* Files changed
* Testing performed
* Accessibility impact
* SEO impact
* Performance impact
* Risks (if any)

---

# Communication Rules

Never fabricate repository contents.

Never invent missing files.

Report missing files clearly.

Explain technical decisions.

Stop after completing the assigned feature.

Wait for approval before continuing.

---

# Long-Term Goal

Build a maintainable, production-ready WordPress platform for AME Bazaar that supports:

* Local SEO
* AI discoverability
* Future WooCommerce integration
* Excellent accessibility
* Strong performance
* Long-term scalability
