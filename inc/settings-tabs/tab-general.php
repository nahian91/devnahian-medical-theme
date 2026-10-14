<?php
/**
 * Settings Tab: Hospital Contact & Location Settings (Modern Card UI)
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$phone           = get_option( 'devnahian_auracare_phone', '(800) 555-0199' );
$emergency_phone = get_option( 'devnahian_auracare_emergency_phone', '(800) 555-0190' );
$email           = get_option( 'devnahian_auracare_email', 'records@auracure-health.org' );
$address         = get_option( 'devnahian_auracare_address', '742 Evergreen Terrace, Medical District, NY' );
$hours           = get_option( 'devnahian_auracare_hours', 'Outpatient: Mon–Sat 8AM–9PM' );
$maps_embed_url  = get_option( 'devnahian_auracare_maps_embed_url', '' );

// Feature Switches
$show_emergency  = get_option( 'devnahian_auracare_show_emergency_bar', '1' );
$show_map        = get_option( 'devnahian_auracare_show_map_embed', '1' );
$enable_preloader = get_option( 'devnahian_auracare_enable_preloader', '0' );
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
  .ac-input, .ac-textarea {
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
  .ac-input:focus, .ac-textarea:focus {
    outline: none;
    background: #ffffff;
    border-color: #0284c7;
    box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
  }
  .ac-input-emergency {
    border-color: #fca5a5;
    background: #fff5f5;
  }
  .ac-input-emergency:focus {
    border-color: #ef4444;
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.15);
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
</style>

<div class="ac-tab-panel">

  <!-- CARD 1: Communication Hotlines & Triage -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #e0f2fe; color: #0284c7;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Hospital Contact & Emergency Hotlines', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure public medical helplines, urgent dispatch numbers, and patient records email.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <!-- General Helpline -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_phone"><?php esc_html_e( 'General Patient Helpline', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_phone" name="devnahian_auracare_phone" value="<?php echo esc_attr( $phone ); ?>" class="ac-input" placeholder="(800) 555-0199">
        <span class="ac-hint"><?php esc_html_e( 'Main line displayed in header contact info and general inquiries.', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- Emergency Dispatch Hotline -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_emergency_phone" style="color: #b91c1c;">
          <?php esc_html_e( '🚨 24/7 Emergency Dispatch Hotline', 'devnahian-auracare' ); ?>
        </label>
        <input type="text" id="devnahian_auracare_emergency_phone" name="devnahian_auracare_emergency_phone" value="<?php echo esc_attr( $emergency_phone ); ?>" class="ac-input ac-input-emergency" placeholder="(800) 555-0190">
        <span class="ac-hint"><?php esc_html_e( 'High-priority line highlighted in red banners, footer emergency strip, and ER booking.', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- Hospital Email -->
      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_email"><?php esc_html_e( 'Official Hospital Email / Medical Records', 'devnahian-auracare' ); ?></label>
        <input type="email" id="devnahian_auracare_email" name="devnahian_auracare_email" value="<?php echo esc_attr( $email ); ?>" class="ac-input" placeholder="records@auracure-health.org">
        <span class="ac-hint"><?php esc_html_e( 'Official mailbox for patient triage, health records, and insurance inquiries.', 'devnahian-auracare' ); ?></span>
      </div>
    </div>
  </div>

  <!-- CARD 2: Physical Campus & Schedules -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #f0fdf4; color: #16a34a;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
          <circle cx="12" cy="10" r="3"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Facility Location & Clinical Schedules', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Physical campus address, outpatient operating hours, and interactive map embed URL.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <!-- Address -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_address"><?php esc_html_e( 'Hospital Campus Address', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_address" name="devnahian_auracare_address" value="<?php echo esc_attr( $address ); ?>" class="ac-input" placeholder="742 Evergreen Terrace, Medical District, NY">
        <span class="ac-hint"><?php esc_html_e( 'Full physical address shown across header, contact page, and footer.', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- Operating Hours -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_hours"><?php esc_html_e( 'Outpatient Operating Hours', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_hours" name="devnahian_auracare_hours" value="<?php echo esc_attr( $hours ); ?>" class="ac-input" placeholder="Outpatient: Mon–Sat 8AM–9PM">
        <span class="ac-hint"><?php esc_html_e( 'Visiting and consultation hours (Emergency is 24/7 by default).', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- Maps Embed URL -->
      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_maps_embed_url"><?php esc_html_e( 'Google Maps Embed iframe URL (src)', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_maps_embed_url" name="devnahian_auracare_maps_embed_url" value="<?php echo esc_attr( $maps_embed_url ); ?>" class="ac-input" placeholder="https://www.google.com/maps/embed?pb=...">
        <span class="ac-hint"><?php esc_html_e( 'Paste the embed iframe link (src attribute only) to render an interactive map on the contact page.', 'devnahian-auracare' ); ?></span>
      </div>
    </div>
  </div>

  <!-- CARD 3: Display & Experience Switches -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fef3c7; color: #d97706;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <polyline points="20 6 9 17 4 12"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'General Display & Feature Switches', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Toggle global top-bar alerts, map containers, and medical loading animations.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <!-- Top Emergency Bar Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_show_emergency_bar" value="1" <?php checked( $show_emergency, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Display Header Emergency Hotline Strip', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Shows a high-visibility red notice bar above the main navigation.', 'devnahian-auracare' ); ?></p>
      </div>

      <!-- Google Maps Display Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_show_map_embed" value="1" <?php checked( $show_map, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Display Interactive Google Map on Contact Page', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Renders the Google Maps embed iframe on contact & location sections.', 'devnahian-auracare' ); ?></p>
      </div>

      <!-- Preloader Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_enable_preloader" value="1" <?php checked( $enable_preloader, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Enable Clinical Heartbeat Preloader Animation', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Displays an ECG/pulse loader while the website loads assets.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>
  </div>

</div>