<?php
/**
 * Template Name: FAQs
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
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          Patient Knowledge Base &amp; Protocols
        </div>
        <h1 class="devnahian-auracare-breadcrumb-title">Frequently Asked <span>Questions</span></h1>
        <p class="devnahian-auracare-breadcrumb-desc">Answers regarding hospital admission, accepted insurance carriers, patient portal access, and clinical preparations.</p>
        <nav class="devnahian-auracare-breadcrumb-nav">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
          <span>Help &amp; FAQs</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <main class="devnahian-auracare-section-padding">
    <div class="devnahian-auracare-container">

      <!-- Search Input -->
      <div class="devnahian-auracare-faq-search-wrap">
        <svg class="devnahian-auracare-faq-search-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <input type="text" id="faqSearchInput" class="devnahian-auracare-faq-search-input" placeholder="Type a question (e.g. insurance, parking, surgery)...">
      </div>

      <!-- FAQ Layout: Category Selector + Accordions -->
      <div class="devnahian-auracare-faq-layout">
        
        <!-- Sidebar Navigation -->
        <aside class="devnahian-auracare-faq-categories-card">
          <h4 class="devnahian-auracare-faq-cat-title">Help Categories</h4>
          <div class="devnahian-auracare-faq-cat-list">
            <button class="devnahian-auracare-faq-cat-btn active" data-cat="all">All Topics <span>(8)</span></button>
            <button class="devnahian-auracare-faq-cat-btn" data-cat="billing">Insurance &amp; Billing <span>(2)</span></button>
            <button class="devnahian-auracare-faq-cat-btn" data-cat="appointments">Appointments &amp; Visits <span>(2)</span></button>
            <button class="devnahian-auracare-faq-cat-btn" data-cat="clinical">Clinical Preparation <span>(2)</span></button>
            <button class="devnahian-auracare-faq-cat-btn" data-cat="telehealth">Telehealth &amp; Records <span>(2)</span></button>
          </div>
        </aside>

        <!-- Accordions List -->
        <div class="devnahian-auracare-accordion-group" id="accordionGroup">
          
          <!-- Item 1 -->
          <div class="devnahian-auracare-accordion-item active" data-cat="billing" data-keywords="insurance out of network medicare cigna aetna billing">
            <button class="devnahian-auracare-accordion-header">
              <span>What health insurance providers does AuraCure accept?</span>
              <svg class="devnahian-auracare-accordion-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="devnahian-auracare-accordion-body">
              <div class="devnahian-auracare-accordion-content">
                AuraCure is in-network with over 80 major regional and national health plans, including BlueCross BlueShield, Aetna, Cigna, UnitedHealthcare, Medicare, and Kaiser Permanente. We also provide full electronic claim filings for out-of-network plans and offer interest-free self-pay payment arrangements.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="devnahian-auracare-accordion-item" data-cat="billing" data-keywords="copay cost estimate financial aid payment">
            <button class="devnahian-auracare-accordion-header">
              <span>How do I receive an upfront cost estimate before my procedure?</span>
              <svg class="devnahian-auracare-accordion-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="devnahian-auracare-accordion-body">
              <div class="devnahian-auracare-accordion-content">
                In compliance with the No Surprises Act, our financial billing counselors provide good-faith estimates at least 3 business days prior to scheduled surgeries or diagnostic imaging scans. You can also contact our financial support desk directly at (800) 555-0199 for customized copay breakdowns.
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="devnahian-auracare-accordion-item" data-cat="appointments" data-keywords="cancel reschedule penalty policy 24 hours booking">
            <button class="devnahian-auracare-accordion-header">
              <span>What is the appointment rescheduling and cancellation policy?</span>
              <svg class="devnahian-auracare-accordion-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="devnahian-auracare-accordion-body">
              <div class="devnahian-auracare-accordion-content">
                Appointments can be rescheduled or canceled with zero penalty up to 24 hours prior to your scheduled check-in time via our online patient portal or by calling outpatient dispatch. Cancellations made with less than 24 hours notice for elective imaging may incur a nominal scheduling hold fee.
              </div>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="devnahian-auracare-accordion-item" data-cat="appointments" data-keywords="same day urgent walk-in arrival triage checkin">
            <button class="devnahian-auracare-accordion-header">
              <span>Are same-day walk-in appointments available for non-emergencies?</span>
              <svg class="devnahian-auracare-accordion-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="devnahian-auracare-accordion-body">
              <div class="devnahian-auracare-accordion-content">
                Yes. Our outpatient clinics reserve dedicated daily appointment blocks for acute non-emergency consultations (e.g. minor sports trauma, acute fever, lacerations, or sudden palpitations). Check-in is conducted swiftly via our express digital reception kiosks with an average triage time of under 8 minutes.
              </div>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="devnahian-auracare-accordion-item" data-cat="clinical" data-keywords="preparation fasting blood test mri ct scan guidelines">
            <button class="devnahian-auracare-accordion-header">
              <span>How should I prepare for fasting blood tests or imaging scans?</span>
              <svg class="devnahian-auracare-accordion-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="devnahian-auracare-accordion-body">
              <div class="devnahian-auracare-accordion-content">
                For fasting metabolic panels (glucose, lipid profiles), abstain from food and non-water beverages for 8–10 hours prior to blood draw. For intravenous contrast CT scans, fast for 4 hours prior while maintaining water hydration. Detailed preparation checklists are delivered via automated SMS upon booking.
              </div>
            </div>
          </div>

          <!-- Item 6 -->
          <div class="devnahian-auracare-accordion-item" data-cat="clinical" data-keywords="documents bring id insurance prior scans discs medical">
            <button class="devnahian-auracare-accordion-header">
              <span>What documentation must I present during my initial clinic intake?</span>
              <svg class="devnahian-auracare-accordion-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="devnahian-auracare-accordion-body">
              <div class="devnahian-auracare-accordion-content">
                Please present a government-issued photo ID (driver’s license or passport), active primary and secondary medical insurance cards, an up-to-date medication dosage list, and any prior external diagnostic CD/DVD discs or operative reports related to your consultation.
              </div>
            </div>
          </div>

          <!-- Item 7 -->
          <div class="devnahian-auracare-accordion-item" data-cat="telehealth" data-keywords="telehealth video camera browser app download hipaa">
            <button class="devnahian-auracare-accordion-header">
              <span>Do I need to download an application to join my telehealth visit?</span>
              <svg class="devnahian-auracare-accordion-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="devnahian-auracare-accordion-body">
              <div class="devnahian-auracare-accordion-content">
                No app download is required. AuraCure’s telehealth engine runs securely through standard mobile and desktop web browsers (Safari, Chrome, Edge). You will receive an encrypted meeting link 15 minutes prior to your appointment time, protected under 256-bit HIPAA compliance protocols.
              </div>
            </div>
          </div>

          <!-- Item 8 -->
          <div class="devnahian-auracare-accordion-item" data-cat="telehealth" data-keywords="records patient portal pdf results download mri doctors notes">
            <button class="devnahian-auracare-accordion-header">
              <span>How soon can I access my diagnostic lab results and doctor notes?</span>
              <svg class="devnahian-auracare-accordion-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="devnahian-auracare-accordion-body">
              <div class="devnahian-auracare-accordion-content">
                Standard routine blood and urine analyses sync to your patient portal within 2–4 hours of lab completion. Radiology reports (CT, 3T MRI, ultrasound) and physician consultation notes are typically finalized and downloadable in PDF format within 24 hours of examination.
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </main>

  <!-- STYLES & SCRIPT FOR FAQ PAGE -->
  <style>
    .devnahian-auracare-faq-search-wrap {
      position: relative;
      max-width: 620px;
      margin: 0 auto 3.5rem auto;
    }
    .devnahian-auracare-faq-search-icon {
      position: absolute;
      top: 50%;
      left: 1.25rem;
      transform: translateY(-50%);
      color: var(--devnahian-auracare-slate-400);
    }
    .devnahian-auracare-faq-search-input {
      width: 100%;
      height: 56px;
      padding: 0 1.5rem 0 3.25rem;
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-full);
      background: #ffffff;
      font-size: 0.95rem;
      outline: none;
      box-shadow: var(--devnahian-auracare-shadow-sm);
      transition: var(--devnahian-auracare-transition);
      color: var(--devnahian-auracare-slate-800);
    }
    .devnahian-auracare-faq-search-input:focus {
      border-color: var(--devnahian-auracare-primary);
      box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
    }
    .devnahian-auracare-faq-layout {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2.5rem;
      align-items: start;
    }
    @media (min-width: 992px) {
      .devnahian-auracare-faq-layout {
        grid-template-columns: 300px 1fr;
        gap: 3rem;
      }
    }
    .devnahian-auracare-faq-categories-card {
      background: #ffffff;
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-xl);
      padding: 1.75rem;
      box-shadow: var(--devnahian-auracare-shadow-sm);
      position: sticky;
      top: 100px;
    }
    .devnahian-auracare-faq-cat-title {
      font-size: 1.15rem;
      margin-bottom: 1.25rem;
      padding-bottom: 0.75rem;
      border-bottom: 1px solid var(--devnahian-auracare-slate-100);
      color: var(--devnahian-auracare-slate-900);
    }
    .devnahian-auracare-faq-cat-list {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }
    .devnahian-auracare-faq-cat-btn {
      width: 100%;
      text-align: left;
      padding: 0.8rem 1rem;
      border-radius: var(--devnahian-auracare-radius-md);
      border: 1px solid transparent;
      background: transparent;
      color: var(--devnahian-auracare-slate-700);
      font-size: 0.9rem;
      font-weight: 600;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-faq-cat-btn span {
      font-size: 0.75rem;
      color: var(--devnahian-auracare-slate-400);
      background: var(--devnahian-auracare-slate-100);
      padding: 0.15rem 0.5rem;
      border-radius: var(--devnahian-auracare-radius-full);
    }
    .devnahian-auracare-faq-cat-btn:hover {
      background: var(--devnahian-auracare-slate-50);
      color: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-faq-cat-btn.active {
      background: var(--devnahian-auracare-primary-soft);
      color: var(--devnahian-auracare-primary);
      font-weight: 700;
    }
    .devnahian-auracare-faq-cat-btn.active span {
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
    }
    .devnahian-auracare-accordion-group {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }
    .devnahian-auracare-accordion-item {
      background: #ffffff;
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-lg);
      overflow: hidden;
      box-shadow: var(--devnahian-auracare-shadow-sm);
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-accordion-item:hover {
      border-color: rgba(2, 132, 199, 0.35);
    }
    .devnahian-auracare-accordion-header {
      width: 100%;
      padding: 1.35rem 1.75rem;
      background: transparent;
      border: none;
      display: flex;
      align-items: center;
      justify-content: space-between;
      text-align: left;
      cursor: pointer;
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--devnahian-auracare-slate-900);
      gap: 1rem;
    }
    .devnahian-auracare-accordion-icon {
      width: 20px;
      height: 20px;
      color: var(--devnahian-auracare-primary);
      flex-shrink: 0;
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .devnahian-auracare-accordion-item.active .devnahian-auracare-accordion-icon {
      transform: rotate(180deg);
    }
    .devnahian-auracare-accordion-body {
      display: grid;
      grid-template-rows: 0fr;
      transition: grid-template-rows 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .devnahian-auracare-accordion-item.active .devnahian-auracare-accordion-body {
      grid-template-rows: 1fr;
    }
    .devnahian-auracare-accordion-content {
      overflow: hidden;
      padding: 0 1.75rem 1.5rem 1.75rem;
      font-size: 0.95rem;
      color: var(--devnahian-auracare-slate-600);
      line-height: 1.7;
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Accordion Toggle
      const accordionItems = document.querySelectorAll('.devnahian-auracare-accordion-item');
      accordionItems.forEach(item => {
        const header = item.querySelector('.devnahian-auracare-accordion-header');
        header.addEventListener('click', () => {
          const isActive = item.classList.contains('active');
          accordionItems.forEach(i => i.classList.remove('active'));
          if (!isActive) {
            item.classList.add('active');
          }
        });
      });

      // Category Filtering & Search Filtering
      const catBtns = document.querySelectorAll('.devnahian-auracare-faq-cat-btn');
      const searchInput = document.getElementById('faqSearchInput');
      let currentCategory = 'all';

      function filterFaqs() {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';

        accordionItems.forEach(item => {
          const cat = item.getAttribute('data-cat');
          const keywords = item.getAttribute('data-keywords') || '';
          const text = item.innerText.toLowerCase();

          const matchesCategory = (currentCategory === 'all' || cat === currentCategory);
          const matchesSearch = (!query || text.includes(query) || keywords.includes(query));

          if (matchesCategory && matchesSearch) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      }

      catBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          catBtns.forEach(b => b.classList.remove('active'));
          btn.classList.add('active');
          currentCategory = btn.getAttribute('data-cat');
          filterFaqs();
        });
      });

      if (searchInput) {
        searchInput.addEventListener('input', filterFaqs);
      }
    });
  </script>

<?php get_footer(); ?>