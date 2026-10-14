<?php
/**
 * Settings Tab: Appointment Booking Page Configuration
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$appt_subtitle         = get_option( 'devnahian_auracare_appt_subtitle', 'Fast-Track Clinical Booking' );
$appt_title            = get_option( 'devnahian_auracare_appt_title', 'Schedule a Specialist Consultation' );
$appt_desc             = get_option( 'devnahian_auracare_appt_desc', 'Select your preferred clinical department, attending physician, and arrival slot. Confirmed appointments receive an instant digital hospital pass.' );
$appt_notice           = get_option( 'devnahian_auracare_appt_notice', 'For life-threatening conditions, please dial 911 or head directly to the Emergency Room.' );

// Feature Switches
$enable_insurance      = get_option( 'devnahian_auracare_appt_enable_insurance', '1' );
$enable_telehealth     = get_option( 'devnahian_auracare_appt_enable_telehealth', '1' );
$enable_auto_pass      = get_option( 'devnahian_auracare_appt_enable_auto_pass', '1' );
$require_dob           = get_option( 'devnahian_auracare_appt_require_dob', '1' );

// Fee Schedules
$fee_clinic            = get_option( 'devnahian_auracare_appt_fee_clinic', '180' );
$fee_video             = get_option( 'devnahian_auracare_appt_fee_video', '120' );
$fee_scan              = get_option( 'devnahian_auracare_appt_fee_scan', '240' );
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
  .ac-hint {
    font-size: 12px;
    color: #94a3b8;
  }

  /* Toggle Switch Styles */
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

  <!-- CARD 1: Hero & Introduction Content -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #e0f2fe; color: #0284c7;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
          <line x1="16" y1="2" x2="16" y2="6"/>
          <line x1="8" y1="2" x2="8" y2="6"/>
          <line x1="3" y1="10" x2="21" y2="10"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Hero & Section Content', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure the title badge, main heading, intake description, and emergency advisory notice.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_appt_subtitle"><?php esc_html_e( 'Section Subtitle / Badge', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_appt_subtitle" name="devnahian_auracare_appt_subtitle" value="<?php echo esc_attr( $appt_subtitle ); ?>" class="ac-input" placeholder="e.g. Fast-Track Clinical Booking">
        <span class="ac-hint"><?php esc_html_e( 'Badge label above the main title.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_appt_title"><?php esc_html_e( 'Main Heading Title', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_appt_title" name="devnahian_auracare_appt_title" value="<?php echo esc_attr( $appt_title ); ?>" class="ac-input" placeholder="e.g. Schedule a Specialist Consultation">
        <span class="ac-hint"><?php esc_html_e( 'Headline above the scheduling form.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_appt_desc"><?php esc_html_e( 'Booking Description', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_appt_desc" name="devnahian_auracare_appt_desc" rows="2" class="ac-textarea"><?php echo esc_textarea( $appt_desc ); ?></textarea>
      </div>

      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_appt_notice"><?php esc_html_e( 'Emergency / Disclaimer Banner Notice', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_appt_notice" name="devnahian_auracare_appt_notice" rows="2" class="ac-textarea"><?php echo esc_textarea( $appt_notice ); ?></textarea>
        <span class="ac-hint"><?php esc_html_e( 'Displayed in an alert box above or below the intake form for urgent triage instructions.', 'devnahian-auracare' ); ?></span>
      </div>
    </div>
  </div>

  <!-- CARD 2: Form Workflow & Intake Switches -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #f0fdf4; color: #16a34a;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
          <polyline points="22 4 12 14.01 9 11.01"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Intake Form Workflow & Feature Switches', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Toggle patient fields, insurance carrier dropdowns, and automated notifications.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <!-- Insurance Selector Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_appt_enable_insurance" value="1" <?php checked( $enable_insurance, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Enable Health Insurance Carrier Dropdown', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Allows patients to select their insurance provider or choose self-pay.', 'devnahian-auracare' ); ?></p>
      </div>

      <!-- Telehealth Format Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_appt_enable_telehealth" value="1" <?php checked( $enable_telehealth, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Offer Telehealth Video Consultation Option', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Adds remote video call format alongside in-clinic appointments.', 'devnahian-auracare' ); ?></p>
      </div>

      <!-- Automated Pass Email Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_appt_enable_auto_pass" value="1" <?php checked( $enable_auto_pass, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Automated Digital Hospital Pass Emails', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Instantly emails the patient a formatted PDF/HTML appointment confirmation pass.', 'devnahian-auracare' ); ?></p>
      </div>

      <!-- Mandatory DOB Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_appt_require_dob" value="1" <?php checked( $require_dob, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Require Date of Birth (DOB) Field', 'devnahian-auracare' ); ?></span>
        </label>
        <p class="ac-hint" style="margin-left: 56px;"><?php esc_html_e( 'Marks the patient birth date field as mandatory before booking submission.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>
  </div>

  <!-- CARD 3: Consultation Fee Schedules -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fef3c7; color: #d97706;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <line x1="12" y1="1" x2="12" y2="23"/>
          <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Default Consultation Fee Schedules ($)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Base pricing displayed on the booking modal and booking confirmation receipts.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-3">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_appt_fee_clinic"><?php esc_html_e( 'In-Clinic Visit Fee ($)', 'devnahian-auracare' ); ?></label>
        <input type="number" id="devnahian_auracare_appt_fee_clinic" name="devnahian_auracare_appt_fee_clinic" value="<?php echo esc_attr( $fee_clinic ); ?>" class="ac-input" placeholder="180">
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_appt_fee_video"><?php esc_html_e( 'Telehealth Video Fee ($)', 'devnahian-auracare' ); ?></label>
        <input type="number" id="devnahian_auracare_appt_fee_video" name="devnahian_auracare_appt_fee_video" value="<?php echo esc_attr( $fee_video ); ?>" class="ac-input" placeholder="120">
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_appt_fee_scan"><?php esc_html_e( 'Diagnostic Scan Fee ($)', 'devnahian-auracare' ); ?></label>
        <input type="number" id="devnahian_auracare_appt_fee_scan" name="devnahian_auracare_appt_fee_scan" value="<?php echo esc_attr( $fee_scan ); ?>" class="ac-input" placeholder="240">
      </div>
    </div>
  </div>

</div>