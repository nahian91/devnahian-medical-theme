<?php include ('header.php'); ?>

  <!-- 01. CLINICAL BREADCRUMB BANNER -->
  <section class="devnahian-auracare-breadcrumb-banner" aria-label="Page Breadcrumb">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-breadcrumb-content">
        <div class="devnahian-auracare-badge-sub">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          Direct Physician Scheduler
        </div>
        <h1 class="devnahian-auracare-breadcrumb-title">Schedule an <span>Appointment</span></h1>
        <p class="devnahian-auracare-breadcrumb-desc">
          Complete our verified 4-step intake to book in-clinic consultations, specialist exams, or telehealth video visits.
        </p>
        <nav class="devnahian-auracare-breadcrumb-nav" aria-label="Breadcrumb navigation">
          <a href="index.php">Home</a>
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
          <span>Appointment Booking</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- 02. APPOINTMENT MULTI-STEP SCHEDULER -->
  <main class="devnahian-auracare-section-padding">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-booking-layout">

        <!-- Left Column: Multi-Step Form Wizard -->
        <div class="devnahian-auracare-engine-card">

          <!-- Wizard Progress Stepper Header -->
          <div class="devnahian-auracare-stepper-bar" role="progressbar" aria-label="Booking Progress">
            <div class="devnahian-auracare-step-tab active" data-step-target="1">
              <span class="devnahian-auracare-step-indicator">1</span>
              <div class="devnahian-auracare-step-label">
                <strong>Specialty</strong>
                <span>Doctor & Dept</span>
              </div>
            </div>
            <div class="devnahian-auracare-step-connector"></div>
            <div class="devnahian-auracare-step-tab" data-step-target="2">
              <span class="devnahian-auracare-step-indicator">2</span>
              <div class="devnahian-auracare-step-label">
                <strong>Schedule</strong>
                <span>Date & Format</span>
              </div>
            </div>
            <div class="devnahian-auracare-step-connector"></div>
            <div class="devnahian-auracare-step-tab" data-step-target="3">
              <span class="devnahian-auracare-step-indicator">3</span>
              <div class="devnahian-auracare-step-label">
                <strong>Patient</strong>
                <span>Contact Details</span>
              </div>
            </div>
            <div class="devnahian-auracare-step-connector"></div>
            <div class="devnahian-auracare-step-tab" data-step-target="4">
              <span class="devnahian-auracare-step-indicator">4</span>
              <div class="devnahian-auracare-step-label">
                <strong>Confirm</strong>
                <span>Review & Pass</span>
              </div>
            </div>
          </div>

          <form id="multiStepBookingForm">

            <!-- STEP 1: Specialty & Physician Selection -->
            <div class="devnahian-auracare-wizard-step active" id="wizardStep1">
              <div class="devnahian-auracare-step-lead">
                <h3>Select Department & Attending Physician</h3>
                <p>Choose the clinical field and practitioner best suited to your symptoms.</p>
              </div>

              <div class="devnahian-auracare-form-grid">
                <div>
                  <label class="devnahian-auracare-form-label" for="bookingDept">Clinical Department *</label>
                  <select id="bookingDept" class="devnahian-auracare-form-control" required>
                    <option value="Cardiology" selected>Cardiology & Heart Center</option>
                    <option value="Neurology">Neurology & Spine Sciences</option>
                    <option value="Orthopedics">Joint & Orthopedic Institute</option>
                    <option value="Pediatrics">Pediatric & Child Health</option>
                    <option value="Radiology">Radiology & Clinical Imaging</option>
                  </select>
                </div>

                <div>
                  <label class="devnahian-auracare-form-label" for="bookingDoctor">Attending Physician *</label>
                  <select id="bookingDoctor" class="devnahian-auracare-form-control" required>
                    <option value="Dr. Sarah Jenkins, MD">Dr. Sarah Jenkins, MD (Chief Interventional)</option>
                    <option value="Dr. Julian Vance, MD">Dr. Julian Vance, MD (Cardiac Arrhythmia & EP)</option>
                    <option value="First Available Specialist">First Available Department Specialist</option>
                  </select>
                </div>

                <!-- Live Physician Preview Card -->
                <div class="devnahian-auracare-form-full">
                  <div class="devnahian-auracare-doctor-preview-box" id="doctorPreviewBox">
                    <img id="docPreviewImg" src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=200&auto=format&fit=crop&q=80" alt="Doctor photo">
                    <div>
                      <div class="devnahian-auracare-doc-preview-badge">Verified Specialist</div>
                      <h4 id="docPreviewName">Dr. Sarah Jenkins, MD</h4>
                      <p id="docPreviewMeta">Harvard Medical School • 14 Yrs Experience • Level 1 Triage</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="devnahian-auracare-step-nav">
                <span></span>
                <button type="button" class="devnahian-auracare-btn devnahian-auracare-btn-primary" onclick="devnahianAuracareGoToStep(2)">
                  <span>Continue to Schedule</span>
                  <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
              </div>
            </div>

            <!-- STEP 2: Format & Schedule Selection -->
            <div class="devnahian-auracare-wizard-step" id="wizardStep2">
              <div class="devnahian-auracare-step-lead">
                <h3>Appointment Format & Arrival Time</h3>
                <p>Pick your consultation format, date, and preferred clinic arrival window.</p>
              </div>

              <!-- Format Selector -->
              <label class="devnahian-auracare-form-label">Consultation Format *</label>
              <div class="devnahian-auracare-format-grid" id="formatSelector" style="margin-bottom: 2rem;">
                <div class="devnahian-auracare-format-option active" data-type="In-Clinic Visit" data-fee="$180">
                  <div class="devnahian-auracare-format-icon">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-3"/></svg>
                  </div>
                  <div class="devnahian-auracare-format-title">In-Clinic Visit</div>
                  <div class="devnahian-auracare-format-price">Hospital Exam ($180)</div>
                </div>

                <div class="devnahian-auracare-format-option" data-type="Telehealth Video" data-fee="$120">
                  <div class="devnahian-auracare-format-icon">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
                  </div>
                  <div class="devnahian-auracare-format-title">Telehealth Video</div>
                  <div class="devnahian-auracare-format-price">HIPAA Encrypted ($120)</div>
                </div>

                <div class="devnahian-auracare-format-option" data-type="Diagnostic Scan" data-fee="$240">
                  <div class="devnahian-auracare-format-icon">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
                  </div>
                  <div class="devnahian-auracare-format-title">Diagnostic Scan</div>
                  <div class="devnahian-auracare-format-price">Lab / Imaging ($240)</div>
                </div>
              </div>

              <!-- Date Picker -->
              <div class="devnahian-auracare-form-grid" style="margin-bottom: 1.5rem;">
                <div class="devnahian-auracare-form-full">
                  <label class="devnahian-auracare-form-label" for="bookingDate">Appointment Date *</label>
                  <input type="date" id="bookingDate" class="devnahian-auracare-form-control" required>
                </div>
              </div>

              <!-- Time Slots Grid -->
              <label class="devnahian-auracare-form-label">Available Arrival Slots *</label>
              <div class="devnahian-auracare-slots-grid" id="slotsContainer" style="margin-bottom: 1rem;">
                <div class="devnahian-auracare-slot-pill active" data-time="08:30 AM">08:30 AM</div>
                <div class="devnahian-auracare-slot-pill" data-time="10:00 AM">10:00 AM</div>
                <div class="devnahian-auracare-slot-pill" data-time="11:30 AM">11:30 AM</div>
                <div class="devnahian-auracare-slot-pill" data-time="01:15 PM">01:15 PM</div>
                <div class="devnahian-auracare-slot-pill" data-time="02:45 PM">02:45 PM</div>
                <div class="devnahian-auracare-slot-pill" data-time="04:00 PM">04:00 PM</div>
                <div class="devnahian-auracare-slot-pill" data-time="05:30 PM">05:30 PM</div>
                <div class="devnahian-auracare-slot-pill" data-time="07:00 PM">07:00 PM</div>
              </div>

              <div class="devnahian-auracare-step-nav">
                <button type="button" class="devnahian-auracare-btn devnahian-auracare-btn-outline" onclick="devnahianAuracareGoToStep(1)">
                  <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                  <span>Back</span>
                </button>
                <button type="button" class="devnahian-auracare-btn devnahian-auracare-btn-primary" onclick="devnahianAuracareGoToStep(3)">
                  <span>Patient Information</span>
                  <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
              </div>
            </div>

            <!-- STEP 3: Patient Information -->
            <div class="devnahian-auracare-wizard-step" id="wizardStep3">
              <div class="devnahian-auracare-step-lead">
                <h3>Patient Triage & Contact Details</h3>
                <p>Provide verified contact details to receive your appointment barcode and pass.</p>
              </div>

              <div class="devnahian-auracare-form-grid">
                <div>
                  <label class="devnahian-auracare-form-label" for="bookingFullName">Full Legal Name *</label>
                  <input type="text" id="bookingFullName" class="devnahian-auracare-form-control" placeholder="Eleanor Vance" required>
                </div>
                <div>
                  <label class="devnahian-auracare-form-label" for="bookingPhone">Phone Number *</label>
                  <input type="tel" id="bookingPhone" class="devnahian-auracare-form-control" placeholder="(555) 000-0000" required>
                </div>
                <div>
                  <label class="devnahian-auracare-form-label" for="bookingEmail">Email Address (for Digital Pass) *</label>
                  <input type="email" id="bookingEmail" class="devnahian-auracare-form-control" placeholder="eleanor@example.com" required>
                </div>
                <div>
                  <label class="devnahian-auracare-form-label" for="bookingDOB">Date of Birth *</label>
                  <input type="date" id="bookingDOB" class="devnahian-auracare-form-control" required>
                </div>
                <div class="devnahian-auracare-form-full">
                  <label class="devnahian-auracare-form-label" for="bookingInsurance">Health Insurance Carrier (Optional)</label>
                  <select id="bookingInsurance" class="devnahian-auracare-form-control">
                    <option value="Self-Pay">Self-Pay / Direct Out-of-Pocket</option>
                    <option value="BlueCross BlueShield">BlueCross BlueShield (In-Network)</option>
                    <option value="Aetna Health">Aetna Health (In-Network)</option>
                    <option value="Cigna Healthcare">Cigna Healthcare (In-Network)</option>
                    <option value="UnitedHealthcare">UnitedHealthcare (In-Network)</option>
                    <option value="Medicare">Medicare / Medicare Advantage</option>
                  </select>
                </div>
                <div class="devnahian-auracare-form-full">
                  <label class="devnahian-auracare-form-label" for="bookingReason">Reason for Visit / Primary Symptoms</label>
                  <textarea id="bookingReason" class="devnahian-auracare-form-control" style="height: 100px; padding-top: 0.75rem;" placeholder="Briefly describe current symptoms, routine checkup requests, or medication reviews..."></textarea>
                </div>
              </div>

              <div class="devnahian-auracare-step-nav">
                <button type="button" class="devnahian-auracare-btn devnahian-auracare-btn-outline" onclick="devnahianAuracareGoToStep(2)">
                  <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                  <span>Back</span>
                </button>
                <button type="button" class="devnahian-auracare-btn devnahian-auracare-btn-primary" onclick="devnahianAuracareGoToStep(4)">
                  <span>Review & Verify</span>
                  <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
              </div>
            </div>

            <!-- STEP 4: Final Review & Confirmation -->
            <div class="devnahian-auracare-wizard-step" id="wizardStep4">
              <div class="devnahian-auracare-step-lead">
                <h3>Review & Confirm Your Reservation</h3>
                <p>Please double-check your clinical details before submitting.</p>
              </div>

              <!-- Review Summary Box -->
              <div class="devnahian-auracare-review-box">
                <div class="devnahian-auracare-review-line">
                  <span>Patient:</span>
                  <strong id="reviewPatientName">—</strong>
                </div>
                <div class="devnahian-auracare-review-line">
                  <span>Contact:</span>
                  <strong id="reviewPatientContact">—</strong>
                </div>
                <div class="devnahian-auracare-review-line">
                  <span>Department:</span>
                  <strong id="reviewDept">—</strong>
                </div>
                <div class="devnahian-auracare-review-line">
                  <span>Physician:</span>
                  <strong id="reviewDoctor">—</strong>
                </div>
                <div class="devnahian-auracare-review-line">
                  <span>Visit Format:</span>
                  <strong id="reviewFormat">—</strong>
                </div>
                <div class="devnahian-auracare-review-line">
                  <span>Schedule:</span>
                  <strong id="reviewSchedule">—</strong>
                </div>
                <div class="devnahian-auracare-review-line">
                  <span>Insurance / Coverage:</span>
                  <strong id="reviewInsurance">—</strong>
                </div>
              </div>

              <div class="devnahian-auracare-step-nav">
                <button type="button" class="devnahian-auracare-btn devnahian-auracare-btn-outline" onclick="devnahianAuracareGoToStep(3)">
                  <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                  <span>Edit Details</span>
                </button>
                <button type="submit" class="devnahian-auracare-btn devnahian-auracare-btn-primary" style="height: 52px;" id="submitBookingBtn">
                  <span>Generate Digital Booking Pass</span>
                  <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                </button>
              </div>
            </div>

          </form>
        </div>

        <!-- Right Column: Live Booking Summary & Guarantees -->
        <aside class="devnahian-auracare-summary-sidebar">
          
          <!-- Sticky Live Summary Card -->
          <div class="devnahian-auracare-summary-card">
            <h4 class="devnahian-auracare-summary-title">Booking Summary</h4>

            <div class="devnahian-auracare-summary-rows">
              <div class="devnahian-auracare-summary-row">
                <span>Department:</span>
                <strong id="summaryDept">Cardiology</strong>
              </div>
              <div class="devnahian-auracare-summary-row">
                <span>Physician:</span>
                <strong id="summaryDoctor">Dr. Sarah Jenkins</strong>
              </div>
              <div class="devnahian-auracare-summary-row">
                <span>Format:</span>
                <strong id="summaryFormat">In-Clinic Visit</strong>
              </div>
              <div class="devnahian-auracare-summary-row">
                <span>Date:</span>
                <strong id="summaryDate">Select a date</strong>
              </div>
              <div class="devnahian-auracare-summary-row">
                <span>Slot:</span>
                <strong id="summarySlot">08:30 AM</strong>
              </div>
            </div>

            <div class="devnahian-auracare-summary-total">
              <span>Estimated Copay:</span>
              <strong id="summaryTotal">$180</strong>
            </div>

            <!-- Clinical Care Guarantees -->
            <div class="devnahian-auracare-guarantees-list">
              <div class="devnahian-auracare-guarantee-item">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Zero wait-time express digital kiosk check-in</span>
              </div>
              <div class="devnahian-auracare-guarantee-item">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Direct electronic claim filing with 80+ insurers</span>
              </div>
              <div class="devnahian-auracare-guarantee-item">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Free cancellation up to 24h prior to visit</span>
              </div>
            </div>
          </div>

          <!-- Emergency Direct Helpline Box -->
          <div class="devnahian-auracare-urgent-widget">
            <h4>
              <svg width="20" height="20" fill="none" stroke="#38bdf8" stroke-width="2.2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              Acute Emergency Triage
            </h4>
            <p>
              Experiencing severe acute symptoms or trauma? Do not use the online booking form. Contact our rapid ambulance dispatch immediately.
            </p>
            <a href="tel:+18005550199" class="devnahian-auracare-btn devnahian-auracare-btn-outline" style="border-color:rgba(255,255,255,0.4); color:#ffffff; background:rgba(255,255,255,0.1); width:100%; font-size:0.875rem;">
              Call: (800) 555-0199
            </a>
          </div>

        </aside>

      </div>
    </div>
  </main>

  <!-- 03. DIGITAL APPOINTMENT PASS MODAL -->
  <div class="devnahian-auracare-modal-overlay" id="bookingPassModal" role="dialog" aria-modal="true" aria-labelledby="modalPassTitle">
    <div class="devnahian-auracare-modal-card">
      <div class="devnahian-auracare-modal-icon-success">
        <svg width="36" height="36" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
      </div>

      <span class="devnahian-auracare-badge-sub" style="margin-bottom:0.5rem;">Digital Appointment Pass</span>
      <h3 id="modalPassTitle" style="font-size:1.6rem; margin-bottom:0.35rem; color:var(--devnahian-auracare-slate-900);">Reservation Confirmed</h3>
      
      <p style="color:var(--devnahian-auracare-slate-500); font-size:0.875rem; margin-bottom:1.5rem;">
        Reference Code: <strong id="modalRefCode" style="color:var(--devnahian-auracare-primary); letter-spacing:0.06em;">AC-84920</strong>
      </p>

      <div class="devnahian-auracare-digital-pass-card">
        <div>
          <span>Patient Name</span>
          <strong id="modalPtName">Eleanor Vance</strong>
        </div>
        <div>
          <span>Department</span>
          <strong id="modalPtDept">Cardiology</strong>
        </div>
        <div>
          <span>Physician</span>
          <strong id="modalPtDoctor">Dr. Sarah Jenkins</strong>
        </div>
        <div>
          <span>Date & Time Slot</span>
          <strong id="modalPtTime">Oct 20, 2026 at 08:30 AM</strong>
        </div>
        <div>
          <span>Consultation Format</span>
          <strong id="modalPtFormat" style="color:var(--devnahian-auracare-primary);">In-Clinic Visit</strong>
        </div>
      </div>

      <div style="display:flex; gap:0.75rem;">
        <button class="devnahian-auracare-btn devnahian-auracare-btn-primary" style="flex:1;" onclick="devnahianAuracareClosePassModal()">
          Done & Return
        </button>
        <button class="devnahian-auracare-btn devnahian-auracare-btn-outline" onclick="window.print()">
          Print Pass
        </button>
      </div>
    </div>
  </div>

  <!-- STYLES SPECIFIC TO MULTI-STEP WIZARD -->
  <style>
    .devnahian-auracare-booking-layout {
      display: grid;
      grid-template-columns: 1fr;
      gap: 3.5rem;
      align-items: start;
    }
    @media (min-width: 992px) {
      .devnahian-auracare-booking-layout {
        grid-template-columns: 1fr 380px;
        gap: 4rem;
      }
    }

    .devnahian-auracare-engine-card {
      background: #ffffff;
      border-radius: var(--devnahian-auracare-radius-xl);
      border: 1px solid var(--devnahian-auracare-slate-200);
      padding: 2.25rem 1.75rem;
      box-shadow: var(--devnahian-auracare-shadow-md);
    }
    @media (min-width: 768px) {
      .devnahian-auracare-engine-card { padding: 3rem; }
    }

    /* Stepper Header Bar */
    .devnahian-auracare-stepper-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 2.75rem;
      padding-bottom: 1.75rem;
      border-bottom: 1px solid var(--devnahian-auracare-slate-200);
      overflow-x: auto;
      gap: 0.5rem;
    }
    .devnahian-auracare-step-tab {
      display: flex;
      align-items: center;
      gap: 0.65rem;
      cursor: pointer;
      opacity: 0.45;
      transition: var(--devnahian-auracare-transition);
      flex-shrink: 0;
    }
    .devnahian-auracare-step-tab.active {
      opacity: 1;
    }
    .devnahian-auracare-step-tab.completed .devnahian-auracare-step-indicator {
      background: var(--devnahian-auracare-secondary);
      color: #ffffff;
      border-color: var(--devnahian-auracare-secondary);
    }
    .devnahian-auracare-step-indicator {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: var(--devnahian-auracare-slate-100);
      border: 2px solid var(--devnahian-auracare-slate-300);
      color: var(--devnahian-auracare-slate-700);
      font-weight: 800;
      font-size: 0.85rem;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-step-tab.active .devnahian-auracare-step-indicator {
      background: var(--devnahian-auracare-primary);
      border-color: var(--devnahian-auracare-primary);
      color: #ffffff;
      box-shadow: 0 4px 12px rgba(2, 132, 199, 0.35);
    }
    .devnahian-auracare-step-label {
      display: flex;
      flex-direction: column;
      line-height: 1.25;
    }
    .devnahian-auracare-step-label strong {
      font-size: 0.875rem;
      color: var(--devnahian-auracare-slate-900);
    }
    .devnahian-auracare-step-label span {
      font-size: 0.725rem;
      color: var(--devnahian-auracare-slate-400);
    }
    .devnahian-auracare-step-connector {
      flex: 1;
      height: 2px;
      background: var(--devnahian-auracare-slate-200);
      margin: 0 0.5rem;
      min-width: 20px;
    }

    /* Wizard Step Container */
    .devnahian-auracare-wizard-step {
      display: none;
      animation: devnahian-auracare-fadeIn 0.25s ease-out;
    }
    .devnahian-auracare-wizard-step.active {
      display: block;
    }
    @keyframes devnahian-auracare-fadeIn {
      from { opacity: 0; transform: translateY(8px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .devnahian-auracare-step-lead {
      margin-bottom: 2rem;
    }
    .devnahian-auracare-step-lead h3 {
      font-size: 1.4rem;
      margin-bottom: 0.35rem;
    }
    .devnahian-auracare-step-lead p {
      font-size: 0.95rem;
      color: var(--devnahian-auracare-slate-500);
      margin: 0;
    }
    .devnahian-auracare-step-nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 2.5rem;
      padding-top: 1.75rem;
      border-top: 1px solid var(--devnahian-auracare-slate-100);
    }

    /* Form Fields */
    .devnahian-auracare-form-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1.25rem;
    }
    @media (min-width: 576px) {
      .devnahian-auracare-form-grid { grid-template-columns: repeat(2, 1fr); }
    }
    .devnahian-auracare-form-full { grid-column: 1 / -1; }
    .devnahian-auracare-form-label {
      display: block;
      font-size: 0.825rem;
      font-weight: 700;
      color: var(--devnahian-auracare-slate-700);
      margin-bottom: 0.45rem;
    }
    .devnahian-auracare-form-control {
      width: 100%;
      height: 50px;
      padding: 0.75rem 1rem;
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-sm);
      font-size: 0.9375rem;
      color: var(--devnahian-auracare-slate-800);
      outline: none;
      transition: var(--devnahian-auracare-transition);
      background: var(--devnahian-auracare-slate-50);
    }
    .devnahian-auracare-form-control:focus {
      background: #ffffff;
      border-color: var(--devnahian-auracare-primary);
      box-shadow: 0 0 0 4px rgba(2, 132, 199, 0.15);
    }

    /* Doctor Preview Card */
    .devnahian-auracare-doctor-preview-box {
      background: var(--devnahian-auracare-primary-soft);
      border: 1px solid rgba(2, 132, 199, 0.2);
      border-radius: var(--devnahian-auracare-radius-md);
      padding: 1.25rem;
      display: flex;
      align-items: center;
      gap: 1.15rem;
      margin-top: 0.5rem;
    }
    .devnahian-auracare-doctor-preview-box img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid var(--devnahian-auracare-primary);
      flex-shrink: 0;
    }
    .devnahian-auracare-doc-preview-badge {
      font-size: 0.7rem;
      font-weight: 800;
      color: var(--devnahian-auracare-primary);
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }
    .devnahian-auracare-doctor-preview-box h4 {
      font-size: 1.05rem;
      margin-bottom: 0.15rem;
    }
    .devnahian-auracare-doctor-preview-box p {
      font-size: 0.8rem;
      color: var(--devnahian-auracare-slate-500);
      margin: 0;
    }

    /* Format Cards Grid */
    .devnahian-auracare-format-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem;
    }
    @media (min-width: 576px) {
      .devnahian-auracare-format-grid { grid-template-columns: repeat(3, 1fr); }
    }
    .devnahian-auracare-format-option {
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-md);
      padding: 1.25rem 1rem;
      text-align: center;
      cursor: pointer;
      transition: var(--devnahian-auracare-transition);
      background: var(--devnahian-auracare-slate-50);
    }
    .devnahian-auracare-format-option.active,
    .devnahian-auracare-format-option:hover {
      border-color: var(--devnahian-auracare-primary);
      background: var(--devnahian-auracare-primary-soft);
      transform: translateY(-2px);
      box-shadow: var(--devnahian-auracare-shadow-xs);
    }
    .devnahian-auracare-format-icon {
      margin: 0 auto 0.5rem auto;
      color: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-format-title {
      font-size: 0.95rem;
      font-weight: 700;
      color: var(--devnahian-auracare-slate-900);
      margin-bottom: 0.15rem;
    }
    .devnahian-auracare-format-price {
      font-size: 0.8rem;
      color: var(--devnahian-auracare-slate-500);
    }

    /* Time Slots Grid */
    .devnahian-auracare-slots-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 0.75rem;
    }
    @media (min-width: 576px) {
      .devnahian-auracare-slots-grid { grid-template-columns: repeat(4, 1fr); }
    }
    .devnahian-auracare-slot-pill {
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-sm);
      padding: 0.7rem 0.5rem;
      text-align: center;
      font-size: 0.85rem;
      font-weight: 700;
      color: var(--devnahian-auracare-slate-700);
      background: #ffffff;
      cursor: pointer;
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-slot-pill:hover,
    .devnahian-auracare-slot-pill.active {
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
      border-color: var(--devnahian-auracare-primary);
      box-shadow: 0 4px 12px rgba(2, 132, 199, 0.3);
    }

    /* Review Card in Step 4 */
    .devnahian-auracare-review-box {
      background: var(--devnahian-auracare-slate-50);
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-lg);
      padding: 1.75rem;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }
    .devnahian-auracare-review-line {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.925rem;
      padding-bottom: 0.75rem;
      border-bottom: 1px solid var(--devnahian-auracare-slate-200);
    }
    .devnahian-auracare-review-line:last-child {
      border-bottom: none;
      padding-bottom: 0;
    }
    .devnahian-auracare-review-line span {
      color: var(--devnahian-auracare-slate-500);
    }
    .devnahian-auracare-review-line strong {
      color: var(--devnahian-auracare-slate-900);
      text-align: right;
    }

    /* Summary Sidebar Card */
    .devnahian-auracare-summary-sidebar {
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }
    .devnahian-auracare-summary-card {
      background: #ffffff;
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-xl);
      padding: 2.25rem;
      box-shadow: var(--devnahian-auracare-shadow-md);
      position: sticky;
      top: 100px;
    }
    .devnahian-auracare-summary-title {
      font-size: 1.35rem;
      margin-bottom: 1.5rem;
      padding-bottom: 0.75rem;
      border-bottom: 1px solid var(--devnahian-auracare-slate-100);
    }
    .devnahian-auracare-summary-rows {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      font-size: 0.9rem;
      margin-bottom: 1.75rem;
    }
    .devnahian-auracare-summary-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .devnahian-auracare-summary-row span {
      color: var(--devnahian-auracare-slate-500);
    }
    .devnahian-auracare-summary-row strong {
      color: var(--devnahian-auracare-slate-900);
      text-align: right;
    }
    .devnahian-auracare-summary-total {
      display: flex;
      justify-content: space-between;
      align-items: baseline;
      padding-top: 1.25rem;
      border-top: 2px dashed var(--devnahian-auracare-slate-200);
      margin-bottom: 2rem;
    }
    .devnahian-auracare-summary-total span {
      font-weight: 700;
      font-size: 1.05rem;
      color: var(--devnahian-auracare-slate-800);
    }
    .devnahian-auracare-summary-total strong {
      font-size: 1.85rem;
      font-family: var(--devnahian-auracare-font-heading);
      color: var(--devnahian-auracare-primary);
    }

    .devnahian-auracare-guarantees-list {
      display: flex;
      flex-direction: column;
      gap: 0.85rem;
      font-size: 0.85rem;
      color: var(--devnahian-auracare-slate-600);
      line-height: 1.5;
    }
    .devnahian-auracare-guarantee-item {
      display: flex;
      align-items: flex-start;
      gap: 0.65rem;
    }
    .devnahian-auracare-guarantee-item svg {
      color: var(--devnahian-auracare-secondary);
      flex-shrink: 0;
      margin-top: 3px;
    }

    /* Emergency Sidebar Widget */
    .devnahian-auracare-urgent-widget {
      background: linear-gradient(135deg, var(--devnahian-auracare-slate-900) 0%, #082136 100%);
      border-radius: var(--devnahian-auracare-radius-xl);
      padding: 2rem;
      color: #ffffff;
      box-shadow: var(--devnahian-auracare-shadow-md);
    }
    .devnahian-auracare-urgent-widget h4 {
      color: #ffffff;
      font-size: 1.2rem;
      margin-bottom: 0.4rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .devnahian-auracare-urgent-widget p {
      color: var(--devnahian-auracare-slate-400);
      font-size: 0.85rem;
      line-height: 1.5;
      margin-bottom: 1.25rem;
    }

    /* Pass Details Card */
    .devnahian-auracare-digital-pass-card {
      background: var(--devnahian-auracare-slate-50);
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-md);
      padding: 1.5rem;
      text-align: left;
      margin-bottom: 1.75rem;
      font-size: 0.9rem;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }
    .devnahian-auracare-digital-pass-card span {
      color: var(--devnahian-auracare-slate-400);
      font-size: 0.8rem;
      display: block;
    }
    .devnahian-auracare-digital-pass-card strong {
      color: var(--devnahian-auracare-slate-800);
    }
  </style>

  <!-- WIZARD STEP & CALCULATION LOGIC -->
  <script>
    let currentActiveStep = 1;
    let selectedFormat = 'In-Clinic Visit';
    let selectedFee = '$180';
    let selectedSlot = '08:30 AM';

    const doctorDatabase = {
      'Cardiology': [
        { name: 'Dr. Sarah Jenkins, MD', title: 'Chief of Interventional Cardiology', meta: 'Harvard Medical School • 14 Yrs Experience', img: 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=200&auto=format&fit=crop&q=80' },
        { name: 'Dr. Julian Vance, MD', title: 'Cardiac Arrhythmia & EP', meta: 'Oxford Medical School • 15 Yrs Experience', img: 'https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=200&auto=format&fit=crop&q=80' },
        { name: 'First Available Specialist', title: 'On-Duty Cardiologist', meta: 'Clinical Triage Board • AuraCure', img: 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=200&auto=format&fit=crop&q=80' }
      ],
      'Neurology': [
        { name: 'Dr. Michael Chang, PhD', title: 'Senior Neurosurgeon & Chair', meta: 'Johns Hopkins • 18 Yrs Experience', img: 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=200&auto=format&fit=crop&q=80' },
        { name: 'First Available Specialist', title: 'On-Duty Neurologist', meta: 'Clinical Triage Board • AuraCure', img: 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=200&auto=format&fit=crop&q=80' }
      ],
      'Orthopedics': [
        { name: 'Dr. Elena Rostova, MD', title: 'Chair of Orthopedic Surgery', meta: 'Stanford Medicine • 11 Yrs Experience', img: 'https://images.unsplash.com/photo-1594824813591-1804f32c1c69?w=200&auto=format&fit=crop&q=80' },
        { name: 'First Available Specialist', title: 'On-Duty Orthopedist', meta: 'Clinical Triage Board • AuraCure', img: 'https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=200&auto=format&fit=crop&q=80' }
      ],
      'Pediatrics': [
        { name: 'Dr. Marcus Bennett, MD', title: 'Director of Pediatric Medicine', meta: 'Columbia Health • 16 Yrs Experience', img: 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=200&auto=format&fit=crop&q=80' },
        { name: 'First Available Specialist', title: 'On-Duty Pediatrician', meta: 'Clinical Triage Board • AuraCure', img: 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=200&auto=format&fit=crop&q=80' }
      ],
      'Radiology': [
        { name: 'Dr. Aisha Patel, MD', title: 'Chair of Diagnostic Imaging', meta: 'Yale School of Medicine • 13 Yrs Experience', img: 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=200&auto=format&fit=crop&q=80' },
        { name: 'First Available Specialist', title: 'On-Duty Radiologist', meta: 'Clinical Triage Board • AuraCure', img: 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=200&auto=format&fit=crop&q=80' }
      ]
    };

    document.addEventListener('DOMContentLoaded', () => {
      // Set Default Date to Today
      const today = new Date().toISOString().split('T')[0];
      const dateInput = document.getElementById('bookingDate');
      if (dateInput) {
        dateInput.min = today;
        dateInput.value = today;
      }

      // Department Change -> Populate Doctors & Update Preview
      const deptSelect = document.getElementById('bookingDept');
      const docSelect = document.getElementById('bookingDoctor');
      if (deptSelect && docSelect) {
        deptSelect.addEventListener('change', () => {
          const dept = deptSelect.value;
          const doctors = doctorDatabase[dept] || doctorDatabase['Cardiology'];
          
          docSelect.innerHTML = '';
          doctors.forEach(doc => {
            const opt = document.createElement('option');
            opt.value = doc.name;
            opt.innerText = `${doc.name} (${doc.title})`;
            docSelect.appendChild(opt);
          });
          updateDocPreview();
          updateLiveSummary();
        });

        docSelect.addEventListener('change', () => {
          updateDocPreview();
          updateLiveSummary();
        });
      }

      // Format Option Buttons
      const formatOptions = document.querySelectorAll('.devnahian-auracare-format-option');
      formatOptions.forEach(opt => {
        opt.addEventListener('click', () => {
          formatOptions.forEach(o => o.classList.remove('active'));
          opt.classList.add('active');
          selectedFormat = opt.getAttribute('data-type');
          selectedFee = opt.getAttribute('data-fee');
          updateLiveSummary();
        });
      });

      // Time Slot Pills
      const slotPills = document.querySelectorAll('.devnahian-auracare-slot-pill');
      slotPills.forEach(pill => {
        pill.addEventListener('click', () => {
          slotPills.forEach(p => p.classList.remove('active'));
          pill.classList.add('active');
          selectedSlot = pill.getAttribute('data-time');
          updateLiveSummary();
        });
      });

      // Stepper Tab Direct Clicks
      const stepTabs = document.querySelectorAll('.devnahian-auracare-step-tab');
      stepTabs.forEach(tab => {
        tab.addEventListener('click', () => {
          const target = parseInt(tab.getAttribute('data-step-target'));
          if (target < currentActiveStep || validateCurrentStep()) {
            devnahianAuracareGoToStep(target);
          }
        });
      });

      // Booking Form Submission
      const form = document.getElementById('mainBookingEngine');
      if (form) {
        form.addEventListener('submit', (e) => {
          e.preventDefault();
          
          const fullName = document.getElementById('bookingFullName').value.trim();
          const dept = document.getElementById('bookingDept').value;
          const doctor = document.getElementById('bookingDoctor').value;
          const date = document.getElementById('bookingDate').value;
          
          // Generate Pass Data
          document.getElementById('modalRefCode').innerText = `AC-${Math.floor(10000 + Math.random() * 90000)}`;
          document.getElementById('modalPtName').innerText = fullName;
          document.getElementById('modalPtDept').innerText = dept;
          document.getElementById('modalPtDoctor').innerText = doctor;
          document.getElementById('modalPtTime').innerText = `${date} at ${selectedSlot}`;
          document.getElementById('modalPtFormat').innerText = `${selectedFormat} (${selectedFee})`;

          // Open Modal
          document.getElementById('bookingPassModal').classList.add('active');
          document.body.classList.add('devnahian-auracare-no-scroll');
        });
      }

      updateDocPreview();
      updateLiveSummary();
    });

    // Step Wizard Validation & Navigation
    function validateCurrentStep() {
      if (currentActiveStep === 1) {
        return document.getElementById('bookingDept').checkValidity() && document.getElementById('bookingDoctor').checkValidity();
      }
      if (currentActiveStep === 2) {
        return document.getElementById('bookingDate').checkValidity();
      }
      if (currentActiveStep === 3) {
        const nameValid = document.getElementById('bookingFullName').checkValidity();
        const phoneValid = document.getElementById('bookingPhone').checkValidity();
        const emailValid = document.getElementById('bookingEmail').checkValidity();
        const dobValid = document.getElementById('bookingDOB').checkValidity();
        return nameValid && phoneValid && emailValid && dobValid;
      }
      return true;
    }

    function devnahianAuracareGoToStep(stepNumber) {
      if (stepNumber > currentActiveStep && !validateCurrentStep()) {
        const currentContainer = document.getElementById(`wizardStep${currentActiveStep}`);
        const firstInvalid = currentContainer.querySelector(':invalid');
        if (firstInvalid) firstInvalid.reportValidity();
        return;
      }

      currentActiveStep = stepNumber;

      // Update Wizard Container Visibility
      for (let i = 1; i <= 4; i++) {
        const stepPane = document.getElementById(`wizardStep${i}`);
        if (stepPane) stepPane.classList.toggle('active', i === currentActiveStep);
      }

      // Update Stepper Progress Bar
      const stepTabs = document.querySelectorAll('.devnahian-auracare-step-tab');
      stepTabs.forEach(tab => {
        const stepIndex = parseInt(tab.getAttribute('data-step-target'));
        tab.classList.toggle('active', stepIndex === currentActiveStep);
        tab.classList.toggle('completed', stepIndex < currentActiveStep);
      });

      // If Step 4, Populate Review Box
      if (currentActiveStep === 4) {
        document.getElementById('reviewPatientName').innerText = document.getElementById('bookingFullName').value || '—';
        document.getElementById('reviewPatientContact').innerText = `${document.getElementById('bookingPhone').value || '—'} | ${document.getElementById('bookingEmail').value || '—'}`;
        document.getElementById('reviewDept').innerText = document.getElementById('bookingDept').value;
        document.getElementById('reviewDoctor').innerText = document.getElementById('bookingDoctor').value;
        document.getElementById('reviewFormat').innerText = `${selectedFormat} (${selectedFee})`;
        document.getElementById('reviewSchedule').innerText = `${document.getElementById('bookingDate').value} at ${selectedSlot}`;
        document.getElementById('reviewInsurance').innerText = document.getElementById('bookingInsurance').value;
      }

      updateLiveSummary();
    }

    // Update Doctor Mini Preview Box
    function updateDocPreview() {
      const dept = document.getElementById('bookingDept').value;
      const docName = document.getElementById('bookingDoctor').value;
      const list = doctorDatabase[dept] || doctorDatabase['Cardiology'];
      const matched = list.find(d => d.name === docName) || list[0];

      if (matched) {
        document.getElementById('docPreviewImg').src = matched.img;
        document.getElementById('docPreviewName').innerText = matched.name;
        document.getElementById('docPreviewMeta').innerText = `${matched.title} • ${matched.meta}`;
      }
    }

    // Update Live Sidebar Summary
    function updateLiveSummary() {
      const sDept = document.getElementById('summaryDept');
      const sDoc = document.getElementById('summaryDoctor');
      const sFmt = document.getElementById('summaryFormat');
      const sDate = document.getElementById('summaryDate');
      const sSlot = document.getElementById('summarySlot');
      const sTotal = document.getElementById('summaryTotal');

      if (sDept) sDept.innerText = document.getElementById('bookingDept').value;
      if (sDoc) sDoc.innerText = document.getElementById('bookingDoctor').value.split('(')[0].trim();
      if (sFmt) sFmt.innerText = selectedFormat;
      if (sDate) sDate.innerText = document.getElementById('bookingDate').value || 'Select a date';
      if (sSlot) sSlot.innerText = selectedSlot;
      if (sTotal) sTotal.innerText = selectedFee;
    }

    function devnahianAuracareClosePassModal() {
      document.getElementById('bookingPassModal').classList.remove('active');
      document.body.classList.remove('devnahian-auracare-no-scroll');
      window.location.href = 'index.php';
    }
  </script>

<?php include ('footer.php'); ?>