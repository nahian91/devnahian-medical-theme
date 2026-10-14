<?php include ('header.php');?>

  <!-- Breadcrumb Banner -->
  <section class="devnahian-auracare-breadcrumb-banner">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-breadcrumb-content">
        <div class="devnahian-auracare-badge-sub">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          Patient Satisfaction & Clinical Integrity
        </div>
        <h1 class="devnahian-auracare-breadcrumb-title">Patient <span>Stories & Reviews</span></h1>
        <p class="devnahian-auracare-breadcrumb-desc">Verified feedback and heartfelt recovery journeys from over 48,000 individuals treated at AuraCure.</p>
        <nav class="devnahian-auracare-breadcrumb-nav">
          <a href="index.html">Home</a>
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
          <span>Testimonials</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- Testimonials Main Content -->
  <main class="devnahian-auracare-section-padding">
    <div class="devnahian-auracare-container">

      <!-- Trust Metrics Cards -->
      <div class="devnahian-auracare-trust-metrics">
        <div class="devnahian-auracare-metric-card">
          <div class="devnahian-auracare-metric-score">4.92</div>
          <div class="devnahian-auracare-metric-stars">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <h4 style="font-size:1.1rem; margin-bottom:0.25rem;">Overall Clinical Rating</h4>
          <p style="font-size:0.85rem; color:var(--devnahian-auracare-slate-500); margin:0;">Based on 14,200+ verified post-discharge surveys</p>
        </div>

        <div class="devnahian-auracare-metric-card">
          <div class="devnahian-auracare-metric-score" style="color:var(--devnahian-auracare-secondary);">99.4%</div>
          <div class="devnahian-auracare-metric-stars" style="color:var(--devnahian-auracare-secondary);">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h4 style="font-size:1.1rem; margin-bottom:0.25rem;">Would Recommend</h4>
          <p style="font-size:0.85rem; color:var(--devnahian-auracare-slate-500); margin:0;">Patients who endorse AuraCure to family members</p>
        </div>

        <div class="devnahian-auracare-metric-card">
          <div class="devnahian-auracare-metric-score" style="color:var(--devnahian-auracare-primary);">&lt; 8 min</div>
          <div class="devnahian-auracare-metric-stars" style="color:var(--devnahian-auracare-primary);">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
          </div>
          <h4 style="font-size:1.1rem; margin-bottom:0.25rem;">Average Triage Wait</h4>
          <p style="font-size:0.85rem; color:var(--devnahian-auracare-slate-500); margin:0;">From arrival to physician intake consultation</p>
        </div>
      </div>

      <!-- Department Filter Pills -->
      <div class="devnahian-auracare-filter-pills">
        <button class="devnahian-auracare-filter-pill active" data-filter="all">All Departments</button>
        <button class="devnahian-auracare-filter-pill" data-filter="cardiology">Cardiology</button>
        <button class="devnahian-auracare-filter-pill" data-filter="neurology">Neurology</button>
        <button class="devnahian-auracare-filter-pill" data-filter="orthopedics">Orthopedics</button>
        <button class="devnahian-auracare-filter-pill" data-filter="pediatrics">Pediatrics</button>
      </div>

      <!-- Reviews Grid -->
      <div class="devnahian-auracare-reviews-grid" id="reviewsGrid">
        <!-- Review 1: Cardiology -->
        <div class="devnahian-auracare-review-card" data-category="cardiology">
          <div class="devnahian-auracare-metric-stars" style="justify-content:flex-start; margin-bottom:1rem;">
            ★★★★★
          </div>
          <p class="devnahian-auracare-review-quote">
            "Dr. Sarah Jenkins and her cath lab team diagnosed my silent arterial obstruction when another clinic brushed it off as acid reflux. The catheter stent procedure was completely pain-free, and I was back walking the very next morning."
          </p>
          <div class="devnahian-auracare-review-patient-row">
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=120&auto=format&fit=crop&q=80" alt="Clara Vance" class="devnahian-auracare-review-avatar">
            <div class="devnahian-auracare-review-info">
              <h5>Clara Vance</h5>
              <span>Treated by Dr. Sarah Jenkins &bull; Cardiology</span>
              <div class="devnahian-auracare-review-verified">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Verified Hospital Discharge
              </div>
            </div>
          </div>
        </div>

        <!-- Review 2: Neurology -->
        <div class="devnahian-auracare-review-card" data-category="neurology">
          <div class="devnahian-auracare-metric-stars" style="justify-content:flex-start; margin-bottom:1rem;">
            ★★★★★
          </div>
          <p class="devnahian-auracare-review-quote">
            "When my father suffered an acute ischemic stroke, AuraCure's rapid stroke response protocol had him inside the scanner within 6 minutes. Dr. Chang’s mechanical thrombectomy reversed his paralysis entirely."
          </p>
          <div class="devnahian-auracare-review-patient-row">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=120&auto=format&fit=crop&q=80" alt="Marcus Thornton" class="devnahian-auracare-review-avatar">
            <div class="devnahian-auracare-review-info">
              <h5>Marcus Thornton</h5>
              <span>Treated by Dr. Michael Chang &bull; Neurology</span>
              <div class="devnahian-auracare-review-verified">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Verified Hospital Discharge
              </div>
            </div>
          </div>
        </div>

        <!-- Review 3: Orthopedics -->
        <div class="devnahian-auracare-review-card" data-category="orthopedics">
          <div class="devnahian-auracare-metric-stars" style="justify-content:flex-start; margin-bottom:1rem;">
            ★★★★★
          </div>
          <p class="devnahian-auracare-review-quote">
            "Dr. Elena Rostova performed robotic knee preservation on both my knees. The physical therapy staff were attentive and compassionate. At 62, I am back to hiking and completely free of chronic joint pain."
          </p>
          <div class="devnahian-auracare-review-patient-row">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=120&auto=format&fit=crop&q=80" alt="Robert Sterling" class="devnahian-auracare-review-avatar">
            <div class="devnahian-auracare-review-info">
              <h5>Robert Sterling</h5>
              <span>Treated by Dr. Elena Rostova &bull; Orthopedics</span>
              <div class="devnahian-auracare-review-verified">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Verified Hospital Discharge
              </div>
            </div>
          </div>
        </div>

        <!-- Review 4: Pediatrics -->
        <div class="devnahian-auracare-review-card" data-category="pediatrics">
          <div class="devnahian-auracare-metric-stars" style="justify-content:flex-start; margin-bottom:1rem;">
            ★★★★★
          </div>
          <p class="devnahian-auracare-review-quote">
            "Our daughter was born premature at 31 weeks. The Level III NICU team led by Dr. Marcus Bennett was nothing short of miraculous. They treated us like family during our entire 40-day stay."
          </p>
          <div class="devnahian-auracare-review-patient-row">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=120&auto=format&fit=crop&q=80" alt="Samantha Wright" class="devnahian-auracare-review-avatar">
            <div class="devnahian-auracare-review-info">
              <h5>Samantha Wright</h5>
              <span>Treated by Dr. Marcus Bennett &bull; Pediatrics</span>
              <div class="devnahian-auracare-review-verified">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Verified Hospital Discharge
              </div>
            </div>
          </div>
        </div>

        <!-- Review 5: Cardiology -->
        <div class="devnahian-auracare-review-card" data-category="cardiology">
          <div class="devnahian-auracare-metric-stars" style="justify-content:flex-start; margin-bottom:1rem;">
            ★★★★★
          </div>
          <p class="devnahian-auracare-review-quote">
            "I suffered from debilitating AFib episodes for five years. Dr. Julian Vance performed 3D electro-anatomical ablation. I haven't had a single flutter in over 18 months. Life-changing care."
          </p>
          <div class="devnahian-auracare-review-patient-row">
            <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=120&auto=format&fit=crop&q=80" alt="Gregory Hayes" class="devnahian-auracare-review-avatar">
            <div class="devnahian-auracare-review-info">
              <h5>Gregory Hayes</h5>
              <span>Treated by Dr. Julian Vance &bull; Cardiology</span>
              <div class="devnahian-auracare-review-verified">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Verified Hospital Discharge
              </div>
            </div>
          </div>
        </div>

        <!-- Review 6: Orthopedics -->
        <div class="devnahian-auracare-review-card" data-category="orthopedics">
          <div class="devnahian-auracare-metric-stars" style="justify-content:flex-start; margin-bottom:1rem;">
            ★★★★★
          </div>
          <p class="devnahian-auracare-review-quote">
            "I tore my ACL during collegiate soccer. The sports medicine team at AuraCure repaired it with minimally invasive arthroscopy. Their physical therapists guided every step of my return to play."
          </p>
          <div class="devnahian-auracare-review-patient-row">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=120&auto=format&fit=crop&q=80" alt="Brooke Chapman" class="devnahian-auracare-review-avatar">
            <div class="devnahian-auracare-review-info">
              <h5>Brooke Chapman</h5>
              <span>Treated by Dr. Elena Rostova &bull; Orthopedics</span>
              <div class="devnahian-auracare-review-verified">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                Verified Hospital Discharge
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

<?php include ('footer.php');?>