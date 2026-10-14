document.addEventListener('DOMContentLoaded', () => {

  // ==========================================
  // 1. GLOBAL / NAVBAR & MOBILE DRAWER LOGIC
  // ==========================================
  const mobileToggle = document.getElementById('devnahian-auracare-mobileToggle');
  const drawerOverlay = document.getElementById('devnahian-auracare-drawerOverlay');
  const drawerClose = document.getElementById('devnahian-auracare-drawerClose');

  if (mobileToggle && drawerOverlay) {
    mobileToggle.addEventListener('click', () => {
      drawerOverlay.classList.add('active');
      document.body.classList.add('devnahian-auracare-no-scroll');
    });
  }
  if (drawerClose && drawerOverlay) {
    drawerClose.addEventListener('click', devnahianAuracareCloseDrawer);
  }
  if (drawerOverlay) {
    drawerOverlay.addEventListener('click', (e) => {
      if (e.target === drawerOverlay) devnahianAuracareCloseDrawer();
    });
  }


  // ==========================================
  // 2. HOMEPAGE: SMOOTH COUNTER ANIMATION
  // ==========================================
  const counters = document.querySelectorAll('.devnahian-auracare-counter-number');
  let countersAnimated = false;

  function startCounters() {
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-target');
      let current = 0;
      const increment = Math.ceil(target / 45);

      const step = () => {
        current += increment;
        if (current < target) {
          counter.innerText = current;
          requestAnimationFrame(step);
        } else {
          counter.innerText = target;
        }
      };
      step();
    });
  }

  const counterSection = document.getElementById('counter');
  if (counterSection) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !countersAnimated) {
          startCounters();
          countersAnimated = true;
        }
      });
    }, { threshold: 0.25 });
    observer.observe(counterSection);
  }


  // ==========================================
  // 3. HOMEPAGE & GLOBAL: APPOINTMENT CONSOLE
  // ==========================================
  const today = new Date().toISOString().split('T')[0];
  const dateInput = document.getElementById('devnahian-auracare-appointmentDate');
  if (dateInput) {
    dateInput.min = today;
  }

  const homeForm = document.getElementById('devnahian-auracare-bookingForm');
  if (homeForm) {
    homeForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('devnahian-auracare-patientName').value;
      const doc = document.getElementById('devnahian-auracare-doctorSelect').value;
      const date = document.getElementById('devnahian-auracare-appointmentDate').value;
      const time = document.getElementById('devnahian-auracare-appointmentTime').value;

      const modalMsg = document.getElementById('devnahian-auracare-modalMessage');
      if (modalMsg) {
        modalMsg.innerText = `Thank you, ${name}. Your appointment with ${doc} on ${date} at ${time} is recorded at AuraCure. Check your email for paperwork.`;
      }
      
      const bookingModal = document.getElementById('devnahian-auracare-bookingModal');
      if (bookingModal) bookingModal.classList.add('active');
      homeForm.reset();
      if (dateInput) dateInput.value = today;
    });
  }


  // ==========================================
  // 4. TESTIMONIALS CAROUSEL
  // ==========================================
  const carousel = document.getElementById('testimonialsCarousel');
  const dotsContainer = document.getElementById('carouselDots');
  
  if (carousel && dotsContainer) {
    const cards = carousel.querySelectorAll('.devnahian-auracare-testimonial-card');
    
    function getVisibleCount() {
      if (window.innerWidth >= 1024) return 3;
      if (window.innerWidth >= 768) return 2;
      return 1;
    }

    function buildDots() {
      dotsContainer.innerHTML = '';
      const visibleCount = getVisibleCount();
      const totalPages = Math.max(1, cards.length - visibleCount + 1);

      for (let i = 0; i < totalPages; i++) {
        const dot = document.createElement('button');
        dot.className = `devnahian-auracare-dot ${i === 0 ? 'active' : ''}`;
        dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
        dot.addEventListener('click', () => {
          const targetCard = cards[i];
          if (targetCard) {
            carousel.scrollTo({
              left: targetCard.offsetLeft - carousel.offsetLeft,
              behavior: 'smooth'
            });
          }
        });
        dotsContainer.appendChild(dot);
      }
    }

    buildDots();
    window.addEventListener('resize', buildDots);

    carousel.addEventListener('scroll', () => {
      const scrollLeft = carousel.scrollLeft;
      const dots = dotsContainer.querySelectorAll('.devnahian-auracare-dot');
      
      cards.forEach((card, index) => {
        const cardLeft = card.offsetLeft - carousel.offsetLeft;
        if (Math.abs(scrollLeft - cardLeft) < 150 && dots[index]) {
          dots.forEach(d => d.classList.remove('active'));
          dots[index].classList.add('active');
        }
      });
    });
  }


  // ==========================================
  // 5. FAQ ACCORDION LOGIC
  // ==========================================
  const faqItems = document.querySelectorAll('.devnahian-auracare-faq-item');
  if (faqItems.length > 0) {
    faqItems.forEach(item => {
      const questionBtn = item.querySelector('.devnahian-auracare-faq-question');
      if (questionBtn) {
        questionBtn.addEventListener('click', () => {
          const isActive = item.classList.contains('active');
          
          // Optional: Close all other accordion items
          faqItems.forEach(i => i.classList.remove('active'));

          if (!isActive) {
            item.classList.add('active');
          }
        });
      }
    });
  }


  // ==========================================
  // 6. CLINICAL GALLERY & LIGHTBOX MODAL
  // ==========================================
  const galleryFilterBtns = document.querySelectorAll('.devnahian-auracare-gallery-filter-btn');
  const galleryItems = document.querySelectorAll('.devnahian-auracare-gallery-item');
  const galleryModal = document.getElementById('devnahian-auracare-galleryModal');
  const galleryModalImg = document.getElementById('devnahian-auracare-galleryModalImg');
  const galleryModalCaption = document.getElementById('devnahian-auracare-galleryModalCaption');

  if (galleryFilterBtns.length > 0 && galleryItems.length > 0) {
    galleryFilterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        galleryFilterBtns.forEach(b => b.classList.remove('active'));
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

  // Lightbox click triggers
  if (galleryModal && galleryModalImg) {
    galleryItems.forEach(item => {
      const img = item.querySelector('img');
      const caption = item.querySelector('.devnahian-auracare-gallery-overlay span');
      
      if (img) {
        item.addEventListener('click', () => {
          galleryModalImg.src = img.src;
          if (galleryModalCaption && caption) {
            galleryModalCaption.innerText = caption.innerText;
          }
          galleryModal.classList.add('active');
          document.body.classList.add('devnahian-auracare-no-scroll');
        });
      }
    });
  }


  // ==========================================
  // 7. DOCTORS DIRECTORY: TAB FILTERING
  // ==========================================
  const docTabButtons = document.querySelectorAll('.devnahian-auracare-tab-btn');
  const docCards = document.querySelectorAll('.devnahian-auracare-doc-card');

  if (docTabButtons.length > 0 && docCards.length > 0) {
    docTabButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        docTabButtons.forEach(b => b.classList.remove('active'));
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
  }


  // ==========================================
  // 8. DEPARTMENTS DIRECTORY: TAB FILTERING
  // ==========================================
  const deptTabButtons = document.querySelectorAll('.devnahian-auracare-dept-tab-btn');
  const deptCards = document.querySelectorAll('.devnahian-auracare-dept-card');

  if (deptTabButtons.length > 0 && deptCards.length > 0) {
    deptTabButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        deptTabButtons.forEach(b => b.classList.remove('active'));
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
  }


  // ==========================================
  // 9. BLOGS DIRECTORY: SEARCH & PAGINATION
  // ==========================================
  const blogSearchInput = document.getElementById('blogSearchInput');
  const articleCards = document.querySelectorAll('.devnahian-auracare-article-card');

  if (blogSearchInput && articleCards.length > 0) {
    blogSearchInput.addEventListener('input', (e) => {
      const query = e.target.value.toLowerCase().trim();
      articleCards.forEach(card => {
        const titleContent = card.getAttribute('data-title').toLowerCase();
        if (!query || titleContent.includes(query)) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  }

  const pageBtns = document.querySelectorAll('.devnahian-auracare-page-btn:not(.prev):not(.next)');
  if (pageBtns.length > 0) {
    pageBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        pageBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const grid = document.getElementById('articlesGrid');
        if (grid) {
          window.scrollTo({ top: grid.offsetTop - 120, behavior: 'smooth' });
        }
      });
    });
  }


  // ==========================================
  // 10. BLOG SINGLE: COMMENT POSTING SYSTEM
  // ==========================================
  const commentForm = document.getElementById('commentForm');
  const commentsList = document.getElementById('commentsList');
  const commentsHeading = document.getElementById('commentsHeading');

  if (commentForm && commentsList) {
    commentForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const authorInput = document.getElementById('commentAuthor');
      const textInput = document.getElementById('commentText');

      const author = authorInput.value.trim();
      const text = textInput.value.trim();

      if (!author || !text) return;

      const initials = author
        .split(' ')
        .filter(n => n.length > 0)
        .map(n => n[0])
        .join('')
        .substring(0, 2)
        .toUpperCase() || 'PT';

      const safeAuthor = escapeHtml(author);
      const safeText = escapeHtml(text);

      const commentCard = document.createElement('div');
      commentCard.className = 'devnahian-auracare-comment-box';
      commentCard.innerHTML = `
        <div class="devnahian-auracare-comment-avatar">${initials}</div>
        <div class="devnahian-auracare-comment-body">
          <h5>${safeAuthor}</h5>
          <span>Just now &bull; Pending Verification</span>
          <p>${safeText}</p>
        </div>
      `;

      commentsList.appendChild(commentCard);
      commentForm.reset();

      if (commentsHeading) {
        const count = commentsList.querySelectorAll('.devnahian-auracare-comment-box').length;
        commentsHeading.innerText = `Clinical Discussion & Feedback (${count})`;
      }

      commentCard.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    });
  }


  // ==========================================
  // 11. DOCTOR SINGLE / DEPARTMENT SINGLE SCHEDULER
  // ==========================================
  const apptDateInput = document.getElementById('apptDate') || document.getElementById('deptApptDate');
  if (apptDateInput) {
    apptDateInput.min = today;
    apptDateInput.value = today;
  }

  const docBookingForm = document.getElementById('docBookingForm') || document.getElementById('deptBookingForm');
  const docAlertBox = document.getElementById('docBookingAlert') || document.getElementById('deptBookingAlert');
  const docAlertText = document.getElementById('docBookingAlertText') || document.getElementById('deptBookingAlertText');
  const docSubmitBtn = document.getElementById('docSubmitBtn') || document.getElementById('deptSubmitBtn');

  if (docBookingForm) {
    docBookingForm.addEventListener('submit', (e) => {
      e.preventDefault();

      const nameInput = document.getElementById('ptName') || document.getElementById('ptDeptName');
      const name = nameInput ? nameInput.value.trim() : 'Patient';
      const dateEl = document.getElementById('apptDate') || document.getElementById('deptApptDate');
      const slotEl = document.getElementById('apptSlot') || document.getElementById('deptApptSlot');
      
      const date = dateEl ? dateEl.value : today;
      const slot = slotEl ? slotEl.value : '09:00 AM';

      if (docSubmitBtn) {
        docSubmitBtn.disabled = true;
        docSubmitBtn.innerText = 'Securing Appointment...';
      }

      setTimeout(() => {
        if (docAlertBox) docAlertBox.style.display = 'flex';
        if (docAlertText) {
          docAlertText.innerHTML = `<strong>Appointment Confirmed:</strong> Thank you, ${name}. Your consultation for <strong>${date} at ${slot}</strong> has been successfully scheduled. Check your email for preparation guidelines.`;
        }
        
        docBookingForm.reset();
        if (dateEl) dateEl.value = today;

        if (docSubmitBtn) {
          docSubmitBtn.disabled = false;
          docSubmitBtn.innerText = 'Confirm Reservation';
        }

        if (docAlertBox) {
          docAlertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      }, 600);
    });
  }


  // ==========================================
  // 12. MULTI-STEP WIZARD BOOKING ENGINE (appointment.php)
  // ==========================================
  const multiStepForm = document.getElementById('multiStepBookingForm');
  if (multiStepForm) {
    const wizardDateInput = document.getElementById('bookingDate');
    if (wizardDateInput) {
      wizardDateInput.min = today;
      wizardDateInput.value = today;
    }

    const formatOptions = document.querySelectorAll('.devnahian-auracare-format-option');
    formatOptions.forEach(opt => {
      opt.addEventListener('click', () => {
        formatOptions.forEach(o => o.classList.remove('active'));
        opt.classList.add('active');
      });
    });

    const slotPills = document.querySelectorAll('.devnahian-auracare-slot-pill');
    slotPills.forEach(pill => {
      pill.addEventListener('click', () => {
        slotPills.forEach(p => p.classList.remove('active'));
        pill.classList.add('active');
      });
    });

    multiStepForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const fullNameInput = multiStepForm.querySelector('#bookingFullName');
      const fullName = fullNameInput ? fullNameInput.value.trim() : 'Patient';

      const passModal = document.getElementById('bookingPassModal');
      const ptNameEl = document.getElementById('modalPtName');
      if (ptNameEl) ptNameEl.innerText = fullName;

      if (passModal) {
        passModal.classList.add('active');
        document.body.classList.add('devnahian-auracare-no-scroll');
      }
    });
  }

});


// ==========================================
// GLOBAL HELPER FUNCTIONS
// ==========================================
function devnahianAuracareCloseDrawer() {
  const drawerOverlay = document.getElementById('devnahian-auracare-drawerOverlay');
  if (drawerOverlay) {
    drawerOverlay.classList.remove('active');
    document.body.classList.remove('devnahian-auracare-no-scroll');
  }
}

function devnahianAuracareCloseModal() {
  const modal = document.getElementById('devnahian-auracare-bookingModal') || document.getElementById('bookingModal');
  if (modal) modal.classList.remove('active');
}

function devnahianAuracareClosePassModal() {
  const modal = document.getElementById('bookingPassModal');
  if (modal) modal.classList.remove('active');
  document.body.classList.remove('devnahian-auracare-no-scroll');
  window.location.href = 'index.php';
}

function devnahianAuracareCloseGalleryModal() {
  const galleryModal = document.getElementById('devnahian-auracare-galleryModal');
  if (galleryModal) galleryModal.classList.remove('active');
  document.body.classList.remove('devnahian-auracare-no-scroll');
}

function escapeHtml(str) {
  return str.replace(/[&<>'"]/g, 
    tag => ({
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      "'": '&#39;',
      '"': '&quot;'
    }[tag] || tag)
  );
}