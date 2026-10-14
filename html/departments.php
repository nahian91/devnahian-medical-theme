<?php include ('header.php'); ?>

  <!-- 01. CLINICAL BREADCRUMB BANNER -->
  <section class="devnahian-auracare-breadcrumb-banner" aria-label="Page Breadcrumb">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-breadcrumb-content">
        <div class="devnahian-auracare-badge-sub">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
          Hospital Clinical Divisions
        </div>
        <h1 class="devnahian-auracare-breadcrumb-title">Clinical <span>Departments</span></h1>
        <p class="devnahian-auracare-breadcrumb-desc">
          Multidisciplinary centers of excellence combining specialized diagnostic pathology, robotic theaters, and academic medical chairs.
        </p>
        <nav class="devnahian-auracare-breadcrumb-nav" aria-label="Breadcrumb navigation">
          <a href="index.php">Home</a>
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
          <span>Departments</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- 02. CLINICAL DEPARTMENTS DIRECTORY -->
  <main class="devnahian-auracare-section-padding">
    <div class="devnahian-auracare-container">
      
      <div style="text-align: center; max-width: 680px; margin: 0 auto 3rem auto;">
        <span class="devnahian-auracare-badge-sub">Tertiary Care Faculties</span>
        <h2 class="devnahian-auracare-section-title">Specialized Clinical Centers</h2>
        <p style="color: var(--devnahian-auracare-slate-500); font-size: 1.05rem;">
          Each division maintains sub-millimeter surgical accuracy, round-the-clock emergency triage, and international patient recovery records.
        </p>
      </div>

      <!-- Department Category Filter Tabs -->
      <div class="devnahian-auracare-dept-tab-wrapper">
        <div class="devnahian-auracare-dept-tab-list" role="tablist">
          <button type="button" class="devnahian-auracare-dept-tab-btn active" data-filter="all">All Specialties</button>
          <button type="button" class="devnahian-auracare-dept-tab-btn" data-filter="surgical">Surgical &amp; Invasive</button>
          <button type="button" class="devnahian-auracare-dept-tab-btn" data-filter="neurology">Neurology &amp; Spine</button>
          <button type="button" class="devnahian-auracare-dept-tab-btn" data-filter="diagnostic">Diagnostic &amp; Imaging</button>
          <button type="button" class="devnahian-auracare-dept-tab-btn" data-filter="pediatrics">Child &amp; Pediatric</button>
        </div>
      </div>

      <div class="devnahian-auracare-depts-grid" id="departmentsGrid">

        <!-- 01. Cardiology Department -->
        <article class="devnahian-auracare-dept-card" data-category="surgical" id="cardiology">
          <div class="devnahian-auracare-dept-media-banner">
            <img src="https://images.unsplash.com/photo-1628348068343-c6a848d2b6dd?w=600&auto=format&fit=crop&q=80" alt="Cardiology &amp; Heart Center Facility" class="devnahian-auracare-dept-card-img">
            <span class="devnahian-auracare-dept-vol-badge">4,200+ Cases / Yr</span>
          </div>

          <div class="devnahian-auracare-dept-content">
            <h3 class="devnahian-auracare-dept-title">
              <a href="department-single.php">Cardiology &amp; Heart Center</a>
            </h3>
            <p class="devnahian-auracare-dept-desc">
              Biplane catheterization suites for coronary interventions, 3D cardiac mapping for arrhythmia ablation, transcatheter aortic valve repair (TAVR), and heart failure recovery.
            </p>

            <div class="devnahian-auracare-dept-card-actions">
              <a href="department-single.php" class="devnahian-auracare-dept-btn-details">
                <span>View Details</span>
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- 02. Neurology Sciences -->
        <article class="devnahian-auracare-dept-card" data-category="neurology" id="neurology">
          <div class="devnahian-auracare-dept-media-banner">
            <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=600&auto=format&fit=crop&q=80" alt="Neurology &amp; Spine Sciences Facility" class="devnahian-auracare-dept-card-img">
            <span class="devnahian-auracare-dept-vol-badge">2,850+ Cases / Yr</span>
          </div>

          <div class="devnahian-auracare-dept-content">
            <h3 class="devnahian-auracare-dept-title">
              <a href="department-single.php">Neurology &amp; Spine Sciences</a>
            </h3>
            <p class="devnahian-auracare-dept-desc">
              Stereotactic cranial microsurgery, rapid mechanical thrombectomy for acute stroke, continuous video-EEG epilepsy monitoring, and minimally invasive robotic spinal stabilization.
            </p>

            <div class="devnahian-auracare-dept-card-actions">
              <a href="department-single.php" class="devnahian-auracare-dept-btn-details">
                <span>View Details</span>
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- 03. Orthopedics & Joint -->
        <article class="devnahian-auracare-dept-card" data-category="surgical" id="orthopedics">
          <div class="devnahian-auracare-dept-media-banner">
            <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=600&auto=format&fit=crop&q=80" alt="Joint &amp; Orthopedic Institute Facility" class="devnahian-auracare-dept-card-img">
            <span class="devnahian-auracare-dept-vol-badge">3,400+ Cases / Yr</span>
          </div>

          <div class="devnahian-auracare-dept-content">
            <h3 class="devnahian-auracare-dept-title">
              <a href="department-single.php">Joint &amp; Orthopedic Institute</a>
            </h3>
            <p class="devnahian-auracare-dept-desc">
              Computer-assisted robotic total joint arthroplasty (knee and hip), multi-ligament sports reconstructions, sub-millimeter arthroscopy, and biological cartilage preservation therapies.
            </p>

            <div class="devnahian-auracare-dept-card-actions">
              <a href="department-single.php" class="devnahian-auracare-dept-btn-details">
                <span>View Details</span>
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- 04. Pediatrics & Neonatology -->
        <article class="devnahian-auracare-dept-card" data-category="pediatrics" id="pediatrics">
          <div class="devnahian-auracare-dept-media-banner">
            <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?w=600&auto=format&fit=crop&q=80" alt="Pediatric &amp; Child Health Facility" class="devnahian-auracare-dept-card-img">
            <span class="devnahian-auracare-dept-vol-badge">5,100+ Patients / Yr</span>
          </div>

          <div class="devnahian-auracare-dept-content">
            <h3 class="devnahian-auracare-dept-title">
              <a href="department-single.php">Pediatric &amp; Child Health</a>
            </h3>
            <p class="devnahian-auracare-dept-desc">
              Gentle child-friendly outpatient wings, Level III Neonatal Intensive Care (NICU), pediatric cardiology screening, adolescent wellness, and complex pediatric surgical care.
            </p>

            <div class="devnahian-auracare-dept-card-actions">
              <a href="department-single.php" class="devnahian-auracare-dept-btn-details">
                <span>View Details</span>
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- 05. Diagnostic Radiology -->
        <article class="devnahian-auracare-dept-card" data-category="diagnostic">
          <div class="devnahian-auracare-dept-media-banner">
            <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?w=600&auto=format&fit=crop&q=80" alt="Radiology &amp; Clinical Imaging Facility" class="devnahian-auracare-dept-card-img">
            <span class="devnahian-auracare-dept-vol-badge">18,000+ Scans / Yr</span>
          </div>

          <div class="devnahian-auracare-dept-content">
            <h3 class="devnahian-auracare-dept-title">
              <a href="department-single.php">Radiology &amp; Clinical Imaging</a>
            </h3>
            <p class="devnahian-auracare-dept-desc">
              Ultra-low radiation 128-slice CT scanners, 3T quiet-bore MRI suites, 3D digital mammography tomosynthesis, and interventional ultrasound-guided biopsying systems.
            </p>

            <div class="devnahian-auracare-dept-card-actions">
              <a href="department-single.php" class="devnahian-auracare-dept-btn-details">
                <span>View Details</span>
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- 06. Reconstructive & Robotic Surgery -->
        <article class="devnahian-auracare-dept-card" data-category="surgical">
          <div class="devnahian-auracare-dept-media-banner">
            <img src="https://images.unsplash.com/photo-1551884170-09fb70a3a2ed?w=600&auto=format&fit=crop&q=80" alt="Robotic &amp; Minimal Surgery Facility" class="devnahian-auracare-dept-card-img">
            <span class="devnahian-auracare-dept-vol-badge">1,900+ Surgeries / Yr</span>
          </div>

          <div class="devnahian-auracare-dept-content">
            <h3 class="devnahian-auracare-dept-title">
              <a href="department-single.php">Robotic &amp; Minimal Surgery</a>
            </h3>
            <p class="devnahian-auracare-dept-desc">
              DaVinci robotic surgical theaters enabling sub-millimeter precision for oncology resections, microsurgical tissue reconstruction, and advanced laparoscopic procedures.
            </p>

            <div class="devnahian-auracare-dept-card-actions">
              <a href="department-single.php" class="devnahian-auracare-dept-btn-details">
                <span>View Details</span>
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

      </div>

    </div>
  </main>

  <!-- STYLES SPECIFIC TO DEPARTMENTS DIRECTORY -->
  <style>
    /* Tabs */
    .devnahian-auracare-dept-tab-wrapper {
      display: flex;
      justify-content: center;
      margin-bottom: 3.5rem;
    }
    .devnahian-auracare-dept-tab-list {
      display: inline-flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      justify-content: center;
      background: var(--devnahian-auracare-slate-50);
      padding: 0.4rem;
      border-radius: var(--devnahian-auracare-radius-full);
      border: 1px solid var(--devnahian-auracare-slate-200);
    }
    .devnahian-auracare-dept-tab-btn {
      padding: 0.65rem 1.4rem;
      border-radius: var(--devnahian-auracare-radius-full);
      background: transparent;
      border: none;
      color: var(--devnahian-auracare-slate-600);
      font-weight: 700;
      font-size: 0.875rem;
      cursor: pointer;
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-dept-tab-btn:hover {
      color: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-dept-tab-btn.active {
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
      box-shadow: 0 4px 14px rgba(2, 132, 199, 0.35);
    }

    /* Grid & Cards */
    .devnahian-auracare-depts-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2rem;
    }
    @media (min-width: 768px) {
      .devnahian-auracare-depts-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (min-width: 1200px) {
      .devnahian-auracare-depts-grid { grid-template-columns: repeat(3, 1fr); gap: 2.25rem; }
    }
    .devnahian-auracare-dept-card {
      background: #ffffff;
      border-radius: var(--devnahian-auracare-radius-xl);
      border: 1px solid var(--devnahian-auracare-slate-200);
      box-shadow: var(--devnahian-auracare-shadow-sm);
      transition: var(--devnahian-auracare-transition);
      display: flex;
      flex-direction: column;
      position: relative;
      overflow: hidden;
    }
    .devnahian-auracare-dept-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, var(--devnahian-auracare-primary), var(--devnahian-auracare-secondary));
      opacity: 0;
      transition: var(--devnahian-auracare-transition);
      z-index: 2;
    }
    .devnahian-auracare-dept-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--devnahian-auracare-shadow-xl);
      border-color: rgba(2, 132, 199, 0.35);
    }
    .devnahian-auracare-dept-card:hover::before { opacity: 1; }

    /* Media Header Image */
    .devnahian-auracare-dept-media-banner {
      position: relative;
      height: 200px;
      overflow: hidden;
      background: var(--devnahian-auracare-slate-100);
    }
    .devnahian-auracare-dept-card-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .devnahian-auracare-dept-card:hover .devnahian-auracare-dept-card-img {
      transform: scale(1.08);
    }

    .devnahian-auracare-dept-vol-badge {
      position: absolute;
      top: 14px;
      right: 14px;
      font-size: 0.72rem;
      font-weight: 800;
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(8px);
      color: var(--devnahian-auracare-slate-800);
      padding: 0.35rem 0.8rem;
      border-radius: var(--devnahian-auracare-radius-full);
      text-transform: uppercase;
      letter-spacing: 0.04em;
      box-shadow: var(--devnahian-auracare-shadow-xs);
    }

    .devnahian-auracare-dept-content {
      padding: 1rem 0.25rem 0.25rem;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .devnahian-auracare-dept-title {
      font-size: 1.45rem;
      margin-bottom: 0.75rem;
    }
    .devnahian-auracare-dept-title a {
      color: var(--devnahian-auracare-slate-900);
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-dept-title a:hover {
      color: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-dept-desc {
      font-size: 0.95rem;
      color: var(--devnahian-auracare-slate-500);
      line-height: 1.65;
      margin-bottom: 2rem;
      flex-grow: 1;
    }

    /* Actions */
    .devnahian-auracare-dept-card-actions {
      margin-top: auto;
    }
    .devnahian-auracare-dept-btn-details {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      width: 100%;
      padding: 0.85rem 1.25rem;
      border-radius: var(--devnahian-auracare-radius-full);
      background: var(--devnahian-auracare-primary-soft);
      color: var(--devnahian-auracare-primary);
      font-weight: 700;
      font-size: 0.9rem;
      border: 1px solid rgba(2, 132, 199, 0.2);
      text-align: center;
      cursor: pointer;
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-dept-btn-details:hover {
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
      box-shadow: 0 4px 14px rgba(2, 132, 199, 0.35);
      border-color: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-dept-btn-details svg {
      transition: transform 0.2s ease;
    }
    .devnahian-auracare-dept-btn-details:hover svg {
      transform: translateX(4px);
    }
  </style>

  <!-- JAVASCRIPT: TAB FILTERING -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const tabButtons = document.querySelectorAll('.devnahian-auracare-dept-tab-btn');
      const deptCards = document.querySelectorAll('.devnahian-auracare-dept-card');

      tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          tabButtons.forEach(b => b.classList.remove('active'));
          btn.classList.add('active');

          const filter = btn.getAttribute('data-filter');

          deptCards.forEach(card => {
            const category = card.getAttribute('data-category');
            if (filter === 'all' || category === filter) {
              card.style.display = 'flex';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });
    });
  </script>

<?php include ('footer.php'); ?>