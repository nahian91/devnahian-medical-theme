<?php include ('header.php'); ?>

  <!-- 01. BREADCRUMB BANNER -->
  <section class="devnahian-auracare-breadcrumb-banner" aria-label="Page Breadcrumb">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-breadcrumb-content">
        <div class="devnahian-auracare-badge-sub">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Direct Coordination
        </div>
        <h1 class="devnahian-auracare-breadcrumb-title">Contact <span>Our Clinic</span></h1>
        <p class="devnahian-auracare-breadcrumb-desc">
          Reach our outpatient coordinators, emergency triage desk, or clinical support directly.
        </p>
        <nav class="devnahian-auracare-breadcrumb-nav" aria-label="Breadcrumb navigation">
          <a href="index.php">Home</a>
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
          <span>Contact Us</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- 02. MAIN CONTACT SECTION -->
  <main class="devnahian-auracare-section-padding">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-contact-layout">

        <!-- Left Column: Core Contact Channels -->
        <aside class="devnahian-auracare-contact-sidebar">
          <div class="devnahian-auracare-sidebar-card">
            <span class="devnahian-auracare-badge-sub" style="margin-bottom: 0.75rem;">Fast Response</span>
            <h2 style="font-size: 1.75rem; margin-bottom: 1rem;">Direct Channels</h2>
            <p style="color: var(--devnahian-auracare-slate-500); font-size: 0.95rem; margin-bottom: 2rem;">
              Our care coordinators answer non-emergency inquiries within two hours during clinic operating hours.
            </p>

            <div class="devnahian-auracare-contact-list">
              <!-- Address -->
              <div class="devnahian-auracare-contact-item">
                <div class="devnahian-auracare-contact-icon">
                  <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
                </div>
                <div>
                  <strong>Hospital Address</strong>
                  <p>742 Evergreen Terrace, Medical District, NY 10001</p>
                </div>
              </div>

              <!-- Phone Numbers -->
              <div class="devnahian-auracare-contact-item">
                <div class="devnahian-auracare-contact-icon">
                  <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <div>
                  <strong>Telephone Numbers</strong>
                  <p>Inquiries: <a href="tel:+18005550199">(800) 555-0199</a><br>Emergency: <a href="tel:+18005550190" style="color: var(--devnahian-auracare-danger); font-weight: 700;">(800) 555-0190</a></p>
                </div>
              </div>

              <!-- Email -->
              <div class="devnahian-auracare-contact-item">
                <div class="devnahian-auracare-contact-icon">
                  <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 7L2 7"/></svg>
                </div>
                <div>
                  <strong>Digital Inquiries</strong>
                  <p><a href="mailto:records@auracure-health.org">records@auracure-health.org</a><br><a href="mailto:helpdesk@auracure-health.org">helpdesk@auracure-health.org</a></p>
                </div>
              </div>

              <!-- Working Hours -->
              <div class="devnahian-auracare-contact-item">
                <div class="devnahian-auracare-contact-icon">
                  <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <div>
                  <strong>Working Hours</strong>
                  <p>Outpatient: Mon – Sat (8:00 AM – 9:00 PM)<br>Trauma Center: 24/7 Uninterrupted</p>
                </div>
              </div>
            </div>
          </div>
        </aside>

        <!-- Right Column: Clean Medical Message Form -->
        <section class="devnahian-auracare-contact-main">
          <div class="devnahian-auracare-form-card">
            <span class="devnahian-auracare-badge-sub" style="margin-bottom: 0.75rem;">Online Triage</span>
            <h2 style="font-size: 2rem; margin-bottom: 0.5rem;">Send a Medical Message</h2>
            <p style="color: var(--devnahian-auracare-slate-500); font-size: 0.95rem; margin-bottom: 2rem;">
              For second opinions, non-urgent treatment questions, or medical record transfers.
            </p>

            <div class="devnahian-auracare-alert" id="contactAlert" style="display: none;">
              <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
              <span id="contactAlertText"></span>
            </div>

            <form id="contactForm" method="POST" action="contact.php">
              <!-- Honeypot -->
              <div style="display:none;" aria-hidden="true">
                <input type="text" name="website_trap" tabindex="-1" autocomplete="off">
              </div>

              <div class="devnahian-auracare-form-grid">
                <div>
                  <label class="devnahian-auracare-form-label" for="contactFirstName">First Name *</label>
                  <input type="text" id="contactFirstName" name="first_name" class="devnahian-auracare-form-control" placeholder="Eleanor" required>
                </div>

                <div>
                  <label class="devnahian-auracare-form-label" for="contactLastName">Last Name *</label>
                  <input type="text" id="contactLastName" name="last_name" class="devnahian-auracare-form-control" placeholder="Vance" required>
                </div>

                <div>
                  <label class="devnahian-auracare-form-label" for="contactEmail">Email Address *</label>
                  <input type="email" id="contactEmail" name="email" class="devnahian-auracare-form-control" placeholder="eleanor@example.com" required>
                </div>

                <div>
                  <label class="devnahian-auracare-form-label" for="contactPhone">Phone Number</label>
                  <input type="tel" id="contactPhone" name="phone" class="devnahian-auracare-form-control" placeholder="(555) 000-0000">
                </div>

                <div class="devnahian-auracare-form-full">
                  <label class="devnahian-auracare-form-label" for="contactDept">Clinical Department *</label>
                  <select id="contactDept" name="department" class="devnahian-auracare-form-control" required>
                    <option value="" disabled selected>Select relevant department</option>
                    <option value="General Outpatient">General Outpatient & Triage</option>
                    <option value="Cardiology">Cardiology Sciences</option>
                    <option value="Neurology">Neurology & Spine</option>
                    <option value="Orthopedics">Joint & Orthopedics</option>
                    <option value="Pediatrics">Pediatric Care</option>
                    <option value="Billing & Insurance">Billing & Insurance Verification</option>
                  </select>
                </div>

                <div class="devnahian-auracare-form-full">
                  <label class="devnahian-auracare-form-label" for="contactMessage">Inquiry Details *</label>
                  <textarea id="contactMessage" name="message" class="devnahian-auracare-form-control" style="height: 140px;" placeholder="Please outline your symptoms, questions, or treatment requests..." required></textarea>
                </div>

                <div class="devnahian-auracare-form-full">
                  <button type="submit" class="devnahian-auracare-btn devnahian-auracare-btn-primary" style="width: 100%; height: 52px;" id="contactSubmitBtn">
                    <span>Send Message</span>
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </section>

      </div>

      <!-- Emergency Callout Strip -->
      <div class="devnahian-auracare-emergency-strip">
        <div>
          <h3 style="font-size: 1.35rem; margin-bottom: 0.25rem;">Immediate Emergency or Severe Symptoms?</h3>
          <p style="margin: 0; opacity: 0.9; font-size: 0.95rem;">Do not submit web messages for immediate life threats. Call emergency triage services instantly.</p>
        </div>
        <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
          <a href="tel:911" class="devnahian-auracare-btn" style="background: #ffffff; color: var(--devnahian-auracare-slate-900);">Call 911</a>
          <a href="tel:+18005550190" class="devnahian-auracare-btn devnahian-auracare-btn-outline" style="border-color: rgba(255,255,255,0.6); color: #ffffff;">(800) 555-0190</a>
        </div>
      </div>
    </div>
  </main>

  <!-- Clean Scoped Styles for the 2-Column Contact Section -->
  <style>
    .devnahian-auracare-contact-layout {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2.5rem;
      align-items: start;
    }
    @media (min-width: 992px) {
      .devnahian-auracare-contact-layout {
        grid-template-columns: 380px 1fr;
        gap: 3.5rem;
      }
    }
    .devnahian-auracare-sidebar-card,
    .devnahian-auracare-form-card {
      background: #ffffff;
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-xl);
      padding: 2.5rem;
      box-shadow: var(--devnahian-auracare-shadow-sm);
    }
    .devnahian-auracare-contact-list {
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }
    .devnahian-auracare-contact-item {
      display: flex;
      gap: 1rem;
      align-items: flex-start;
    }
    .devnahian-auracare-contact-item strong {
      display: block;
      color: var(--devnahian-auracare-slate-900);
      font-size: 0.95rem;
      margin-bottom: 0.25rem;
    }
    .devnahian-auracare-contact-item p {
      font-size: 0.9rem;
      color: var(--devnahian-auracare-slate-600);
      margin: 0;
      line-height: 1.5;
    }
    .devnahian-auracare-contact-icon {
      width: 44px;
      height: 44px;
      border-radius: var(--devnahian-auracare-radius-md);
      background: var(--devnahian-auracare-primary-glass);
      color: var(--devnahian-auracare-primary);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .devnahian-auracare-form-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1.25rem;
    }
    @media (min-width: 640px) {
      .devnahian-auracare-form-grid {
        grid-template-columns: 1fr 1fr;
      }
    }
    .devnahian-auracare-form-full {
      grid-column: 1 / -1;
    }
    .devnahian-auracare-form-label {
      display: block;
      font-size: 0.85rem;
      font-weight: 700;
      color: var(--devnahian-auracare-slate-700);
      margin-bottom: 0.45rem;
    }
    .devnahian-auracare-form-control {
      width: 100%;
      height: 48px;
      padding: 0.75rem 1rem;
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-sm);
      font-size: 0.95rem;
      color: var(--devnahian-auracare-slate-800);
      background: var(--devnahian-auracare-slate-50);
      outline: none;
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-form-control:focus {
      background: #ffffff;
      border-color: var(--devnahian-auracare-primary);
      box-shadow: 0 0 0 4px rgba(2, 132, 199, 0.12);
    }
    .devnahian-auracare-emergency-strip {
      background: linear-gradient(135deg, var(--devnahian-auracare-slate-900) 0%, #0c2033 100%);
      color: #ffffff;
      border-radius: var(--devnahian-auracare-radius-xl);
      padding: 2rem 2.5rem;
      margin-top: 3.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1.5rem;
    }
    .devnahian-auracare-alert {
      padding: 1rem;
      border-radius: var(--devnahian-auracare-radius-sm);
      margin-bottom: 1.5rem;
      font-size: 0.9rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }
    .devnahian-auracare-alert.success {
      background: #f0fdf4;
      color: #166534;
      border: 1px solid #bbf7d0;
    }
    .devnahian-auracare-alert.error {
      background: #fef2f2;
      color: #991b1b;
      border: 1px solid #fecaca;
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('contactForm');
      const alertBox = document.getElementById('contactAlert');
      const alertText = document.getElementById('contactAlertText');
      const submitBtn = document.getElementById('contactSubmitBtn');

      if (form) {
        form.addEventListener('submit', (e) => {
          e.preventDefault();

          // Client-side Honeypot
          const honeypot = form.querySelector('input[name="website_trap"]');
          if (honeypot && honeypot.value.trim() !== '') return;

          submitBtn.disabled = true;
          submitBtn.querySelector('span').innerText = 'Transmitting...';

          setTimeout(() => {
            alertBox.className = 'devnahian-auracare-alert success';
            alertBox.style.display = 'flex';
            alertText.innerText = 'Thank you. Your clinical inquiry has been received. Our coordinators will respond within 2 hours.';
            form.reset();

            submitBtn.disabled = false;
            submitBtn.querySelector('span').innerText = 'Send Message';
          }, 800);
        });
      }
    });
  </script>

<?php include ('footer.php'); ?>