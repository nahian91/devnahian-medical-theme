<?php
/**
 * Settings Tab: Blogs & Medical Journal Configuration (Modern Card Layout)
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$blogs_subtitle       = get_option( 'devnahian_auracare_blogs_subtitle', 'Medical Insights & Health News' );
$blogs_title          = get_option( 'devnahian_auracare_blogs_title', 'Latest Clinical Research & Wellness Articles' );
$blogs_desc           = get_option( 'devnahian_auracare_blogs_desc', 'Stay informed with evidence-based health guidance, surgical innovations, and wellness advice published by our medical specialists.' );
$blogs_per_page       = get_option( 'devnahian_auracare_blogs_per_page', '9' );
$blogs_columns        = get_option( 'devnahian_auracare_blogs_columns', '3' );
$blogs_sidebar        = get_option( 'devnahian_auracare_blogs_sidebar', 'right' );
$blogs_show_date      = get_option( 'devnahian_auracare_blogs_show_date', '1' );
$blogs_show_author    = get_option( 'devnahian_auracare_blogs_show_author', '1' );
$blogs_show_category  = get_option( 'devnahian_auracare_blogs_show_category', '1' );
$blogs_excerpt_length = get_option( 'devnahian_auracare_blogs_excerpt_length', '20' );
?>

<style>
  .ac-tab-panel {
    max-width: 960px;
    margin: 0;
  }
  .ac-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 26px;
    margin-bottom: 24px;
    box-shadow: 0 1px 3px rgba(15, 23, 42, 0.05);
  }
  .ac-card-head {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    padding-bottom: 16px;
    border-bottom: 1px solid #f1f5f9;
  }
  .ac-icon-badge {
    width: 38px;
    height: 38px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .ac-card-head h3 {
    margin: 0;
    font-size: 16px;
    font-weight: 700;
    color: #0f172a;
  }
  .ac-card-head p {
    margin: 2px 0 0 0;
    font-size: 13px;
    color: #64748b;
  }
  .ac-grid-2 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 18px;
  }
  .ac-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
  }
  .ac-grid-full {
    grid-column: 1 / -1;
  }
  .ac-field-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
  }
  .ac-label {
    font-size: 13px;
    font-weight: 600;
    color: #334155;
  }
  .ac-input, .ac-textarea, .ac-select {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    font-size: 14px;
    color: #0f172a;
    background: #f8fafc;
    box-sizing: border-box;
    transition: border-color 0.2s, background 0.2s;
  }
  .ac-input:focus, .ac-textarea:focus, .ac-select:focus {
    outline: none;
    background: #ffffff;
    border-color: #0284c7;
    box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
  }
  .ac-hint {
    font-size: 12px;
    color: #94a3b8;
  }
  .ac-checkbox-group {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 4px;
  }
  .ac-checkbox-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 600;
    color: #334155;
    cursor: pointer;
  }
  .ac-checkbox-label input[type="checkbox"] {
    width: 16px;
    height: 16px;
    margin: 0;
  }
</style>

<div class="ac-tab-panel">

  <!-- CARD 1: Hero & Intro Header -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #e0f2fe; color: #0284c7;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
          <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Hero & Section Content', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure the title badge, main heading, and introduction text for the clinical journal archive.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_blogs_subtitle"><?php esc_html_e( 'Section Subtitle / Badge', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_blogs_subtitle" name="devnahian_auracare_blogs_subtitle" value="<?php echo esc_attr( $blogs_subtitle ); ?>" class="ac-input" placeholder="e.g. Medical Insights & Health News">
        <span class="ac-hint"><?php esc_html_e( 'Small label badge appearing above the main heading.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_blogs_title"><?php esc_html_e( 'Main Heading Title', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_blogs_title" name="devnahian_auracare_blogs_title" value="<?php echo esc_attr( $blogs_title ); ?>" class="ac-input" placeholder="e.g. Latest Clinical Research & Wellness Articles">
        <span class="ac-hint"><?php esc_html_e( 'Main headline for the blog archive section.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_blogs_desc"><?php esc_html_e( 'Description Paragraph', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_blogs_desc" name="devnahian_auracare_blogs_desc" rows="2" class="ac-textarea"><?php echo esc_textarea( $blogs_desc ); ?></textarea>
      </div>
    </div>
  </div>

  <!-- CARD 2: Layout & Pagination -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #f0fdf4; color: #16a34a;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <rect x="3" y="3" width="7" height="7"/>
          <rect x="14" y="3" width="7" height="7"/>
          <rect x="14" y="14" width="7" height="7"/>
          <rect x="3" y="14" width="7" height="7"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Archive Layout & Grid Structure', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Set column density, posts per page, and sidebar positioning.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-3">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_blogs_columns"><?php esc_html_e( 'Grid Columns', 'devnahian-auracare' ); ?></label>
        <select id="devnahian_auracare_blogs_columns" name="devnahian_auracare_blogs_columns" class="ac-select">
          <option value="2" <?php selected( $blogs_columns, '2' ); ?>><?php esc_html_e( '2 Columns (Spacious Cards)', 'devnahian-auracare' ); ?></option>
          <option value="3" <?php selected( $blogs_columns, '3' ); ?>><?php esc_html_e( '3 Columns (Recommended Standard)', 'devnahian-auracare' ); ?></option>
          <option value="4" <?php selected( $blogs_columns, '4' ); ?>><?php esc_html_e( '4 Columns (Compact Grid)', 'devnahian-auracare' ); ?></option>
        </select>
        <span class="ac-hint"><?php esc_html_e( 'Cards per row on desktop viewports.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_blogs_per_page"><?php esc_html_e( 'Posts Per Page', 'devnahian-auracare' ); ?></label>
        <input type="number" id="devnahian_auracare_blogs_per_page" name="devnahian_auracare_blogs_per_page" value="<?php echo esc_attr( $blogs_per_page ); ?>" min="3" max="30" step="3" class="ac-input">
        <span class="ac-hint"><?php esc_html_e( 'Number of articles before pagination controls trigger.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_blogs_sidebar"><?php esc_html_e( 'Sidebar Layout', 'devnahian-auracare' ); ?></label>
        <select id="devnahian_auracare_blogs_sidebar" name="devnahian_auracare_blogs_sidebar" class="ac-select">
          <option value="none" <?php selected( $blogs_sidebar, 'none' ); ?>><?php esc_html_e( 'No Sidebar (Full Width Grid)', 'devnahian-auracare' ); ?></option>
          <option value="right" <?php selected( $blogs_sidebar, 'right' ); ?>><?php esc_html_e( 'Right Sidebar (Classic Journal)', 'devnahian-auracare' ); ?></option>
          <option value="left" <?php selected( $blogs_sidebar, 'left' ); ?>><?php esc_html_e( 'Left Sidebar', 'devnahian-auracare' ); ?></option>
        </select>
        <span class="ac-hint"><?php esc_html_e( 'Sidebar location on the blog archive page.', 'devnahian-auracare' ); ?></span>
      </div>
    </div>
  </div>

  <!-- CARD 3: Post Card Elements & Meta Toggles -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fef3c7; color: #d97706;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
          <circle cx="12" cy="12" r="3"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Article Card Visibility & Meta Elements', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Toggle metadata elements displayed on individual blog cards.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_blogs_excerpt_length"><?php esc_html_e( 'Excerpt Word Count', 'devnahian-auracare' ); ?></label>
        <input type="number" id="devnahian_auracare_blogs_excerpt_length" name="devnahian_auracare_blogs_excerpt_length" value="<?php echo esc_attr( $blogs_excerpt_length ); ?>" min="10" max="60" step="5" class="ac-input">
        <span class="ac-hint"><?php esc_html_e( 'Approximate word limit for the preview summary before the "Read Article" link.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label"><?php esc_html_e( 'Meta Info Toggles', 'devnahian-auracare' ); ?></label>
        <div class="ac-checkbox-group">
          <label class="ac-checkbox-label">
            <input type="checkbox" name="devnahian_auracare_blogs_show_date" value="1" <?php checked( $blogs_show_date, '1' ); ?>>
            <?php esc_html_e( 'Date Published', 'devnahian-auracare' ); ?>
          </label>
          <label class="ac-checkbox-label">
            <input type="checkbox" name="devnahian_auracare_blogs_show_author" value="1" <?php checked( $blogs_show_author, '1' ); ?>>
            <?php esc_html_e( 'Author / Physician', 'devnahian-auracare' ); ?>
          </label>
          <label class="ac-checkbox-label">
            <input type="checkbox" name="devnahian_auracare_blogs_show_category" value="1" <?php checked( $blogs_show_category, '1' ); ?>>
            <?php esc_html_e( 'Category Badge', 'devnahian-auracare' ); ?>
          </label>
        </div>
      </div>
    </div>
  </div>

</div>