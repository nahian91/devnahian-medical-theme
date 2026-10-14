<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Google Fonts: Plus Jakarta Sans & Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ==========================================================================
       01. AWESOME TOPBAR
       ========================================================================== -->
  <header class="devnahian-auracare-topbar" role="region" aria-label="Hospital Contact and Alert Bar">
    <div class="devnahian-auracare-container devnahian-auracare-topbar-wrapper">
      <div class="devnahian-auracare-topbar-info">
        <div class="devnahian-auracare-topbar-item">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
          <span>742 Evergreen Terrace, Medical District, NY</span>
        </div>
        <div class="devnahian-auracare-topbar-item">
          <span class="devnahian-auracare-live-pulse" aria-hidden="true"></span>
          <span>Triage &amp; Outpatient: <strong>Open Today (8:00 AM – 9:00 PM)</strong></span>
        </div>
      </div>
      <div class="devnahian-auracare-topbar-actions">
        <div class="devnahian-auracare-topbar-item">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <span>JCI Gold Seal Accredited</span>
        </div>
        <a href="tel:+18005550199" class="devnahian-auracare-topbar-item" style="color: #38bdf8; font-weight: 700;">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Emergency Dispatch: (800) 555-0199
        </a>
      </div>
    </div>
  </header>

  <!-- ==========================================================================
       02. PRIMARY AWESOME NAVBAR (DYNAMIC WORDPRESS MENU)
       ========================================================================== -->
  <nav class="devnahian-auracare-site-header" aria-label="Main Navigation">
    <div class="devnahian-auracare-container devnahian-auracare-navbar">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="devnahian-auracare-brand-logo" aria-label="AuraCure Homepage">
        <svg width="36" height="36" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m-3-3h6"/>
        </svg>
        <span>Aura<span style="color:var(--devnahian-auracare-primary)">Cure</span></span>
      </a>

      <?php
      wp_nav_menu(
          array(
              'theme_location' => 'primary-menu',
              'container'      => false,
              'menu_class'     => 'devnahian-auracare-nav-menu',
              'fallback_cb'    => false,
              'depth'          => 2,
              'walker'         => new DevNahian_AuraCure_Nav_Walker(),
          )
      );
      ?>

      <button class="devnahian-auracare-mobile-toggle" id="devnahian-auracare-mobileToggle" aria-label="Open mobile navigation drawer">
        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><line x1="4" y1="7" x2="20" y2="7"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="17" x2="20" y2="17"/></svg>
      </button>
    </div>
  </nav>

  <!-- ==========================================================================
       03. MOBILE OFF-CANVAS DRAWER (DYNAMIC WORDPRESS MENU)
       ========================================================================== -->
  <div class="devnahian-auracare-drawer-overlay" id="devnahian-auracare-drawerOverlay">
    <div class="devnahian-auracare-drawer">
      <div class="devnahian-auracare-drawer-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="devnahian-auracare-brand-logo" onclick="devnahianAuracareCloseDrawer()">
          <svg width="30" height="30" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M12 9v6m-3-3h6"/></svg>
          <span>Aura<span style="color:var(--devnahian-auracare-primary)">Cure</span></span>
        </a>
        <button class="devnahian-auracare-drawer-close" id="devnahian-auracare-drawerClose" aria-label="Close drawer">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
      </div>

      <div class="devnahian-auracare-drawer-body">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'mobile-menu',
                'container'      => false,
                'menu_class'     => 'devnahian-auracare-drawer-menu',
                'fallback_cb'    => false,
                'depth'          => 1,
            )
        );
        ?>
      </div>

      <div class="devnahian-auracare-drawer-footer">
        <a href="<?php echo esc_url( home_url( '/appointment' ) ); ?>" class="devnahian-auracare-btn devnahian-auracare-btn-primary" style="width: 100%;">
          Book Appointment
        </a>
      </div>
    </div>
  </div>

  <!-- ==========================================================================
       04. NATIVE MOBILE APP QUICK BAR
       ========================================================================== -->
  <aside class="devnahian-auracare-mobile-quickbar" aria-label="Mobile Quick Access Navigation">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="devnahian-auracare-quickbar-item active">
      <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      <span>Home</span>
    </a>
    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="devnahian-auracare-quickbar-item">
      <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
      <span>Services</span>
    </a>
    <a href="<?php echo esc_url( home_url( '/appointment' ) ); ?>" class="devnahian-auracare-quickbar-item" style="color: var(--devnahian-auracare-primary);">
      <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      <span style="font-weight: 800;">Book</span>
    </a>
    <a href="tel:+18005550199" class="devnahian-auracare-quickbar-item">
      <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      <span>Call</span>
    </a>
  </aside>