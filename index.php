<!DOCTYPE html>
<html lang="he" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>רקדן מורה - B-Boy Dance Instructor</title>
    <meta name="description" content="שיעורי ריקוד מקצועיים, מופעים ואירועים עם Bboy Poter - מורה ריקוד מקצועי">
    <meta name="keywords" content="ריקוד, ביבוי, שיעורים, מופעים, אירועים, Bboy Poter">
    <meta name="author" content="Bboy Poter">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <!-- Background Elements -->
    <div class="background-elements" aria-hidden="true">
        <div class="graffiti-star impact-font">★</div>
        <div class="graffiti-music">♪</div>
        <div class="graffiti-diamond">✦</div>
        <div class="graffiti-watermark">DANCE</div>
    </div>

    <!-- Main Container -->
    <div class="container">
        <!-- Hero Section -->
        <section class="hero-section" role="banner">
            <!-- Video Background -->
            <div class="hero-video-background" aria-hidden="true">
                <video id="heroVideo1" class="hero-bg-video active" autoplay muted loop playsinline>
                    <source src="assets/bg-1.mp4" type="video/mp4">
                </video>
                <video id="heroVideo2" class="hero-bg-video" muted loop playsinline>
                    <source src="assets/bg-2.mp4" type="video/mp4">
                </video>
                <video id="heroVideo3" class="hero-bg-video" muted loop playsinline>
                    <source src="assets/bg-3.mp4" type="video/mp4">
                </video>
                <div class="hero-video-overlay"></div>
            </div>

            <!-- Hero Content -->
            <div class="hero-content">
                <header class="hero-header">
                    <div>
                        <h1 class="main-title impact-font">Bboy Poter</h1>
                        <div class="title-underline"></div>
                    </div>
                    <div class="subtitle-row">
                        <span class="subtitle impact-font">Unstopabulls</span>
                        <span class="subtitle-separator" aria-hidden="true">///</span>
                        <span class="subtitle impact-font">Flexible Flav</span>
                    </div>
                </header>

                <p class="hero-description">
                    שיעורי ריקוד מקצועיים <span class="white-text">///</span> אירועים <span class="white-text">///</span> מופעים
                </p>
            </div>

            <!-- Video Controls -->
            <div class="hero-video-controls" role="group" aria-label="בקרת וידאו">
                <div class="video-indicators" role="tablist" aria-label="בחירת וידאו">
                    <button class="video-indicator active" role="tab" aria-selected="true" aria-label="וידאו 1" onclick="switchHeroVideo(0)"></button>
                    <button class="video-indicator" role="tab" aria-selected="false" aria-label="וידאו 2" onclick="switchHeroVideo(1)"></button>
                    <button class="video-indicator" role="tab" aria-selected="false" aria-label="וידאו 3" onclick="switchHeroVideo(2)"></button>
                </div>
                <button class="video-btn" id="heroSoundBtn" onclick="toggleHeroSound()" aria-label="החלף קול" title="החלף קול">
                    🔇
                </button>
            </div>
        </section>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Image Gallery -->
            <section class="image-gallery" aria-label="גלריית תמונות">
                <div class="gallery-scroll-container" role="region" aria-label="גלריית תמונות - גלילה אופקית">
                    <div class="gallery-horizontal">
                        <div class="gallery-item" onclick="event.preventDefault(); openImagePopup('assets/img-1.jpg', 'Bboy Poter מבצע ריקוד ביבוי')">
                            <img src="assets/img-1.jpg" alt="Bboy Poter מבצע ריקוד ביבוי" loading="lazy">
                        </div>
                        <div class="gallery-item" onclick="event.preventDefault(); openImagePopup('assets/img-2.jpg', 'Bboy Poter מבצע ריקוד ביבוי')">
                            <img src="assets/img-2.jpg" alt="Bboy Poter מבצע ריקוד ביבוי" loading="lazy">
                        </div>
                        <div class="gallery-item" onclick="event.preventDefault(); openImagePopup('assets/img-3.jpg', 'Bboy Poter מבצע ריקוד ביבוי')">
                            <img src="assets/img-3.jpg" alt="Bboy Poter מבצע ריקוד ביבוי" loading="lazy">
                        </div>
                        <div class="gallery-item" onclick="event.preventDefault(); openImagePopup('assets/img-4.jpg', 'Bboy Poter מבצע ריקוד ביבוי')">
                            <img src="assets/img-4.jpg" alt="Bboy Poter מבצע ריקוד ביבוי" loading="lazy">
                        </div>
                        <div class="gallery-item" onclick="event.preventDefault(); openImagePopup('assets/img-5.jpg', 'Bboy Poter מבצע ריקוד ביבוי')">
                            <img src="assets/img-5.jpg" alt="Bboy Poter מבצע ריקוד ביבוי" loading="lazy">
                        </div>
                        <div class="gallery-item" onclick="event.preventDefault(); openImagePopup('assets/img-6.jpg', 'Bboy Poter מבצע ריקוד ביבוי')">
                            <img src="assets/img-6.jpg" alt="Bboy Poter מבצע ריקוד ביבוי" loading="lazy">
                        </div>
                        <div class="gallery-item" onclick="event.preventDefault(); openImagePopup('assets/img-7.jpg', 'Bboy Poter מבצע ריקוד ביבוי')">
                            <img src="assets/img-7.jpg" alt="Bboy Poter מבצע ריקוד ביבוי" loading="lazy">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Grid -->
            <section class="features-grid" aria-label="שירותים">
                <article class="feature-card feature-card-1">
                    <div class="feature-content">
                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                        </svg>
                        <h3 class="feature-title impact-font">שיעורים</h3>
                        <p class="feature-desc">שיעורים קבוצתיים ופרטיים לכל הרמות</p>
                        <div class="corner-accent"></div>
                    </div>
                    <div class="feature-shadow"></div>
                </article>

                <article class="feature-card feature-card-2">
                    <div class="feature-content">
                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <h3 class="feature-title impact-font">מופעים</h3>
                        <p class="feature-desc">הופעות מרהיבות לאירועים שלכם</p>
                        <div class="corner-accent"></div>
                    </div>
                    <div class="feature-shadow"></div>
                </article>

                <article class="feature-card feature-card-3">
                    <div class="feature-content">
                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <h3 class="feature-title impact-font">Bboy Poter</h3>
                        <p class="feature-desc">רקדן ביבוי מקצועי עם ניסיון רב</p>
                        <div class="corner-accent"></div>
                    </div>
                    <div class="feature-shadow"></div>
                </article>

            </section>

            <!-- CTA Button -->
            <div class="cta-wrapper">
                <button class="cta-button impact-font" onclick="openBookingModal()" aria-label="פתח טופס הזמנה">
                    הזמן עכשיו
                </button>
            </div>
        </main>

        <!-- Divider -->
        <div class="divider">
            <div class="divider-line"></div>
            <div class="divider-icon">✦</div>
        </div>

    </div>

    <!-- Bottom Stripe -->
    <div class="bottom-stripe">
        <div class="stripe-segment stripe-white"></div>
        <div class="stripe-segment stripe-gray"></div>
        <div class="stripe-segment stripe-dark"></div>
        <div class="stripe-segment stripe-white"></div>
        <div class="stripe-segment stripe-gray"></div>
        <div class="stripe-segment stripe-dark"></div>
        <div class="stripe-segment stripe-white"></div>
        <div class="stripe-segment stripe-gray"></div>
        <div class="stripe-segment stripe-dark"></div>
        <div class="stripe-segment stripe-white"></div>
        <div class="stripe-segment stripe-gray"></div>
        <div class="stripe-segment stripe-dark"></div>
    </div>

    <!-- Booking Modal -->
    <div class="modal" id="bookingModal" role="dialog" aria-labelledby="modal-header" aria-hidden="true">
        <div class="modal-content">
            <header class="modal-header impact-font" id="modal-header">הזמן עכשיו</header>

            <!-- Progress Bar -->
            <div class="progress-bar" id="progressBar" role="progressbar" aria-label="התקדמות הטופס"></div>

            <!-- Form Steps Container -->
            <div class="form-steps-container">
                <form id="formSteps" role="form" aria-label="טופס הזמנה"></form>
            </div>

            <!-- Actions -->
            <div class="modal-actions">
                <button class="btn btn-back impact-font" onclick="prevStep()" id="backBtn" aria-label="חזור לשלב הקודם">
                    חזור
                </button>
                <button class="btn btn-next impact-font" onclick="nextStep()" id="nextBtn" aria-label="המשך לשלב הבא">
                    הבא
                </button>
            </div>
        </div>
    </div>

    <!-- Toast -->
    <div class="toast" id="toast" role="alert" aria-live="polite" aria-atomic="true"></div>

    <!-- Date Picker Modal -->
    <div class="date-picker-modal" id="datePickerModal" aria-hidden="true" onclick="closeDatePicker()">
        <div class="date-picker-container" onclick="event.stopPropagation()">
            <div class="date-picker-header">
                <h3 class="date-picker-title impact-font">בחר תאריך</h3>
                <button class="date-picker-close" onclick="closeDatePicker()" aria-label="סגור">
                    <span class="close-icon">×</span>
                </button>
            </div>
            <div class="date-picker-content">
                <div class="date-picker-calendar" id="datePickerCalendar"></div>
            </div>
            <div class="date-picker-actions">
                <div class="date-picker-instruction">לחץ על תאריך עתידי לבחירה</div>
            </div>
        </div>
    </div>

    <!-- Image Popup Modal -->
    <div class="image-popup" id="imagePopup" role="dialog" aria-hidden="true" aria-label="תצוגת תמונה מלאה">
        <div class="image-popup-overlay" onclick="closeImagePopup()"></div>
        <div class="image-popup-container">
            <button class="image-popup-close" onclick="closeImagePopup()" aria-label="סגור תצוגת תמונה">
                <span class="close-icon">×</span>
            </button>
            <div class="image-popup-content">
                <img id="popupImage" src="" alt="" class="popup-image">
                <div class="image-popup-info">
                    <div class="image-popup-title impact-font">Bboy Poter</div>
                    <div class="image-popup-subtitle">רקדן ביבוי מקצועי</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ========== HERO VIDEO SYSTEM ==========
        class HeroVideoController {
            constructor() {
                this.currentIndex = 0;
                this.videos = [];
                this.indicators = [];
                this.isMuted = true;
                this.autoPlayInterval = null;
                this.isInitialized = false;
                
                this.init();
            }

            init() {
                try {
                    this.videos = [
                        document.getElementById('heroVideo1'),
                        document.getElementById('heroVideo2'),
                        document.getElementById('heroVideo3')
                    ].filter(video => video !== null);

                    this.indicators = Array.from(document.querySelectorAll('.hero-video-controls .video-indicator'));

                    if (this.videos.length === 0) {
                        console.warn('No hero videos found');
                        return;
                    }

                    this.setupEventListeners();
                    this.startFirstVideo();
                    this.startAutoPlay();
                    this.isInitialized = true;
                } catch (error) {
                    console.error('Error initializing hero video:', error);
                }
            }

            setupEventListeners() {
                this.indicators.forEach((indicator, index) => {
                    indicator.addEventListener('keydown', (e) => {
                        if (e.key === 'Enter' || e.key === ' ') {
                            e.preventDefault();
                            this.switchToVideo(index);
                        }
                    });
                });
            }

            startFirstVideo() {
                if (this.videos[0]) {
                    this.videos[0].play().catch(error => {
                        console.warn('Could not autoplay video:', error);
                    });
                }
            }

            startAutoPlay() {
                this.autoPlayInterval = setInterval(() => {
                    const nextIndex = (this.currentIndex + 1) % this.videos.length;
                    this.switchToVideo(nextIndex);
                }, 15000);
            }

            switchToVideo(index) {
                try {
                    if (index === this.currentIndex || !this.videos.length || !this.isInitialized) return;

                    // Fade out current video
                    if (this.videos[this.currentIndex]) {
                        this.videos[this.currentIndex].classList.remove('active');
                    }

                    // Update indicators
                    if (this.indicators[this.currentIndex]) {
                        this.indicators[this.currentIndex].classList.remove('active');
                        this.indicators[this.currentIndex].setAttribute('aria-selected', 'false');
                    }

                    // Switch to new video
                    this.currentIndex = index;

                    if (this.videos[this.currentIndex]) {
                        this.videos[this.currentIndex].classList.add('active');
                        this.videos[this.currentIndex].currentTime = 0;
                        this.videos[this.currentIndex].muted = this.isMuted;
                        this.videos[this.currentIndex].play().catch(error => {
                            console.warn('Could not play video:', error);
                        });
                    }

                    if (this.indicators[this.currentIndex]) {
                        this.indicators[this.currentIndex].classList.add('active');
                        this.indicators[this.currentIndex].setAttribute('aria-selected', 'true');
                    }

                    this.resetAutoPlay();
                } catch (error) {
                    console.error('Error switching hero video:', error);
                }
            }

            toggleSound() {
                try {
                    this.isMuted = !this.isMuted;
                    const soundBtn = document.getElementById('heroSoundBtn');

                    if (!soundBtn) {
                        console.warn('Sound button not found');
                        return;
                    }

                    this.videos.forEach(video => {
                        if (video) {
                            video.muted = this.isMuted;
                        }
                    });

                    soundBtn.textContent = this.isMuted ? '🔇' : '🔊';
                } catch (error) {
                    console.error('Error toggling hero sound:', error);
                }
            }

            resetAutoPlay() {
                if (this.autoPlayInterval) {
                    clearInterval(this.autoPlayInterval);
                }
                this.startAutoPlay();
            }

            destroy() {
                if (this.autoPlayInterval) {
                    clearInterval(this.autoPlayInterval);
                }
            }
        }

        // Global functions for backward compatibility
        function switchHeroVideo(index) {
            if (heroVideoController) {
                heroVideoController.switchToVideo(index);
            }
        }

        function toggleHeroSound() {
            if (heroVideoController) {
                heroVideoController.toggleSound();
            }
        }





        // ========== IMAGE POPUP SYSTEM ==========
        function openImagePopup(imageSrc, imageAlt) {
            const popup = document.getElementById('imagePopup');
            const popupImage = document.getElementById('popupImage');
            
            if (!popup || !popupImage) {
                console.error('Image popup elements not found');
                return;
            }
            
            try {
                popupImage.src = imageSrc;
                popupImage.alt = imageAlt;
                popup.classList.add('active');
                popup.setAttribute('aria-hidden', 'false');
                
                // Prevent body scroll without position fixed to avoid scroll jump
                document.body.style.overflow = 'hidden';
                document.body.classList.add('popup-open');
                
                const closeBtn = popup.querySelector('.image-popup-close');
                if (closeBtn) {
                    setTimeout(() => closeBtn.focus(), 100);
                }
            } catch (error) {
                console.error('Error opening image popup:', error);
            }
        }

        function closeImagePopup() {
            const popup = document.getElementById('imagePopup');
            
            if (!popup) {
                console.error('Image popup not found');
                return;
            }
            
            try {
                popup.classList.remove('active');
                popup.setAttribute('aria-hidden', 'true');
                
                // Restore body scroll without position manipulation
                document.body.style.overflow = '';
                document.body.classList.remove('popup-open');
                
                const popupImage = document.getElementById('popupImage');
                if (popupImage) {
                    popupImage.src = '';
                }
            } catch (error) {
                console.error('Error closing image popup:', error);
            }
        }

        // ========== DATE PICKER SYSTEM ==========
        let selectedDate = null;
        let currentDateField = null;
        let currentYear = new Date().getFullYear();
        let currentMonth = new Date().getMonth();

        function openDatePicker(fieldId) {
            currentDateField = fieldId;
            const modal = document.getElementById('datePickerModal');
            if (!modal) {
                console.error('Date picker modal not found');
                return;
            }
            
            // Reset to current month/year
            currentYear = new Date().getFullYear();
            currentMonth = new Date().getMonth();
            
            modal.classList.add('active');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            document.body.classList.add('date-picker-open');
            
            // Initialize calendar
            renderCalendar();
        }

        function closeDatePicker() {
            const modal = document.getElementById('datePickerModal');
            if (!modal) return;
            
            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            document.body.classList.remove('date-picker-open');
            selectedDate = null;
            currentDateField = null;
        }

        function renderCalendar() {
            const calendar = document.getElementById('datePickerCalendar');
            if (!calendar) return;
            
            const monthNames = [
                'ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני',
                'יולי', 'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר'
            ];
            
            const firstDay = new Date(currentYear, currentMonth, 1);
            const lastDay = new Date(currentYear, currentMonth + 1, 0);
            const daysInMonth = lastDay.getDate();
            const startingDay = firstDay.getDay();
            
            let html = `
                <div class="calendar-header">
                    <button class="calendar-nav" onclick="changeMonth(-1)">‹</button>
                    <h4 class="calendar-month">${monthNames[currentMonth]} ${currentYear}</h4>
                    <button class="calendar-nav" onclick="changeMonth(1)">›</button>
                </div>
                <div class="calendar-grid">
                    <div class="calendar-weekdays">
                        <div class="weekday">א</div>
                        <div class="weekday">ב</div>
                        <div class="weekday">ג</div>
                        <div class="weekday">ד</div>
                        <div class="weekday">ה</div>
                        <div class="weekday">ו</div>
                        <div class="weekday">ש</div>
                    </div>
                    <div class="calendar-days">
            `;
            
            // Add empty cells for days before month starts
            for (let i = 0; i < startingDay; i++) {
                html += '<div class="date-cell empty"></div>';
            }
            
            // Add days of the month
            for (let day = 1; day <= daysInMonth; day++) {
                const dateStr = `${currentYear}-${String(currentMonth + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                const cellDate = new Date(currentYear, currentMonth, day);
                const today = new Date();
                today.setHours(0, 0, 0, 0);
                const isToday = cellDate.getTime() === today.getTime();
                const isPast = cellDate <= today; // Include today as past (only future dates available)
                
                html += `
                    <div class="date-cell ${isToday ? 'today' : ''} ${isPast ? 'past' : ''}" 
                         data-date="${dateStr}" ${isPast ? 'disabled' : ''}>
                        ${day}
                    </div>
                `;
            }
            
            html += '</div></div>';
            calendar.innerHTML = html;
            
            // Add click handlers to dates
            const dateCells = calendar.querySelectorAll('.date-cell:not(.past):not(.empty)');
            dateCells.forEach(cell => {
                cell.addEventListener('click', (e) => {
                    e.preventDefault();
                    const date = cell.dataset.date;
                    if (date) {
                        selectDate(date);
                    }
                });
            });
        }

        function changeMonth(direction) {
            currentMonth += direction;
            
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            } else if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            
            renderCalendar();
        }

        function selectDate(dateStr) {
            // Remove previous selection
            const previousSelected = document.querySelector('.date-cell.selected');
            if (previousSelected) {
                previousSelected.classList.remove('selected');
            }
            
            // Add selection to new date
            const selectedCell = document.querySelector(`[data-date="${dateStr}"]`);
            if (selectedCell && !selectedCell.classList.contains('past')) {
                selectedCell.classList.add('selected');
                selectedDate = dateStr;
                
                // Auto-advance immediately after date selection
                setTimeout(() => {
                    confirmDateSelection();
                }, 200);
            }
        }

        function confirmDateSelection() {
            if (selectedDate && currentDateField) {
                formData[currentDateField] = selectedDate;
                handleInputChange(currentDateField, selectedDate);
                
                // Update the date display
                const dateDisplay = document.querySelector('.date-display');
                if (dateDisplay) {
                    const date = new Date(selectedDate);
                    const formattedDate = date.toLocaleDateString('he-IL');
                    dateDisplay.textContent = formattedDate;
                    
                    // Add reopen button if it doesn't exist
                    const existingButton = dateDisplay.parentNode.querySelector('.btn');
                    if (!existingButton) {
                        const reopenButton = document.createElement('button');
                        reopenButton.className = 'btn btn-back';
                        reopenButton.textContent = 'שנה תאריך';
                        reopenButton.onclick = () => {
                            openDatePicker(currentDateField);
                        };
                        dateDisplay.parentNode.appendChild(reopenButton);
                    }
                }
                
                closeDatePicker();
                
                // Auto-advance to next step immediately
                nextStep();
            }
        }

        // ========== INITIALIZATION ==========
        let heroVideoController = null;
        let formHandler = null;

        function initializeApp() {
            try {
                heroVideoController = new HeroVideoController();
                formHandler = new FormHandler();
            } catch (error) {
                console.error('Error initializing app:', error);
            }
        }

        function cleanup() {
            if (heroVideoController) {
                heroVideoController.destroy();
            }
        }

        // Initialize on page load
        window.addEventListener('load', initializeApp);

        // Clean up on page unload
        window.addEventListener('beforeunload', cleanup);

        // ========== UTILITY FUNCTIONS ==========
        class Utils {
            static showToast(message, isError = false) {
                const toast = document.getElementById('toast');
                if (!toast) {
                    console.warn('Toast element not found');
                    return;
                }
                
                try {
                    toast.textContent = message;
                    toast.className = `toast show${isError ? ' error' : ''}`;
                    setTimeout(() => {
                        toast.className = 'toast';
                    }, 3000);
                } catch (error) {
                    console.error('Error showing toast:', error);
                }
            }

            static validateEmail(email) {
                if (!email || typeof email !== 'string') return false;
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email.trim());
            }
        }

        // ========== FORM HANDLERS ==========
        class FormHandler {
            constructor() {
                this.setupEventListeners();
            }

            setupEventListeners() {
                const subscribeForm = document.querySelector('.subscribe-form');
                if (subscribeForm) {
                    subscribeForm.addEventListener('submit', this.handleSubscribe.bind(this));
                }
            }

            handleSubscribe(e) {
                try {
                    e.preventDefault();
                    const emailInput = document.getElementById('emailInput');
                    const btn = document.getElementById('submitBtn');

                    if (!emailInput || !btn) {
                        console.error('Email input or submit button not found');
                        return;
                    }

                    const email = emailInput.value.trim();

                    if (!email || !Utils.validateEmail(email)) {
                        Utils.showToast('נא להזין כתובת אימייל תקינה', true);
                        return;
                    }

                    this.setLoadingState(btn, true);

                    setTimeout(() => {
                        Utils.showToast('תודה! נוספת לרשימת התפוצה שלנו');
                        emailInput.value = '';
                        this.setLoadingState(btn, false);
                    }, 1000);
                } catch (error) {
                    console.error('Error handling subscribe form:', error);
                    Utils.showToast('אירעה שגיאה, נסה שוב', true);
                }
            }

            setLoadingState(button, isLoading) {
                if (isLoading) {
                    button.textContent = 'שולח...';
                    button.disabled = true;
                } else {
                    button.textContent = 'הירשם';
                    button.disabled = false;
                }
            }
        }

        // Global functions for backward compatibility
        function showToast(message, isError = false) {
            Utils.showToast(message, isError);
        }

        // ========== BOOKING MODAL ==========
        let currentStep = 1;
        let maxSteps = 2;
        const formData = {
            name: '',
            interestedIn: '',
            // Classes flow
            gender: '',
            age: '',
            city: '',
            level: '',
            preferredDay: '',
            preferredTime: '',
            // Show flow
            eventDate: '',
            eventTime: '',
            budget: ''
        };

        // Base steps (common for both flows)
        const baseSteps = [
            {
                id: 'name',
                label: 'מה השם שלך?',
                type: 'input',
                inputType: 'text',
                placeholder: 'הכנס שם מלא',
                flow: 'both'
            },
            {
                id: 'interestedIn',
                label: 'במה אתה מעוניין?',
                type: 'radio',
                options: [
                    { value: 'classes', label: 'שיעורי ריקוד' },
                    { value: 'show', label: 'הופעה לאירוע' }
                ],
                flow: 'both'
            }
        ];

        // Classes flow steps
        const classesSteps = [
            {
                id: 'gender',
                label: 'מגדר',
                type: 'radio',
                flow: 'classes',
                options: [
                    { value: 'זכר', label: 'זכר' },
                    { value: 'נקבה', label: 'נקבה' },
                    { value: 'אחר', label: 'אחר' }
                ]
            },
            {
                id: 'age',
                label: 'גיל',
                type: 'input',
                inputType: 'number',
                placeholder: 'הכנס גיל',
                flow: 'classes'
            },
            {
                id: 'city',
                label: 'עיר',
                type: 'input',
                inputType: 'text',
                placeholder: 'הכנס עיר מגורים',
                flow: 'classes'
            },
            {
                id: 'level',
                label: 'רמת ריקוד',
                type: 'select',
                flow: 'classes',
                options: ['מתחיל', 'בינוני', 'מתקדם', 'מקצועי']
            },
            {
                id: 'preferredDay',
                label: 'יום מועדף בשבוע',
                type: 'select',
                flow: 'classes',
                options: ['ראשון', 'שני', 'שלישי', 'רביעי', 'חמישי', 'שישי']
            },
            {
                id: 'preferredTime',
                label: 'שעה מועדפת',
                type: 'select',
                flow: 'classes',
                options: ['בוקר (6:00-12:00)', 'צהריים (12:00-17:00)', 'ערב (17:00-21:00)', 'לילה (21:00-23:00)']
            }
        ];

        // Show flow steps
        const showSteps = [
            {
                id: 'eventDate',
                label: 'תאריך האירוע',
                type: 'input',
                inputType: 'date',
                flow: 'show'
            },
            {
                id: 'eventTime',
                label: 'שעת האירוע',
                type: 'input',
                inputType: 'time',
                flow: 'show'
            },
            {
                id: 'budget',
                label: 'תקציב משוער',
                type: 'select',
                flow: 'show',
                options: ['עד 2,000 ₪', '2,000 - 5,000 ₪', '5,000 - 10,000 ₪', 'מעל 10,000 ₪']
            }
        ];

        function getActiveSteps() {
            let activeSteps = [...baseSteps];

            if (formData.interestedIn === 'classes') {
                activeSteps = [...activeSteps, ...classesSteps];
            } else if (formData.interestedIn === 'show') {
                activeSteps = [...activeSteps, ...showSteps];
            }

            return activeSteps;
        }

        function openBookingModal() {
            const modal = document.getElementById('bookingModal');
            if (!modal) {
                console.error('Booking modal not found');
                return;
            }
            
            modal.classList.add('active');
            modal.setAttribute('aria-hidden', 'false');
            currentStep = 1;
            // Reset form data
            Object.keys(formData).forEach(key => formData[key] = '');
            renderModal();
            
            // Prevent body scroll when modal is open
            document.body.style.overflow = 'hidden';
            document.body.classList.add('modal-open');
            
            // Focus management
            const firstInput = modal.querySelector('input, select, button');
            if (firstInput) {
                setTimeout(() => firstInput.focus(), 100);
            }
        }

        function closeBookingModal() {
            const modal = document.getElementById('bookingModal');
            if (!modal) {
                console.error('Booking modal not found');
                return;
            }
            
            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
            currentStep = 1;
            Object.keys(formData).forEach(key => formData[key] = '');
            
            // Restore body scroll
            document.body.style.overflow = '';
            document.body.classList.remove('modal-open');
            
            // Return focus to the button that opened the modal
            const ctaButton = document.querySelector('.cta-button');
            if (ctaButton) {
                ctaButton.focus();
            }
        }

        function updateButtonState() {
            const nextBtn = document.getElementById('nextBtn');
            const canMove = canProceed();
            nextBtn.disabled = !canMove;

            const activeSteps = getActiveSteps();
            maxSteps = activeSteps.length;
            nextBtn.textContent = currentStep === maxSteps ? 'שלח' : 'הבא';
        }

        function handleInputChange(stepId, value) {
            formData[stepId] = value;
            updateButtonState();

            // If selecting interest type, re-render to show appropriate flow
            if (stepId === 'interestedIn') {
                renderModal();
            }
        }

        function renderModal() {
            try {
                const activeSteps = getActiveSteps();
                maxSteps = activeSteps.length;

                // Render progress bar
                const progressBar = document.getElementById('progressBar');
                if (!progressBar) {
                    console.error('Progress bar not found');
                    return;
                }
                
                progressBar.innerHTML = '';
                for (let i = 0; i < maxSteps; i++) {
                    const segment = document.createElement('div');
                    segment.className = 'progress-segment' + (i < currentStep ? ' active' : '');
                    segment.innerHTML = '<div class="progress-fill"></div>';
                    progressBar.appendChild(segment);
                }

                // Render current step
                const formSteps = document.getElementById('formSteps');
                if (!formSteps) {
                    console.error('Form steps container not found');
                    return;
                }
                
                formSteps.innerHTML = '';

                activeSteps.forEach((step, index) => {
                const stepDiv = document.createElement('div');
                stepDiv.className = 'form-step' + (index + 1 === currentStep ? ' active' : '');

                const label = document.createElement('label');
                label.className = 'form-label impact-font';
                label.textContent = step.label;
                stepDiv.appendChild(label);

                // Input field
                if (step.type === 'input') {
                    // Special handling for eventDate - auto-open date picker
                    if (step.id === 'eventDate') {
                        // Auto-open date picker when this step becomes active
                        if (index + 1 === currentStep) {
                            setTimeout(() => {
                                openDatePicker(step.id);
                            }, 100);
                        }
                        
                        // Create a simple display for the selected date
                        const dateDisplay = document.createElement('div');
                        dateDisplay.className = 'date-display';
                        dateDisplay.textContent = formData[step.id] ? 
                            new Date(formData[step.id]).toLocaleDateString('he-IL') : 
                            'בחר תאריך מהלוח שנה';
                        stepDiv.appendChild(dateDisplay);
                        
                        // Add reopen button if date is already selected
                        if (formData[step.id]) {
                            const reopenButton = document.createElement('button');
                            reopenButton.className = 'btn btn-back';
                            reopenButton.textContent = 'שנה תאריך';
                            reopenButton.onclick = () => {
                                openDatePicker(step.id);
                            };
                            stepDiv.appendChild(reopenButton);
                        }
                    } else {
                        const input = document.createElement('input');
                        input.type = step.inputType;
                        input.className = 'form-input';
                        input.placeholder = step.placeholder || '';
                        input.value = formData[step.id] || '';

                        // Real-time updates
                        input.oninput = (e) => {
                            handleInputChange(step.id, e.target.value);
                        };

                        stepDiv.appendChild(input);

                        // Auto-focus on input fields
                        setTimeout(() => {
                            if (index + 1 === currentStep) {
                                input.focus();
                            }
                        }, 100);
                    }
                }
                // Radio buttons
                else if (step.type === 'radio') {
                    // Special handling for interestedIn step - artistic boxes
                    if (step.id === 'interestedIn') {
                        const artisticContainer = document.createElement('div');
                        artisticContainer.className = 'artistic-options-container';

                        step.options.forEach(option => {
                            const artisticBox = document.createElement('div');
                            artisticBox.className = 'artistic-box';
                            
                            const isChecked = formData[step.id] === option.value;
                            if (isChecked) {
                                artisticBox.classList.add('selected');
                            }

                            // Create artistic content
                            const boxContent = document.createElement('div');
                            boxContent.className = 'artistic-box-content';
                            
                            // Add icon based on option
                            const icon = document.createElement('div');
                            icon.className = 'artistic-icon';
                            if (option.value === 'classes') {
                                icon.innerHTML = '🎵';
                            } else if (option.value === 'show') {
                                icon.innerHTML = '⭐';
                            }
                            
                            const title = document.createElement('h3');
                            title.className = 'artistic-title impact-font';
                            title.textContent = option.label;
                            
                            const description = document.createElement('p');
                            description.className = 'artistic-description';
                            if (option.value === 'classes') {
                                description.textContent = 'שיעורי ריקוד מקצועיים';
                            } else if (option.value === 'show') {
                                description.textContent = 'הופעות מרהיבות לאירועים';
                            }

                            boxContent.appendChild(icon);
                            boxContent.appendChild(title);
                            boxContent.appendChild(description);
                            artisticBox.appendChild(boxContent);

                            // Click handler with auto-advance
                            artisticBox.onclick = () => {
                                formData[step.id] = option.value;
                                handleInputChange(step.id, option.value);
                                
                                // Auto-advance to next step after selection
                                setTimeout(() => {
                                    nextStep();
                                }, 300);
                            };

                            artisticContainer.appendChild(artisticBox);
                        });

                        stepDiv.appendChild(artisticContainer);
                    } else {
                        // Regular radio buttons for other steps
                        const radioContainer = document.createElement('div');
                        radioContainer.className = 'radio-options-container';

                        step.options.forEach(option => {
                            const radioDiv = document.createElement('div');
                            radioDiv.className = 'radio-option';

                            const radioContent = document.createElement('div');
                            radioContent.className = 'radio-content';

                            const isChecked = formData[step.id] === option.value;
                            radioContent.innerHTML = `
                                <input type="radio" name="${step.id}" value="${option.value}" ${isChecked ? 'checked' : ''}>
                                <label>${option.label}</label>
                            `;

                            radioDiv.onclick = () => {
                                formData[step.id] = option.value;
                                handleInputChange(step.id, option.value);
                            };

                            radioDiv.appendChild(radioContent);
                            radioContainer.appendChild(radioDiv);
                        });

                        stepDiv.appendChild(radioContainer);
                    }
                }
                // Select dropdown
                else if (step.type === 'select') {
                    const select = document.createElement('select');
                    select.className = 'form-select';

                    const placeholder = document.createElement('option');
                    placeholder.value = '';
                    placeholder.textContent = 'בחר אפשרות';
                    select.appendChild(placeholder);

                    step.options.forEach(opt => {
                        const option = document.createElement('option');
                        option.value = opt;
                        option.textContent = opt;
                        option.selected = formData[step.id] === opt;
                        select.appendChild(option);
                    });

                    select.onchange = (e) => {
                        handleInputChange(step.id, e.target.value);
                    };

                    stepDiv.appendChild(select);
                }

                formSteps.appendChild(stepDiv);
            });

                // Update button states
                const backBtn = document.getElementById('backBtn');
                if (backBtn) {
                    backBtn.disabled = currentStep === 1;
                }
                updateButtonState();
            } catch (error) {
                console.error('Error rendering modal:', error);
            }
        }

        function canProceed() {
            const activeSteps = getActiveSteps();
            const currentStepData = activeSteps[currentStep - 1];

            if (!currentStepData) return false;

            const value = formData[currentStepData.id];

            // Check if value exists and is not empty
            if (!value) return false;

            // For string values, check if trimmed value is not empty
            if (typeof value === 'string' && value.trim() === '') return false;

            return true;
        }

        function nextStep() {
            if (!canProceed()) {
                showToast('נא למלא את השדה', true);
                return;
            }

            const activeSteps = getActiveSteps();
            maxSteps = activeSteps.length;

            if (currentStep === maxSteps) {
                sendToWhatsApp();
                return;
            }

            currentStep++;
            renderModal();
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                renderModal();
            }
        }

        function sendToWhatsApp() {
            try {
                if (!formData.name) {
                    showToast('נא למלא את השם', true);
                    return;
                }

                let message = `שלום, אני ${formData.name}.\n\n`;

                if (formData.interestedIn === 'classes') {
                    message += `אני מעוניין/ת בשיעורי ריקוד:\n`;
                    message += `מגדר: ${formData.gender || 'לא צוין'}\n`;
                    message += `גיל: ${formData.age || 'לא צוין'}\n`;
                    message += `עיר: ${formData.city || 'לא צוין'}\n`;
                    message += `רמת ריקוד: ${formData.level || 'לא צוין'}\n`;
                    message += `יום מועדף: ${formData.preferredDay || 'לא צוין'}\n`;
                    message += `שעה מועדפת: ${formData.preferredTime || 'לא צוין'}`;
                } else if (formData.interestedIn === 'show') {
                    message += `אני מעוניין/ת בהופעה:\n`;
                    message += `תאריך האירוע: ${formData.eventDate || 'לא צוין'}\n`;
                    message += `שעת האירוע: ${formData.eventTime || 'לא צוין'}\n`;
                    message += `תקציב משוער: ${formData.budget || 'לא צוין'}`;
                }

                const encodedMessage = encodeURIComponent(message);
                const whatsappUrl = `https://wa.me/972527588442?text=${encodedMessage}`;

                showToast('מעביר לוואטסאפ...');
                setTimeout(() => {
                    try {
                        window.open(whatsappUrl, '_blank');
                        closeBookingModal();
                    } catch (error) {
                        console.error('Error opening WhatsApp:', error);
                        showToast('אירעה שגיאה בפתיחת וואטסאפ', true);
                    }
                }, 500);
            } catch (error) {
                console.error('Error sending to WhatsApp:', error);
                showToast('אירעה שגיאה, נסה שוב', true);
            }
        }

        // Close modal on outside click
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('bookingModal');
            if (modal) {
                modal.onclick = function(e) {
                    if (e.target === this) {
                        closeBookingModal();
                    }
                };
            }
        });

        // Close modal on ESC key and handle keyboard navigation
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('bookingModal');
            const imagePopup = document.getElementById('imagePopup');
            
            if (modal && modal.classList.contains('active')) {
                if (e.key === 'Escape') {
                    closeBookingModal();
                } else if (e.key === 'Tab') {
                    // Trap focus within modal
                    const focusableElements = modal.querySelectorAll('button, input, select, textarea, [tabindex]:not([tabindex="-1"])');
                    const firstElement = focusableElements[0];
                    const lastElement = focusableElements[focusableElements.length - 1];
                    
                    if (e.shiftKey) {
                        if (document.activeElement === firstElement) {
                            e.preventDefault();
                            lastElement.focus();
                        }
                    } else {
                        if (document.activeElement === lastElement) {
                            e.preventDefault();
                            firstElement.focus();
                        }
                    }
                }
            }
            
            // Handle image popup keyboard navigation
            if (imagePopup && imagePopup.classList.contains('active')) {
                if (e.key === 'Escape') {
                    closeImagePopup();
                }
            }
        });

    </script>
</body>
</html>