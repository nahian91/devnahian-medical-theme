<?php
/**
 * Settings Tab: Footer Configuration & Dynamic Repeaters
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$footer_logo          = get_option( 'devnahian_auracare_footer_logo', '' );$footer_copyright     = get_option( 'devnahian_auracare_footer_copyright', '© 2026 AuraCure Medical Institute. All rights reserved.' );
$footer_about         = get_option( 'devnahian_auracare_footer_about_text', 'Advanced medical institute delivering compassionate care and robotic surgical excellence.' );$footer_accreditation = get_option( 'devnahian_auracare_footer_accreditation', 'JCI Accredited • HIPAA Compliant' );

// Feature Switches
$show_newsletter      = get_option( 'devnahian_auracare_footer_show_newsletter', '1' );$show_emergency       = get_option( 'devnahian_auracare_footer_show_emergency', '1' );
$show_social          = get_option( 'devnahian_auracare_footer_show_social', '1' );$show_back_to_top     = get_option( 'devnahian_auracare_footer_show_back_to_top', '1' );

// Repeaters
$social_links         = get_option( 'devnahian_auracare_footer_social_links', array() );
if ( ! is_array( $social_links ) ) {$social_links = array();
}

$nav_columns          = get_option( 'devnahian_auracare_footer_nav_columns', array() );
if ( ! is_array( $nav_columns ) ) {$nav_columns = array();
}
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

  /* Switch Toggle Styles */
  .ac-switch-control {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    cursor: pointer;
    user-select: none;
    font-size: 13.5px;
    font-weight: 600;
    color: #334155;
    margin: 6px 0;
  }
  .ac-switch-control input[type="checkbox"] {
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
    pointer-events: none;
  }
  .ac-switch-track {
    position: relative;
    width: 44px;
    height: 24px;
    background-color: #cbd5e1;
    border-radius: 9999px;
    transition: background-color 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    flex-shrink: 0;
    display: inline-block;
  }
  .ac-switch-track::after {
    content: "";
    position: absolute;
    top: 2px;
    left: 2px;
    width: 20px;
    height: 20px;
    background-color: #ffffff;
    border-radius: 50%;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.06);
    transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .ac-switch-control input[type="checkbox"]:checked + .ac-switch-track {
    background-color: #0284c7;
  }
  .ac-switch-control input[type="checkbox"]:checked + .ac-switch-track::after {
    transform: translateX(20px);
  }
  .ac-switch-control input[type="checkbox"]:focus-visible + .ac-switch-track {
    outline: 2px solid #0284c7;
    outline-offset: 2px;
  }

  /* Repeaters General */
  .ac-repeater-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin-bottom: 18px;
  }
  .ac-repeater-row-simple {
    display: grid;
    grid-template-columns: 180px 1fr auto;
    gap: 14px;
    align-items: center;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 12px 16px;
  }
  .ac-repeater-col-box {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 16px;
  }
  .ac-repeater-col-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
    padding-bottom: 10px;
    border-bottom: 1px solid #e2e8f0;
  }
  .ac-logo-preview-box {
    width: 140px;
    height: 60px;
    border-radius: 8px;
    background: #f8fafc;
    border: 2px dashed #94a3b8;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }
  .ac-logo-preview-box img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
  }
  .ac-btn-remove {
    background: #fee2e2;
    color: #dc2626;
    border: 1px solid #fecaca;
    border-radius: 6px;
    padding: 6px 12px;
    cursor: pointer;
    font-size: 12.5px;
    font-weight: 600;
    transition: background 0.2s;
  }
  .ac-btn-remove:hover {
    background: #fca5a5;
    color: #991b1b;
  }
  .ac-btn-add {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #0284c7;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    padding: 11px 20px;
    cursor: pointer;
    font-size: 13.5px;
    font-weight: 600;
    transition: background 0.2s;
  }
  .ac-btn-add:hover {
    background: #0369a1;
  }
</style>

<div class="ac-tab-panel">

  <!-- CARD 1: Footer Brand & About Meta -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #e0f2fe; color: #0284c7;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
          <line x1="3" y1="15" x2="21" y2="15"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Footer Identity & Brand Summary', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Manage the dark footer variant logo, hospital credentials, and copyright text.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <!-- Dark Logo Uploader -->
      <div class="ac-field-group">
        <label class="ac-label"><?php esc_html_e( 'Footer Logo (Light / White Variant)', 'devnahian-auracare' ); ?></label>
        <div style="display: flex; align-items: center; gap: 14px;">
          <div class="ac-logo-preview-box ac-upload-footer-logo" title="<?php esc_attr_e( 'Upload Footer Logo', 'devnahian-auracare' ); ?>">
            <input type="hidden" name="devnahian_auracare_footer_logo" value="<?php echo esc_url( $footer_logo ); ?>" class="ac-footer-logo-input">
            <?php if ( ! empty( $footer_logo ) ) : ?>
              <img src="<?php echo esc_url( $footer_logo ); ?>" alt="">
            <?php else : ?>
              <span style="font-size:11px; font-weight:700; color:#64748b;"><?php esc_html_e( '+ Upload Logo', 'devnahian-auracare' ); ?></span>
            <?php endif; ?>
          </div>
          <span class="ac-hint"><?php esc_html_e( 'Recommended for dark background footers (.svg or transparent .png).', 'devnahian-auracare' ); ?></span>
        </div>
      </div>

      <!-- Legal Accreditation Badge -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_footer_accreditation"><?php esc_html_e( 'Accreditation / Compliance Tag', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_footer_accreditation" name="devnahian_auracare_footer_accreditation" value="<?php echo esc_attr( $footer_accreditation ); ?>" class="ac-input" placeholder="e.g. JCI Accredited • HIPAA Compliant">
        <span class="ac-hint"><?php esc_html_e( 'Trust badge text displayed near the bottom legal strip.', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- About Bio -->
      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_footer_about_text"><?php esc_html_e( 'Footer Institute Overview', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_footer_about_text" name="devnahian_auracare_footer_about_text" rows="2" class="ac-textarea"><?php echo esc_textarea( $footer_about ); ?></textarea>
      </div>

      <!-- Copyright Notice -->
      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_footer_copyright"><?php esc_html_e( 'Footer Copyright Text', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_footer_copyright" name="devnahian_auracare_footer_copyright" value="<?php echo esc_attr( $footer_copyright ); ?>" class="ac-input" placeholder="&copy; 2026 AuraCure Medical Institute. All rights reserved.">
      </div>
    </div>
  </div>

  <!-- CARD 2: Feature & Widget Switches -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #f0fdf4; color: #16a34a;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <polyline points="20 6 9 17 4 12"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Footer Features & Layout Switches', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Toggle newsletter subscription banners, emergency hotline bars, and back-to-top buttons.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <!-- Newsletter Toggle -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_footer_show_newsletter" value="1" <?php checked( $show_newsletter, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Display Health Bulletin Newsletter Box', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Renders an email subscription banner above the main footer columns.', 'devnahian-auracare' ); ?></p>
      </div>

      <!-- Emergency Hotline Strip Toggle -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_footer_show_emergency" value="1" <?php checked( $show_emergency, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Display 24/7 Emergency Dispatch Strip', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Highlights the ambulance hotline and ER address in high-contrast red/amber.', 'devnahian-auracare' ); ?></p>
      </div>

      <!-- Social Media Icons Toggle -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_footer_show_social" value="1" <?php checked( $show_social, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Display Social Media Icon Links', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Shows social media channels from the repeater below.', 'devnahian-auracare' ); ?></p>
      </div>

      <!-- Back To Top Toggle -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_footer_show_back_to_top" value="1" <?php checked( $show_back_to_top, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Enable Smooth "Back To Top" Button', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Adds a floating bottom-right scroll-to-top arrow button.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>
  </div>

  <!-- CARD 3: Social Media Channels Repeater -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fdf2f8; color: #be185d;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Social Media Profiles (Repeater)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Connect patient communities, research profiles, and hospital social channels.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-repeater-list" id="socialRepeaterContainer">
      <?php if ( ! empty( $social_links ) ) : ?>
        <?php foreach ( $social_links as $index =>$social ) : ?>
          <?php
            $platform = isset($social['platform'] ) ? $social['platform'] : 'facebook';$url      = isset( $social['url'] ) ?$social['url'] : '';
          ?>
          <div class="ac-repeater-row-simple" data-index="<?php echo esc_attr( $index ); ?>">
            <div>
              <select name="devnahian_auracare_footer_social_links[<?php echo esc_attr( $index ); ?>][platform]" class="ac-select">
                <option value="facebook" <?php selected( $platform, 'facebook' ); ?>>Facebook</option>
                <option value="twitter" <?php selected( $platform, 'twitter' ); ?>>X / Twitter</option>
                <option value="linkedin" <?php selected( $platform, 'linkedin' ); ?>>LinkedIn</option>
                <option value="instagram" <?php selected( $platform, 'instagram' ); ?>>Instagram</option>
                <option value="youtube" <?php selected( $platform, 'youtube' ); ?>>YouTube</option>
              </select>
            </div>
            <div>
              <input type="url" name="devnahian_auracare_footer_social_links[<?php echo esc_attr( $index ); ?>][url]" value="<?php echo esc_url( $url ); ?>" class="ac-input" placeholder="https://">
            </div>
            <div>
              <button type="button" class="ac-btn-remove ac-remove-social">&times; <?php esc_html_e( 'Remove', 'devnahian-auracare' ); ?></button>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <button type="button" class="ac-btn-add" id="acAddSocial">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      <?php esc_html_e( 'Add Social Channel', 'devnahian-auracare' ); ?>
    </button>
  </div>

  <!-- CARD 4: Navigation Columns Repeater -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fef3c7; color: #d97706;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <line x1="8" y1="6" x2="21" y2="6"/>
          <line x1="8" y1="12" x2="21" y2="12"/>
          <line x1="8" y1="18" x2="21" y2="18"/>
          <line x1="3" y1="6" x2="3.01" y2="6"/>
          <line x1="3" y1="12" x2="3.01" y2="12"/>
          <line x1="3" y1="18" x2="3.01" y2="18"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Footer Navigation Columns (Repeater)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Build modular link lists (e.g. Quick Links, Specialized Centers, Patient Services) with line-by-line Label | URL parsing.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-repeater-list" id="navColsRepeaterContainer">
      <?php if ( ! empty( $nav_columns ) ) : ?>
        <?php foreach ( $nav_columns as $index =>$col ) : ?>
          <?php
            $col_title = isset($col['title'] ) ? $col['title'] : '';$col_links = isset( $col['links'] ) ?$col['links'] : '';
          ?>
          <div class="ac-repeater-col-box" data-index="<?php echo esc_attr( $index ); ?>">
            <div class="ac-repeater-col-header">
              <span style="font-size:12.5px; font-weight:700; color:#475569;">
                <?php esc_html_e( 'Navigation Column', 'devnahian-auracare' ); ?> #<span class="ac-col-num"><?php echo esc_html( $index + 1 ); ?></span>
              </span>
              <button type="button" class="ac-btn-remove ac-remove-col">&times; <?php esc_html_e( 'Remove Column', 'devnahian-auracare' ); ?></button>
            </div>
            <div class="ac-grid-2">
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Column Heading', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_footer_nav_columns[<?php echo esc_attr( $index ); ?>][title]" value="<?php echo esc_attr( $col_title ); ?>" class="ac-input" placeholder="e.g. Clinical Services">
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Links (Format: Title | URL per line)', 'devnahian-auracare' ); ?></label>
                <textarea name="devnahian_auracare_footer_nav_columns[<?php echo esc_attr( $index ); ?>][links]" rows="4" class="ac-textarea" placeholder="Cardiology | /services#cardio&#10;Emergency Care | /services#emergency"><?php echo esc_textarea( $col_links ); ?></textarea>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <button type="button" class="ac-btn-add" id="acAddNavCol">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      <?php esc_html_e( 'Add Navigation Column', 'devnahian-auracare' ); ?>
    </button>
  </div>

</div>

<!-- JavaScript for Repeater Rows and Media Picker -->
<script>
jQuery(document).ready(function($) {

  // Media Library Footer Logo Uploader
  $(document).on('click', '.ac-upload-footer-logo', function(e) {
    e.preventDefault();
    let container = $(this);
    let inputField = container.find('.ac-footer-logo-input');

    let mediaFrame = wp.media({
      title: '<?php esc_html_e( 'Select Footer Brand Logo', 'devnahian-auracare' ); ?>',
      button: { text: '<?php esc_html_e( 'Use This Logo', 'devnahian-auracare' ); ?>' },
      multiple: false,
      library: { type: 'image' }
    });

    mediaFrame.on('select', function() {
      let attachment = mediaFrame.state().get('selection').first().toJSON();
      inputField.val(attachment.url);
      container.find('img').remove();
      container.find('span').remove();
      container.append(`<img src="${attachment.url}" alt="">`);
    });

    mediaFrame.open();
  });

  // Add Social Row
  $('#acAddSocial').on('click', function(e) {
    e.preventDefault();
    let index = Date.now();

    let rowHtml = `
      <div class="ac-repeater-row-simple" data-index="${index}">
        <div>
          <select name="devnahian_auracare_footer_social_links[${index}][platform]" class="ac-select">
            <option value="facebook">Facebook</option>
            <option value="twitter">X / Twitter</option>
            <option value="linkedin">LinkedIn</option>
            <option value="instagram">Instagram</option>
            <option value="youtube">YouTube</option>
          </select>
        </div>
        <div>
          <input type="url" name="devnahian_auracare_footer_social_links[${index}][url]" value="" class="ac-input" placeholder="https://">
        </div>
        <div>
          <button type="button" class="ac-btn-remove ac-remove-social">&times; <?php esc_html_e( 'Remove', 'devnahian-auracare' ); ?></button>
        </div>
      </div>
    `;

    $('#socialRepeaterContainer').append(rowHtml);
  });

  $(document).on('click', '.ac-remove-social', function() {$(this).closest('.ac-repeater-row-simple').remove();
  });

  // Add Navigation Column
  $('#acAddNavCol').on('click', function(e) {
    e.preventDefault();
    let index = Date.now();

    let rowHtml = `
      <div class="ac-repeater-col-box" data-index="${index}">
        <div class="ac-repeater-col-header">
          <span style="font-size:12.5px; font-weight:700; color:#475569;">
            <?php esc_html_e( 'Navigation Column', 'devnahian-auracare' ); ?> #<span class="ac-col-num"></span>
          </span>
          <button type="button" class="ac-btn-remove ac-remove-col">&times; <?php esc_html_e( 'Remove Column', 'devnahian-auracare' ); ?></button>
        </div>
        <div class="ac-grid-2">
          <div class="ac-field-group">
            <label class="ac-label"><?php esc_html_e( 'Column Heading', 'devnahian-auracare' ); ?></label>
            <input type="text" name="devnahian_auracare_footer_nav_columns[${index}][title]" value="" class="ac-input" placeholder="e.g. Quick Links">
          </div>
          <div class="ac-field-group">
            <label class="ac-label"><?php esc_html_e( 'Links (Format: Title | URL per line)', 'devnahian-auracare' ); ?></label>
            <textarea name="devnahian_auracare_footer_nav_columns[${index}][links]" rows="4" class="ac-textarea" placeholder="About Us | /about&#10;Doctors | /doctors"></textarea>
          </div>
        </div>
      </div>
    `;

    $('#navColsRepeaterContainer').append(rowHtml);
    updateColNumbers();
  });

  function updateColNumbers() {
    $('#navColsRepeaterContainer .ac-repeater-col-box').each(function(i) {
      $(this).find('.ac-col-num').text(i + 1);
    });
  }

  $(document).on('click', '.ac-remove-col', function() {$(this).closest('.ac-repeater-col-box').remove();
    updateColNumbers();
  });

});
</script>