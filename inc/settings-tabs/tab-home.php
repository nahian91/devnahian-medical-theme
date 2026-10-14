<?php
/**
 * Settings Tab: Home Page Configuration (Modern Card UI with Feature Repeater)
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Hero Main Options
$hero_badge     = get_option( 'devnahian_auracare_home_hero_badge', 'Excellence in Modern Healthcare' );$hero_title     = get_option( 'devnahian_auracare_home_hero_title', 'Advanced Medical Science, Compassionate Clinical Care' );
$hero_desc      = get_option( 'devnahian_auracare_home_hero_desc', 'Our board-certified medical teams deliver pioneering robotic surgeries, 24/7 emergency triage, and precision outpatient therapies.' );$hero_cta_text  = get_option( 'devnahian_auracare_home_hero_cta_text', 'Schedule Consultation' );
$hero_cta_url   = get_option( 'devnahian_auracare_home_hero_cta_url', '/appointment' );$hero_video_url = get_option( 'devnahian_auracare_home_hero_video_url', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ' );
$hero_image     = get_option( 'devnahian_auracare_home_hero_image', '' );

// Section Visibility Switches
$show_services     = get_option( 'devnahian_auracare_home_show_services', '1' );$show_departments  = get_option( 'devnahian_auracare_home_show_departments', '1' );
$show_doctors      = get_option( 'devnahian_auracare_home_show_doctors', '1' );$show_appointment  = get_option( 'devnahian_auracare_home_show_appointment', '1' );
$show_testimonials = get_option( 'devnahian_auracare_home_show_testimonials', '1' );$show_gallery      = get_option( 'devnahian_auracare_home_show_gallery', '1' );
$show_blogs        = get_option( 'devnahian_auracare_home_show_blogs', '1' );$show_faqs         = get_option( 'devnahian_auracare_home_show_faqs', '1' );

// Quick Feature Cards Repeater
$feature_cards     = get_option( 'devnahian_auracare_home_feature_cards', array() );
if ( ! is_array( $feature_cards ) ) {$feature_cards = array();
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

  /* Hero Media Preview Box */
  .ac-hero-img-box {
    width: 100%;
    height: 120px;
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
  .ac-hero-img-box:hover {
    border-color: #0284c7;
  }
  .ac-hero-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
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

  /* Feature Cards Repeater */
  .ac-repeater-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
    margin-bottom: 20px;
  }
  .ac-feat-item {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 18px;
    position: relative;
  }
  .ac-item-topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
    padding-bottom: 8px;
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
  .ac-feat-icon-picker {
    width: 60px;
    height: 60px;
    border-radius: 8px;
    background: #e2e8f0;
    border: 2px dashed #94a3b8;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    overflow: hidden;
  }
  .ac-feat-icon-picker img {
    width: 100%;
    height: 100%;
    object-fit: cover;
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

  <!-- CARD 1: Hero Showcase & Primary Action -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #e0f2fe; color: #0284c7;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
          <polyline points="9 22 9 12 15 12 15 22"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Homepage Hero & Main Callout', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure the primary above-the-fold headline, introduction text, video modal link, and background visual.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <!-- Badge -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_home_hero_badge"><?php esc_html_e( 'Hero Highlight Badge', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_home_hero_badge" name="devnahian_auracare_home_hero_badge" value="<?php echo esc_attr( $hero_badge ); ?>" class="ac-input" placeholder="e.g. Excellence in Modern Healthcare">
      </div>

      <!-- Headline -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_home_hero_title"><?php esc_html_e( 'Main Hero Headline', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_home_hero_title" name="devnahian_auracare_home_hero_title" value="<?php echo esc_attr( $hero_title ); ?>" class="ac-input" placeholder="e.g. Advanced Medical Science, Compassionate Clinical Care">
      </div>

      <!-- Hero Description -->
      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_home_hero_desc"><?php esc_html_e( 'Introduction Paragraph', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_home_hero_desc" name="devnahian_auracare_home_hero_desc" rows="2" class="ac-textarea"><?php echo esc_textarea( $hero_desc ); ?></textarea>
      </div>

      <!-- CTA Button Label & URL -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_home_hero_cta_text"><?php esc_html_e( 'Primary Button Label', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_home_hero_cta_text" name="devnahian_auracare_home_hero_cta_text" value="<?php echo esc_attr( $hero_cta_text ); ?>" class="ac-input" placeholder="Schedule Consultation">
      </div>
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_home_hero_cta_url"><?php esc_html_e( 'Primary Button URL', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_home_hero_cta_url" name="devnahian_auracare_home_hero_cta_url" value="<?php echo esc_attr( $hero_cta_url ); ?>" class="ac-input" placeholder="/appointment">
      </div>

      <!-- Video Tour Modal URL -->
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_home_hero_video_url"><?php esc_html_e( 'Video Tour Popup URL (YouTube / Vimeo)', 'devnahian-auracare' ); ?></label>
        <input type="url" id="devnahian_auracare_home_hero_video_url" name="devnahian_auracare_home_hero_video_url" value="<?php echo esc_url( $hero_video_url ); ?>" class="ac-input" placeholder="https://www.youtube.com/watch?v=...">
        <span class="ac-hint"><?php esc_html_e( 'Triggers the light-box clinical tour video.', 'devnahian-auracare' ); ?></span>
      </div>

      <!-- Hero Visual Asset -->
      <div class="ac-field-group">
        <label class="ac-label"><?php esc_html_e( 'Hero Right Image / Illustration', 'devnahian-auracare' ); ?></label>
        <div class="ac-hero-img-box ac-upload-hero-image" title="<?php esc_attr_e( 'Select Hero Image', 'devnahian-auracare' ); ?>">
          <input type="hidden" name="devnahian_auracare_home_hero_image" value="<?php echo esc_url( $hero_image ); ?>" class="ac-hero-image-input">
          <?php if ( ! empty( $hero_image ) ) : ?>
            <img src="<?php echo esc_url( $hero_image ); ?>" alt="">
          <?php else : ?>
            <span style="font-size:11px; font-weight:700; color:#64748b;"><?php esc_html_e( '+ Upload Main Hero Image', 'devnahian-auracare' ); ?></span>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- CARD 2: Modular Section Visibility Toggles -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #f0fdf4; color: #16a34a;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <polyline points="20 6 9 17 4 12"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Homepage Section Modules (Enable / Disable)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Turn homepage sections on or off instantly using interactive switches.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <!-- Services Section Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_home_show_services" value="1" <?php checked( $show_services, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Clinical Services Showcase', 'devnahian-auracare' ); ?></span>
        </label>
      </div>

      <!-- Departments Section Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_home_show_departments" value="1" <?php checked( $show_departments, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Specialized Departments Grid', 'devnahian-auracare' ); ?></span>
        </label>
      </div>

      <!-- Doctors Directory Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_home_show_doctors" value="1" <?php checked( $show_doctors, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Attending Physicians & Specialists', 'devnahian-auracare' ); ?></span>
        </label>
      </div>

      <!-- Booking Form Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_home_show_appointment" value="1" <?php checked( $show_appointment, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Appointment Scheduling Intake', 'devnahian-auracare' ); ?></span>
        </label>
      </div>

      <!-- Patient Testimonials Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_home_show_testimonials" value="1" <?php checked( $show_testimonials, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Patient Stories & Testimonials', 'devnahian-auracare' ); ?></span>
        </label>
      </div>

      <!-- Clinical Gallery Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_home_show_gallery" value="1" <?php checked( $show_gallery, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Hospital Facilities Photo Gallery', 'devnahian-auracare' ); ?></span>
        </label>
      </div>

      <!-- Blog Journal Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_home_show_blogs" value="1" <?php checked( $show_blogs, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Medical Research & Blog Articles', 'devnahian-auracare' ); ?></span>
        </label>
      </div>

      <!-- FAQs Switch -->
      <div>
        <label class="ac-switch-control">
          <input type="checkbox" name="devnahian_auracare_home_show_faqs" value="1" <?php checked( $show_faqs, '1' ); ?>>
          <span class="ac-switch-track"></span>
          <span class="ac-switch-label"><?php esc_html_e( 'Frequently Asked Questions (FAQ)', 'devnahian-auracare' ); ?></span>
        </label>
      </div>
    </div>
  </div>

  <!-- CARD 3: Quick Highlights / Feature Cards Repeater -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #fef3c7; color: #d97706;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
          <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
        </svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Floating Hero Highlights (Repeater)', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Add 3-4 feature cards floating over the lower boundary of the hero section (e.g. 24/7 Emergency, Online Results, Specialist Doctors).', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-repeater-list" id="featureCardsContainer">
      <?php if ( ! empty( $feature_cards ) ) : ?>
        <?php foreach ( $feature_cards as $index =>$item ) : ?>
          <?php
            $icon  = isset($item['icon'] ) ? $item['icon'] : '';$title = isset( $item['title'] ) ?$item['title'] : '';
            $desc  = isset($item['desc'] ) ? $item['desc'] : '';$url   = isset( $item['url'] ) ?$item['url'] : '';
          ?>
          <div class="ac-feat-item" data-index="<?php echo esc_attr( $index ); ?>">
            <div class="ac-item-topbar">
              <span class="ac-item-handle">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <?php esc_html_e( 'Feature Highlight', 'devnahian-auracare' ); ?> #<span class="ac-row-num"><?php echo esc_html( $index + 1 ); ?></span>
              </span>
              <button type="button" class="ac-btn-remove ac-remove-feat">&times; <?php esc_html_e( 'Remove', 'devnahian-auracare' ); ?></button>
            </div>

            <div style="display:flex; gap:16px; align-items:flex-start;">
              <div class="ac-feat-icon-picker ac-upload-feat-icon" title="<?php esc_attr_e( 'Select Icon / Image', 'devnahian-auracare' ); ?>">
                <input type="hidden" name="devnahian_auracare_home_feature_cards[<?php echo esc_attr( $index ); ?>][icon]" value="<?php echo esc_url( $icon ); ?>" class="ac-feat-icon-input">
                <?php if ( ! empty( $icon ) ) : ?>
                  <img src="<?php echo esc_url( $icon ); ?>" alt="">
                <?php else : ?>
                  <span style="font-size:10px; font-weight:700; color:#64748b; text-transform:uppercase;"><?php esc_html_e( '+ Icon', 'devnahian-auracare' ); ?></span>
                <?php endif; ?>
              </div>

              <div style="flex-grow:1;" class="ac-grid-2">
                <div class="ac-field-group">
                  <label class="ac-label"><?php esc_html_e( 'Feature Title', 'devnahian-auracare' ); ?></label>
                  <input type="text" name="devnahian_auracare_home_feature_cards[<?php echo esc_attr( $index ); ?>][title]" value="<?php echo esc_attr( $title ); ?>" class="ac-input" placeholder="e.g. 24/7 Rapid Emergency">
                </div>
                <div class="ac-field-group">
                  <label class="ac-label"><?php esc_html_e( 'Target Link (Optional)', 'devnahian-auracare' ); ?></label>
                  <input type="text" name="devnahian_auracare_home_feature_cards[<?php echo esc_attr( $index ); ?>][url]" value="<?php echo esc_attr( $url ); ?>" class="ac-input" placeholder="e.g. /contact#emergency">
                </div>
                <div class="ac-field-group ac-grid-full">
                  <label class="ac-label"><?php esc_html_e( 'Brief Description', 'devnahian-auracare' ); ?></label>
                  <input type="text" name="devnahian_auracare_home_feature_cards[<?php echo esc_attr( $index ); ?>][desc]" value="<?php echo esc_attr( $desc ); ?>" class="ac-input" placeholder="Immediate ambulance dispatch and ICU triage ready around the clock.">
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <button type="button" class="ac-btn-add" id="acAddFeat">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      <?php esc_html_e( 'Add Feature Highlight', 'devnahian-auracare' ); ?>
    </button>
  </div>

</div>

<!-- JavaScript for Repeater Rows and Media Library Picker -->
<script>
jQuery(document).ready(function($) {

  function updateRowNumbers() {
    $('#featureCardsContainer .ac-feat-item').each(function(i) {
      $(this).find('.ac-row-num').text(i + 1);
    });
  }

  // Hero Image Picker
  $(document).on('click', '.ac-upload-hero-image', function(e) {
    e.preventDefault();
    let container = $(this);
    let inputField = container.find('.ac-hero-image-input');

    let mediaFrame = wp.media({
      title: '<?php esc_html_e( 'Select Main Hero Image', 'devnahian-auracare' ); ?>',
      button: { text: '<?php esc_html_e( 'Use This Image', 'devnahian-auracare' ); ?>' },
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

  // Add Feature Highlight Item
  $('#acAddFeat').on('click', function(e) {
    e.preventDefault();
    let index = Date.now();

    let rowHtml = `
      <div class="ac-feat-item" data-index="${index}">
        <div class="ac-item-topbar">
          <span class="ac-item-handle">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <?php esc_html_e( 'Feature Highlight', 'devnahian-auracare' ); ?> #<span class="ac-row-num"></span>
          </span>
          <button type="button" class="ac-btn-remove ac-remove-feat">&times; <?php esc_html_e( 'Remove', 'devnahian-auracare' ); ?></button>
        </div>

        <div style="display:flex; gap:16px; align-items:flex-start;">
          <div class="ac-feat-icon-picker ac-upload-feat-icon" title="<?php esc_attr_e( 'Select Icon / Image', 'devnahian-auracare' ); ?>">
            <input type="hidden" name="devnahian_auracare_home_feature_cards[${index}][icon]" value="" class="ac-feat-icon-input">
            <span style="font-size:10px; font-weight:700; color:#64748b; text-transform:uppercase;">+ Icon</span>
          </div>

          <div style="flex-grow:1;" class="ac-grid-2">
            <div class="ac-field-group">
              <label class="ac-label"><?php esc_html_e( 'Feature Title', 'devnahian-auracare' ); ?></label>
              <input type="text" name="devnahian_auracare_home_feature_cards[${index}][title]" value="" class="ac-input" placeholder="e.g. 24/7 Rapid Emergency">
            </div>
            <div class="ac-field-group">
              <label class="ac-label"><?php esc_html_e( 'Target Link (Optional)', 'devnahian-auracare' ); ?></label>
              <input type="text" name="devnahian_auracare_home_feature_cards[${index}][url]" value="" class="ac-input" placeholder="e.g. /contact#emergency">
            </div>
            <div class="ac-field-group ac-grid-full">
              <label class="ac-label"><?php esc_html_e( 'Brief Description', 'devnahian-auracare' ); ?></label>
              <input type="text" name="devnahian_auracare_home_feature_cards[${index}][desc]" value="" class="ac-input" placeholder="Immediate ambulance dispatch and ICU triage ready around the clock.">
            </div>
          </div>
        </div>
      </div>
    `;

    $('#featureCardsContainer').append(rowHtml);
    updateRowNumbers();
  });

  // Remove Feature Item
  $(document).on('click', '.ac-remove-feat', function() {$(this).closest('.ac-feat-item').remove();
    updateRowNumbers();
  });

  // Feature Icon Media Picker
  $(document).on('click', '.ac-upload-feat-icon', function(e) {
    e.preventDefault();
    let container = $(this);
    let inputField = container.find('.ac-feat-icon-input');

    let mediaFrame = wp.media({
      title: '<?php esc_html_e( 'Select Feature Icon', 'devnahian-auracare' ); ?>',
      button: { text: '<?php esc_html_e( 'Use This Icon', 'devnahian-auracare' ); ?>' },
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