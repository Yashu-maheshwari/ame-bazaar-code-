# AME Bazaar WordPress Content Import Guide

A comprehensive, step-by-step operational guide for importing the 10 evergreen fashion pillars and sizing blueprints into a fresh WordPress installation.

---

## 1. Required Plugins
Ensure the following plugins are active in your WordPress dashboard before executing imports:
1. **WP All Import (Pro)**: The core engine required to map CSV/XML files to pages.
2. **WP All Import - Advanced Custom Fields Add-On**: Only required if meta keys are managed via ACF instead of WordPress standard meta fields.

---

## 2. Import Configuration & Field Mapping

### Recommended Import Steps
1. Navigate to **All Import -> New Import**.
2. Upload the `wordpress_import_package.csv` file.
3. Select **Create New -> Pages**.
4. In Step 3 (Drag & Drop), map columns to the following default fields:
   * **Title**: `{Title}`
   * **Slug**: `{Slug}`
   * **Content**: *[Leave empty - content is fetched dynamically from theme template files or manual body inserts]*
5. Expand **Custom Fields** and click **Add Custom Field** for each:
   * `ame_factual_summary` ➔ `{ame_factual_summary}`
   * `ame_key_takeaways` ➔ `{ame_key_takeaways}` (stored as serialized array)
   * `ame_associated_pillar` ➔ `{ame_associated_pillar}`
   * `ame_last_reviewed_date` ➔ `{ame_last_reviewed_date}`
   * `ame_author_title` ➔ `{ame_author_title}`
   * `ame_editorial_status` ➔ `{ame_editorial_status}`
   * `ame_local_faqs` ➔ `{ame_local_faqs}` (stored as serialized Q&A array)
6. Expand **Page Options**:
   * Set **Page Template** to **Keep template from import file** and map column: `{Page Template}` (renders `templates/template-pillar.php` automatically).
7. In Step 4 (Unique Identifier), click **Auto-detect**.
8. Click **Confirm & Run Import**.

---

## 3. Post-Import Verification & Schema Validation

### Permalink Configuration
- Ensure your permalinks are set to **Post name** under **Settings -> Permalinks** (`/%postname%/`).

### Schema Verification
1. Access the page using your browser or run the schema validation check.
2. Confirm the combined JSON-LD graphs carry:
   * `WebPage` with breadcrumbs and `isPartOf` connection.
   * `FAQPage` carrying the correct questions and answers parsed from `ame_local_faqs`.
   * Clear author `Person` node with the `jobTitle` set to the imported `ame_author_title` value.

---

## 4. Troubleshooting
- **Dynamic Content is Blank**: Ensure the imported pages are assigned the correct page template (`templates/template-pillar.php`).
- **FAQs Not Displaying**: Check that the `ame_local_faqs` field is correctly stored in the database as a serialized PHP array or JSON array. Run a test save in the editor to re-serialize.
