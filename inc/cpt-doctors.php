<?>
<?php
/**
 * Register Custom Post Type: Doctors & Meta Boxes
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Doctor Custom Post Type
 */
function devnahian_auracare_register_doctor_cpt() {
    $labels = array(
        'name'                  => _x( 'Doctors', 'Post Type General Name', 'devnahian-auracare' ),
        'singular_name'         => _x( 'Doctor', 'Post Type Singular Name', 'devnahian-auracare' ),
        'menu_name'             => __( 'Doctors', 'devnahian-auracare' ),
        'all_items'             => __( 'All Doctors', 'devnahian-auracare' ),
        'add_new_item'          => __( 'Add New Doctor', 'devnahian-auracare' ),
        'edit_item'             => __( 'Edit Doctor', 'devnahian-auracare' ),
        'new_item'              => __( 'New Doctor', 'devnahian-auracare' ),
        'view_item'             => __( 'View Doctor', 'devnahian-auracare' ),
        'search_items'          => __( 'Search Doctors', 'devnahian-auracare' ),
        'not_found'             => __( 'No doctors found', 'devnahian-auracare' ),
        'not_found_in_trash'    => __( 'No doctors found in Trash', 'devnahian-auracare' ),
    );

    $args = array(
        'label'                 => __( 'Doctor', 'devnahian-auracare' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-id-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => false, // Gutenberg disabled
    );

    register_post_type( 'doctor', $args );

    // Register Custom Taxonomy: Doctor Specialization / Department
    register_taxonomy(
        'doctor_department',
        'doctor',
        array(
            'label'             => __( 'Doctor Departments', 'devnahian-auracare' ),
            'rewrite'           => array( 'slug' => 'doctor-department' ),
            'hierarchical'      => true,
            'show_in_rest'      => false, // Gutenberg disabled
            'show_admin_column' => true,
        )
    );
}
add_action( 'init', 'devnahian_auracare_register_doctor_cpt' );

/**
 * Add Meta Box for Doctor Professional Details
 */
function devnahian_auracare_add_doctor_metaboxes() {
    add_meta_box(
        'devnahian_auracare_doctor_details',
        __( 'Doctor Professional Details', 'devnahian-auracare' ),
        'devnahian_auracare_doctor_metabox_callback',
        'doctor',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'devnahian_auracare_add_doctor_metaboxes' );

/**
 * Meta Box HTML Callback
 */
function devnahian_auracare_doctor_metabox_callback( $post ) {
    wp_nonce_field( 'devnahian_auracare_doctor_nonce_action', 'devnahian_auracare_doctor_nonce' );

    $job_title       = get_post_meta( $post->ID, '_doctor_job_title', true );
    $medical_school  = get_post_meta( $post->ID, '_doctor_medical_school', true );
    $experience_yrs  = get_post_meta( $post->ID, '_doctor_experience_yrs', true );
    $phone           = get_post_meta( $post->ID, '_doctor_phone', true );
    $email           = get_post_meta( $post->ID, '_doctor_email', true );
    $badge_text      = get_post_meta( $post->ID, '_doctor_badge_text', true );
    ?>
    <style>
        .devnahian-meta-row { margin-bottom: 15px; }
        .devnahian-meta-row label { display: block; font-weight: 700; margin-bottom: 5px; color: #1e293b; }
        .devnahian-meta-row input { width: 100%; padding: 8px 12px; border: 1px solid #cbd5e1; border-radius: 4px; font-size: 14px; }
        .devnahian-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    </style>

    <div class="devnahian-meta-row">
        <label for="doctor_job_title"><?php esc_html_e( 'Job Title / Role (e.g. Chief of Interventional Cardiology)', 'devnahian-auracare' ); ?></label>
        <input type="text" id="doctor_job_title" name="doctor_job_title" value="<?php echo esc_attr( $job_title ); ?>">
    </div>

    <div class="devnahian-meta-grid">
        <div class="devnahian-meta-row">
            <label for="doctor_medical_school"><?php esc_html_e( 'Medical School / Credentials (e.g. Harvard Medical School)', 'devnahian-auracare' ); ?></label>
            <input type="text" id="doctor_medical_school" name="doctor_medical_school" value="<?php echo esc_attr( $medical_school ); ?>">
        </div>
        <div class="devnahian-meta-row">
            <label for="doctor_experience_yrs"><?php esc_html_e( 'Years of Experience (e.g. 14 Yrs Exp.)', 'devnahian-auracare' ); ?></label>
            <input type="text" id="doctor_experience_yrs" name="doctor_experience_yrs" value="<?php echo esc_attr( $experience_yrs ); ?>">
        </div>
    </div>

    <div class="devnahian-meta-grid">
        <div class="devnahian-meta-row">
            <label for="doctor_phone"><?php esc_html_e( 'Direct Phone Number', 'devnahian-auracare' ); ?></label>
            <input type="text" id="doctor_phone" name="doctor_phone" value="<?php echo esc_attr( $phone ); ?>">
        </div>
        <div class="devnahian-meta-row">
            <label for="doctor_email"><?php esc_html_e( 'Professional Email Address', 'devnahian-auracare' ); ?></label>
            <input type="email" id="doctor_email" name="doctor_email" value="<?php echo esc_attr( $email ); ?>">
        </div>
    </div>

    <div class="devnahian-meta-row">
        <label for="doctor_badge_text"><?php esc_html_e( 'Card Badge Text (e.g. Chief of Cardiology)', 'devnahian-auracare' ); ?></label>
        <input type="text" id="doctor_badge_text" name="doctor_badge_text" value="<?php echo esc_attr( $badge_text ); ?>">
    </div>
    <?php
}

/**
 * Save Doctor Meta Box Data
 */
function devnahian_auracare_save_doctor_metabox( $post_id ) {
    if ( ! isset( $_POST['devnahian_auracare_doctor_nonce'] ) || ! wp_verify_nonce( $_POST['devnahian_auracare_doctor_nonce'], 'devnahian_auracare_doctor_nonce_action' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['post_type'] ) && 'doctor' === $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    } else {
        return;
    }

    if ( isset( $_POST['doctor_job_title'] ) ) {
        update_post_meta( $post_id, '_doctor_job_title', sanitize_text_field( $_POST['doctor_job_title'] ) );
    }
    if ( isset( $_POST['doctor_medical_school'] ) ) {
        update_post_meta( $post_id, '_doctor_medical_school', sanitize_text_field( $_POST['doctor_medical_school'] ) );
    }
    if ( isset( $_POST['doctor_experience_yrs'] ) ) {
        update_post_meta( $post_id, '_doctor_experience_yrs', sanitize_text_field( $_POST['doctor_experience_yrs'] ) );
    }
    if ( isset( $_POST['doctor_phone'] ) ) {
        update_post_meta( $post_id, '_doctor_phone', sanitize_text_field( $_POST['doctor_phone'] ) );
    }
    if ( isset( $_POST['doctor_email'] ) ) {
        update_post_meta( $post_id, '_doctor_email', sanitize_email( $_POST['doctor_email'] ) );
    }
    if ( isset( $_POST['doctor_badge_text'] ) ) {
        update_post_meta( $post_id, '_doctor_badge_text', sanitize_text_field( $_POST['doctor_badge_text'] ) );
    }
}
add_action( 'save_post', 'devnahian_auracare_save_doctor_metabox' );