<?>
<?php
/**
 * Register Custom Post Type: Departments & Meta Boxes
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Department Custom Post Type
 */
function devnahian_auracare_register_department_cpt() {
    $labels = array(
        'name'                  => _x( 'Departments', 'Post Type General Name', 'devnahian-auracare' ),
        'singular_name'         => _x( 'Department', 'Post Type Singular Name', 'devnahian-auracare' ),
        'menu_name'             => __( 'Departments', 'devnahian-auracare' ),
        'all_items'             => __( 'All Departments', 'devnahian-auracare' ),
        'add_new_item'          => __( 'Add New Department', 'devnahian-auracare' ),
        'edit_item'             => __( 'Edit Department', 'devnahian-auracare' ),
        'new_item'              => __( 'New Department', 'devnahian-auracare' ),
        'view_item'             => __( 'View Department', 'devnahian-auracare' ),
        'search_items'          => __( 'Search Departments', 'devnahian-auracare' ),
        'not_found'             => __( 'No departments found', 'devnahian-auracare' ),
        'not_found_in_trash'    => __( 'No departments found in Trash', 'devnahian-auracare' ),
    );

    $args = array(
        'label'                 => __( 'Department', 'devnahian-auracare' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-hospital',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => false, // Gutenberg disabled
    );

    register_post_type( 'department', $args );
}
add_action( 'init', 'devnahian_auracare_register_department_cpt' );

/**
 * Add Meta Box for Department Statistics
 */
function devnahian_auracare_add_department_metaboxes() {
    add_meta_box(
        'devnahian_auracare_department_details',
        __( 'Department Statistics & Details', 'devnahian-auracare' ),
        'devnahian_auracare_department_metabox_callback',
        'department',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'devnahian_auracare_add_department_metaboxes' );

/**
 * Department Meta Box HTML Callback
 */
function devnahian_auracare_department_metabox_callback( $post ) {
    wp_nonce_field( 'devnahian_auracare_dept_nonce_action', 'devnahian_auracare_dept_nonce' );

    $case_volume = get_post_meta( $post->ID, '_dept_case_volume', true );
    $badge_text  = get_post_meta( $post->ID, '_dept_badge_text', true );
    ?>
    <style>
        .devnahian-meta-row { margin-bottom: 15px; }
        .devnahian-meta-row label { display: block; font-weight: 700; margin-bottom: 5px; color: #1e293b; }
        .devnahian-meta-row input { width: 100%; padding: 8px 12px; border: 1px solid #cbd5e1; border-radius: 4px; font-size: 14px; }
        .devnahian-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    </style>

    <div class="devnahian-meta-grid">
        <div class="devnahian-auracare-meta-row devnahian-meta-row">
            <label for="dept_case_volume"><?php esc_html_e( 'Annual Case Volume (e.g. 4,200+ Cases / Yr)', 'devnahian-auracare' ); ?></label>
            <input type="text" id="dept_case_volume" name="dept_case_volume" value="<?php echo esc_attr( $case_volume ); ?>">
        </div>
        <div class="devnahian-auracare-meta-row devnahian-meta-row">
            <label for="dept_badge_text"><?php esc_html_e( 'Category Filter Tag (e.g. surgical, neurology, diagnostic)', 'devnahian-auracare' ); ?></label>
            <input type="text" id="dept_badge_text" name="dept_badge_text" value="<?php echo esc_attr( $badge_text ); ?>">
        </div>
    </div>
    <?php
}

/**
 * Save Department Meta Box Data
 */
function devnahian_auracare_save_department_metabox( $post_id ) {
    if ( ! isset( $_POST['devnahian_auracare_dept_nonce'] ) || ! wp_verify_nonce( $_POST['devnahian_auracare_dept_nonce'], 'devnahian_auracare_dept_nonce_action' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['post_type'] ) && 'department' === $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    } else {
        return;
    }

    if ( isset( $_POST['dept_case_volume'] ) ) {
        update_post_meta( $post_id, '_dept_case_volume', sanitize_text_field( $_POST['dept_case_volume'] ) );
    }
    if ( isset( $_POST['dept_badge_text'] ) ) {
        update_post_meta( $post_id, '_dept_badge_text', sanitize_text_field( $_POST['dept_badge_text'] ) );
    }
}
add_action( 'save_post', 'devnahian_auracare_save_department_metabox' );