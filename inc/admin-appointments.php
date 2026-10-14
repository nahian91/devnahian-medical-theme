<?php
/**
 * AuraCure Admin Appointments Manager & Dynamic Persistence
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Appointment Custom Post Type
 */
function devnahian_auracare_register_appointment_cpt() {
    $labels = array(
        'name'                  => _x( 'Appointments', 'Post Type General Name', 'devnahian-auracare' ),
        'singular_name'         => _x( 'Appointment', 'Post Type Singular Name', 'devnahian-auracare' ),
        'menu_name'             => __( 'Appointments', 'devnahian-auracare' ),
        'all_items'             => __( 'All Appointments', 'devnahian-auracare' ),
        'add_new_item'          => __( 'Add Appointment', 'devnahian-auracare' ),
        'edit_item'             => __( 'Edit Appointment', 'devnahian-auracare' ),
        'view_item'             => __( 'View Appointment', 'devnahian-auracare' ),
        'search_items'          => __( 'Search Appointments', 'devnahian-auracare' ),
        'not_found'             => __( 'No appointments found', 'devnahian-auracare' ),
        'not_found_in_trash'    => __( 'No appointments found in Trash', 'devnahian-auracare' ),
    );

    $args = array(
        'label'                 => __( 'Appointment', 'devnahian-auracare' ),
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'menu_icon'             => 'dashicons-calendar-alt',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'capability_type'       => 'post',
        'show_in_rest'          => false,
    );

    register_post_type( 'auracare_appt', $args );
}
add_action( 'init', 'devnahian_auracare_register_appointment_cpt' );

/**
 * Remove Default Submenus and Register Settings Page
 */
function devnahian_auracare_clean_appointment_menu() {
    $parent_slug = 'edit.php?post_type=auracare_appt';

    remove_submenu_page( $parent_slug, $parent_slug );
    remove_submenu_page( $parent_slug, 'post-new.php?post_type=auracare_appt' );

    add_submenu_page(
        $parent_slug,
        __( 'Appointment Scheduler Settings', 'devnahian-auracare' ),
        __( 'Settings', 'devnahian-auracare' ),
        'manage_options',
        'auracare-appt-settings',
        'devnahian_auracare_appt_settings_page_html'
    );
}
add_action( 'admin_menu', 'devnahian_auracare_clean_appointment_menu', 999 );

/**
 * Render Awesome UI/UX Header, Stats, and Navigation Tabs
 */
function devnahian_auracare_render_appt_tabs() {
    $screen = get_current_screen();
    if ( ! $screen || ( 'auracare_appt' !== $screen->post_type && 'auracare_page_auracare-appt-settings' !== $screen->id ) ) {
        return;
    }

    $current_page = isset( $_GET['page'] ) ? sanitize_text_field( $_GET['page'] ) : '';
    $is_settings  = ( 'auracare-appt-settings' === $current_page );
    $is_add       = ( 'auracare_appt' === $screen->post_type && 'post' === $screen->base );
    $is_all       = ( 'auracare_appt' === $screen->post_type && 'edit' === $screen->base );

    // Quick Stats Counts
    $total_appts = wp_count_posts( 'auracare_appt' )->publish ?? 0;
    ?>
    <style>
        /* Hide WordPress default sidebar dropdown & native publishing sidebar clutter */
        #adminmenu .wp-submenu { display: none !important; }
        <?php if ( 'auracare_appt' === $screen->post_type && ('post' === $screen->base || 'edit' === $screen->base) ) : ?>
        #side-sortables, #major-publishing-actions, #minor-publishing-actions, #submitdiv .hndle, #titlediv { display: none !important; }
        #post-body.columns-2 { background: transparent !important; margin-right: 0 !important; }
        #post-body.columns-2 #post-body-content { float: none !important; width: 100% !important; }
        #poststuff { min-width: auto !important; }
        #publish { background: #0284c7 !important; border-color: #0284c7 !important; color: #fff !important; font-size: 14px !important; font-weight: 600 !important; padding: 10px 28px !important; height: auto !important; border-radius: 6px !important; box-shadow: 0 4px 12px rgba(2, 132, 199, 0.3) !important; cursor: pointer; transition: all 0.2s; }
        #publish:hover { background: #0369a1 !important; transform: translateY(-1px); }
        <?php endif; ?>

        /* Awesome App Dashboard Header Banner */
        .devnahian-dashboard-header {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            border-radius: 12px;
            padding: 24px 30px;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 15px 0 20px 0;
            box-shadow: 0 4px 20px rgba(15, 23, 42, 0.15);
        }
        .devnahian-dashboard-title h2 {
            color: #ffffff !important;
            font-size: 24px;
            font-weight: 700;
            margin: 0 0 6px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .devnahian-dashboard-title p {
            color: #94a3b8;
            font-size: 14px;
            margin: 0;
        }
        .devnahian-dashboard-stats {
            display: flex;
            gap: 15px;
        }
        .devnahian-stat-pill {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.12);
            padding: 10px 18px;
            border-radius: 8px;
            text-align: center;
        }
        .devnahian-stat-pill span {
            display: block;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #94a3b8;
            margin-bottom: 2px;
        }
        .devnahian-stat-pill strong {
            font-size: 20px;
            color: #38bdf8;
        }

        /* Modern UI/UX Tab Bar Container */
        .devnahian-appt-tabs-container {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 24px;
            border-bottom: 2px solid #cbd5e1;
            padding: 0 10px;
            background: #f8fafc;
            border-radius: 8px 8px 0 0;
            border: 1px solid #cbd5e1;
            border-bottom: 2px solid #0284c7;
        }
        .devnahian-appt-tab-item {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 20px;
            background: #e2e8f0;
            border: 1px solid #cbd5e1;
            border-bottom: none;
            border-radius: 6px 6px 0 0;
            color: #475569;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.2s ease-in-out;
            margin-top: 6px;
        }
        .devnahian-appt-tab-item:hover {
            background: #ffffff;
            color: #0284c7;
        }
        .devnahian-appt-tab-item.active-tab {
            background: #ffffff;
            color: #0284c7;
            border-color: #cbd5e1;
            border-bottom: 2px solid #ffffff;
            margin-bottom: -2px;
            box-shadow: 0 -2px 8px rgba(0,0,0,0.03);
        }
        .devnahian-appt-tab-item .dashicons {
            font-size: 18px;
            width: 18px;
            height: 18px;
        }

        /* Table UI Enhancements */
        .wp-list-table.posts { border-radius: 8px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
        .wp-list-table.posts th { background: #f1f5f9; color: #334155; font-weight: 700; }
        .devnahian-format-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }
        .badge-clinic { background: #e0f2fe; color: #0369a1; }
        .badge-telehealth { background: #fdf2f8; color: #be185d; }
        .badge-scan { background: #fef3c7; color: #b45309; }
    </style>

    <!-- App Header Banner -->
    <div class="devnahian-dashboard-header">
        <div class="devnahian-dashboard-title">
            <h2><span class="dashicons dashicons-calendar-alt" style="font-size:28px; width:28px; height:28px; color:#38bdf8;"></span> AuraCure Clinical Appointments</h2>
            <p>Manage patient intakes, specialist assignments, and telehealth scheduling.</p>
        </div>
        <div class="devnahian-dashboard-stats">
            <div class="devnahian-stat-pill">
                <span>Total Booked</span>
                <strong><?php echo esc_html( $total_appts ); ?></strong>
            </div>
            <div class="devnahian-stat-pill">
                <span>System Status</span>
                <strong style="color:#22c55e; font-size:14px; padding-top:4px; display:block;">● Operational</strong>
            </div>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <div class="devnahian-appt-tabs-container">
        <a href="<?php echo esc_url( admin_url( 'edit.php?post_type=auracare_appt' ) ); ?>" class="devnahian-appt-tab-item <?php echo $is_all ? 'active-tab' : ''; ?>">
            <span class="dashicons dashicons-list-view"></span>
            <?php esc_html_e( 'All Appointments', 'devnahian-auracare' ); ?>
        </a>
        <a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=auracare_appt' ) ); ?>" class="devnahian-appt-tab-item <?php echo $is_add ? 'active-tab' : ''; ?>">
            <span class="dashicons dashicons-plus-alt2"></span>
            <?php esc_html_e( 'Add Appointment', 'devnahian-auracare' ); ?>
        </a>
        <a href="<?php echo esc_url( admin_url( 'edit.php?post_type=auracare_appt&page=auracare-appt-settings' ) ); ?>" class="devnahian-appt-tab-item <?php echo $is_settings ? 'active-tab' : ''; ?>">
            <span class="dashicons dashicons-admin-generic"></span>
            <?php esc_html_e( 'Settings', 'devnahian-auracare' ); ?>
        </a>
    </div>
    <?php
}
add_action( 'all_admin_notices', 'devnahian_auracare_render_appt_tabs' );

/**
 * Register Appointment Settings Fields
 */
function devnahian_auracare_register_appt_settings() {
    register_setting( 'devnahian_appt_options_group', 'devnahian_appt_fee_clinic' );
    register_setting( 'devnahian_appt_options_group', 'devnahian_appt_fee_telehealth' );
    register_setting( 'devnahian_appt_options_group', 'devnahian_appt_fee_scan' );
    register_setting( 'devnahian_appt_options_group', 'devnahian_appt_auto_email_pass' );
}
add_action( 'admin_init', 'devnahian_auracare_register_appt_settings' );

/**
 * Appointment Settings Page HTML (Gorgeous Card Layout)
 */
function devnahian_auracare_appt_settings_page_html() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    ?>
    <div class="wrap" style="max-width: 900px;">
        <?php settings_errors(); ?>
        
        <div style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 10px; padding: 35px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-top: 10px;">
            <h2 style="margin-top: 0; font-size: 20px; color: #0f172a; border-bottom: 1px solid #e2e8f0; padding-bottom: 15px;">
                <span class="dashicons dashicons-admin-generic" style="color: #0284c7;"></span> Global Appointment &amp; Fee Configurations
            </h2>
            <form action="options.php" method="post" style="margin-top: 25px;">
                <?php
                settings_fields( 'devnahian_appt_options_group' );
                do_settings_sections( 'devnahian_appt_options_group' );
                ?>
                <table class="form-table" role="presentation">
                    <tr>
                        <th scope="row"><label for="devnahian_appt_fee_clinic"><?php esc_html_e( 'In-Clinic Visit Fee ($)', 'devnahian-auracare' ); ?></label></th>
                        <td><input type="text" id="devnahian_appt_fee_clinic" name="devnahian_appt_fee_clinic" value="<?php echo esc_attr( get_option( 'devnahian_appt_fee_clinic', '180' ) ); ?>" class="regular-text" style="padding: 8px 12px; border-radius: 6px;"></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="devnahian_appt_fee_telehealth"><?php esc_html_e( 'Telehealth Video Fee ($)', 'devnahian-auracare' ); ?></label></th>
                        <td><input type="text" id="devnahian_appt_fee_telehealth" name="devnahian_appt_fee_telehealth" value="<?php echo esc_attr( get_option( 'devnahian_appt_fee_telehealth', '120' ) ); ?>" class="regular-text" style="padding: 8px 12px; border-radius: 6px;"></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="devnahian_appt_fee_scan"><?php esc_html_e( 'Diagnostic Scan Fee ($)', 'devnahian-auracare' ); ?></label></th>
                        <td><input type="text" id="devnahian_appt_fee_scan" name="devnahian_appt_fee_scan" value="<?php echo esc_attr( get_option( 'devnahian_appt_fee_scan', '240' ) ); ?>" class="regular-text" style="padding: 8px 12px; border-radius: 6px;"></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="devnahian_appt_auto_email_pass"><?php esc_html_e( 'Automated Digital Pass Emails', 'devnahian-auracare' ); ?></label></th>
                        <td>
                            <label style="font-weight: 600; color: #334155;">
                                <input type="checkbox" id="devnahian_appt_auto_email_pass" name="devnahian_appt_auto_email_pass" value="1" <?php checked( get_option( 'devnahian_appt_auto_email_pass', 1 ), 1 ); ?> style="width: 18px; height: 18px; vertical-align: middle; margin-right: 8px;">
                                <?php esc_html_e( 'Automatically email confirmation pass to patients upon successful booking.', 'devnahian-auracare' ); ?>
                            </label>
                        </td>
                    </tr>
                </table>
                <div style="margin-top: 30px; border-top: 1px solid #e2e8f0; padding-top: 20px;">
                    <?php submit_button( __( 'Save Scheduler Settings', 'devnahian-auracare' ), 'primary', 'submit', true, array( 'style' => 'background: #0284c7; border-color: #0284c7; font-weight: 600; padding: 8px 24px; border-radius: 6px; height: auto;' ) ); ?>
                </div>
            </form>
        </div>
    </div>
    <?php
}

/**
 * Customize Admin Columns for Appointments
 */
function devnahian_auracare_appt_columns( $columns ) {
    $new_columns = array(
        'cb'         => $columns['cb'],
        'title'      => __( 'Reference / Patient', 'devnahian-auracare' ),
        'department' => __( 'Department', 'devnahian-auracare' ),
        'doctor'     => __( 'Physician', 'devnahian-auracare' ),
        'format'     => __( 'Format', 'devnahian-auracare' ),
        'date_slot'  => __( 'Date & Slot', 'devnahian-auracare' ),
        'date'       => $columns['date'],
    );
    return $new_columns;
}
add_filter( 'manage_auracare_appt_posts_columns', 'devnahian_auracare_appt_columns' );

/**
 * Populate Custom Appointment Columns with Badges
 */
function devnahian_auracare_appt_column_data( $column, $post_id ) {
    switch ( $column ) {
        case 'department':
            echo '<strong>' . esc_html( get_post_meta( $post_id, '_appt_department', true ) ) . '</strong>';
            break;
        case 'doctor':
            echo esc_html( get_post_meta( $post_id, '_appt_doctor', true ) );
            break;
        case 'format':
            $format = get_post_meta( $post_id, '_appt_format', true );
            $badge_class = 'badge-clinic';
            if ( 'Telehealth Video' === $format ) {
                $badge_class = 'badge-telehealth';
            } elseif ( 'Diagnostic Scan' === $format ) {
                $badge_class = 'badge-scan';
            }
            echo '<span class="devnahian-format-badge ' . esc_attr( $badge_class ) . '">' . esc_html( $format ) . '</span>';
            break;
        case 'date_slot':
            echo '<span style="color: #0284c7; font-weight: 600;">' . esc_html( get_post_meta( $post_id, '_appt_date_slot', true ) ) . '</span>';
            break;
    }
}
add_action( 'manage_auracare_appt_posts_custom_column', 'devnahian_auracare_appt_column_data', 10, 2 );

/**
 * Add Admin Metabox for Complete Appointment Management
 */
function devnahian_auracare_add_appt_metabox() {
    add_meta_box(
        'devnahian_auracare_appt_details_box',
        __( 'Patient Intake & Schedule Details', 'devnahian-auracare' ),
        'devnahian_auracare_appt_metabox_callback',
        'auracare_appt',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'devnahian_auracare_add_appt_metabox' );

/**
 * Metabox HTML Callback (Awesome App Card UI)
 */
function devnahian_auracare_appt_metabox_callback( $post ) {
    wp_nonce_field( 'devnahian_auracare_appt_nonce_action', 'devnahian_auracare_appt_nonce' );

    $full_name = get_post_meta( $post->ID, '_appt_full_name', true );
    if ( empty( $full_name ) ) {
        $title_parts = explode( ' - ', $post->post_title );
        $full_name = isset( $title_parts[1] ) ? $title_parts[1] : '';
    }

    $phone     = get_post_meta( $post->ID, '_appt_phone', true );
    $email     = get_post_meta( $post->ID, '_appt_email', true );
    $dob       = get_post_meta( $post->ID, '_appt_dob', true );
    $dept      = get_post_meta( $post->ID, '_appt_department', true );
    $doctor    = get_post_meta( $post->ID, '_appt_doctor', true );
    $format    = get_post_meta( $post->ID, '_appt_format', true );
    $date      = get_post_meta( $post->ID, '_appt_date', true );
    $slot      = get_post_meta( $post->ID, '_appt_slot', true );
    $insurance = get_post_meta( $post->ID, '_appt_insurance', true );
    $reason    = get_post_meta( $post->ID, '_appt_reason', true );
    $ref_code  = get_post_meta( $post->ID, '_appt_ref_code', true );
    
    if ( empty( $ref_code ) ) {
        $ref_code = 'AC-' . rand( 10000, 99990 );
    }
    ?>
    <style>
        .devnahian-admin-appt-card { background: #ffffff; border: 1px solid #cbd5e1; border-radius: 10px; padding: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .devnahian-admin-appt-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
        .devnahian-admin-appt-field label { display: block; font-weight: 700; color: #334155; font-size: 13px; margin-bottom: 6px; }
        .devnahian-admin-appt-field input, 
        .devnahian-admin-appt-field select, 
        .devnahian-admin-appt-field textarea { width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; background: #f8fafc; color: #0f172a; outline: none; }
        .devnahian-admin-appt-field input:focus, 
        .devnahian-admin-appt-field select:focus, 
        .devnahian-admin-appt-field textarea:focus { border-color: #0284c7; background: #ffffff; box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15); }
        .devnahian-admin-appt-full { grid-column: 1 / -1; }
    </style>
    <div class="devnahian-admin-appt-card">
        <div class="devnahian-admin-appt-grid">
            
            <!-- Reference & Patient Name -->
            <div class="devnahian-admin-appt-field">
                <label for="admin_ref_code"><?php esc_html_e( 'Reference Code *', 'devnahian-auracare' ); ?></label>
                <input type="text" id="admin_ref_code" name="admin_ref_code" value="<?php echo esc_attr( $ref_code ); ?>" required>
            </div>
            <div class="devnahian-admin-appt-field">
                <label for="admin_full_name"><?php esc_html_e( 'Full Legal Name *', 'devnahian-auracare' ); ?></label>
                <input type="text" id="admin_full_name" name="admin_full_name" value="<?php echo esc_attr( $full_name ); ?>" placeholder="Eleanor Vance" required>
            </div>

            <!-- Contact Information -->
            <div class="devnahian-admin-appt-field">
                <label for="admin_phone"><?php esc_html_e( 'Phone Number *', 'devnahian-auracare' ); ?></label>
                <input type="tel" id="admin_phone" name="admin_phone" value="<?php echo esc_attr( $phone ); ?>" placeholder="(555) 000-0000" required>
            </div>
            <div class="devnahian-admin-appt-field">
                <label for="admin_email"><?php esc_html_e( 'Email Address *', 'devnahian-auracare' ); ?></label>
                <input type="email" id="admin_email" name="admin_email" value="<?php echo esc_attr( $email ); ?>" placeholder="eleanor@example.com" required>
            </div>

            <!-- Date of Birth & Department -->
            <div class="devnahian-admin-appt-field">
                <label for="admin_dob"><?php esc_html_e( 'Date of Birth *', 'devnahian-auracare' ); ?></label>
                <input type="date" id="admin_dob" name="admin_dob" value="<?php echo esc_attr( $dob ); ?>" required>
            </div>
            <div class="devnahian-admin-appt-field">
                <label for="admin_department"><?php esc_html_e( 'Clinical Department *', 'devnahian-auracare' ); ?></label>
                <select id="admin_department" name="admin_department" required>
                    <?php 
                    $depts = array( 'Cardiology', 'Neurology', 'Orthopedics', 'Pediatrics', 'Radiology' );
                    foreach ( $depts as $d ) {
                        echo '<option value="' . esc_attr( $d ) . '" ' . selected( $dept, $d, false ) . '>' . esc_html( $d ) . '</option>';
                    }
                    ?>
                </select>
            </div>

            <!-- Attending Physician & Consultation Format -->
            <div class="devnahian-admin-appt-field">
                <label for="admin_doctor"><?php esc_html_e( 'Attending Physician *', 'devnahian-auracare' ); ?></label>
                <input type="text" id="admin_doctor" name="admin_doctor" value="<?php echo esc_attr( $doctor ); ?>" placeholder="Dr. Sarah Jenkins, MD" required>
            </div>
            <div class="devnahian-admin-appt-field">
                <label for="admin_format"><?php esc_html_e( 'Consultation Format *', 'devnahian-auracare' ); ?></label>
                <select id="admin_format" name="admin_format" required>
                    <?php 
                    $formats = array( 'In-Clinic Visit', 'Telehealth Video', 'Diagnostic Scan' );
                    foreach ( $formats as $f ) {
                        echo '<option value="' . esc_attr( $f ) . '" ' . selected( $format, $f, false ) . '>' . esc_html( $f ) . '</option>';
                    }
                    ?>
                </select>
            </div>

            <!-- Date & Time Slot -->
            <div class="devnahian-admin-appt-field">
                <label for="admin_date"><?php esc_html_e( 'Appointment Date *', 'devnahian-auracare' ); ?></label>
                <input type="date" id="admin_date" name="admin_date" value="<?php echo esc_attr( $date ); ?>" required>
            </div>
            <div class="devnahian-admin-appt-field">
                <label for="admin_slot"><?php esc_html_e( 'Arrival Slot *', 'devnahian-auracare' ); ?></label>
                <select id="admin_slot" name="admin_slot" required>
                    <?php 
                    $slots = array( '08:30 AM', '10:00 AM', '11:30 AM', '01:15 PM', '02:45 PM', '04:00 PM', '05:30 PM', '07:00 PM' );
                    foreach ( $slots as $s ) {
                        echo '<option value="' . esc_attr( $s ) . '" ' . selected( $slot, $s, false ) . '>' . esc_html( $s ) . '</option>';
                    }
                    ?>
                </select>
            </div>

            <!-- Health Insurance Carrier -->
            <div class="devnahian-admin-appt-field devnahian-admin-appt-full">
                <label for="admin_insurance"><?php esc_html_e( 'Health Insurance Carrier', 'devnahian-auracare' ); ?></label>
                <select id="admin_insurance" name="admin_insurance">
                    <?php 
                    $insurances = array( 'Self-Pay', 'BlueCross BlueShield', 'Aetna Health', 'Cigna Healthcare', 'UnitedHealthcare', 'Medicare' );
                    foreach ( $insurances as $ins ) {
                        echo '<option value="' . esc_attr( $ins ) . '" ' . selected( $insurance, $ins, false ) . '>' . esc_html( $ins ) . '</option>';
                    }
                    ?>
                </select>
            </div>

            <!-- Reason for Visit -->
            <div class="devnahian-admin-appt-field devnahian-admin-appt-full">
                <label for="admin_reason"><?php esc_html_e( 'Reason for Visit / Primary Symptoms', 'devnahian-auracare' ); ?></label>
                <textarea id="admin_reason" name="admin_reason" rows="4" placeholder="Briefly describe current symptoms..."><?php echo esc_textarea( $reason ); ?></textarea>
            </div>

        </div>
    </div>
    <?php
}

/**
 * Save Appointment Meta Data from Admin Dashboard
 */
function devnahian_auracare_save_appt_metabox( $post_id ) {
    if ( ! isset( $_POST['devnahian_auracare_appt_nonce'] ) || ! wp_verify_nonce( $_POST['devnahian_auracare_appt_nonce'], 'devnahian_auracare_appt_nonce_action' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( isset( $_POST['post_type'] ) && 'auracare_appt' === $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    } else {
        return;
    }

    $full_name = isset( $_POST['admin_full_name'] ) ? sanitize_text_field( $_POST['admin_full_name'] ) : '';
    $ref_code  = isset( $_POST['admin_ref_code'] ) ? sanitize_text_field( $_POST['admin_ref_code'] ) : 'AC-' . rand( 10000, 99990 );
    $date      = isset( $_POST['admin_date'] ) ? sanitize_text_field( $_POST['admin_date'] ) : '';
    $slot      = isset( $_POST['admin_slot'] ) ? sanitize_text_field( $_POST['admin_slot'] ) : '';

    if ( ! empty( $full_name ) ) {
        $post_update = array(
            'ID'         => $post_id,
            'post_title' => $ref_code . ' - ' . $full_name,
        );
        remove_action( 'save_post', 'devnahian_auracare_save_appt_metabox' );
        wp_update_post( $post_update );
        add_action( 'save_post', 'devnahian_auracare_save_appt_metabox' );
    }

    update_post_meta( $post_id, '_appt_full_name', $full_name );
    update_post_meta( $post_id, '_appt_ref_code', $ref_code );
    update_post_meta( $post_id, '_appt_phone', sanitize_text_field( $_POST['admin_phone'] ?? '' ) );
    update_post_meta( $post_id, '_appt_email', sanitize_email( $_POST['admin_email'] ?? '' ) );
    update_post_meta( $post_id, '_appt_dob', sanitize_text_field( $_POST['admin_dob'] ?? '' ) );
    update_post_meta( $post_id, '_appt_department', sanitize_text_field( $_POST['admin_department'] ?? '' ) );
    update_post_meta( $post_id, '_appt_doctor', sanitize_text_field( $_POST['admin_doctor'] ?? '' ) );
    update_post_meta( $post_id, '_appt_format', sanitize_text_field( $_POST['admin_format'] ?? '' ) );
    update_post_meta( $post_id, '_appt_date', $date );
    update_post_meta( $post_id, '_appt_slot', $slot );
    update_post_meta( $post_id, '_appt_date_slot', $date . ' at ' . $slot );
    update_post_meta( $post_id, '_appt_insurance', sanitize_text_field( $_POST['admin_insurance'] ?? '' ) );
    update_post_meta( $post_id, '_appt_reason', sanitize_textarea_field( $_POST['admin_reason'] ?? '' ) );
}
add_action( 'save_post', 'devnahian_auracare_save_appt_metabox' );

/**
 * Handle Front-End AJAX Appointment Submission Persistence
 */
function devnahian_auracare_handle_appointment_submission() {
    $full_name = isset( $_POST['full_name'] ) ? sanitize_text_field( $_POST['full_name'] ) : '';
    $phone     = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
    $email     = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';
    $dob       = isset( $_POST['dob'] ) ? sanitize_text_field( $_POST['dob'] ) : '';
    $dept      = isset( $_POST['department'] ) ? sanitize_text_field( $_POST['department'] ) : '';
    $doctor    = isset( $_POST['doctor'] ) ? sanitize_text_field( $_POST['doctor'] ) : '';
    $format    = isset( $_POST['format'] ) ? sanitize_text_field( $_POST['format'] ) : '';
    $date      = isset( $_POST['date'] ) ? sanitize_text_field( $_POST['date'] ) : '';
    $slot      = isset( $_POST['slot'] ) ? sanitize_text_field( $_POST['slot'] ) : '';
    $insurance = isset( $_POST['insurance'] ) ? sanitize_text_field( $_POST['insurance'] ) : '';
    $reason    = isset( $_POST['reason'] ) ? sanitize_textarea_field( $_POST['reason'] ) : '';
    $ref_code  = isset( $_POST['ref_code'] ) ? sanitize_text_field( $_POST['ref_code'] ) : 'AC-' . rand( 10000, 99990 );

    if ( empty( $full_name ) || empty( $email ) ) {
        wp_send_json_error( array( 'message' => __( 'Required fields are missing.', 'devnahian-auracare' ) ) );
    }

    $post_data = array(
        'post_title'  => $ref_code . ' - ' . $full_name,
        'post_type'   => 'auracare_appt',
        'post_status' => 'publish',
    );

    $post_id = wp_insert_post( $post_data );

    if ( ! is_wp_error( $post_id ) ) {
        update_post_meta( $post_id, '_appt_full_name', $full_name );
        update_post_meta( $post_id, '_appt_ref_code', $ref_code );
        update_post_meta( $post_id, '_appt_phone', $phone );
        update_post_meta( $post_id, '_appt_email', $email );
        update_post_meta( $post_id, '_appt_dob', $dob );
        update_post_meta( $post_id, '_appt_department', $dept );
        update_post_meta( $post_id, '_appt_doctor', $doctor );
        update_post_meta( $post_id, '_appt_format', $format );
        update_post_meta( $post_id, '_appt_date', $date );
        update_post_meta( $post_id, '_appt_slot', $slot );
        update_post_meta( $post_id, '_appt_date_slot', $date . ' at ' . $slot );
        update_post_meta( $post_id, '_appt_insurance', $insurance );
        update_post_meta( $post_id, '_appt_reason', $reason );

        wp_send_json_success( array( 'ref_code' => $ref_code, 'message' => __( 'Appointment saved successfully!', 'devnahian-auracare' ) ) );
    } else {
        wp_send_json_error( array( 'message' => __( 'Database error. Could not save appointment.', 'devnahian-auracare' ) ) );
    }
}
add_action( 'wp_ajax_devnahian_save_appointment', 'devnahian_auracare_handle_appointment_submission' );
add_action( 'wp_ajax_nopriv_devnahian_save_appointment', 'devnahian_auracare_handle_appointment_submission' );