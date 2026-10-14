<?php
/**
 * Settings Tab: Testimonials Configuration with Dynamic Patient Repeater
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$testimonials_subtitle = get_option( 'devnahian_auracare_testimonials_subtitle', 'Patient Stories' );
$testimonials_title    = get_option( 'devnahian_auracare_testimonials_title', 'Real Experiences, Real Healing' );$testimonials_desc     = get_option( 'devnahian_auracare_testimonials_desc', 'Read genuine feedback from patients and families who entrusted their care to our clinical teams.' );

$testimonials_list = get_option( 'devnahian_auracare_testimonials_list', array() );
if ( ! is_array( $testimonials_list ) ) {$testimonials_list = array();
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
    grid-template-columns: 1.2fr 1fr 0.8fr;
    gap: 14px;
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

  /* Testimonial Repeater Card Style */
  .ac-repeater-list {
    display: flex;
    flex-direction: column;
    gap: 18px;
    margin-bottom: 20px;
  }
  .ac-testimonial-item {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 20px;
    position: relative;
    transition: border-color 0.2s;
  }
  .ac-testimonial-item:hover {
    border-color: #cbd5e1;
  }
  .ac-testimonial-head {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 16px;
  }
  .ac-avatar-picker {
    position: relative;
    width: 64px;
    height: 64px;
    border-radius: 50%;
    overflow: hidden;
    background: #e2e8f0;
    border: 2px dashed #94a3b8;
    cursor: pointer;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
  }
  .ac-avatar-picker img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .ac-avatar-picker .ac-avatar-placeholder {
    font-size: 10px;
    font-weight: 700;
    color: #64748b;
    line-height: 1.1;
    text-transform: uppercase;
  }
  .ac-meta-fields {
    flex-grow: 1;
  }
  .ac-item-topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
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
  .ac-btn-remove {
    background: #fee2e2;
    color: #dc2626;
    border: 1px solid #fecaca;
    border-radius: 6px;
    padding: 6px 12px;
    cursor: pointer;
    font-size: 12.5px;
    font-weight: 600;
    transition: all 0.2s;
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
  .ac-checkbox-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 600;
    color: #334155;
    cursor: pointer;
    margin-top: 6px;
  }
  .ac-checkbox-label input {
    width: 16px;
    height: 16px;
    margin: 0;
  }
</style>

<div class="ac-tab-panel">

  <!-- CARD 1: Section Header Info -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #e0f2fe; color: #0284c7;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Hero & Section Content', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure the title badge, main heading, and introduction description for patient feedback.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_testimonials_subtitle"><?php esc_html_e( 'Section Subtitle / Badge', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_testimonials_subtitle" name="devnahian_auracare_testimonials_subtitle" value="<?php echo esc_attr( $testimonials_subtitle ); ?>" class="ac-input" placeholder="e.g. Patient Stories">
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_testimonials_title"><?php esc_html_e( 'Main Heading Title', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_testimonials_title" name="devnahian_auracare_testimonials_title" value="<?php echo esc_attr( $testimonials_title ); ?>" class="ac-input" placeholder="e.g. Real Experiences, Real Healing">
      </div>

      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_testimonials_desc"><?php esc_html_e( 'Description Paragraph', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_testimonials_desc" name="devnahian_auracare_testimonials_desc" rows="2" class="ac-textarea"><?php echo esc_textarea( $testimonials_desc ); ?></textarea>
      </div>
    </div>
  </div>

  <!-- CARD 2: Testimonials Repeater -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #ecfdf5; color: #059669;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Patient Testimonials (Repeater)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Add patient quotes, treatment tags, avatars, star ratings, and verification badges.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-repeater-list" id="testimonialRepeaterContainer">
      <?php if ( ! empty( $testimonials_list ) ) : ?>
        <?php foreach ( $testimonials_list as $index =>$item ) : ?>
          <?php
            $avatar    = isset($item['avatar'] ) ? $item['avatar'] : '';$name      = isset( $item['name'] ) ?$item['name'] : '';
            $treatment = isset($item['treatment'] ) ? $item['treatment'] : '';$rating    = isset( $item['rating'] ) ? (int)$item['rating'] : 5;
            $verified  = ! empty( $item['verified'] );$feedback  = isset( $item['feedback'] ) ?$item['feedback'] : '';
          ?>
          <div class="ac-testimonial-item" data-index="<?php echo esc_attr( $index ); ?>">
            <div class="ac-item-topbar">
              <span class="ac-item-handle">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="7" r="4"/><path d="M5.5 21a8.5 8.5 0 0 1 13 0"/></svg>
                <?php esc_html_e( 'Patient Story', 'devnahian-auracare' ); ?> #<span class="ac-row-num"><?php echo esc_html( $index + 1 ); ?></span>
              </span>
              <button type="button" class="ac-btn-remove ac-remove-testimonial">&times; <?php esc_html_e( 'Remove Story', 'devnahian-auracare' ); ?></button>
            </div>

            <div class="ac-testimonial-head">
              <!-- Avatar Upload -->
              <div class="ac-avatar-picker ac-upload-avatar" title="<?php esc_attr_e( 'Click to choose patient avatar', 'devnahian-auracare' ); ?>">
                <input type="hidden" name="devnahian_auracare_testimonials_list[<?php echo esc_attr( $index ); ?>][avatar]" value="<?php echo esc_url( $avatar ); ?>" class="ac-avatar-input">
                <?php if ( ! empty( $avatar ) ) : ?>
                  <img src="<?php echo esc_url( $avatar ); ?>" alt="">
                <?php else : ?>
                  <span class="ac-avatar-placeholder"><?php esc_html_e( '+ Photo', 'devnahian-auracare' ); ?></span>
                <?php endif; ?>
              </div>

              <!-- Top Row Info: Name, Treatment, Rating -->
              <div class="ac-meta-fields">
                <div class="ac-grid-3">
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Patient Name', 'devnahian-auracare' ); ?></label>
                    <input type="text" name="devnahian_auracare_testimonials_list[<?php echo esc_attr( $index ); ?>][name]" value="<?php echo esc_attr( $name ); ?>" class="ac-input" placeholder="e.g. Marcus Sterling">
                  </div>
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Treatment / Procedure', 'devnahian-auracare' ); ?></label>
                    <input type="text" name="devnahian_auracare_testimonials_list[<?php echo esc_attr( $index ); ?>][treatment]" value="<?php echo esc_attr( $treatment ); ?>" class="ac-input" placeholder="e.g. Cardiology Recovery">
                  </div>
                  <div class="ac-field-group">
                    <label class="ac-label"><?php esc_html_e( 'Rating Score', 'devnahian-auracare' ); ?></label>
                    <select name="devnahian_auracare_testimonials_list[<?php echo esc_attr( $index ); ?>][rating]" class="ac-select">
                      <option value="5" <?php selected( $rating, 5 ); ?>>★★★★★ (5/5)</option>
                      <option value="4" <?php selected( $rating, 4 ); ?>>★★★★☆ (4/5)</option>
                      <option value="3" <?php selected( $rating, 3 ); ?>>★★★☆☆ (3/5)</option>
                      <option value="2" <?php selected( $rating, 2 ); ?>>★★☆☆☆ (2/5)</option>
                      <option value="1" <?php selected( $rating, 1 ); ?>>★☆☆☆☆ (1/5)</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review Content -->
            <div class="ac-field-group">
              <label class="ac-label"><?php esc_html_e( 'Patient Testimonial Quote', 'devnahian-auracare' ); ?></label>
              <textarea name="devnahian_auracare_testimonials_list[<?php echo esc_attr( $index ); ?>][feedback]" rows="3" class="ac-textarea" placeholder="Describe the medical care, nurse attentiveness, or outcome..."><?php echo esc_textarea( $feedback ); ?></textarea>
            </div>

            <!-- Verified Badge Toggle -->
            <div>
              <label class="ac-checkbox-label">
                <input type="checkbox" name="devnahian_auracare_testimonials_list[<?php echo esc_attr( $index ); ?>][verified]" value="1" <?php checked( $verified, true ); ?>>
                <?php esc_html_e( 'Mark as Verified Patient (Displays green checkmark on website)', 'devnahian-auracare' ); ?>
              </label>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <button type="button" class="ac-btn-add" id="acAddTestimonial">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      <?php esc_html_e( 'Add Patient Story', 'devnahian-auracare' ); ?>
    </button>
  </div>

</div>

<!-- JavaScript for Repeater Rows and Media Picker -->
<script>
jQuery(document).ready(function($) {

  function updateRowNumbers() {
    $('#testimonialRepeaterContainer .ac-testimonial-item').each(function(i) {
      $(this).find('.ac-row-num').text(i + 1);
    });
  }

  // Add Testimonial Item
  $('#acAddTestimonial').on('click', function(e) {
    e.preventDefault();
    let index = Date.now();

    let rowHtml = `
      <div class="ac-testimonial-item" data-index="${index}">
        <div class="ac-item-topbar">
          <span class="ac-item-handle">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="7" r="4"/><path d="M5.5 21a8.5 8.5 0 0 1 13 0"/></svg>
            <?php esc_html_e( 'Patient Story', 'devnahian-auracare' ); ?> #<span class="ac-row-num"></span>
          </span>
          <button type="button" class="ac-btn-remove ac-remove-testimonial">&times; <?php esc_html_e( 'Remove Story', 'devnahian-auracare' ); ?></button>
        </div>

        <div class="ac-testimonial-head">
          <div class="ac-avatar-picker ac-upload-avatar" title="<?php esc_attr_e( 'Click to choose patient avatar', 'devnahian-auracare' ); ?>">
            <input type="hidden" name="devnahian_auracare_testimonials_list[${index}][avatar]" value="" class="ac-avatar-input">
            <span class="ac-avatar-placeholder">+ Photo</span>
          </div>

          <div class="ac-meta-fields">
            <div class="ac-grid-3">
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Patient Name', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_testimonials_list[${index}][name]" value="" class="ac-input" placeholder="e.g. Marcus Sterling">
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Treatment / Procedure', 'devnahian-auracare' ); ?></label>
                <input type="text" name="devnahian_auracare_testimonials_list[${index}][treatment]" value="" class="ac-input" placeholder="e.g. Cardiology Recovery">
              </div>
              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Rating Score', 'devnahian-auracare' ); ?></label>
                <select name="devnahian_auracare_testimonials_list[${index}][rating]" class="ac-select">
                  <option value="5" selected>★★★★★ (5/5)</option>
                  <option value="4">★★★★☆ (4/5)</option>
                  <option value="3">★★★☆☆ (3/5)</option>
                  <option value="2">★★☆☆☆ (2/5)</option>
                  <option value="1">★☆☆☆☆ (1/5)</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="ac-field-group">
          <label class="ac-label"><?php esc_html_e( 'Patient Testimonial Quote', 'devnahian-auracare' ); ?></label>
          <textarea name="devnahian_auracare_testimonials_list[${index}][feedback]" rows="3" class="ac-textarea" placeholder="Describe the medical care, nurse attentiveness, or outcome..."></textarea>
        </div>

        <div>
          <label class="ac-checkbox-label">
            <input type="checkbox" name="devnahian_auracare_testimonials_list[${index}][verified]" value="1" checked>
            <?php esc_html_e( 'Mark as Verified Patient (Displays green checkmark on website)', 'devnahian-auracare' ); ?>
          </label>
        </div>
      </div>
    `;

    $('#testimonialRepeaterContainer').append(rowHtml);
    updateRowNumbers();
  });

  // Remove Testimonial Item
  $(document).on('click', '.ac-remove-testimonial', function() {$(this).closest('.ac-testimonial-item').remove();
    updateRowNumbers();
  });

  // WP Media Avatar Picker
  $(document).on('click', '.ac-upload-avatar', function(e) {
    e.preventDefault();
    let container = $(this);
    let inputField = container.find('.ac-avatar-input');

    let mediaFrame = wp.media({
      title: '<?php esc_html_e( 'Select Patient Photo', 'devnahian-auracare' ); ?>',
      button: { text: '<?php esc_html_e( 'Use This Photo', 'devnahian-auracare' ); ?>' },
      multiple: false,
      library: { type: 'image' }
    });

    mediaFrame.on('select', function() {
      let attachment = mediaFrame.state().get('selection').first().toJSON();
      inputField.val(attachment.url);
      container.find('img').remove();
      container.find('.ac-avatar-placeholder').remove();
      container.append(`<img src="${attachment.url}" alt="">`);
    });

    mediaFrame.open();
  });

});
</script>