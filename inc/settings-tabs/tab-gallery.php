<?php
/**
 * Settings Tab: Gallery Page Configuration with Dual Repeaters (Categories + Items)
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$gallery_subtitle   = get_option( 'devnahian_auracare_gallery_subtitle', 'Clinical Portfolio' );
$gallery_title      = get_option( 'devnahian_auracare_gallery_title', 'Our Facilities & Medical Excellence' );$gallery_desc       = get_option( 'devnahian_auracare_gallery_desc', 'Explore our modern surgical theatres, ICU wings, advanced diagnostics, and patient recovery suites.' );

// Categories Repeater
$gallery_categories = get_option( 'devnahian_auracare_gallery_categories', array( 'All', 'Surgery', 'Laboratory', 'Pediatrics', 'Intensive Care' ) );
if ( ! is_array( $gallery_categories ) ) {$gallery_categories = array( 'All', 'Surgery', 'Laboratory', 'Pediatrics', 'Intensive Care' );
}

// Gallery Items Repeater
$gallery_items = get_option( 'devnahian_auracare_gallery_items', array() );
if ( ! is_array( $gallery_items ) ) {$gallery_items = array();
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

  /* Repeaters General */
  .ac-repeater-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-bottom: 16px;
  }

  /* Category Repeater Specifics */
  .ac-category-row {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 12px;
    align-items: center;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 10px 14px;
  }

  /* Gallery Item Repeater Specifics */
  .ac-repeater-row {
    display: grid;
    grid-template-columns: 120px 1fr 1fr auto;
    gap: 16px;
    align-items: center;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 14px;
  }
  .ac-image-preview-wrapper {
    position: relative;
    width: 120px;
    height: 80px;
    border-radius: 6px;
    overflow: hidden;
    background: #e2e8f0;
    border: 1px dashed #cbd5e1;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .ac-image-preview-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .ac-image-preview-wrapper .placeholder-text {
    font-size: 11px;
    font-weight: 600;
    color: #64748b;
    text-align: center;
    padding: 4px;
  }
  .ac-btn-remove {
    background: #fee2e2;
    color: #dc2626;
    border: 1px solid #fecaca;
    border-radius: 6px;
    padding: 8px 12px;
    cursor: pointer;
    font-size: 13px;
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
    padding: 10px 18px;
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

  <!-- CARD 1: Gallery Hero & Intro -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #e0f2fe; color: #0284c7;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Hero & Header Information', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure the title badge, main heading, and introduction text for the gallery showcase.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_gallery_subtitle"><?php esc_html_e( 'Section Subtitle / Badge', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_gallery_subtitle" name="devnahian_auracare_gallery_subtitle" value="<?php echo esc_attr( $gallery_subtitle ); ?>" class="ac-input" placeholder="e.g. Clinical Portfolio">
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_gallery_title"><?php esc_html_e( 'Main Heading Title', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_gallery_title" name="devnahian_auracare_gallery_title" value="<?php echo esc_attr( $gallery_title ); ?>" class="ac-input" placeholder="e.g. Our Facilities & Medical Excellence">
      </div>

      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_gallery_desc"><?php esc_html_e( 'Description Paragraph', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_gallery_desc" name="devnahian_auracare_gallery_desc" rows="2" class="ac-textarea"><?php echo esc_textarea( $gallery_desc ); ?></textarea>
      </div>
    </div>
  </div>

  <!-- CARD 2: Filter Categories Repeater -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #f0fdf4; color: #16a34a;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Filter Categories (Repeater)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Add, rename, or delete filter tabs. Changes update the photo category selectors below immediately.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-repeater-list" id="categoryRepeaterContainer">
      <?php if ( ! empty( $gallery_categories ) ) : ?>
        <?php foreach ( $gallery_categories as $c_idx =>$c_name ) : ?>
          <div class="ac-category-row" data-cat-index="<?php echo esc_attr( $c_idx ); ?>">
            <input type="text" name="devnahian_auracare_gallery_categories[]" value="<?php echo esc_attr( $c_name ); ?>" class="ac-input ac-cat-name-input" placeholder="Category Name (e.g. Surgery)">
            <button type="button" class="ac-btn-remove ac-remove-cat">&times; <?php esc_html_e( 'Remove', 'devnahian-auracare' ); ?></button>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <button type="button" class="ac-btn-add" id="acAddCategoryRow" style="background:#16a34a;">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      <?php esc_html_e( 'Add Category', 'devnahian-auracare' ); ?>
    </button>
  </div>

  <!-- CARD 3: Gallery Photos Repeater -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fef3c7; color: #d97706;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Gallery Photos (Repeater)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Upload photos via the Media Library, enter titles, and assign them to your categories.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-repeater-list" id="galleryRepeaterContainer">
      <?php if ( ! empty( $gallery_items ) ) : ?>
        <?php foreach ( $gallery_items as $index =>$item ) : ?>
          <?php
            $img_url = isset( $item['image'] ) ?$item['image'] : '';
            $title   = isset($item['title'] ) ? $item['title'] : '';$cat     = isset( $item['category'] ) ?$item['category'] : '';
          ?>
          <div class="ac-repeater-row" data-index="<?php echo esc_attr( $index ); ?>">
            <div class="ac-image-preview-wrapper ac-upload-btn">
              <input type="hidden" name="devnahian_auracare_gallery_items[<?php echo esc_attr( $index ); ?>][image]" value="<?php echo esc_attr( $img_url ); ?>" class="ac-img-input">
              <?php if ( ! empty( $img_url ) ) : ?>
                <img src="<?php echo esc_url( $img_url ); ?>" alt="">
              <?php else : ?>
                <span class="placeholder-text"><?php esc_html_e( '+ Select Image', 'devnahian-auracare' ); ?></span>
              <?php endif; ?>
            </div>

            <div>
              <label class="ac-label"><?php esc_html_e( 'Item Title / Caption', 'devnahian-auracare' ); ?></label>
              <input type="text" name="devnahian_auracare_gallery_items[<?php echo esc_attr( $index ); ?>][title]" value="<?php echo esc_attr( $title ); ?>" class="ac-input" placeholder="e.g. Modern MRI Suite">
            </div>

            <div>
              <label class="ac-label"><?php esc_html_e( 'Category', 'devnahian-auracare' ); ?></label>
              <select name="devnahian_auracare_gallery_items[<?php echo esc_attr( $index ); ?>][category]" class="ac-select ac-category-select" data-selected="<?php echo esc_attr( $cat ); ?>">
                <?php foreach ( $gallery_categories as$c_name ) : ?>
                  <option value="<?php echo esc_attr( $c_name ); ?>" <?php selected( $cat, $c_name ); ?>><?php echo esc_html($c_name ); ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div>
              <button type="button" class="ac-btn-remove ac-remove-photo">&times; <?php esc_html_e( 'Remove', 'devnahian-auracare' ); ?></button>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <button type="button" class="ac-btn-add" id="acAddGalleryRow">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      <?php esc_html_e( 'Add Gallery Photo', 'devnahian-auracare' ); ?>
    </button>
  </div>

</div>

<!-- JavaScript Engine for Dual Synchronized Repeaters -->
<script>
jQuery(document).ready(function($) {

  // Collect current categories from category inputs
  function getLiveCategories() {
    let cats = [];
    $('.ac-cat-name-input').each(function() {
      let val = $(this).val().trim();
      if (val !== '' && !cats.includes(val)) {
        cats.push(val);
      }
    });
    if (cats.length === 0) {
      cats = ['General'];
    }
    return cats;
  }

  // Refresh all photo category dropdowns without losing selected values
  function syncCategoryDropdowns() {
    let currentCats = getLiveCategories();

    $('.ac-category-select').each(function() {
      let select = $(this);
      let selectedVal = select.val() || select.data('selected');
      select.empty();

      currentCats.forEach(function(c) {
        let isSelected = (c === selectedVal) ? 'selected' : '';
        select.append(`<option value="${c}" ${isSelected}>${c}</option>`);
      });
    });
  }

  /* -------------------
   * CATEGORY REPEATER
   * ------------------- */
  $('#acAddCategoryRow').on('click', function(e) {
    e.preventDefault();
    let rowHtml = `
      <div class="ac-category-row">
        <input type="text" name="devnahian_auracare_gallery_categories[]" value="" class="ac-input ac-cat-name-input" placeholder="Category Name (e.g. Diagnostic)">
        <button type="button" class="ac-btn-remove ac-remove-cat">&times; <?php esc_html_e( 'Remove', 'devnahian-auracare' ); ?></button>
      </div>
    `;
    $('#categoryRepeaterContainer').append(rowHtml);
  });

  $(document).on('click', '.ac-remove-cat', function() {$(this).closest('.ac-category-row').remove();
    syncCategoryDropdowns();
  });

  $(document).on('input', '.ac-cat-name-input', function() {
    syncCategoryDropdowns();
  });

  /* -------------------
   * PHOTO ITEMS REPEATER
   * ------------------- */
  $('#acAddGalleryRow').on('click', function(e) {
    e.preventDefault();
    let index = Date.now();
    let currentCats = getLiveCategories();

    let optionsHtml = '';
    currentCats.forEach(function(c) {
      optionsHtml += `<option value="${c}">${c}</option>`;
    });

    let rowHtml = `
      <div class="ac-repeater-row" data-index="${index}">
        <div class="ac-image-preview-wrapper ac-upload-btn">
          <input type="hidden" name="devnahian_auracare_gallery_items[${index}][image]" value="" class="ac-img-input">
          <span class="placeholder-text">+ Select Image</span>
        </div>
        <div>
          <label class="ac-label"><?php esc_html_e( 'Item Title / Caption', 'devnahian-auracare' ); ?></label>
          <input type="text" name="devnahian_auracare_gallery_items[${index}][title]" value="" class="ac-input" placeholder="e.g. Surgery Operation Room">
        </div>
        <div>
          <label class="ac-label"><?php esc_html_e( 'Category', 'devnahian-auracare' ); ?></label>
          <select name="devnahian_auracare_gallery_items[${index}][category]" class="ac-select ac-category-select">
            ${optionsHtml}
          </select>
        </div>
        <div>
          <button type="button" class="ac-btn-remove ac-remove-photo">&times; <?php esc_html_e( 'Remove', 'devnahian-auracare' ); ?></button>
        </div>
      </div>
    `;

    $('#galleryRepeaterContainer').append(rowHtml);
  });

  $(document).on('click', '.ac-remove-photo', function() {$(this).closest('.ac-repeater-row').remove();
  });

  /* -------------------
   * WP MEDIA UPLOADER
   * ------------------- */
  $(document).on('click', '.ac-upload-btn', function(e) {
    e.preventDefault();
    let container = $(this);
    let inputField = container.find('.ac-img-input');

    let mediaFrame = wp.media({
      title: '<?php esc_html_e( 'Select or Upload Gallery Photo', 'devnahian-auracare' ); ?>',
      button: { text: '<?php esc_html_e( 'Use This Image', 'devnahian-auracare' ); ?>' },
      multiple: false
    });

    mediaFrame.on('select', function() {
      let attachment = mediaFrame.state().get('selection').first().toJSON();
      inputField.val(attachment.url);
      container.find('img').remove();
      container.find('.placeholder-text').remove();
      container.append(`<img src="${attachment.url}" alt="">`);
    });

    mediaFrame.open();
  });

});
</script>