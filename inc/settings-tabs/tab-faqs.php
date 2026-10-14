<?php
/**
 * Settings Tab: FAQs Page Configuration with Accordion Repeater
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$faqs_subtitle = get_option( 'devnahian_auracare_faqs_subtitle', 'Help & Guidance' );
$faqs_title    = get_option( 'devnahian_auracare_faqs_title', 'Frequently Asked Questions' );$faqs_desc     = get_option( 'devnahian_auracare_faqs_desc', 'Find clear answers regarding appointment scheduling, medical insurance, emergency care, and patient admission.' );

$faqs_list = get_option( 'devnahian_auracare_faqs_list', array() );
if ( ! is_array( $faqs_list ) ) {$faqs_list = array();
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

  /* FAQ Accordion Item Styling */
  .ac-faq-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin-bottom: 20px;
  }
  .ac-faq-item {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    transition: border-color 0.2s;
  }
  .ac-faq-item:hover {
    border-color: #cbd5e1;
  }
  .ac-faq-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 18px;
    background: #ffffff;
    border-bottom: 1px solid #e2e8f0;
    cursor: pointer;
    user-select: none;
  }
  .ac-faq-header-left {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 700;
    font-size: 13.5px;
    color: #0f172a;
  }
  .ac-faq-pill {
    font-size: 11px;
    background: #e0f2fe;
    color: #0284c7;
    padding: 3px 8px;
    border-radius: 12px;
    font-weight: 700;
    text-transform: uppercase;
  }
  .ac-faq-header-actions {
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .ac-faq-body {
    padding: 18px;
    display: flex;
    flex-direction: column;
    gap: 14px;
  }
  .ac-btn-toggle {
    background: none;
    border: none;
    cursor: pointer;
    color: #64748b;
    padding: 4px;
    display: flex;
    align-items: center;
    transition: transform 0.2s;
  }
  .ac-faq-item.collapsed .ac-faq-body {
    display: none;
  }
  .ac-faq-item.collapsed .ac-btn-toggle svg {
    transform: rotate(-90deg);
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

  <!-- CARD 1: Section Header Info -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #e0f2fe; color: #0284c7;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Hero & Section Content', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure the title badge, main heading, and intro description text for the FAQ section.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_faqs_subtitle"><?php esc_html_e( 'Section Subtitle / Badge', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_faqs_subtitle" name="devnahian_auracare_faqs_subtitle" value="<?php echo esc_attr( $faqs_subtitle ); ?>" class="ac-input" placeholder="e.g. Help & Guidance">
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_faqs_title"><?php esc_html_e( 'Main Heading Title', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_faqs_title" name="devnahian_auracare_faqs_title" value="<?php echo esc_attr( $faqs_title ); ?>" class="ac-input" placeholder="e.g. Frequently Asked Questions">
      </div>

      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_faqs_desc"><?php esc_html_e( 'Description Paragraph', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_faqs_desc" name="devnahian_auracare_faqs_desc" rows="2" class="ac-textarea"><?php echo esc_textarea( $faqs_desc ); ?></textarea>
      </div>
    </div>
  </div>

  <!-- CARD 2: FAQ Accordion Repeater -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fdf2f8; color: #be185d;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'FAQ Questions & Answers (Repeater)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Add, organize, and edit question items with custom topic categories.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-faq-list" id="faqRepeaterContainer">
      <?php if ( ! empty( $faqs_list ) ) : ?>
        <?php foreach ( $faqs_list as $index =>$item ) : ?>
          <?php
            $question = isset( $item['question'] ) ?$item['question'] : '';
            $answer   = isset($item['answer'] ) ? $item['answer'] : '';$category = isset( $item['category'] ) ?$item['category'] : 'General';
          ?>
          <div class="ac-faq-item" data-index="<?php echo esc_attr( $index ); ?>">
            <div class="ac-faq-header">
              <div class="ac-faq-header-left">
                <span class="ac-faq-pill"><?php echo esc_html( $category ? $category : 'General' ); ?></span>
                <span class="ac-faq-preview-title"><?php echo esc_html( $question ? $question : 'Question #' . ( $index + 1 ) ); ?></span>
              </div>
              <div class="ac-faq-header-actions">
                <button type="button" class="ac-btn-remove ac-remove-faq">&times; <?php esc_html_e( 'Remove', 'devnahian-auracare' ); ?></button>
                <span class="ac-btn-toggle">
                  <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                </span>
              </div>
            </div>

            <div class="ac-faq-body">
              <div class="ac-grid-2">
                <div class="ac-field-group">
                  <label class="ac-label"><?php esc_html_e( 'Category / Topic Tag', 'devnahian-auracare' ); ?></label>
                  <input type="text" name="devnahian_auracare_faqs_list[<?php echo esc_attr( $index ); ?>][category]" value="<?php echo esc_attr( $category ); ?>" class="ac-input ac-faq-cat-input" placeholder="e.g. Appointments, Billing, Emergency">
                </div>
                <div class="ac-field-group">
                  <label class="ac-label"><?php esc_html_e( 'Question Title', 'devnahian-auracare' ); ?></label>
                  <input type="text" name="devnahian_auracare_faqs_list[<?php echo esc_attr( $index ); ?>][question]" value="<?php echo esc_attr( $question ); ?>" class="ac-input ac-faq-q-input" placeholder="e.g. How do I book an emergency consultation?">
                </div>
              </div>

              <div class="ac-field-group">
                <label class="ac-label"><?php esc_html_e( 'Detailed Answer', 'devnahian-auracare' ); ?></label>
                <textarea name="devnahian_auracare_faqs_list[<?php echo esc_attr( $index ); ?>][answer]" rows="3" class="ac-textarea" placeholder="Write a clear, helpful response for patients..."><?php echo esc_textarea( $answer ); ?></textarea>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <button type="button" class="ac-btn-add" id="acAddFaqRow">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      <?php esc_html_e( 'Add FAQ Item', 'devnahian-auracare' ); ?>
    </button>
  </div>

</div>

<!-- JavaScript for Accordion Interactions and Dynamic Rows -->
<script>
jQuery(document).ready(function($) {

  // Toggle Accordion Collapse on Header Click
  $(document).on('click', '.ac-faq-header', function(e) {
    if ($(e.target).closest('.ac-remove-faq').length) {       return;     }$(this).closest('.ac-faq-item').toggleClass('collapsed');
  });

  // Live update preview text in accordion header
  $(document).on('input', '.ac-faq-q-input', function() {
    let text = $(this).val().trim();
    let preview = $(this).closest('.ac-faq-item').find('.ac-faq-preview-title');
    preview.text(text !== '' ? text : 'New Question');
  });

  $(document).on('input', '.ac-faq-cat-input', function() {
    let cat = $(this).val().trim();
    let pill = $(this).closest('.ac-faq-item').find('.ac-faq-pill');
    pill.text(cat !== '' ? cat : 'General');
  });

  // Add FAQ Item
  $('#acAddFaqRow').on('click', function(e) {
    e.preventDefault();
    let index = Date.now();

    let rowHtml = `
      <div class="ac-faq-item" data-index="${index}">
        <div class="ac-faq-header">
          <div class="ac-faq-header-left">
            <span class="ac-faq-pill">General</span>
            <span class="ac-faq-preview-title">New Question</span>
          </div>
          <div class="ac-faq-header-actions">
            <button type="button" class="ac-btn-remove ac-remove-faq">&times; <?php esc_html_e( 'Remove', 'devnahian-auracare' ); ?></button>
            <span class="ac-btn-toggle">
              <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </div>
        </div>

        <div class="ac-faq-body">
          <div class="ac-grid-2">
            <div class="ac-field-group">
              <label class="ac-label"><?php esc_html_e( 'Category / Topic Tag', 'devnahian-auracare' ); ?></label>
              <input type="text" name="devnahian_auracare_faqs_list[${index}][category]" value="General" class="ac-input ac-faq-cat-input" placeholder="e.g. Appointments, Billing, Emergency">
            </div>
            <div class="ac-field-group">
              <label class="ac-label"><?php esc_html_e( 'Question Title', 'devnahian-auracare' ); ?></label>
              <input type="text" name="devnahian_auracare_faqs_list[${index}][question]" value="" class="ac-input ac-faq-q-input" placeholder="e.g. How do I book an emergency consultation?">
            </div>
          </div>

          <div class="ac-field-group">
            <label class="ac-label"><?php esc_html_e( 'Detailed Answer', 'devnahian-auracare' ); ?></label>
            <textarea name="devnahian_auracare_faqs_list[${index}][answer]" rows="3" class="ac-textarea" placeholder="Write a clear, helpful response for patients..."></textarea>
          </div>
        </div>
      </div>
    `;

    $('#faqRepeaterContainer').append(rowHtml);
  });

  // Remove FAQ Item
  $(document).on('click', '.ac-remove-faq', function(e) {
    e.stopPropagation();
    $(this).closest('.ac-faq-item').remove();
  });

});
</script>