<?php include ('header.php');?>

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
          <a href="index.html">Home</a>
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

        <!-- Quick 404 Search Box -->
        <form class="devnahian-auracare-404-search-box" onsubmit="event.preventDefault(); window.location.href='doctors.html';">
          <input type="text" class="devnahian-auracare-404-search-input" placeholder="Search doctors, departments, or conditions..." required>
          <button type="submit" class="devnahian-auracare-404-search-btn" aria-label="Search">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </button>
        </form>

        <!-- Primary Recovery Actions -->
        <div class="devnahian-auracare-404-actions">
          <a href="index.html" class="devnahian-auracare-btn devnahian-auracare-btn-primary">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Return to Homepage
          </a>
          <a href="appointment.html" class="devnahian-auracare-btn devnahian-auracare-btn-outline">
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
          <a href="departments.html" class="devnahian-auracare-help-link">View Departments &rarr;</a>
        </div>

        <div class="devnahian-auracare-help-card">
          <div class="devnahian-auracare-help-icon">
            <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h4>Find a Doctor</h4>
          <p>Browse our directory of 140+ board-certified attending specialists.</p>
          <a href="doctors.html" class="devnahian-auracare-help-link">Browse Specialists &rarr;</a>
        </div>

        <div class="devnahian-auracare-help-card">
          <div class="devnahian-auracare-help-icon">
            <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h4>Medical Journal</h4>
          <p>Read peer-reviewed research, health insights, and clinical articles.</p>
          <a href="blogs.html" class="devnahian-auracare-help-link">Read Articles &rarr;</a>
        </div>

        <div class="devnahian-auracare-help-card">
          <div class="devnahian-auracare-help-icon">
            <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <h4>Help & Contact</h4>
          <p>Connect with our hospital reception, billing desk, or triage coordinators.</p>
          <a href="contact.html" class="devnahian-auracare-help-link">Contact Desk &rarr;</a>
        </div>
      </div>

    </div>
  </main>

<?php include ('footer.php');?>