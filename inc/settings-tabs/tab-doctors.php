<?php
/**
 * Settings Tab: Doctors & Medical Specialists Configuration (Card Layout with Repeater)
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$doctors_subtitle     = get_option( 'devnahian_auracare_doctors_subtitle', 'Certified Medical Staff' );$doctors_title        = get_option( 'devnahian_auracare_doctors_title', 'Meet Our Attending Physicians & Surgeons' );
$doctors_desc         = get_option( 'devnahian_auracare_doctors_desc', 'Our board-certified clinicians and medical department chiefs bring decades of surgical and clinical expertise to your patient care.' );$doctors_columns      = get_option( 'devnahian_auracare_doctors_columns', '3' );

// Feature Switches
$doctors_show_hours   = get_option( 'devnahian_auracare_doctors_show_hours', '1' );
$doctors_show_degrees = get_option( 'devnahian_auracare_doctors_show_degrees', '1' );$doctors_show_book    = get_option( 'devnahian_auracare_doctors_show_book_btn', '1' );

// Doctors Repeater
$doctors_list = get_option( 'devnahian_auracare_doctors_list', array() );
if ( ! is_array( $doctors_list ) ) {$doctors_list = array();
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

  /* Doctors Repeater Styles */
  .ac-repeater-list {
    display: flex;
    flex-direction: column;
    gap: 18px;
    margin-bottom: 20px;
  }
  .ac-doctor-item {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 20px;
    position: relative;
    transition: border-color 0.2s;
  }
  .ac-doctor-item:hover {
    border-color: #cbd5e1;
  }
  .ac-item-topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 14px;
    padding-bottom: 10px;
    border-bottom: 1px solid #e2e8f0;
  }
  .ac-item-handle {
    font-size: 12px;
    font-weight: 700;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  .ac-doctor-head {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 14px;
  }
  .ac-doctor-avatar-picker {
    width: 72px;
    height: 72px;
    border-radius: 50%;
    background: #e2e8f0;
    border: 2px dashed #94a3b8;
    cursor: pointer;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden;
  }
  .ac-doctor-avatar-picker img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .ac-doctor-avatar-placeholder {
    font-size: 10px;
    font-weight: 700;
    color: #64748b;
    line-height: 1.1;
    text-transform: uppercase;
  }
  .ac-meta-fields {
    flex-grow: 1;
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

  <!-- CARD 1: Hero & Intro Header -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #e0f2fe; color: #0284c7;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
          <circle cx="8.5" cy="7" r="4"/>
          <line x1="20" y1="8" x2="20" y2="14"/>
          <line x1="23" y1="11" x2="17" y2="11"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Hero & Section Content', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure the title badge, main heading, and intro description text for the medical team directory.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_doctors_subtitle"><?php esc_html_e( 'Section Subtitle / Badge', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_doctors_subtitle" name="devnahian_auracare_doctors_subtitle" value="<?php echo esc_attr( $doctors_subtitle ); ?>" class="ac-input" placeholder="e.g. Certified Medical Staff">
        <span class="ac-hint"><?php esc_html_e( 'Badge label above the main title.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_doctors_title"><?php esc_html_e( 'Main Heading Title', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_doctors_title" name="devnahian_auracare_doctors_title" value="<?php echo esc_attr( $doctors_title ); ?>" class="ac-input" placeholder="e.g. Meet Our Attending Physicians & Surgeons">
        <span class="ac-hint"><?php esc_html_e( 'Main headline displayed over the doctors directory.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_doctors_desc"><?php esc_html_e( 'Description Paragraph', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_doctors_desc" name="devnahian_auracare_doctors_desc" rows="2" class="ac-textarea"><?php echo esc_textarea( $doctors_desc ); ?></textarea>
      </div>
    </div>
  </div>

  <!-- CARD 2: Layout & Profile Feature Switches -->
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
        <h3><?php esc_html_e( 'Directory Grid & Card Feature Switches', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Select column density and toggle consulting hours, degrees, and appointment button visibility.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_doctors_columns"><?php esc_html_e( 'Grid Columns', 'devnahian-auracare' ); ?></label>
        <select id="devnahian_auracare_doctors_columns" name="devnahian_auracare_doctors_columns" class="ac-select">
          <option value="2" <?php selected( $doctors_columns, '2' ); ?>><?php esc_html_e( '2 Columns (Large Bio Cards)', 'devnahian-auracare' ); ?></option>
          <option value="3" <?php selected( $doctors_columns, '3' ); ?>><?php esc_html_e( '3 Columns (Standard Directory)', 'devnahian-auracare' ); ?></option>
          <option value="4" <?php selected( $doctors_columns, '4' ); ?>><?php esc_html_e( '4 Columns (Compact Grid)', 'devnahian-auracare' ); ?></option>
        </select>
        <span class="ac-hint"><?php esc_html_e( 'Number of doctor profile cards displayed per row on desktop screens.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label"><?php esc_html_e( 'Profile Card Elements', 'devnahian-auracare' ); ?></label>
        <div style="display: flex; flex-direction: column; gap: 4px;">
          <!-- Degrees / Qualifications Switch -->
          <label class="ac-switch-control">
            <input type="checkbox" name="devnahian_auracare_doctors_show_degrees" value="1" <?php checked( $doctors_show_degrees, '1' ); ?>>
            <span class="ac-switch-track"></span>
            <span class="ac-switch-label"><?php esc_html_e( 'Display Academic Qualifications (e.g. MD, FACS)', 'devnahian-auracare' ); ?></span>
          </label>

          <!-- Consulting Hours Switch -->
          <label class="ac-switch-control">
            <input type="checkbox" name="devnahian_auracare_doctors_show_hours" value="1" <?php checked( $doctors_show_hours, '1' ); ?>>
            <span class="ac-switch-track"></span>
            <span class="ac-switch-label"><?php esc_html_e( 'Display Available Consultation Hours / Days', 'devnahian-auracare' ); ?></span>
          </label>

          <!-- Book Appointment Button Switch -->
          <label class="ac-switch-control">
            <input type="checkbox" name="devnahian_auracare_doctors_show_book_btn" value="1" <?php checked( $doctors_show_book, '1' ); ?>>
            <span class="ac-switch-track"></span>
            <span class="ac-switch-label"><?php esc_html_e( 'Display "Book Appointment" Action Button', 'devnahian-auracare' ); ?></span>
          </label>
        </div>
      </div>
    </div>
  </div>

  <!-- CARD 3: Doctors Repeater -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fef3c7; color: #d97706;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="12" cy="7" r="4"/>
          <path d="M5.5 21a8.5 8.5 0 0 1 13 0"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Physicians & Specialists (Repeater)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Upload portrait photos, add credentials, department affiliations, consulting slots, and booking links.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-repeater-list" id="doctorsRepeaterContainer">
      <?php if ( ! empty( $doctors_list ) ) : ?>
        <?php foreach ( $doctors_list as $index =>$item ) : ?>
          <?php
            $photo       = isset( $item['photo'] ) ?$item['photo'] : '';
            $name        = isset($item['name'] ) ? $item['name'] : '';$specialty   = isset( $item['specialty'] ) ?$item['specialty'] : '';
            $degrees     = isset($item['degrees'] ) ? $item['degrees'] : '';$schedule    = isset( $item['schedule'] ) ?$item['schedule'] : '';
            $bio         = isset($item['bio'] ) ? $item['bio'] : '';$booking_url = isset( $item['booking_url'] ) ?$item['booking_url'] : '';
          ?>
          <div class="ac-doctor-item" data-index="<?php echo esc_attr( $index ); ?>">
            <div class="ac-item-topbar">
              <span class="ac-item-handle">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                  <circle cx="8.5" cy="7" r="4"/>
                </svg>
                <?php esc_html_e( 'Physician Profile', 'devnahian-auracare' ); ?> #<span class="ac-row-num"><?php echo esc_html( $index + 1 ); ?></span>
              </span>
              <button type="button" class="ac-btn-remove ac-remove-doctor">&times; <?php esc_html_e( 'Remove Doctor', 'devnahian-auracare' ); ?></button>
            </div>

            <div class="ac-doctor-head">
              <!-- Portrait Photo Picker -->
              <div class="ac-doctor-avatar-picker ac-upload-doctor-photo" title="<?php esc_attr_e( 'Upload Doctor Photo', 'devnahian-auracare' ); ?>">
                <input type="hidden" name="devnahian_auracare_doctors_list[<?php echo esc_attr( $index ); ?>][photo]" value="<?php echo esc_url( $photo ); ?>" class="ac-doctor-photo-input">
                <?php if ( ! empty( $photo ) ) : ?>
                  <img src="<?php echo esc_url( $photo ); ?>" alt="">
                <?php else : ?>
                  <span class="ac-doctor-avatar-placeholder"><?php esc_html_e( '+ Photo', 'devnahian-auracare' ); ?></span>
                <?php endif; ?>
              </div>

              <!-- Top Meta Row -->
              <div class="ac-meta-fields">
                <div class="ac-grid-3">
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Full Name & Title', 'devnahian-auracare' ); ?></label>
                    <input type="text" name="devnahian_auracare_doctors_list[<?php echo esc_attr( $index ); ?>][name]" value="<?php echo esc_attr( $name ); ?>" class="ac-input" placeholder="e.g. Dr. Sarah Jenkins, MD">
                  </div>
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Specialty / Department', 'devnahian-auracare' ); ?></label>
                    <input type="text" name="devnahian_auracare_doctors_list[<?php echo esc_attr( $index ); ?>][specialty]" value="<?php echo esc_attr( $specialty ); ?>" class="ac-input" placeholder="e.g. Chief of Cardiology">
                  </div>
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Qualifications / Degrees', 'devnahian-auracare' ); ?></label>
                    <input type="text" name="devnahian_auracare_doctors_list[<?php echo esc_attr( $index ); ?>][degrees]" value="<?php echo esc_attr( $degrees ); ?>" class="ac-input" placeholder="e.g. MBBS, FCPS, FACC">
                  </div>
                </div>
              </div>
            </div>

            <!-- Schedule & Booking URL Row -->
            <div class="ac-grid-2" style="margin-bottom: 12px;">
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Consulting Hours / Days', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_doctors_list[<?php echo esc_attr( $index ); ?>][schedule]" value="<?php echo esc_attr( $schedule ); ?>" class="ac-input" placeholder="e.g. Mon–Thu: 10:00 AM – 3:00 PM">
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Direct Appointment / Profile URL', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_doctors_list[<?php echo esc_attr( $index ); ?>][booking_url]" value="<?php echo esc_attr( $booking_url ); ?>" class="ac-input" placeholder="e.g. /appointment?doctor=sarah-jenkins">
                <span class="ac-hint"><?php esc_html_e( 'Leave empty to trigger the default appointment booking modal.', 'devnahian-auracare' ); ?></span>
              </div>
            </div>

            <!-- Short Bio -->
            <div class="ac-field-group">
              <label class="ac-label"><?php esc_html_e( 'Short Clinical Bio / Experience Summary', 'devnahian-auracare' ); ?></label>
              <textarea name="devnahian_auracare_doctors_list[<?php echo esc_attr( $index ); ?>][bio]" rows="2" class="ac-textarea" placeholder="Over 15 years leading minimally invasive cardiac surgical procedures..."><?php echo esc_textarea( $bio ); ?></textarea>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <button type="button" class="ac-btn-add" id="acAddDoctor">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      <?php esc_html_e( 'Add Physician / Specialist', 'devnahian-auracare' ); ?>
    </button>
  </div>

</div>

<!-- JavaScript for Repeater Rows and Media Library Picker -->
<script>
jQuery(document).ready(function($) {

  function updateRowNumbers() {
    $('#doctorsRepeaterContainer .ac-doctor-item').each(function(i) {
      $(this).find('.ac-row-num').text(i + 1);
    });
  }

  // Add Doctor Item
  $('#acAddDoctor').on('click', function(e) {
    e.preventDefault();
    let index = Date.now();

    let rowHtml = `
      <div class="ac-doctor-item" data-index="${index}">
        <div class="ac-item-topbar">
          <span class="ac-item-handle">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="8.5" cy="7" r="4"/>
            </svg>
            <?php esc_html_e( 'Physician Profile', 'devnahian-auracare' ); ?> #<span class="ac-row-num"></span>
          </span>
          <button type="button" class="ac-btn-remove ac-remove-doctor">&times; <?php esc_html_e( 'Remove Doctor', 'devnahian-auracare' ); ?></button>
        </div>

        <div class="ac-doctor-head">
          <div class="ac-doctor-avatar-picker ac-upload-doctor-photo" title="<?php esc_attr_e( 'Upload Doctor Photo', 'devnahian-auracare' ); ?>">
            <input type="hidden" name="devnahian_auracare_doctors_list[${index}][photo]" value="" class="ac-doctor-photo-input">
            <span class="ac-doctor-avatar-placeholder">+ Photo</span>
          </div>

          <div class="ac-meta-fields">
            <div class="ac-grid-3">
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Full Name & Title', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_doctors_list[${index}][name]" value="" class="ac-input" placeholder="e.g. Dr. Sarah Jenkins, MD">
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Specialty / Department', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_doctors_list[${index}][specialty]" value="" class="ac-input" placeholder="e.g. Chief of Cardiology">
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Qualifications / Degrees', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_doctors_list[${index}][degrees]" value="" class="ac-input" placeholder="e.g. MBBS, FCPS, FACC">
              </div>
            </div>
          </div>
        </div>

        <div class="ac-grid-2" style="margin-bottom: 12px;">
          <div class="ac-field-group">
            <label class="ac-label"><?php esc_html_e( 'Consulting Hours / Days', 'devnahian-auracare' ); ?></label>
            <input type="text" name="devnahian_auracare_doctors_list[${index}][schedule]" value="" class="ac-input" placeholder="e.g. Mon–Thu: 10:00 AM – 3:00 PM">
          </div>
          <div class="ac-field-group">
            <label class="ac-label"><?php esc_html_e( 'Direct Appointment / Profile URL', 'devnahian-auracare' ); ?></label>
            <input type="text" name="devnahian_auracare_doctors_list[${index}][booking_url]" value="" class="ac-input" placeholder="e.g. /appointment?doctor=sarah-jenkins">
            <span class="ac-hint"><?php esc_html_e( 'Leave empty to trigger the default appointment booking modal.', 'devnahian-auracare' ); ?></span>
          </div>
        </div>

        <div class="ac-field-group">
          <label class="ac-label"><?php esc_html_e( 'Short Clinical Bio / Experience Summary', 'devnahian-auracare' ); ?></label>
          <textarea name="devnahian_auracare_doctors_list[${index}][bio]" rows="2" class="ac-textarea" placeholder="Over 15 years leading minimally invasive cardiac surgical procedures..."></textarea>
        </div>
      </div>
    `;

    $('#doctorsRepeaterContainer').append(rowHtml);
    updateRowNumbers();
  });

  // Remove Doctor Item
  $(document).on('click', '.ac-remove-doctor', function() {$(this).closest('.ac-doctor-item').remove();
    updateRowNumbers();
  });

  // Media Library Doctor Portrait Picker
  $(document).on('click', '.ac-upload-doctor-photo', function(e) {
    e.preventDefault();
    let container = $(this);
    let inputField = container.find('.ac-doctor-photo-input');

    let mediaFrame = wp.media({
      title: '<?php esc_html_e( 'Select Physician Portrait Photo', 'devnahian-auracare' ); ?>',
      button: { text: '<?php esc_html_e( 'Use This Photo', 'devnahian-auracare' ); ?>' },
      multiple: false,
      library: { type: 'image' }
    });

    mediaFrame.on('select', function() {
      let attachment = mediaFrame.state().get('selection').first().toJSON();
      inputField.val(attachment.url);
      container.find('img').remove();
      container.find('.ac-doctor-avatar-placeholder').remove();
      container.append(`<img src="${attachment.url}" alt="">`);
    });

    mediaFrame.open();
  });

});
</script>