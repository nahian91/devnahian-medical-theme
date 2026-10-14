<?php
/**
 * Settings Tab: Medical Departments Configuration (Card Layout with Repeater)
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$dept_subtitle       = get_option( 'devnahian_auracare_dept_subtitle', 'Clinical Specializations' );$dept_title          = get_option( 'devnahian_auracare_dept_title', 'Specialized Medical & Surgical Departments' );
$dept_desc           = get_option( 'devnahian_auracare_dept_desc', 'State-of-the-art clinical divisions equipped with precision diagnostic laboratories, intensive care wings, and specialized attending physicians.' );$dept_columns        = get_option( 'devnahian_auracare_dept_columns', '3' );

// Feature Switches
$dept_show_chief     = get_option( 'devnahian_auracare_dept_show_chief', '1' );$dept_show_capacity  = get_option( 'devnahian_auracare_dept_show_capacity', '1' );
$dept_show_emergency = get_option( 'devnahian_auracare_dept_show_emergency', '1' );$dept_show_cta       = get_option( 'devnahian_auracare_dept_show_cta', '1' );

// Departments Repeater
$departments_list    = get_option( 'devnahian_auracare_departments_list', array() );
if ( ! is_array( $departments_list ) ) {$departments_list = array();
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

  /* Departments Repeater Styles */
  .ac-repeater-list {
    display: flex;
    flex-direction: column;
    gap: 18px;
    margin-bottom: 20px;
  }
  .ac-dept-item {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 20px;
    position: relative;
    transition: border-color 0.2s;
  }
  .ac-dept-item:hover {
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
  .ac-dept-head {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 14px;
  }
  .ac-dept-icon-picker {
    width: 68px;
    height: 68px;
    border-radius: 10px;
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
  .ac-dept-icon-picker img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .ac-dept-icon-placeholder {
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
          <rect x="3" y="3" width="7" height="7"/>
          <rect x="14" y="3" width="7" height="7"/>
          <rect x="14" y="14" width="7" height="7"/>
          <rect x="3" y="14" width="7" height="7"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Hero & Section Content', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure the title badge, main heading, and introduction text for clinical hospital departments.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_dept_subtitle"><?php esc_html_e( 'Section Subtitle / Badge', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_dept_subtitle" name="devnahian_auracare_dept_subtitle" value="<?php echo esc_attr( $dept_subtitle ); ?>" class="ac-input" placeholder="e.g. Clinical Specializations">
        <span class="ac-hint"><?php esc_html_e( 'Badge label above the main title.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_dept_title"><?php esc_html_e( 'Main Heading Title', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_dept_title" name="devnahian_auracare_dept_title" value="<?php echo esc_attr( $dept_title ); ?>" class="ac-input" placeholder="e.g. Specialized Medical & Surgical Departments">
        <span class="ac-hint"><?php esc_html_e( 'Main headline displayed over the departments grid.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_dept_desc"><?php esc_html_e( 'Description Paragraph', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_dept_desc" name="devnahian_auracare_dept_desc" rows="2" class="ac-textarea"><?php echo esc_textarea( $dept_desc ); ?></textarea>
      </div>
    </div>
  </div>

  <!-- CARD 2: Layout & Profile Feature Switches -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #f0fdf4; color: #16a34a;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Layout & Department Feature Switches', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Select column density and toggle chief of medicine, bed capacity, and emergency status visibility.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_dept_columns"><?php esc_html_e( 'Grid Columns', 'devnahian-auracare' ); ?></label>
        <select id="devnahian_auracare_dept_columns" name="devnahian_auracare_dept_columns" class="ac-select">
          <option value="2" <?php selected( $dept_columns, '2' ); ?>><?php esc_html_e( '2 Columns (Spacious Overview Cards)', 'devnahian-auracare' ); ?></option>
          <option value="3" <?php selected( $dept_columns, '3' ); ?>><?php esc_html_e( '3 Columns (Standard Balanced)', 'devnahian-auracare' ); ?></option>
          <option value="4" <?php selected( $dept_columns, '4' ); ?>><?php esc_html_e( '4 Columns (Compact Grid)', 'devnahian-auracare' ); ?></option>
        </select>
        <span class="ac-hint"><?php esc_html_e( 'Number of department cards displayed per row on desktop screens.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label"><?php esc_html_e( 'Department Card Elements', 'devnahian-auracare' ); ?></label>
        <div style="display: flex; flex-direction: column; gap: 4px;">
          <!-- Chief of Department Switch -->
          <label class="ac-switch-control">
            <input type="checkbox" name="devnahian_auracare_dept_show_chief" value="1" <?php checked( $dept_show_chief, '1' ); ?>>
            <span class="ac-switch-track"></span>
            <span class="ac-switch-label"><?php esc_html_e( 'Display Attending Chief / Medical Director', 'devnahian-auracare' ); ?></span>
          </label>

          <!-- Ward / Bed Capacity Switch -->
          <label class="ac-switch-control">
            <input type="checkbox" name="devnahian_auracare_dept_show_capacity" value="1" <?php checked( $dept_show_capacity, '1' ); ?>>
            <span class="ac-switch-track"></span>
            <span class="ac-switch-label"><?php esc_html_e( 'Display Ward / ICU Bed Capacity', 'devnahian-auracare' ); ?></span>
          </label>

          <!-- 24/7 Emergency Badge Switch -->
          <label class="ac-switch-control">
            <input type="checkbox" name="devnahian_auracare_dept_show_emergency" value="1" <?php checked( $dept_show_emergency, '1' ); ?>>
            <span class="ac-switch-track"></span>
            <span class="ac-switch-label"><?php esc_html_e( 'Display 24/7 Emergency Triage Availability Badge', 'devnahian-auracare' ); ?></span>
          </label>

          <!-- Book Appointment Button Switch -->
          <label class="ac-switch-control">
            <input type="checkbox" name="devnahian_auracare_dept_show_cta" value="1" <?php checked( $dept_show_cta, '1' ); ?>>
            <span class="ac-switch-track"></span>
            <span class="ac-switch-label"><?php esc_html_e( 'Display "Consult Department" Action Link', 'devnahian-auracare' ); ?></span>
          </label>
        </div>
      </div>
    </div>
  </div>

  <!-- CARD 3: Departments Repeater -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fef3c7; color: #d97706;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
          <polyline points="17 21 17 13 7 13 7 21"/>
          <polyline points="7 3 7 8 15 8"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Clinical Departments (Repeater)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Upload department icons/photos, assign medical chiefs, capacity numbers, and direct consultation links.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-repeater-list" id="departmentsRepeaterContainer">
      <?php if ( ! empty( $departments_list ) ) : ?>
        <?php foreach ( $departments_list as $index =>$item ) : ?>
          <?php
            $icon         = isset( $item['icon'] ) ?$item['icon'] : '';
            $title        = isset($item['title'] ) ? $item['title'] : '';$chief        = isset( $item['chief'] ) ?$item['chief'] : '';
            $capacity     = isset($item['capacity'] ) ? $item['capacity'] : '';$phone        = isset( $item['phone'] ) ?$item['phone'] : '';
            $desc         = isset($item['desc'] ) ? $item['desc'] : '';$booking_url  = isset( $item['booking_url'] ) ?$item['booking_url'] : '';
            $is_emergency = ! empty( $item['is_emergency'] );
          ?>
          <div class="ac-dept-item" data-index="<?php echo esc_attr( $index ); ?>">
            <div class="ac-item-topbar">
              <span class="ac-item-handle">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <rect x="3" y="3" width="7" height="7"/>
                  <rect x="14" y="3" width="7" height="7"/>
                  <rect x="14" y="14" width="7" height="7"/>
                  <rect x="3" y="14" width="7" height="7"/>
                </svg>
                <?php esc_html_e( 'Department Division', 'devnahian-auracare' ); ?> #<span class="ac-row-num"><?php echo esc_html( $index + 1 ); ?></span>
              </span>
              <button type="button" class="ac-btn-remove ac-remove-dept">&times; <?php esc_html_e( 'Remove Department', 'devnahian-auracare' ); ?></button>
            </div>

            <div class="ac-dept-head">
              <!-- Icon / Image Picker -->
              <div class="ac-dept-icon-picker ac-upload-dept-icon" title="<?php esc_attr_e( 'Upload Department Icon / Image', 'devnahian-auracare' ); ?>">
                <input type="hidden" name="devnahian_auracare_departments_list[<?php echo esc_attr( $index ); ?>][icon]" value="<?php echo esc_url( $icon ); ?>" class="ac-dept-icon-input">
                <?php if ( ! empty( $icon ) ) : ?>
                  <img src="<?php echo esc_url( $icon ); ?>" alt="">
                <?php else : ?>
                  <span class="ac-dept-icon-placeholder"><?php esc_html_e( '+ Icon', 'devnahian-auracare' ); ?></span>
                <?php endif; ?>
              </div>

              <!-- Top Meta Row -->
              <div class="ac-meta-fields">
                <div class="ac-grid-3">
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Department Name', 'devnahian-auracare' ); ?></label>
                    <input type="text" name="devnahian_auracare_departments_list[<?php echo esc_attr( $index ); ?>][title]" value="<?php echo esc_attr( $title ); ?>" class="ac-input" placeholder="e.g. Cardiology & Vascular Center">
                  </div>
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Chief / Medical Director', 'devnahian-auracare' ); ?></label>
                    <input type="text" name="devnahian_auracare_departments_list[<?php echo esc_attr( $index ); ?>][chief]" value="<?php echo esc_attr( $chief ); ?>" class="ac-input" placeholder="e.g. Dr. Sarah Jenkins, MD">
                  </div>
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Bed / Ward Capacity', 'devnahian-auracare' ); ?></label>
                    <input type="text" name="devnahian_auracare_departments_list[<?php echo esc_attr( $index ); ?>][capacity]" value="<?php echo esc_attr( $capacity ); ?>" class="ac-input" placeholder="e.g. 48 Inpatient / 12 ICU">
                  </div>
                </div>
              </div>
            </div>

            <!-- Hotline, Link & Emergency Tag Row -->
            <div class="ac-grid-3" style="margin-bottom: 12px;">
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Dedicated Hotline / Extension', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_departments_list[<?php echo esc_attr( $index ); ?>][phone]" value="<?php echo esc_attr( $phone ); ?>" class="ac-input" placeholder="e.g. (800) 555-0199 Ext. 402">
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Department URL / Booking Link', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_departments_list[<?php echo esc_attr( $index ); ?>][booking_url]" value="<?php echo esc_attr( $booking_url ); ?>" class="ac-input" placeholder="e.g. /appointment?dept=cardio">
              </div>
              <div class="ac-field-group" style="justify-content: flex-end;">
                <label class="ac-switch-control">
                  <input type="checkbox" name="devnahian_auracare_departments_list[<?php echo esc_attr( $index ); ?>][is_emergency]" value="1" <?php checked( $is_emergency, true ); ?>>
                  <span class="ac-switch-track"></span>
                  <span class="ac-switch-label"><?php esc_html_e( '24/7 Emergency Available', 'devnahian-auracare' ); ?></span>
                </label>
              </div>
            </div>

            <!-- Short Description -->
            <div class="ac-field-group">
              <label class="ac-label"><?php esc_html_e( 'Department Overview / Clinical Scope', 'devnahian-auracare' ); ?></label>
              <textarea name="devnahian_auracare_departments_list[<?php echo esc_attr( $index ); ?>][desc]" rows="2" class="ac-textarea" placeholder="Comprehensive inpatient and outpatient cardiac interventions, diagnostics, and catheterization labs..."><?php echo esc_textarea( $desc ); ?></textarea>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <button type="button" class="ac-btn-add" id="acAddDept">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      <?php esc_html_e( 'Add Clinical Department', 'devnahian-auracare' ); ?>
    </button>
  </div>

</div>

<!-- JavaScript for Repeater Rows and Media Library Picker -->
<script>
jQuery(document).ready(function($) {

  function updateRowNumbers() {
    $('#departmentsRepeaterContainer .ac-dept-item').each(function(i) {
      $(this).find('.ac-row-num').text(i + 1);
    });
  }

  // Add Department Item
  $('#acAddDept').on('click', function(e) {
    e.preventDefault();
    let index = Date.now();

    let rowHtml = `
      <div class="ac-dept-item" data-index="${index}">
        <div class="ac-item-topbar">
          <span class="ac-item-handle">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <rect x="3" y="3" width="7" height="7"/>
              <rect x="14" y="3" width="7" height="7"/>
              <rect x="14" y="14" width="7" height="7"/>
              <rect x="3" y="14" width="7" height="7"/>
            </svg>
            <?php esc_html_e( 'Department Division', 'devnahian-auracare' ); ?> #<span class="ac-row-num"></span>
          </span>
          <button type="button" class="ac-btn-remove ac-remove-dept">&times; <?php esc_html_e( 'Remove Department', 'devnahian-auracare' ); ?></button>
        </div>

        <div class="ac-dept-head">
          <div class="ac-dept-icon-picker ac-upload-dept-icon" title="<?php esc_attr_e( 'Upload Department Icon / Image', 'devnahian-auracare' ); ?>">
            <input type="hidden" name="devnahian_auracare_departments_list[${index}][icon]" value="" class="ac-dept-icon-input">
            <span class="ac-dept-icon-placeholder">+ Icon</span>
          </div>

          <div class="ac-meta-fields">
            <div class="ac-grid-3">
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Department Name', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_departments_list[${index}][title]" value="" class="ac-input" placeholder="e.g. Cardiology & Vascular Center">
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Chief / Medical Director', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_departments_list[${index}][chief]" value="" class="ac-input" placeholder="e.g. Dr. Sarah Jenkins, MD">
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Bed / Ward Capacity', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_departments_list[${index}][capacity]" value="" class="ac-input" placeholder="e.g. 48 Inpatient / 12 ICU">
              </div>
            </div>
          </div>
        </div>

        <div class="ac-grid-3" style="margin-bottom: 12px;">
          <div class="ac-field-group">
            <label class="ac-label"><?php esc_html_e( 'Dedicated Hotline / Extension', 'devnahian-auracare' ); ?></label>
            <input type="text" name="devnahian_auracare_departments_list[${index}][phone]" value="" class="ac-input" placeholder="e.g. (800) 555-0199 Ext. 402">
          </div>
          <div class="ac-field-group">
            <label class="ac-label"><?php esc_html_e( 'Department URL / Booking Link', 'devnahian-auracare' ); ?></label>
            <input type="text" name="devnahian_auracare_departments_list[${index}][booking_url]" value="" class="ac-input" placeholder="e.g. /appointment?dept=cardio">
          </div>
          <div class="ac-field-group" style="justify-content: flex-end;">
            <label class="ac-switch-control">
              <input type="checkbox" name="devnahian_auracare_departments_list[${index}][is_emergency]" value="1" checked>
              <span class="ac-switch-track"></span>
              <span class="ac-switch-label"><?php esc_html_e( '24/7 Emergency Available', 'devnahian-auracare' ); ?></span>
            </label>
          </div>
        </div>

        <div class="ac-field-group">
          <label class="ac-label"><?php esc_html_e( 'Department Overview / Clinical Scope', 'devnahian-auracare' ); ?></label>
          <textarea name="devnahian_auracare_departments_list[${index}][desc]" rows="2" class="ac-textarea" placeholder="Comprehensive inpatient and outpatient cardiac interventions, diagnostics, and catheterization labs..."></textarea>
        </div>
      </div>
    `;

    $('#departmentsRepeaterContainer').append(rowHtml);
    updateRowNumbers();
  });

  // Remove Department Item
  $(document).on('click', '.ac-remove-dept', function() {$(this).closest('.ac-dept-item').remove();
    updateRowNumbers();
  });

  // Media Library Department Icon Picker
  $(document).on('click', '.ac-upload-dept-icon', function(e) {
    e.preventDefault();
    let container = $(this);
    let inputField = container.find('.ac-dept-icon-input');

    let mediaFrame = wp.media({
      title: '<?php esc_html_e( 'Select Department Icon or Photo', 'devnahian-auracare' ); ?>',
      button: { text: '<?php esc_html_e( 'Use This Asset', 'devnahian-auracare' ); ?>' },
      multiple: false,
      library: { type: 'image' }
    });

    mediaFrame.on('select', function() {
      let attachment = mediaFrame.state().get('selection').first().toJSON();
      inputField.val(attachment.url);
      container.find('img').remove();
      container.find('.ac-dept-icon-placeholder').remove();
      container.append(`<img src="${attachment.url}" alt="">`);
    });

    mediaFrame.open();
  });

});
</script>