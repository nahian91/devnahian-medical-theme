<?php include ('header.php');?>

  <!-- Breadcrumb Banner -->
  <section class="devnahian-auracare-breadcrumb-banner">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-breadcrumb-content">
        <div class="devnahian-auracare-badge-sub">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
          Hospital Infrastructure & Wards
        </div>
        <h1 class="devnahian-auracare-breadcrumb-title">Clinical <span>Facility Gallery</span></h1>
        <p class="devnahian-auracare-breadcrumb-desc">Explore our state-of-the-art robotic operating theaters, private patient suites, and specialized diagnostic wings.</p>
        <nav class="devnahian-auracare-breadcrumb-nav">
          <a href="index.html">Home</a>
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
          <span>Photo Gallery</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- Gallery Content -->
  <main class="devnahian-auracare-section-padding">
    <div class="devnahian-auracare-container">

      <!-- Gallery Category Filters -->
      <div class="devnahian-auracare-filter-pills">
        <button class="devnahian-auracare-filter-pill active" data-filter="all">All Facilities</button>
        <button class="devnahian-auracare-filter-pill" data-filter="surgery">Surgical Suites</button>
        <button class="devnahian-auracare-filter-pill" data-filter="wards">Patient Rooms</button>
        <button class="devnahian-auracare-filter-pill" data-filter="diagnostics">Diagnostics & Labs</button>
        <button class="devnahian-auracare-filter-pill" data-filter="icu">ICU & Emergency</button>
      </div>

      <!-- Gallery Grid -->
      <div class="devnahian-auracare-gallery-grid" id="galleryGrid">
        
        <!-- Image 1: Surgical -->
        <div class="devnahian-auracare-gallery-item" data-category="surgery" onclick="devnahianAuracareOpenLightbox('DaVinci Robotic Operating Suite', 'Sub-millimeter robotic precision navigation suite designed for minimally invasive oncology and cardiac procedures.', 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=1200&auto=format&fit=crop&q=80')">
          <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=700&auto=format&fit=crop&q=80" alt="Robotic surgery theater" class="devnahian-auracare-gallery-img">
          <div class="devnahian-auracare-gallery-overlay">
            <span class="devnahian-auracare-gallery-badge">Surgical Suites</span>
            <h4>DaVinci Robotic Operating Theater</h4>
            <p>Sub-millimeter robotic navigation suite for minimally invasive procedures.</p>
          </div>
        </div>

        <!-- Image 2: Wards -->
        <div class="devnahian-auracare-gallery-item" data-category="wards" onclick="devnahianAuracareOpenLightbox('Private Executive Patient Suite', 'Ergonomic recovery suite offering natural daylight, family lounge amenities, and 24/7 telemetry monitoring.', 'https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=1200&auto=format&fit=crop&q=80')">
          <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=700&auto=format&fit=crop&q=80" alt="Executive patient room" class="devnahian-auracare-gallery-img">
          <div class="devnahian-auracare-gallery-overlay">
            <span class="devnahian-auracare-gallery-badge">Patient Suites</span>
            <h4>Private Executive Recovery Suite</h4>
            <p>Ergonomic recovery quarters with 24/7 dedicated nursing telemetry.</p>
          </div>
        </div>

        <!-- Image 3: Diagnostics -->
        <div class="devnahian-auracare-gallery-item" data-category="diagnostics" onclick="devnahianAuracareOpenLightbox('Automated Diagnostic Pathology Lab', 'Next-generation clinical analysis equipment delivering verified lab results directly to patient portals in under 2 hours.', 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=1200&auto=format&fit=crop&q=80')">
          <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=700&auto=format&fit=crop&q=80" alt="Pathology laboratory" class="devnahian-auracare-gallery-img">
          <div class="devnahian-auracare-gallery-overlay">
            <span class="devnahian-auracare-gallery-badge">Diagnostics</span>
            <h4>Automated Clinical Pathology Lab</h4>
            <p>Digital pathology delivering high-precision biomarker results in under 2 hours.</p>
          </div>
        </div>

        <!-- Image 4: ICU / Emergency -->
        <div class="devnahian-auracare-gallery-item" data-category="icu" onclick="devnahianAuracareOpenLightbox('Intensive Care Telemetry Wing', 'Continuous cardiac telemetry and central nursing stations ensuring sub-minute acute triage response.', 'https://images.unsplash.com/photo-1516549655169-df83a0774514?w=1200&auto=format&fit=crop&q=80')">
          <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?w=700&auto=format&fit=crop&q=80" alt="Intensive care unit" class="devnahian-auracare-gallery-img">
          <div class="devnahian-auracare-gallery-overlay">
            <span class="devnahian-auracare-gallery-badge">ICU Care</span>
            <h4>Intensive Care Telemetry Wing</h4>
            <p>Continuous central telemetry monitoring and critical resuscitation equipment.</p>
          </div>
        </div>

        <!-- Image 5: Surgery -->
        <div class="devnahian-auracare-gallery-item" data-category="surgery" onclick="devnahianAuracareOpenLightbox('Biplane Catheterization Laboratory', 'Dual-axis digital imaging fluoroscopy allowing simultaneous multi-vessel coronary interventions.', 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=1200&auto=format&fit=crop&q=80')">
          <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=700&auto=format&fit=crop&q=80" alt="Cardiac cath lab" class="devnahian-auracare-gallery-img">
          <div class="devnahian-auracare-gallery-overlay">
            <span class="devnahian-auracare-gallery-badge">Surgical Suites</span>
            <h4>Biplane Cardiac Cath Laboratory</h4>
            <p>State-of-the-art fluoroscopy suite for rapid coronary angioplasty and TAVR.</p>
          </div>
        </div>

        <!-- Image 6: ICU / Emergency -->
        <div class="devnahian-auracare-gallery-item" data-category="icu" onclick="devnahianAuracareOpenLightbox('Level 1 Emergency Trauma Entrance', 'Direct ambulance bays with integrated helipad elevator connection for immediate paramedic triage.', 'https://images.unsplash.com/photo-1538108149393-fbbd81895907?w=1200&auto=format&fit=crop&q=80')">
          <img src="https://images.unsplash.com/photo-1538108149393-fbbd81895907?w=700&auto=format&fit=crop&q=80" alt="Emergency trauma bay" class="devnahian-auracare-gallery-img">
          <div class="devnahian-auracare-gallery-overlay">
            <span class="devnahian-auracare-gallery-badge">Emergency</span>
            <h4>Level 1 Trauma Emergency Entrance</h4>
            <p>Dedicated rapid paramedic triage bays with zero reception wait times.</p>
          </div>
        </div>

      </div>

    </div>
  </main>

  <!-- Interactive Lightbox Modal -->
  <div class="devnahian-auracare-modal-overlay" id="lightboxModal">
    <div class="devnahian-auracare-modal-card">
      <button class="devnahian-auracare-modal-close-btn" onclick="devnahianAuracareCloseLightbox()">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
      <div style="height:440px; overflow:hidden;">
        <img id="lightboxImg" src="" alt="Enlarged facility view" style="width:100%; height:100%; object-fit:cover;">
      </div>
      <div style="padding:2rem;">
        <h3 id="lightboxTitle" style="font-size:1.45rem; margin-bottom:0.4rem;">Facility Title</h3>
        <p id="lightboxDesc" style="color:var(--devnahian-auracare-slate-500); font-size:0.95rem; margin-bottom:1.5rem; line-height:1.6;">Description.</p>
        <a href="appointment.html" class="devnahian-auracare-btn devnahian-auracare-btn-primary" style="width:100%;">Schedule Facility Visit or Consultation</a>
      </div>
    </div>
  </div>

 <?php include ('footer.php');?>