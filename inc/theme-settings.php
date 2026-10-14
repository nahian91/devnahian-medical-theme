<?php
/**
 * AuraCure Website Settings (Modular Tabbed Theme Options Page)
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add Top-Level Menu Page for Website Settings
 */
function devnahian_auracare_add_theme_settings_page() {
    add_menu_page(
        __( 'AuraCure Website Settings', 'devnahian-auracare' ),
        __( 'Website Settings', 'devnahian-auracare' ),
        'manage_options',
        'devnahian-auracare-settings',
        'devnahian_auracare_settings_page_html',
        'dashicons-admin-generic',
        59
    );
}
add_action( 'admin_menu', 'devnahian_auracare_add_theme_settings_page' );

/**
 * Register Settings Fields across All Tabs
 */
function devnahian_auracare_register_settings() {
    // General & Contact Info
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_phone' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_emergency_phone' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_email' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_address' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_hours' );

    // Header Settings
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_cta_button_text' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_cta_button_url' );

    // Footer Settings
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_footer_copyright' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_footer_about_text' );

    // Style Settings
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_primary_color' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_secondary_color' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_border_radius' );

    // Page Specific Content / Slugs / Repeaters
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_slug_home' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_slug_about' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_slug_departments' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_slug_doctors' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_slug_services' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_slug_appointment' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_slug_blogs' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_slug_faqs' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_slug_testimonials' );
    
    // Gallery & Contact Settings
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_gallery_subtitle' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_gallery_title' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_gallery_desc' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_gallery_categories' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_gallery_items' );
    
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_contact_subtitle' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_contact_title' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_contact_desc' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_contact_address' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_contact_phone' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_contact_email' );
    register_setting( 'devnahian_auracare_options_group', 'devnahian_auracare_contact_hours' );
}
add_action( 'admin_init', 'devnahian_auracare_register_settings' );

/**
 * Settings Page HTML with SVG Icons and Modern UI
 */
function devnahian_auracare_settings_page_html() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $active_tab = isset( $_GET['tab'] ) ? sanitize_text_field( $_GET['tab'] ) : 'general';

    // Tabs array with clean, modern SVGs
    $tabs = array(
        'general'      => array(
            'label' => __( 'General', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>',
        ),
        'header'       => array(
            'label' => __( 'Header', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>',
        ),
        'footer'       => array(
            'label' => __( 'Footer', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="15" x2="21" y2="15"/></svg>',
        ),
        'style'        => array(
            'label' => __( 'Style & Branding', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="13.5" cy="6.5" r=".5" fill="currentColor"/><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"/><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"/><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.9 0 1.6-.7 1.6-1.6 0-.4-.2-.8-.4-1.1-.3-.4-.4-.8-.4-1.3 0-1.1.9-2 2-2h2.4c3.3 0 6-2.7 6-6 0-5.5-5.1-10-11.2-10z"/></svg>',
        ),
        'home'         => array(
            'label' => __( 'Home', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
        ),
        'about'        => array(
            'label' => __( 'About Us', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>',
        ),
        'departments'  => array(
            'label' => __( 'Departments', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>',
        ),
        'doctors'      => array(
            'label' => __( 'Doctors', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>',
        ),
        'services'     => array(
            'label' => __( 'Services', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
        ),
        'appointment'  => array(
            'label' => __( 'Appointment', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
        ),
        'blogs'        => array(
            'label' => __( 'Blogs', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>',
        ),
        'faqs'         => array(
            'label' => __( 'FAQs', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>',
        ),
        'testimonials' => array(
            'label' => __( 'Testimonials', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
        ),
        'gallery'      => array(
            'label' => __( 'Gallery', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>',
        ),
        'contact'      => array(
            'label' => __( 'Contact Us', 'devnahian-auracare' ),
            'icon'  => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
        ),
    );
    ?>

    <style>
        .devnahian-settings-header {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            border-radius: 12px;
            padding: 22px 28px;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 15px 0 24px 0;
            box-shadow: 0 4px 20px rgba(15, 23, 42, 0.12);
        }
        .devnahian-settings-header h2 {
            color: #ffffff !important;
            font-size: 22px;
            font-weight: 700;
            margin: 0 0 4px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .devnahian-settings-header p {
            color: #94a3b8;
            font-size: 13.5px;
            margin: 0;
        }
        .devnahian-settings-wrapper {
            display: flex;
            gap: 25px;
            align-items: flex-start;
        }
        .devnahian-settings-sidebar {
            width: 240px;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(15, 23, 42, 0.05);
            flex-shrink: 0;
        }
        .devnahian-settings-sidebar a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 18px;
            color: #475569;
            text-decoration: none;
            font-weight: 600;
            font-size: 13.5px;
            border-bottom: 1px solid #f1f5f9;
            transition: all 0.2s ease-in-out;
        }
        .devnahian-settings-sidebar a:last-child {
            border-bottom: none;
        }
        .devnahian-settings-sidebar a svg {
            color: #64748b;
            flex-shrink: 0;
            transition: color 0.2s ease-in-out, transform 0.2s ease-in-out;
        }
        .devnahian-settings-sidebar a:hover {
            background: #f8fafc;
            color: #0284c7;
        }
        .devnahian-settings-sidebar a:hover svg {
            color: #0284c7;
            transform: translateX(2px);
        }
        .devnahian-settings-sidebar a.current-tab {
            background: #0284c7;
            color: #ffffff;
        }
        .devnahian-settings-sidebar a.current-tab svg {
            color: #ffffff;
        }
        .devnahian-settings-content {
            flex-grow: 1;
            background: transparent;
        }
        .devnahian-settings-content .submit {
            margin-top: 15px;
            padding-top: 15px;
        }
        .devnahian-settings-content .submit .button-primary {
            background: #0284c7;
            border-color: #0284c7;
            font-size: 14px;
            font-weight: 600;
            padding: 8px 24px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(2, 132, 199, 0.25);
            transition: background 0.2s;
        }
        .devnahian-settings-content .submit .button-primary:hover {
            background: #0369a1;
        }
    </style>

    <div class="wrap">
        <!-- Header Banner -->
        <div class="devnahian-settings-header">
            <div>
                <h2>
                    <svg width="24" height="24" fill="none" stroke="#38bdf8" stroke-width="2.2" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    AuraCure Theme Options Panel
                </h2>
                <p><?php esc_html_e( 'Configure clinical services, global styling, page metadata, and communication options.', 'devnahian-auracare' ); ?></p>
            </div>
        </div>

        <?php settings_errors(); ?>

        <div class="devnahian-settings-wrapper">
            
            <!-- Left Column: Vertical Navigation Tabs with SVGs -->
            <div class="devnahian-settings-sidebar">
                <?php foreach ( $tabs as $tab_key => $tab_data ) : ?>
                    <a href="?page=devnahian-auracare-settings&tab=<?php echo esc_attr( $tab_key ); ?>" class="<?php echo $active_tab === $tab_key ? 'current-tab' : ''; ?>">
                        <?php echo $tab_data['icon']; // Sanitized inline SVG ?>
                        <span><?php echo esc_html( $tab_data['label'] ); ?></span>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Right Column: Dynamic Tab File Content Panel -->
            <div class="devnahian-settings-content">
                <form action="options.php" method="post">
                    <?php
                    settings_fields( 'devnahian_auracare_options_group' );

                    $tab_file = get_template_directory() . '/inc/settings-tabs/tab-' . sanitize_file_name( $active_tab ) . '.php';
                    if ( file_exists( $tab_file ) ) {
                        include $tab_file;
                    } else {
                        include get_template_directory() . '/inc/settings-tabs/tab-general.php';
                    }

                    submit_button( __( 'Save All Changes', 'devnahian-auracare' ) );
                    ?>
                </form>
            </div>

        </div>
    </div>
    <?php
}