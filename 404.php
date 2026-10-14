<?php get_header(); ?>

  <!-- ==========================================================================
       05. CLINICAL BREADCRUMB BANNER
       ========================================================================== -->
  <section class="devnahian-auracare-breadcrumb-banner" aria-label="Page Breadcrumb">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-breadcrumb-content">
        <div class="devnahian-auracare-badge-sub">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          Clinical Error 404
        </div>
        <h1 class="devnahian-auracare-breadcrumb-title">Diagnostic Path <span>Not Found</span></h1>
        <p class="devnahian-auracare-breadcrumb-desc">
          The medical resource, physician profile, or clinical publication you requested is unavailable or has been relocated.
        </p>
        <nav class="devnahian-auracare-breadcrumb-nav" aria-label="Breadcrumb navigation">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
          <span>Error 404</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       06. 404 ERROR HERO & SEARCH
       ========================================================================== -->
  <main class="devnahian-auracare-section-padding">
    <div class="devnahian-auracare-container">

      <!-- Big 404 Visual & Lifeline -->
      <div class="devnahian-auracare-404-hero">
        <div class="devnahian-auracare-404-visual-wrap">
          <div class="devnahian-auracare-404-big-text">404</div>

          <!-- Pulsing ECG Heartbeat SVG overlay -->
          <svg class="devnahian-auracare-404-ecg-line" viewBox="0 0 500 100" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
            <path d="M0,50 L120,50 L135,40 L145,60 L160,50 L175,50 L185,15 L195,85 L205,35 L215,65 L225,50 L240,50 L255,42 L265,55 L275,50 L500,50" />
          </svg>
        </div>

        <h2 class="devnahian-auracare-404-subtitle">Signal Interrupted — Page Unavailable</h2>
        <p class="devnahian-auracare-404-desc">
          The link you followed may be expired or the address was mistyped. Let us help you find the right doctor, clinical department, or patient service.
        </p>

        <!-- Quick 404 WordPress Search Form -->
        <form role="search" method="get" class="devnahian-auracare-404-search-box" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <input type="text" name="s" class="devnahian-auracare-404-search-input" placeholder="Search doctors, departments, or conditions..." required>
          <button type="submit" class="devnahian-auracare-404-search-btn" aria-label="Search">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </button>
        </form>

        <!-- Primary Recovery Actions -->
        <div class="devnahian-auracare-404-actions">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="devnahian-auracare-btn devnahian-auracare-btn-primary">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Return to Homepage
          </a>
          <a href="<?php echo esc_url( home_url( '/appointment' ) ); ?>" class="devnahian-auracare-btn devnahian-auracare-btn-outline">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Appointment
          </a>
          <a href="tel:+18005550199" class="devnahian-auracare-btn" style="background:var(--devnahian-auracare-slate-100); color:var(--devnahian-auracare-slate-800);">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Emergency: (800) 555-0199
          </a>
        </div>
      </div>

      <!-- Quick Helpful Links Cards -->
      <div class="devnahian-auracare-help-grid">
        <div class="devnahian-auracare-help-card">
          <div class="devnahian-auracare-help-icon">
            <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h4>Clinical Faculties</h4>
          <p>Explore our 18 medical departments from Cardiology to Robotics.</p>
          <a href="<?php echo esc_url( home_url( '/departments' ) ); ?>" class="devnahian-auracare-help-link">View Departments &rarr;</a>
        </div>

        <div class="devnahian-auracare-help-card">
          <div class="devnahian-auracare-help-icon">
            <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h4>Find a Doctor</h4>
          <p>Browse our directory of 140+ board-certified attending specialists.</p>
          <a href="<?php echo esc_url( home_url( '/doctors' ) ); ?>" class="devnahian-auracare-help-link">Browse Specialists &rarr;</a>
        </div>

        <div class="devnahian-auracare-help-card">
          <div class="devnahian-auracare-help-icon">
            <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h4>Medical Journal</h4>
          <p>Read peer-reviewed research, health insights, and clinical articles.</p>
          <a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>" class="devnahian-auracare-help-link">Read Articles &rarr;</a>
        </div>

        <div class="devnahian-auracare-help-card">
          <div class="devnahian-auracare-help-icon">
            <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <h4>Help &amp; Contact</h4>
          <p>Connect with our hospital reception, billing desk, or triage coordinators.</p>
          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="devnahian-auracare-help-link">Contact Desk &rarr;</a>
        </div>
      </div>

    </div>
  </main>

  <!-- STYLES SPECIFIC TO 404 PAGE -->
  <style>
    .devnahian-auracare-404-hero {
      text-align: center;
      max-width: 780px;
      margin: 0 auto 5rem auto;
      background: #ffffff;
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-xl);
      padding: 3rem 2rem;
      box-shadow: var(--devnahian-auracare-shadow-sm);
    }
    @media (min-width: 768px) {
      .devnahian-auracare-404-hero { padding: 4rem 3rem; }
    }
    .devnahian-auracare-404-visual-wrap {
      position: relative;
      margin-bottom: 1.5rem;
    }
    .devnahian-auracare-404-big-text {
      font-size: 6rem;
      font-weight: 900;
      font-family: var(--devnahian-auracare-font-heading);
      color: var(--devnahian-auracare-primary);
      line-height: 1;
      opacity: 0.15;
    }
    @media (min-width: 768px) {
      .devnahian-auracare-404-big-text { font-size: 9rem; }
    }
    .devnahian-auracare-404-ecg-line {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      max-width: 420px;
      height: 80px;
      color: var(--devnahian-auracare-primary);
      animation: devnahianEcgsweep 3s ease-in-out infinite;
    }
    @keyframes devnahianEcgsweep {
      0%, 100% { opacity: 0.6; transform: translate(-50%, -50%) scale(0.98); }
      50% { opacity: 1; transform: translate(-50%, -50%) scale(1.02); }
    }
    .devnahian-auracare-404-subtitle {
      font-size: 1.5rem;
      margin-bottom: 0.75rem;
      color: var(--devnahian-auracare-slate-900);
    }
    .devnahian-auracare-404-desc {
      font-size: 1rem;
      color: var(--devnahian-auracare-slate-500);
      line-height: 1.7;
      margin-bottom: 2rem;
    }
    .devnahian-auracare-404-search-box {
      display: flex;
      max-width: 520px;
      margin: 0 auto 2rem auto;
      background: var(--devnahian-auracare-slate-50);
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-full);
      overflow: hidden;
      box-shadow: var(--devnahian-auracare-shadow-xs);
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-404-search-box:focus-within {
      border-color: var(--devnahian-auracare-primary);
      box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
      background: #ffffff;
    }
    .devnahian-auracare-404-search-input {
      flex: 1;
      height: 52px;
      padding: 0 1.5rem;
      border: none;
      background: transparent;
      outline: none;
      font-size: 0.95rem;
      color: var(--devnahian-auracare-slate-800);
    }
    .devnahian-auracare-404-search-btn {
      width: 52px;
      height: 52px;
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: var(--devnahian-auracare-transition);
      flex-shrink: 0;
    }
    .devnahian-auracare-404-search-btn:hover {
      background: var(--devnahian-auracare-primary-hover);
    }
    .devnahian-auracare-404-actions {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    /* Help Cards Grid */
    .devnahian-auracare-help-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1.5rem;
    }
    @media (min-width: 640px) {
      .devnahian-auracare-help-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (min-width: 1024px) {
      .devnahian-auracare-help-grid { grid-template-columns: repeat(4, 1fr); gap: 2rem; }
    }
    .devnahian-auracare-help-card {
      background: #ffffff;
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-xl);
      padding: 2rem 1.75rem;
      box-shadow: var(--devnahian-auracare-shadow-sm);
      transition: var(--devnahian-auracare-transition);
      display: flex;
      flex-direction: column;
    }
    .devnahian-auracare-help-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--devnahian-auracare-shadow-xl);
      border-color: rgba(2, 132, 199, 0.35);
    }
    .devnahian-auracare-help-icon {
      width: 52px;
      height: 52px;
      border-radius: var(--devnahian-auracare-radius-md);
      background: var(--devnahian-auracare-primary-soft);
      color: var(--devnahian-auracare-primary);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.25rem;
    }
    .devnahian-auracare-help-card h4 {
      font-size: 1.15rem;
      margin-bottom: 0.4rem;
      color: var(--devnahian-auracare-slate-900);
    }
    .devnahian-auracare-help-card p {
      font-size: 0.875rem;
      color: var(--devnahian-auracare-slate-500);
      line-height: 1.55;
      margin-bottom: 1.25rem;
      flex-grow: 1;
    }
    .devnahian-auracare-help-link {
      font-size: 0.85rem;
      font-weight: 700;
      color: var(--devnahian-auracare-primary);
      transition: var(--devnahian-auracare-transition);
      margin-top: auto;
    }
    .devnahian-auracare-help-card:hover .devnahian-auracare-help-link {
      transform: translateX(4px);
    }
  </style>

<?php get_footer(); ?>