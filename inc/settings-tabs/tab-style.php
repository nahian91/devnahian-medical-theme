<?php
/**
 * Settings Tab: Theme Style, Color Branding & Component Geometry
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$primary_color    = get_option( 'devnahian_auracare_primary_color', '#0284c7' );
$secondary_color  = get_option( 'devnahian_auracare_secondary_color', '#0ea5e9' );
$emergency_color  = get_option( 'devnahian_auracare_emergency_color', '#ef4444' );
$heading_font     = get_option( 'devnahian_auracare_heading_font', 'Plus Jakarta Sans' );
$border_radius    = get_option( 'devnahian_auracare_border_radius', '0.75rem' );
$enable_dark_mode = get_option( 'devnahian_auracare_enable_dark_mode', '0' );
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
  .ac-input, .ac-select {
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
  .ac-input:focus, .ac-select:focus {
    outline: none;
    background: #ffffff;
    border-color: #0284c7;
    box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
  }
  .ac-hint {
    font-size: 12px;
    color: #94a3b8;
  }

  /* Color Picker Control Group */
  .ac-color-group {
    display: flex;
    align-items: center;
    gap: 10px;
    background: #f8fafc;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    padding: 6px 10px;
  }
  .ac-color-input {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: none;
    width: 36px;
    height: 36px;
    border-radius: 6px;
    cursor: pointer;
    background: transparent;
    padding: 0;
  }
  .ac-color-input::-webkit-color-swatch-wrapper {
    padding: 0;
  }
  .ac-color-input::-webkit-color-swatch {
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 6px;
  }
  .ac-color-hex-text {
    flex-grow: 1;
    border: none !important;
    background: transparent !important;
    box-shadow: none !important;
    font-family: monospace;
    font-weight: 700;
    font-size: 14px;
    color: #0f172a;
    padding: 0;
  }
  .ac-color-hex-text:focus {
    outline: none !important;
  }

  /* Radius Preset Chips */
  .ac-radius-presets {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 6px;
  }
  .ac-radius-chip {
    background: #f1f5f9;
    border: 1px solid #e2e8f0;
    border-radius: 6px;
    padding: 6px 12px;
    font-size: 12px;
    font-weight: 600;
    color: #475569;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
  }
  .ac-radius-chip:hover {
    background: #e2e8f0;
    color: #0f172a;
  }
  .ac-radius-chip.active {
    background: #0284c7;
    border-color: #0284c7;
    color: #ffffff;
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

  /* Live Preview Canvas */
  .ac-preview-canvas {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px;
    display: flex;
    flex-direction: column;
    gap: 18px;
  }
  .ac-preview-row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 14px;
  }
  .ac-preview-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    padding: 16px 20px;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.04);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    flex-grow: 1;
  }
  .ac-preview-btn-primary {
    color: #ffffff;
    border: none;
    font-weight: 600;
    font-size: 13.5px;
    padding: 10px 20px;
    cursor: pointer;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  }
  .ac-preview-btn-secondary {
    color: #ffffff;
    border: none;
    font-weight: 600;
    font-size: 13.5px;
    padding: 10px 20px;
    cursor: pointer;
  }
  .ac-preview-badge {
    padding: 4px 12px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.04em;
  }
</style>

<div class="ac-tab-panel">

  <!-- CARD 1: Brand Color Palette -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #e0f2fe; color: #0284c7;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="13.5" cy="6.5" r=".5" fill="currentColor"/><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"/>
          <circle cx="8.5" cy="7.5" r=".5" fill="currentColor"/><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"/>
          <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.9 0 1.6-.7 1.6-1.6 0-.4-.2-.8-.4-1.1-.3-.4-.4-.8-.4-1.3 0-1.1.9-2 2-2h2.4c3.3 0 6-2.7 6-6 0-5.5-5.1-10-11.2-10z"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Brand Color Palette', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Define the core clinical theme colors applied to buttons, headers, icons, and triage badges.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-3">
      <!-- Primary Brand Color -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_primary_color"><?php esc_html_e( 'Primary Brand Color', 'devnahian-auracare' ); ?></label>
        <div class="ac-color-group">
          <input type="color" id="devnahian_auracare_primary_color" name="devnahian_auracare_primary_color" value="<?php echo esc_attr( $primary_color ); ?>" class="ac-color-input">
          <input type="text" value="<?php echo esc_attr( $primary_color ); ?>" class="ac-color-hex-text" data-sync="devnahian_auracare_primary_color">
        </div>
        <span class="ac-hint"><?php esc_html_e( 'Used for primary buttons, active tabs, and navigation links.', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- Secondary Accent Color -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_secondary_color"><?php esc_html_e( 'Secondary Accent Color', 'devnahian-auracare' ); ?></label>
        <div class="ac-color-group">
          <input type="color" id="devnahian_auracare_secondary_color" name="devnahian_auracare_secondary_color" value="<?php echo esc_attr( $secondary_color ); ?>" class="ac-color-input">
          <input type="text" value="<?php echo esc_attr( $secondary_color ); ?>" class="ac-color-hex-text" data-sync="devnahian_auracare_secondary_color">
        </div>
        <span class="ac-hint"><?php esc_html_e( 'Used for hover highlights, subtitles, and gradient accents.', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- Emergency Hotline Color -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_emergency_color"><?php esc_html_e( 'Emergency / Alert Red', 'devnahian-auracare' ); ?></label>
        <div class="ac-color-group">
          <input type="color" id="devnahian_auracare_emergency_color" name="devnahian_auracare_emergency_color" value="<?php echo esc_attr( $emergency_color ); ?>" class="ac-color-input">
          <input type="text" value="<?php echo esc_attr( $emergency_color ); ?>" class="ac-color-hex-text" data-sync="devnahian_auracare_emergency_color">
        </div>
        <span class="ac-hint"><?php esc_html_e( 'Used for 24/7 ER hotline pills, urgent triage badges, and alerts.', 'devnahian-auracare' ); ?></span>
      </div>
    </div>
  </div>

  <!-- CARD 2: Component Geometry & Typography -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #f0fdf4; color: #16a34a;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <rect x="3" y="3" width="18" height="18" rx="4"/>
          <path d="M7 8h10M12 8v8"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Geometry & Typography Settings', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Adjust border radius curves for cards and buttons, choose fonts, and toggle dark mode support.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <!-- Border Radius & Presets -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_border_radius"><?php esc_html_e( 'Global Border Radius', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_border_radius" name="devnahian_auracare_border_radius" value="<?php echo esc_attr( $border_radius ); ?>" class="ac-input" placeholder="0.75rem">
        <div class="ac-radius-presets">
          <span class="ac-radius-chip" data-val="0.25rem"><?php esc_html_e( 'Sharp (0.25rem)', 'devnahian-auracare' ); ?></span>
          <span class="ac-radius-chip" data-val="0.5rem"><?php esc_html_e( 'Soft (0.5rem)', 'devnahian-auracare' ); ?></span>
          <span class="ac-radius-chip" data-val="0.75rem"><?php esc_html_e( 'Smooth (0.75rem)', 'devnahian-auracare' ); ?></span>
          <span class="ac-radius-chip" data-val="1rem"><?php esc_html_e( 'Rounded (1rem)', 'devnahian-auracare' ); ?></span>
          <span class="ac-radius-chip" data-val="9999px"><?php esc_html_e( 'Full Pill', 'devnahian-auracare' ); ?></span>
        </div>
      </div>

      <!-- Typography Choice & Dark Mode -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_heading_font"><?php esc_html_e( 'Primary Typography Family', 'devnahian-auracare' ); ?></label>
        <select id="devnahian_auracare_heading_font" name="devnahian_auracare_heading_font" class="ac-select">
          <option value="Plus Jakarta Sans" <?php selected( $heading_font, 'Plus Jakarta Sans' ); ?>>Plus Jakarta Sans (Medical Modern)</option>
          <option value="Inter" <?php selected( $heading_font, 'Inter' ); ?>>Inter (Clean & Technical)</option>
          <option value="Outfit" <?php selected( $heading_font, 'Outfit' ); ?>>Outfit (Contemporary Clean)</option>
          <option value="Roboto" <?php selected( $heading_font, 'Roboto' ); ?>>Roboto (Corporate Editorial)</option>
          <option value="system-ui" <?php selected( $heading_font, 'system-ui' ); ?>>Native System Sans</option>
        </select>
        
        <div style="margin-top: 14px;">
          <label class="ac-switch-control">
            <input type="checkbox" name="devnahian_auracare_enable_dark_mode" value="1" <?php checked( $enable_dark_mode, '1' ); ?>>
            <span class="ac-switch-track"></span>
            <span class="ac-switch-label"><?php esc_html_e( 'Automatic Dark / High-Contrast Mode Support', 'devnahian-auracare' ); ?></span>
          </label>
        </div>
      </div>
    </div>
  </div>

  <!-- CARD 3: Live Component Style Preview -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fef3c7; color: #d97706;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
          <circle cx="12" cy="12" r="3"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Live Component Style Preview', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Live interactive rendering of your primary, secondary, and geometry selections.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-preview-canvas" id="acPreviewCanvas">
      <!-- Buttons Row -->
      <div class="ac-preview-row">
        <button type="button" class="ac-preview-btn-primary" id="previewBtnPrimary">
          <?php esc_html_e( 'Book Appointment', 'devnahian-auracare' ); ?>
        </button>

        <button type="button" class="ac-preview-btn-secondary" id="previewBtnSecondary">
          <?php esc_html_e( 'Consult Department', 'devnahian-auracare' ); ?>
        </button>

        <span class="ac-preview-badge" id="previewBadgeEmergency">
          <?php esc_html_e( '🚨 24/7 Triage Emergency', 'devnahian-auracare' ); ?>
        </span>
      </div>

      <!-- Card Component Preview -->
      <div class="ac-preview-card" id="previewCardBox">
        <div>
          <h4 style="margin: 0 0 4px 0; font-size: 15px; color: #0f172a; font-weight: 700;">
            <?php esc_html_e( 'Cardiovascular Surgery Center', 'devnahian-auracare' ); ?>
          </h4>
          <p style="margin: 0; font-size: 13px; color: #64748b;">
            <?php esc_html_e( 'Previewing responsive card border-radius, background tinting, and typography.', 'devnahian-auracare' ); ?>
          </p>
        </div>
        <span style="font-size: 18px; font-weight: 800;" id="previewPriceText">$190</span>
      </div>
    </div>
  </div>

</div>

<!-- JavaScript Engine for Synchronized Color Inputs & Real-Time Live Preview -->
<script>
jQuery(document).ready(function($) {

  function updateLivePreview() {
    const primaryColor   = $('#devnahian_auracare_primary_color').val();
    const secondaryColor = $('#devnahian_auracare_secondary_color').val();
    const emergencyColor = $('#devnahian_auracare_emergency_color').val();
    const radius         = $('#devnahian_auracare_border_radius').val();

    // Primary Button
    $('#previewBtnPrimary').css({
      'background-color': primaryColor,
      'border-radius': radius
    });

    // Secondary Button
    $('#previewBtnSecondary').css({
      'background-color': secondaryColor,
      'border-radius': radius
    });

    // Emergency Badge
    $('#previewBadgeEmergency').css({
      'background-color': emergencyColor + '18',
      'color': emergencyColor,
      'border': '1px solid ' + emergencyColor + '40',
      'border-radius': radius
    });

    // Card Box
    $('#previewCardBox').css({
      'border-radius': radius
    });

    // Price Text
    $('#previewPriceText').css({
      'color': primaryColor
    });
  }

  // Synchronize color picker with text hex input
  $('.ac-color-input').on('input change', function() {
    const val = $(this).val();
    $(this).siblings('.ac-color-hex-text').val(val);
    updateLivePreview();
  });

  $('.ac-color-hex-text').on('input change', function() {
    const val = $(this).val();
    if (/^#[0-9A-F]{6}$/i.test(val)) {
      $(this).siblings('.ac-color-input').val(val);
      updateLivePreview();
    }
  });

  // Border Radius input change
  $('#devnahian_auracare_border_radius').on('input change', function() {
    updateLivePreview();
  });

  // Radius Preset Chips
  $('.ac-radius-chip').on('click', function() {
    const val = $(this).data('val');
    $('#devnahian_auracare_border_radius').val(val);
    $('.ac-radius-chip').removeClass('active');
    $(this).addClass('active');
    updateLivePreview();
  });

  // Initial render
  updateLivePreview();
});
</script>