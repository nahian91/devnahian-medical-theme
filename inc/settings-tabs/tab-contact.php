<?php
/**
 * Settings Tab: Contact Us Configuration (No Slug - Clean UI/UX)
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$contact_subtitle = get_option( 'devnahian_auracare_contact_subtitle', 'Get In Touch' );
$contact_title    = get_option( 'devnahian_auracare_contact_title', 'We Are Here For Your Care' );
$contact_desc     = get_option( 'devnahian_auracare_contact_desc', 'Reach out to our clinical coordinators for consultations, department triage, or emergency health support.' );
$contact_address  = get_option( 'devnahian_auracare_contact_address', '742 Evergreen Terrace, Medical District, NY' );
$contact_phone    = get_option( 'devnahian_auracare_contact_phone', '(800) 555-0199' );
$contact_email    = get_option( 'devnahian_auracare_contact_email', 'support@auracure-health.org' );
$contact_hours    = get_option( 'devnahian_auracare_contact_hours', 'Mon–Sat: 8:00 AM – 9:00 PM' );
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
    padding: 28px;
    margin-bottom: 24px;
    box-shadow: 0 1px 3px rgba(15, 23, 42, 0.05);
  }
  .ac-card-head {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 22px;
    padding-bottom: 16px;
    border-bottom: 1px solid #f1f5f9;
  }
  .ac-icon-badge {
    width: 38px;
    height: 38px;
    border-radius: 8px;
    background: #e0f2fe;
    color: #0284c7;
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
    gap: 20px;
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
    transition: all 0.2s ease-in-out;
    box-sizing: border-box;
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
    margin: 2px 0 0 0;
  }
</style>

<div class="ac-tab-panel">

  <!-- CARD 1: Header & Typography Intro -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Hero & Section Content', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Configure the title badge, main heading, and intro description text.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_contact_subtitle"><?php esc_html_e( 'Section Subtitle / Badge', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_contact_subtitle" name="devnahian_auracare_contact_subtitle" value="<?php echo esc_attr( $contact_subtitle ); ?>" class="ac-input" placeholder="e.g. Get In Touch">
        <span class="ac-hint"><?php esc_html_e( 'Badge label above the main title.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_contact_title"><?php esc_html_e( 'Main Heading Title', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_contact_title" name="devnahian_auracare_contact_title" value="<?php echo esc_attr( $contact_title ); ?>" class="ac-input" placeholder="e.g. We Are Here For Your Care">
        <span class="ac-hint"><?php esc_html_e( 'Primary title for the contact section.', 'devnahian-auracare' ); ?></span>
      </div>

      <div class="ac-field-group ac-grid-full">
        <label class="ac-label" for="devnahian_auracare_contact_desc"><?php esc_html_e( 'Description Paragraph', 'devnahian-auracare' ); ?></label>
        <textarea id="devnahian_auracare_contact_desc" name="devnahian_auracare_contact_desc" rows="3" class="ac-textarea" placeholder="Describe the intake or triage options available to patients..."><?php echo esc_textarea( $contact_desc ); ?></textarea>
      </div>
    </div>
  </div>

  <!-- CARD 2: Physical Location & Reachability -->
  <div class="ac-card">
    <div class="ac-card-head">
      <div class="ac-icon-badge" style="background: #ecfdf5; color: #059669;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      </div>
      <div>
        <h3><?php esc_html_e( 'Direct Hospital Reachability', 'devnahian-auracare' ); ?></h3>
        <p><?php esc_html_e( 'Official clinic address, hotline dispatch numbers, and operating hours.', 'devnahian-auracare' ); ?></p>
      </div>
    </div>

    <div class="ac-grid-2">
      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_contact_phone"><?php esc_html_e( 'Clinical Helpline / Phone', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_contact_phone" name="devnahian_auracare_contact_phone" value="<?php echo esc_attr( $contact_phone ); ?>" class="ac-input" placeholder="(800) 555-0199">
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_contact_email"><?php esc_html_e( 'Primary Support Email', 'devnahian-auracare' ); ?></label>
        <input type="email" id="devnahian_auracare_contact_email" name="devnahian_auracare_contact_email" value="<?php echo esc_attr( $contact_email ); ?>" class="ac-input" placeholder="support@auracure-health.org">
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_contact_hours"><?php esc_html_e( 'Outpatient Working Hours', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_contact_hours" name="devnahian_auracare_contact_hours" value="<?php echo esc_attr( $contact_hours ); ?>" class="ac-input" placeholder="Mon–Sat: 8:00 AM – 9:00 PM">
      </div>

      <div class="ac-field-group">
        <label class="ac-label" for="devnahian_auracare_contact_address"><?php esc_html_e( 'Facility Physical Address', 'devnahian-auracare' ); ?></label>
        <input type="text" id="devnahian_auracare_contact_address" name="devnahian_auracare_contact_address" value="<?php echo esc_attr( $contact_address ); ?>" class="ac-input" placeholder="742 Evergreen Terrace, Medical District, NY">
      </div>
    </div>
  </div>

</div>