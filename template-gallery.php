<?php
/**
 * Template Name: Gallery
 *
 * @package AuraCure
 * @since 1.0.0
 */

get_header(); ?>

  <!-- Breadcrumb Banner -->
  <section class="devnahian-auracare-breadcrumb-banner">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-breadcrumb-content">
        <div class="devnahian-auracare-badge-sub">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          Hospital Infrastructure &amp; Wards
        </div>
        <h1 class="devnahian-auracare-breadcrumb-title">Clinical <span>Facility Gallery</span></h1>
        <p class="devnahian-auracare-breadcrumb-desc">Explore our state-of-the-art robotic operating theaters, private patient suites, and specialized diagnostic wings.</p>
        <nav class="devnahian-auracare-breadcrumb-nav">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
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
        <button class="devnahian-auracare-filter-pill" data-filter="diagnostics">Diagnostics &amp; Labs</button>
        <button class="devnahian-auracare-filter-pill" data-filter="icu">ICU &amp; Emergency</button>
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
        <a href="<?php echo esc_url( home_url( '/appointment' ) ); ?>" class="devnahian-auracare-btn devnahian-auracare-btn-primary" style="width:100%;">Schedule Facility Visit or Consultation</a>
      </div>
    </div>
  </div>

  <!-- STYLES & SCRIPT FOR GALLERY -->
  <style>
    .devnahian-auracare-filter-pills {
      display: flex;
      justify-content: center;
      gap: 0.75rem;
      flex-wrap: wrap;
      margin-bottom: 3rem;
    }
    .devnahian-auracare-filter-pill {
      padding: 0.65rem 1.4rem;
      border-radius: var(--devnahian-auracare-radius-full);
      border: 1px solid var(--devnahian-auracare-slate-200);
      background: #ffffff;
      color: var(--devnahian-auracare-slate-700);
      font-size: 0.9rem;
      font-weight: 700;
      cursor: pointer;
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-filter-pill:hover,
    .devnahian-auracare-filter-pill.active {
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
      border-color: var(--devnahian-auracare-primary);
      box-shadow: 0 4px 12px rgba(2, 132, 199, 0.3);
    }
    .devnahian-auracare-gallery-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2rem;
    }
    @media (min-width: 640px) {
      .devnahian-auracare-gallery-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (min-width: 1024px) {
      .devnahian-auracare-gallery-grid { grid-template-columns: repeat(3, 1fr); gap: 2.25rem; }
    }
    .devnahian-auracare-gallery-item {
      position: relative;
      border-radius: var(--devnahian-auracare-radius-xl);
      overflow: hidden;
      height: 300px;
      cursor: pointer;
      box-shadow: var(--devnahian-auracare-shadow-sm);
      border: 1px solid var(--devnahian-auracare-slate-200);
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-gallery-item:hover {
      transform: translateY(-8px);
      box-shadow: var(--devnahian-auracare-shadow-xl);
    }
    .devnahian-auracare-gallery-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .devnahian-auracare-gallery-item:hover .devnahian-auracare-gallery-img {
      transform: scale(1.08);
    }
    .devnahian-auracare-gallery-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 2rem 1.75rem;
      background: linear-gradient(to top, rgba(15, 23, 42, 0.92) 0%, rgba(15, 23, 42, 0.6) 60%, transparent 100%);
      color: #ffffff;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }
    .devnahian-auracare-gallery-badge {
      display: inline-block;
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
      padding: 0.25rem 0.75rem;
      border-radius: var(--devnahian-auracare-radius-full);
      font-size: 0.7rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 0.5rem;
      width: fit-content;
    }
    .devnahian-auracare-gallery-overlay h4 {
      color: #ffffff;
      font-size: 1.15rem;
      margin-bottom: 0.35rem;
    }
    .devnahian-auracare-gallery-overlay p {
      color: var(--devnahian-auracare-slate-300);
      font-size: 0.85rem;
      margin: 0;
      line-height: 1.5;
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const filterBtns = document.querySelectorAll('.devnahian-auracare-filter-pill');
      const galleryItems = document.querySelectorAll('.devnahian-auracare-gallery-item');

      if (filterBtns.length > 0 && galleryItems.length > 0) {
        filterBtns.forEach(btn => {
          btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            galleryItems.forEach(item => {
              const category = item.getAttribute('data-category');
              if (filter === 'all' || category === filter) {
                item.style.display = 'block';
              } else {
                item.style.display = 'none';
              }
            });
          });
        });
      }
    });

    function devnahianAuracareOpenLightbox(title, desc, imgSrc) {
      const modal = document.getElementById('lightboxModal');
      const img = document.getElementById('lightboxImg');
      const titleEl = document.getElementById('lightboxTitle');
      const descEl = document.getElementById('lightboxDesc');

      if (modal && img && titleEl && descEl) {
        img.src = imgSrc;
        titleEl.innerText = title;
        descEl.innerText = desc;
        modal.classList.add('active');
        document.body.classList.add('devnahian-auracare-no-scroll');
      }
    }

    function devnahianAuracareCloseLightbox() {
      const modal = document.getElementById('lightboxModal');
      if (modal) {
        modal.classList.remove('active');
        document.body.classList.remove('devnahian-auracare-no-scroll');
      }
    }
  </script>

<?php get_footer(); ?>