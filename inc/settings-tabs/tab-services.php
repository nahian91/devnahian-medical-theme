<?php
/**
 * Settings Tab: Clinical Services Page Configuration (Card Layout with Repeater)
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$services_subtitle   = get_option( 'devnahian_auracare_services_subtitle', 'Specialized Medical Care' );$services_title      = get_option( 'devnahian_auracare_services_title', 'Comprehensive Healthcare & Clinical Services' );
$services_desc       = get_option( 'devnahian_auracare_services_desc', 'Explore our advanced clinical treatments, surgical interventions, outpatient programs, and diagnostic services.' );$services_columns    = get_option( 'devnahian_auracare_services_columns', '3' );

// Feature Switches
$services_show_price = get_option( 'devnahian_auracare_services_show_price', '1' );
$services_show_cta   = get_option( 'devnahian_auracare_services_show_cta', '1' );$services_show_badge = get_option( 'devnahian_auracare_services_show_badge', '1' );

// Services Repeater
$services_list = get_option( 'devnahian_auracare_services_list', array() );
if ( ! is_array( $services_list ) ) {$services_list = array();
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

  /* Services Repeater Items */
  .ac-repeater-list {
    display: flex;
    flex-direction: column;
    gap: 18px;
    margin-bottom: 20px;
  }
  .ac-service-item {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 20px;
    position: relative;
    transition: border-color 0.2s;
  }
  .ac-service-item:hover {
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
  .ac-service-head {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 14px;
  }
  .ac-service-icon-picker {
    width: 64px;
    height: 64px;
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
  .ac-service-icon-picker img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .ac-service-icon-placeholder {
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
          <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Hero & Section Content', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure the title badge, main heading, and intro description text for clinical services.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_services_subtitle"><?php esc_html_e( 'Section Subtitle / Badge', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_services_subtitle" name="devnahian_auracare_services_subtitle" value="<?php echo esc_attr( $services_subtitle ); ?>" class="ac-input" placeholder="e.g. Specialized Medical Care">
        <span class="ac-hint"><?php esc_html_e( 'Badge label above the main title.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_services_title"><?php esc_html_e( 'Main Heading Title', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_services_title" name="devnahian_auracare_services_title" value="<?php echo esc_attr( $services_title ); ?>" class="ac-input" placeholder="e.g. Comprehensive Healthcare & Clinical Services">
        <span class="ac-hint"><?php esc_html_e( 'Primary headline above the services grid.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_services_desc"><?php esc_html_e( 'Description Paragraph', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_services_desc" name="devnahian_auracare_services_desc" rows="2" class="ac-textarea"><?php echo esc_textarea( $services_desc ); ?></textarea>
      </div>
    </div>
  </div>

  <!-- CARD 2: Layout & Feature Switches -->
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
        <h3><?php esc_html_e( 'Layout & Card Feature Switches', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Select grid columns and toggle pricing tags, appointment buttons, and badge visibility.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_services_columns"><?php esc_html_e( 'Grid Columns', 'devnahian-auracare' ); ?></label>
        <select id="devnahian_auracare_services_columns" name="devnahian_auracare_services_columns" class="ac-select">
          <option value="2" <?php selected( $services_columns, '2' ); ?>><?php esc_html_e( '2 Columns (Detailed Cards)', 'devnahian-auracare' ); ?></option>
          <option value="3" <?php selected( $services_columns, '3' ); ?>><?php esc_html_e( '3 Columns (Standard Balanced)', 'devnahian-auracare' ); ?></option>
          <option value="4" <?php selected( $services_columns, '4' ); ?>><?php esc_html_e( '4 Columns (Compact Grid)', 'devnahian-auracare' ); ?></option>
        </select>
        <span class="ac-hint"><?php esc_html_e( 'Number of cards displayed per row on desktop screens.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label"><?php esc_html_e( 'Card Feature Switches', 'devnahian-auracare' ); ?></label>
        <div style="display: flex; flex-direction: column; gap: 4px;">
          <!-- Price Badge Switch -->
          <label class="ac-switch-control">
            <input type="checkbox" name="devnahian_auracare_services_show_price" value="1" <?php checked( $services_show_price, '1' ); ?>>
            <span class="ac-switch-track"></span>
            <span class="ac-switch-label"><?php esc_html_e( 'Display Starting Price / Consultation Fee', 'devnahian-auracare' ); ?></span>
          </label>

          <!-- Book Appointment Button Switch -->
          <label class="ac-switch-control">
            <input type="checkbox" name="devnahian_auracare_services_show_cta" value="1" <?php checked( $services_show_cta, '1' ); ?>>
            <span class="ac-switch-track"></span>
            <span class="ac-switch-label"><?php esc_html_e( 'Display "Book Service" Action Button', 'devnahian-auracare' ); ?></span>
          </label>

          <!-- Department Badge Switch -->
          <label class="ac-switch-control">
            <input type="checkbox" name="devnahian_auracare_services_show_badge" value="1" <?php checked( $services_show_badge, '1' ); ?>>
            <span class="ac-switch-track"></span>
            <span class="ac-switch-label"><?php esc_html_e( 'Display Department Taxonomy Badge', 'devnahian-auracare' ); ?></span>
          </label>
        </div>
      </div>
    </div>
  </div>

  <!-- CARD 3: Clinical Services Repeater -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fef3c7; color: #d97706;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Clinical Services (Repeater)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Manage clinical services with dedicated icons, department tags, pricing, and descriptions.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-repeater-list" id="servicesRepeaterContainer">
      <?php if ( ! empty( $services_list ) ) : ?>
        <?php foreach ( $services_list as $index =>$item ) : ?>
          <?php
            $icon  = isset($item['icon'] ) ? $item['icon'] : '';$title = isset( $item['title'] ) ?$item['title'] : '';
            $dept  = isset($item['department'] ) ? $item['department'] : '';$price = isset( $item['price'] ) ?$item['price'] : '';
            $link  = isset($item['link'] ) ? $item['link'] : '';$desc  = isset( $item['desc'] ) ?$item['desc'] : '';
          ?>
          <div class="ac-service-item" data-index="<?php echo esc_attr( $index ); ?>">
            <div class="ac-item-topbar">
              <span class="ac-item-handle">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                </svg>
                <?php esc_html_e( 'Service Item', 'devnahian-auracare' ); ?> #<span class="ac-row-num"><?php echo esc_html( $index + 1 ); ?></span>
              </span>
              <button type="button" class="ac-btn-remove ac-remove-service">&times; <?php esc_html_e( 'Remove Service', 'devnahian-auracare' ); ?></button>
            </div>

            <div class="ac-service-head">
              <!-- Icon / Image Picker -->
              <div class="ac-service-icon-picker ac-upload-icon" title="<?php esc_attr_e( 'Select Icon / Image', 'devnahian-auracare' ); ?>">
                <input type="hidden" name="devnahian_auracare_services_list[<?php echo esc_attr( $index ); ?>][icon]" value="<?php echo esc_url( $icon ); ?>" class="ac-icon-input">
                <?php if ( ! empty( $icon ) ) : ?>
                  <img src="<?php echo esc_url( $icon ); ?>" alt="">
                <?php else : ?>
                  <span class="ac-service-icon-placeholder"><?php esc_html_e( '+ Icon', 'devnahian-auracare' ); ?></span>
                <?php endif; ?>
              </div>

              <!-- Top Meta Row -->
              <div class="ac-meta-fields">
                <div class="ac-grid-3">
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Service Name', 'devnahian-auracare' ); ?></label>
                    <input type="text" name="devnahian_auracare_services_list[<?php echo esc_attr( $index ); ?>][title]" value="<?php echo esc_attr( $title ); ?>" class="ac-input" placeholder="e.g. Cardiovascular Assessment">
                  </div>
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Department Tag', 'devnahian-auracare' ); ?></label>
                    <input type="text" name="devnahian_auracare_services_list[<?php echo esc_attr( $index ); ?>][department]" value="<?php echo esc_attr( $dept ); ?>" class="ac-input" placeholder="e.g. Cardiology">
                  </div>
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Starting Fee ($)', 'devnahian-auracare' ); ?></label>
                    <input type="text" name="devnahian_auracare_services_list[<?php echo esc_attr( $index ); ?>][price]" value="<?php echo esc_attr( $price ); ?>" class="ac-input" placeholder="e.g. $190">
                  </div>
                </div>
              </div>
            </div>

            <!-- Description & Custom Link -->
            <div class="ac-grid-2">
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Short Description', 'devnahian-auracare' ); ?></label>
                <textarea name="devnahian_auracare_services_list[<?php echo esc_attr( $index ); ?>][desc]" rows="2" class="ac-textarea" placeholder="Comprehensive diagnostic scans and ECG monitoring..."><?php echo esc_textarea( $desc ); ?></textarea>
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Custom Details / Booking URL', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_services_list[<?php echo esc_attr( $index ); ?>][link]" value="<?php echo esc_attr( $link ); ?>" class="ac-input" placeholder="e.g. /appointment?service=cardio">
                <span class="ac-hint"><?php esc_html_e( 'Leave empty to link directly to the general appointment modal.', 'devnahian-auracare' ); ?></span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <button type="button" class="ac-btn-add" id="acAddService">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      <?php esc_html_e( 'Add Clinical Service', 'devnahian-auracare' ); ?>
    </button>
  </div>

</div>

<!-- JavaScript for Repeater Rows and Media Library Picker -->
<script>
jQuery(document).ready(function($) {

  function updateRowNumbers() {
    $('#servicesRepeaterContainer .ac-service-item').each(function(i) {
      $(this).find('.ac-row-num').text(i + 1);
    });
  }

  // Add Service Item
  $('#acAddService').on('click', function(e) {
    e.preventDefault();
    let index = Date.now();

    let rowHtml = `
      <div class="ac-service-item" data-index="${index}">
        <div class="ac-item-topbar">
          <span class="ac-item-handle">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
            <?php esc_html_e( 'Service Item', 'devnahian-auracare' ); ?> #<span class="ac-row-num"></span>
          </span>
          <button type="button" class="ac-btn-remove ac-remove-service">&times; <?php esc_html_e( 'Remove Service', 'devnahian-auracare' ); ?></button>
        </div>

        <div class="ac-service-head">
          <div class="ac-service-icon-picker ac-upload-icon" title="<?php esc_attr_e( 'Select Icon / Image', 'devnahian-auracare' ); ?>">
            <input type="hidden" name="devnahian_auracare_services_list[${index}][icon]" value="" class="ac-icon-input">
            <span class="ac-service-icon-placeholder">+ Icon</span>
          </div>

          <div class="ac-meta-fields">
            <div class="ac-grid-3">
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Service Name', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_services_list[${index}][title]" value="" class="ac-input" placeholder="e.g. Cardiovascular Assessment">
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Department Tag', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_services_list[${index}][department]" value="" class="ac-input" placeholder="e.g. Cardiology">
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Starting Fee ($)', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_services_list[${index}][price]" value="" class="ac-input" placeholder="e.g. $190">
              </div>
            </div>
          </div>
        </div>

        <div class="ac-grid-2">
          <div class="ac-field-group">
            <label class="ac-label"><?php esc_html_e( 'Short Description', 'devnahian-auracare' ); ?></label>
            <textarea name="devnahian_auracare_services_list[${index}][desc]" rows="2" class="ac-textarea" placeholder="Comprehensive diagnostic scans and ECG monitoring..."></textarea>
          </div>
          <div class="ac-field-group">
            <label class="ac-label"><?php esc_html_e( 'Custom Details / Booking URL', 'devnahian-auracare' ); ?></label>
            <input type="text" name="devnahian_auracare_services_list[${index}][link]" value="" class="ac-input" placeholder="e.g. /appointment?service=cardio">
            <span class="ac-hint"><?php esc_html_e( 'Leave empty to link directly to the general appointment modal.', 'devnahian-auracare' ); ?></span>
          </div>
        </div>
      </div>
    `;

    $('#servicesRepeaterContainer').append(rowHtml);
    updateRowNumbers();
  });

  // Remove Service Item
  $(document).on('click', '.ac-remove-service', function() {$(this).closest('.ac-service-item').remove();
    updateRowNumbers();
  });

  // Media Library Icon/Image Picker
  $(document).on('click', '.ac-upload-icon', function(e) {
    e.preventDefault();
    let container = $(this);
    let inputField = container.find('.ac-icon-input');

    let mediaFrame = wp.media({
      title: '<?php esc_html_e( 'Select Service Icon or Illustration', 'devnahian-auracare' ); ?>',
      button: { text: '<?php esc_html_e( 'Use This Icon', 'devnahian-auracare' ); ?>' },
      multiple: false,
      library: { type: 'image' }
    });

    mediaFrame.on('select', function() {
      let attachment = mediaFrame.state().get('selection').first().toJSON();
      inputField.val(attachment.url);
      container.find('img').remove();
      container.find('.ac-service-icon-placeholder').remove();
      container.append(`<img src="${attachment.url}" alt="">`);
    });

    mediaFrame.open();
  });

});
</script>