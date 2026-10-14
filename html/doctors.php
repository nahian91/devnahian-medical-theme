<?php include ('header.php'); ?>

  <!-- 01. CLINICAL BREADCRUMB BANNER -->
  <section class="devnahian-auracare-breadcrumb-banner" aria-label="Page Breadcrumb">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-breadcrumb-content">
        <div class="devnahian-auracare-badge-sub">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          Board-Certified Medical Faculty
        </div>
        <h1 class="devnahian-auracare-breadcrumb-title">Meet Our <span>Specialists</span></h1>
        <p class="devnahian-auracare-breadcrumb-desc">
          Collaborative medical minds, published researchers, and surgical leaders committed to patient recovery and clinical precision.
        </p>
        <nav class="devnahian-auracare-breadcrumb-nav" aria-label="Breadcrumb navigation">
          <a href="index.php">Home</a>
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
          <span>Doctors Directory</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- 02. DOCTOR DIRECTORY GRID & TABS -->
  <main class="devnahian-auracare-section-padding">
    <div class="devnahian-auracare-container">

      <!-- Department Filter Tabs -->
      <div class="devnahian-auracare-tab-wrapper">
        <div class="devnahian-auracare-tab-list" role="tablist">
          <button type="button" class="devnahian-auracare-tab-btn active" data-filter="all">All Specialists</button>
          <button type="button" class="devnahian-auracare-tab-btn" data-filter="cardiology">Cardiology</button>
          <button type="button" class="devnahian-auracare-tab-btn" data-filter="neurology">Neurology</button>
          <button type="button" class="devnahian-auracare-tab-btn" data-filter="orthopedics">Orthopedics</button>
          <button type="button" class="devnahian-auracare-tab-btn" data-filter="pediatrics">Pediatrics</button>
          <button type="button" class="devnahian-auracare-tab-btn" data-filter="radiology">Radiology</button>
        </div>
      </div>

      <!-- Doctors Grid -->
      <div class="devnahian-auracare-doctors-grid" id="doctorsGrid">

        <!-- Doctor 1: Cardiology -->
        <article class="devnahian-auracare-doc-card" data-category="cardiology">
          <div class="devnahian-auracare-doc-media">
            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600&auto=format&fit=crop&q=80" alt="Dr. Sarah Jenkins" class="devnahian-auracare-doc-img">
          </div>
          <div class="devnahian-auracare-doc-body">
            <div class="devnahian-auracare-doc-dept-tag">Cardiovascular Medicine</div>
            <h3 class="devnahian-auracare-doc-name">
              <a href="single-doctor.php">Dr. Sarah Jenkins, MD</a>
            </h3>
            <p class="devnahian-auracare-doc-role">Chief of Interventional Cardiology</p>
            <div class="devnahian-auracare-doc-actions">
              <a href="single-doctor.php" class="devnahian-auracare-doc-btn-profile">View Profile</a>
            </div>
          </div>
        </article>

        <!-- Doctor 2: Neurology -->
        <article class="devnahian-auracare-doc-card" data-category="neurology">
          <div class="devnahian-auracare-doc-media">
            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=600&auto=format&fit=crop&q=80" alt="Dr. Michael Chang" class="devnahian-auracare-doc-img">
          </div>
          <div class="devnahian-auracare-doc-body">
            <div class="devnahian-auracare-doc-dept-tag">Neurological Surgery</div>
            <h3 class="devnahian-auracare-doc-name">
              <a href="single-doctor.php">Dr. Michael Chang, PhD</a>
            </h3>
            <p class="devnahian-auracare-doc-role">Senior Neurosurgeon &amp; Chair</p>
            <div class="devnahian-auracare-doc-actions">
              <a href="single-doctor.php" class="devnahian-auracare-doc-btn-profile">View Profile</a>
            </div>
          </div>
        </article>

        <!-- Doctor 3: Orthopedics -->
        <article class="devnahian-auracare-doc-card" data-category="orthopedics">
          <div class="devnahian-auracare-doc-media">
            <img src="https://images.unsplash.com/photo-1594824813591-1804f32c1c69?w=600&auto=format&fit=crop&q=80" alt="Dr. Elena Rostova" class="devnahian-auracare-doc-img">
          </div>
          <div class="devnahian-auracare-doc-body">
            <div class="devnahian-auracare-doc-dept-tag">Orthopedic Surgery</div>
            <h3 class="devnahian-auracare-doc-name">
              <a href="single-doctor.php">Dr. Elena Rostova, MD</a>
            </h3>
            <p class="devnahian-auracare-doc-role">Head of Joint Preservation</p>
            <div class="devnahian-auracare-doc-actions">
              <a href="single-doctor.php" class="devnahian-auracare-doc-btn-profile">View Profile</a>
            </div>
          </div>
        </article>

        <!-- Doctor 4: Pediatrics -->
        <article class="devnahian-auracare-doc-card" data-category="pediatrics">
          <div class="devnahian-auracare-doc-media">
            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=600&auto=format&fit=crop&q=80" alt="Dr. Marcus Bennett" class="devnahian-auracare-doc-img">
          </div>
          <div class="devnahian-auracare-doc-body">
            <div class="devnahian-auracare-doc-dept-tag">Pediatric Medicine</div>
            <h3 class="devnahian-auracare-doc-name">
              <a href="single-doctor.php">Dr. Marcus Bennett, MD</a>
            </h3>
            <p class="devnahian-auracare-doc-role">Chief of Pediatrics &amp; NICU</p>
            <div class="devnahian-auracare-doc-actions">
              <a href="single-doctor.php" class="devnahian-auracare-doc-btn-profile">View Profile</a>
            </div>
          </div>
        </article>

        <!-- Doctor 5: Radiology -->
        <article class="devnahian-auracare-doc-card" data-category="radiology">
          <div class="devnahian-auracare-doc-media">
            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=600&auto=format&fit=crop&q=80" alt="Dr. Aisha Patel" class="devnahian-auracare-doc-img">
          </div>
          <div class="devnahian-auracare-doc-body">
            <div class="devnahian-auracare-doc-dept-tag">Diagnostic Radiology</div>
            <h3 class="devnahian-auracare-doc-name">
              <a href="single-doctor.php">Dr. Aisha Patel, MD</a>
            </h3>
            <p class="devnahian-auracare-doc-role">Director of Advanced MRI/CT Imaging</p>
            <div class="devnahian-auracare-doc-actions">
              <a href="single-doctor.php" class="devnahian-auracare-doc-btn-profile">View Profile</a>
            </div>
          </div>
        </article>

        <!-- Doctor 6: Cardiology -->
        <article class="devnahian-auracare-doc-card" data-category="cardiology">
          <div class="devnahian-auracare-doc-media">
            <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=600&auto=format&fit=crop&q=80" alt="Dr. Julian Vance" class="devnahian-auracare-doc-img">
          </div>
          <div class="devnahian-auracare-doc-body">
            <div class="devnahian-auracare-doc-dept-tag">Cardiovascular Medicine</div>
            <h3 class="devnahian-auracare-doc-name">
              <a href="single-doctor.php">Dr. Julian Vance, MD</a>
            </h3>
            <p class="devnahian-auracare-doc-role">Senior Cardiac Electrophysiologist</p>
            <div class="devnahian-auracare-doc-actions">
              <a href="single-doctor.php" class="devnahian-auracare-doc-btn-profile">View Profile</a>
            </div>
          </div>
        </article>

      </div>

    </div>
  </main>

  <!-- STYLES SPECIFIC TO DOCTORS DIRECTORY -->
  <style>
    /* Tab Styling */
    .devnahian-auracare-tab-wrapper {
      display: flex;
      justify-content: center;
      margin-bottom: 3.5rem;
    }
    .devnahian-auracare-tab-list {
      display: inline-flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      justify-content: center;
      background: var(--devnahian-auracare-slate-50);
      padding: 0.4rem;
      border-radius: var(--devnahian-auracare-radius-full);
      border: 1px solid var(--devnahian-auracare-slate-200);
    }
    .devnahian-auracare-tab-btn {
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
    .devnahian-auracare-tab-btn:hover {
      color: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-tab-btn.active {
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
      box-shadow: 0 4px 14px rgba(2, 132, 199, 0.35);
    }

    /* Doctors Grid */
    .devnahian-auracare-doctors-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2rem;
    }
    @media (min-width: 640px) {
      .devnahian-auracare-doctors-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (min-width: 1024px) {
      .devnahian-auracare-doctors-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 2.25rem;
      }
    }
    .devnahian-auracare-doc-card {
      background: #ffffff;
      border-radius: var(--devnahian-auracare-radius-lg);
      border: 1px solid var(--devnahian-auracare-slate-200);
      box-shadow: var(--devnahian-auracare-shadow-sm);
      overflow: hidden;
      transition: var(--devnahian-auracare-transition);
      display: flex;
      flex-direction: column;
    }
    .devnahian-auracare-doc-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--devnahian-auracare-shadow-xl);
      border-color: rgba(2, 132, 199, 0.35);
    }
    .devnahian-auracare-doc-media {
      position: relative;
      height: 310px;
      overflow: hidden;
      background: var(--devnahian-auracare-slate-100);
    }
    .devnahian-auracare-doc-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .devnahian-auracare-doc-card:hover .devnahian-auracare-doc-img {
      transform: scale(1.08);
    }
    .devnahian-auracare-doc-body {
      padding: 1.8rem;
      display: flex;
      flex-direction: column;
      flex: 1;
    }
    .devnahian-auracare-doc-dept-tag {
      font-size: 0.75rem;
      font-weight: 800;
      color: var(--devnahian-auracare-primary);
      text-transform: uppercase;
      letter-spacing: 0.06em;
      margin-bottom: 0.35rem;
    }
    .devnahian-auracare-doc-name {
      font-size: 1.3rem;
      margin-bottom: 0.35rem;
    }
    .devnahian-auracare-doc-name a {
      color: var(--devnahian-auracare-slate-900);
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-doc-name a:hover {
      color: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-doc-role {
      font-size: 0.875rem;
      color: var(--devnahian-auracare-slate-500);
      margin-bottom: 1.75rem;
      flex-grow: 1;
    }
    .devnahian-auracare-doc-actions {
      margin-top: auto;
    }
    .devnahian-auracare-doc-btn-profile {
      display: block;
      width: 100%;
      padding: 0.8rem 1.25rem;
      border-radius: var(--devnahian-auracare-radius-full);
      background: var(--devnahian-auracare-primary-soft);
      color: var(--devnahian-auracare-primary);
      font-weight: 700;
      font-size: 0.875rem;
      border: 1px solid rgba(2, 132, 199, 0.2);
      text-align: center;
      cursor: pointer;
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-doc-btn-profile:hover {
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
      box-shadow: 0 4px 14px rgba(2, 132, 199, 0.35);
    }
  </style>

  <!-- JAVASCRIPT: TAB FILTERING -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const tabButtons = document.querySelectorAll('.devnahian-auracare-tab-btn');
      const docCards = document.querySelectorAll('.devnahian-auracare-doc-card');

      tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          tabButtons.forEach(b => b.classList.remove('active'));
          btn.classList.add('active');

          const filter = btn.getAttribute('data-filter');

          docCards.forEach(card => {
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