<?php
/**
 * Settings Tab: Header Configuration & Brand Navbar (Modern Card UI)
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$header_logo        = get_option( 'devnahian_auracare_header_logo', '' );
$header_sticky_logo = get_option( 'devnahian_auracare_header_sticky_logo', '' );$logo_height        = get_option( 'devnahian_auracare_header_logo_height', '42' );

$cta_text           = get_option( 'devnahian_auracare_cta_button_text', 'Book Appointment' );
$cta_url            = get_option( 'devnahian_auracare_cta_button_url', '/appointment' );$cta_target         = get_option( 'devnahian_auracare_cta_button_target', '0' );

$topbar_note        = get_option( 'devnahian_auracare_header_topbar_note', 'Accredited Tertiary Hospital • Emergency Care 24/7' );

// Feature Switches
$sticky_header      = get_option( 'devnahian_auracare_header_sticky', '1' );$show_topbar        = get_option( 'devnahian_auracare_header_show_topbar', '1' );
$show_search        = get_option( 'devnahian_auracare_header_show_search', '1' );$show_cta           = get_option( 'devnahian_auracare_header_show_cta', '1' );
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

  /* Logo Media Picker Styling */
  .ac-logo-picker-box {
    width: 160px;
    height: 70px;
    border-radius: 8px;
    background: #f8fafc;
    border: 2px dashed #94a3b8;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    position: relative;
    transition: border-color 0.2s;
  }
  .ac-logo-picker-box:hover {
    border-color: #0284c7;
  }
  .ac-logo-picker-box img {
    max-width: 90%;
    max-height: 90%;
    object-fit: contain;
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
</style>

<div class="ac-tab-panel">

  <!-- CARD 1: Brand Logos & Sizing -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #e0f2fe; color: #0284c7;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
          <line x1="3" y1="9" x2="21" y2="9"/>
          <line x1="9" y1="21" x2="9" y2="9"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Header Brand Identity & Logos', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Upload your standard primary logo, sticky navbar logo, and set custom rendering height.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-3">
      <!-- Primary Logo -->
      <div class="ac-field-group">
        <label class="ac-label"><?php esc_html_e( 'Primary Header Logo', 'devnahian-auracare' ); ?></label>
        <div class="ac-logo-picker-box ac-upload-header-logo" title="<?php esc_attr_e( 'Select Primary Logo', 'devnahian-auracare' ); ?>">
          <input type="hidden" name="devnahian_auracare_header_logo" value="<?php echo esc_url( $header_logo ); ?>" class="ac-header-logo-input">
          <?php if ( ! empty( $header_logo ) ) : ?>
            <img src="<?php echo esc_url( $header_logo ); ?>" alt="">
          <?php else : ?>
            <span style="font-size:11px; font-weight:700; color:#64748b;"><?php esc_html_e( '+ Primary Logo', 'devnahian-auracare' ); ?></span>
          <?php endif; ?>
        </div>
        <span class="ac-hint"><?php esc_html_e( 'Standard navbar logo (.svg or .png).', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- Sticky Logo -->
      <div class="ac-field-group">
        <label class="ac-label"><?php esc_html_e( 'Sticky Navbar Logo (Optional)', 'devnahian-auracare' ); ?></label>
        <div class="ac-logo-picker-box ac-upload-sticky-logo" title="<?php esc_attr_e( 'Select Sticky Logo', 'devnahian-auracare' ); ?>">
          <input type="hidden" name="devnahian_auracare_header_sticky_logo" value="<?php echo esc_url( $header_sticky_logo ); ?>" class="ac-sticky-logo-input">
          <?php if ( ! empty( $header_sticky_logo ) ) : ?>
            <img src="<?php echo esc_url( $header_sticky_logo ); ?>" alt="">
          <?php else : ?>
            <span style="font-size:11px; font-weight:700; color:#64748b;"><?php esc_html_e( '+ Sticky Logo', 'devnahian-auracare' ); ?></span>
          <?php endif; ?>
        </div>
        <span class="ac-hint"><?php esc_html_e( 'Displayed when the visitor scrolls down.', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- Logo Display Height -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_header_logo_height"><?php esc_html_e( 'Logo Display Height (px)', 'devnahian-auracare' ); ?></label>
        <input type="number" id="devnahian_auracare_header_logo_height" name="devnahian_auracare_header_logo_height" value="<?php echo esc_attr( $logo_height ); ?>" min="24" max="90" step="2" class="ac-input" placeholder="42">
        <span class="ac-hint"><?php esc_html_e( 'Recommended: 36px to 48px for balanced header height.', 'devnahian-auracare' ); ?></span>
      </div>
    </div>
  </div>

  <!-- CARD 2: Header Highlight CTA Button -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #f0fdf4; color: #16a34a;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <polygon points="5 3 19 12 5 21 5 3"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Navbar Call-to-Action (CTA) Button', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure the prominent highlight action button located at the far right of the navigation menu.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-3">
      <!-- Button Label -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_cta_button_text"><?php esc_html_e( 'Highlight Button Label', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_cta_button_text" name="devnahian_auracare_cta_button_text" value="<?php echo esc_attr( $cta_text ); ?>" class="ac-input" placeholder="Book Appointment">
        <span class="ac-hint"><?php esc_html_e( 'Action text inside the button.', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- Button URL Path -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_cta_button_url"><?php esc_html_e( 'Target URL / Path', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_cta_button_url" name="devnahian_auracare_cta_button_url" value="<?php echo esc_attr( $cta_url ); ?>" class="ac-input" placeholder="/appointment">
        <span class="ac-hint"><?php esc_html_e( 'Page link or booking modal trigger.', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- New Tab Switch -->
      <div class="ac-field-group" style="justify-content: center;">
        <label class="ac-switch-control" style="margin-top: 18px;">
          <input type="checkbox" name="devnahian_auracare_cta_button_target" value="1" <?php checked( $cta_target, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Open Link in New Tab', 'devnahian-auracare' ); ?></span>
        </label>
      </div>
    </div>
  </div>

  <!-- CARD 3: Top Info Bar Notice -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fdf2f8; color: #be185d;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10"/>
          <line x1="12" y1="16" x2="12" y2="12"/>
          <line x1="12" y1="8" x2="12.01" y2="8"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Header Top Bar Information Strip', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure clinical badges and hospital announcements rendered directly above the navbar.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-full">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_header_topbar_note"><?php esc_html_e( 'Top Bar Announcement / Accreditation Notice', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_header_topbar_note" name="devnahian_auracare_header_topbar_note" value="<?php echo esc_attr( $topbar_note ); ?>" class="ac-input" placeholder="Accredited Tertiary Hospital • Emergency Care 24/7">
        <span class="ac-hint"><?php esc_html_e( 'Short headline displayed beside contact numbers on large viewports.', 'devnahian-auracare' ); ?></span>
      </div>
    </div>
  </div>

  <!-- CARD 4: Header Behavior & Layout Switches -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fef3c7; color: #d97706;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <polyline points="20 6 9 17 4 12"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Header Navigation Behavior Switches', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Control sticky scroll lock, search button display, and top bar visibility.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <!-- Sticky Navigation Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_header_sticky" value="1" <?php checked( $sticky_header, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Enable Sticky / Floating Header on Scroll', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Locks the navigation menu to the top of the viewport when users scroll.', 'devnahian-auracare' ); ?></p>
      </div>

      <!-- Top Bar Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_header_show_topbar" value="1" <?php checked( $show_topbar, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Display Top Contact & Notice Strip', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Shows phone numbers, operating hours, and accreditation badge above navigation.', 'devnahian-auracare' ); ?></p>
      </div>

      <!-- Quick Search Trigger Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_header_show_search" value="1" <?php checked( $show_search, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Display Quick Search Modal Trigger Icon', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Adds a search icon to quickly query doctors, departments, and services.', 'devnahian-auracare' ); ?></p>
      </div>

      <!-- CTA Button Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_header_show_cta" value="1" <?php checked( $show_cta, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Display Header Action (CTA) Button', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Shows or hides the prominent booking button in the navbar.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>
  </div>

</div>

<!-- JavaScript for Media Library Logo Pickers -->
<script>
jQuery(document).ready(function($) {

  // Primary Header Logo
  $(document).on('click', '.ac-upload-header-logo', function(e) {
    e.preventDefault();
    let container = $(this);
    let inputField = container.find('.ac-header-logo-input');

    let mediaFrame = wp.media({
      title: '<?php esc_html_e( 'Select Primary Header Logo', 'devnahian-auracare' ); ?>',
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

  // Sticky Navbar Logo
  $(document).on('click', '.ac-upload-sticky-logo', function(e) {
    e.preventDefault();
    let container = $(this);
    let inputField = container.find('.ac-sticky-logo-input');

    let mediaFrame = wp.media({
      title: '<?php esc_html_e( 'Select Sticky Navbar Logo', 'devnahian-auracare' ); ?>',
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

});
</script>