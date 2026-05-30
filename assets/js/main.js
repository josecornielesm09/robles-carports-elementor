document.addEventListener('DOMContentLoaded', function() {

    // LOADER
    const loader = document.getElementById('rcLoader');
    const loaderFill = document.getElementById('rcLoaderFill');
    let loadProgress = 0;

    const loadInterval = setInterval(() => {
        loadProgress += Math.random() * 15 + 5;
        if (loadProgress >= 100) {
            loadProgress = 100;
            loaderFill.style.width = '100%';
            clearInterval(loadInterval);
            setTimeout(() => {
                gsap.to(loader, { opacity: 0, duration: 0.5, onComplete: () => { loader.style.display = 'none'; initAnimations(); } });
            }, 400);
        } else {
            loaderFill.style.width = loadProgress + '%';
        }
    }, 150);

    // CUSTOM CURSOR
    const cursor = document.getElementById('rcCursor');
    const cursorDot = document.getElementById('rcCursorDot');
    let mouseX = 0, mouseY = 0, cursorX = 0, cursorY = 0;

    if (cursor && cursorDot) {
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            cursorDot.style.left = mouseX - 3 + 'px';
            cursorDot.style.top = mouseY - 3 + 'px';
        });

        function animateCursor() {
            cursorX += (mouseX - cursorX) * 0.15;
            cursorY += (mouseY - cursorY) * 0.15;
            cursor.style.left = cursorX - 10 + 'px';
            cursor.style.top = cursorY - 10 + 'px';
            requestAnimationFrame(animateCursor);
        }
        animateCursor();

        document.querySelectorAll('a, .rc-btn, .rc-faq-question, .rc-gallery-item').forEach(el => {
            el.addEventListener('mouseenter', () => { cursor.style.transform = 'scale(2)'; cursor.style.opacity = '0.5'; });
            el.addEventListener('mouseleave', () => { cursor.style.transform = 'scale(1)'; cursor.style.opacity = '1'; });
        });

        if ('ontouchstart' in window) { cursor.style.display = 'none'; cursorDot.style.display = 'none'; }
    }

    // NAVBAR & STICKY
    const navbar = document.getElementById('rcHeader');
    const stickyBar = document.getElementById('rcStickyBar');

    if (navbar && stickyBar) {
        window.addEventListener('scroll', function() {
            const scrollY = window.scrollY;
            navbar.classList.toggle('scrolled', scrollY > 80);
            stickyBar.classList.toggle('visible', scrollY > 600);
        });
    }

    // MOBILE MENU
    window.rcToggleMobile = function() {
        const hamburger = document.getElementById('rcHamburger');
        const mobileMenu = document.getElementById('rcMobileMenu');
        if (hamburger && mobileMenu) {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        }
    };

    window.rcCloseMobile = function() {
        const hamburger = document.getElementById('rcHamburger');
        const mobileMenu = document.getElementById('rcMobileMenu');
        if (hamburger && mobileMenu) {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        }
    };

    // FAQ TOGGLE
    document.querySelectorAll('.rc-faq-question').forEach(function(el) {
        el.addEventListener('click', function() {
            var item = this.parentElement;
            var isActive = item.classList.contains('active');
            document.querySelectorAll('.rc-faq-item').forEach(function(i) { i.classList.remove('active'); });
            if (!isActive) { item.classList.add('active'); }
        });
    });

    // BENEFIT CARDS MOUSE FOLLOW
    document.querySelectorAll('.rc-benefit-card').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;
            card.style.setProperty('--mx', x + '%');
            card.style.setProperty('--my', y + '%');
        });
    });

    // GSAP INIT
    function initAnimations() {
        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

        // HERO
        const heroTl = gsap.timeline({ delay: 0.2 });
        heroTl
            .from('.rc-hero-badge', { y: 30, opacity: 0, duration: 0.8, ease: 'power3.out' })
            .from('.rc-hero-title', { y: 40, opacity: 0, duration: 0.8, ease: 'power3.out' }, '-=0.5')
            .from('.rc-hero-subtitle', { y: 30, opacity: 0, duration: 0.8, ease: 'power3.out' }, '-=0.5')
            .from('.rc-hero-buttons .rc-btn', { y: 30, opacity: 0, duration: 0.6, stagger: 0.15, ease: 'power3.out' }, '-=0.4')
            .from('.rc-hero-location', { y: 20, opacity: 0, duration: 0.6, ease: 'power3.out' }, '-=0.3')
            .from('.rc-hero-scroll', { y: 20, opacity: 0, duration: 0.6, ease: 'power3.out' }, '-=0.2');

        // HERO PARALLAX
        gsap.to('.rc-hero-bg img', { yPercent: 30, ease: 'none', scrollTrigger: { trigger: '.rc-hero', start: 'top top', end: 'bottom top', scrub: true } });
        gsap.to('.rc-hero-content', { yPercent: 50, opacity: 0, ease: 'none', scrollTrigger: { trigger: '.rc-hero', start: 'top top', end: '60% top', scrub: true } });

        // STATS COUNTER
        document.querySelectorAll('.rc-stat-number').forEach(num => {
            const target = parseInt(num.getAttribute('data-count'));
            ScrollTrigger.create({
                trigger: num,
                start: 'top 85%',
                onEnter: () => {
                    gsap.to({ val: 0 }, {
                        val: target,
                        duration: 2,
                        ease: 'power2.out',
                        onUpdate: function() { num.textContent = Math.floor(this.targets()[0].val) + '+'; }
                    });
                },
                once: true
            });
        });

        // 3D SHOWCASE
        document.querySelectorAll('.rc-showcase-item').forEach((item, index) => {
            const text = item.querySelector('.rc-showcase-text');
            const image = item.querySelector('.rc-showcase-image');
            const imageImg = image.querySelector('img');
            const isEven = index % 2 === 0;

            gsap.set(text, { x: isEven ? -100 : 100, opacity: 0, rotateY: isEven ? -15 : 15 });
            gsap.set(image, { x: isEven ? 100 : -100, opacity: 0, rotateY: isEven ? 15 : -15, scale: 0.9 });

            const tl = gsap.timeline({
                scrollTrigger: { trigger: item, start: 'top 75%', end: 'top 25%', scrub: 1 }
            });
            tl.to(text, { x: 0, opacity: 1, rotateY: 0, duration: 1, ease: 'power2.out' })
              .to(image, { x: 0, opacity: 1, rotateY: 0, scale: 1, duration: 1, ease: 'power2.out' }, 0);

            gsap.to(imageImg, { yPercent: -15, ease: 'none', scrollTrigger: { trigger: item, start: 'top bottom', end: 'bottom top', scrub: true } });

            ScrollTrigger.create({
                trigger: item,
                start: 'top 80%',
                end: 'bottom 20%',
                onUpdate: (self) => {
                    const progress = self.progress;
                    const rotateAmount = (1 - progress) * 5;
                    gsap.set(image, { rotateY: isEven ? -rotateAmount : rotateAmount, rotateX: rotateAmount * 0.3 });
                }
            });
        });

        // FLOATING SHAPES
        gsap.to('.rc-shape-1', { y: -100, x: 50, duration: 8, repeat: -1, yoyo: true, ease: 'sine.inOut' });
        gsap.to('.rc-shape-2', { y: 80, x: -40, duration: 10, repeat: -1, yoyo: true, ease: 'sine.inOut' });

        // BENEFITS
        document.querySelectorAll('.rc-benefit-card').forEach((card, i) => {
            gsap.from(card, { y: 60, opacity: 0, rotateX: 10, duration: 0.7, delay: i * 0.1, ease: 'power3.out', scrollTrigger: { trigger: card, start: 'top 85%', toggleActions: 'play none none reverse' } });
        });

        // SECTION HEADERS
        document.querySelectorAll('.rc-section-header').forEach(header => {
            gsap.from(header.children, { y: 40, opacity: 0, stagger: 0.15, duration: 0.8, ease: 'power3.out', scrollTrigger: { trigger: header, start: 'top 80%', toggleActions: 'play none none reverse' } });
        });

        // GALLERY 3D
        document.querySelectorAll('.rc-gallery-item').forEach((item, i) => {
            gsap.from(item, { y: 80, opacity: 0, rotateX: 15, rotateY: i % 2 === 0 ? -5 : 5, scale: 0.9, duration: 0.8, delay: i * 0.1, ease: 'power3.out', scrollTrigger: { trigger: '.rc-gallery-grid', start: 'top 75%', toggleActions: 'play none none reverse' } });
        });
        gsap.to('.rc-gallery-grid', { rotateX: 2, ease: 'none', scrollTrigger: { trigger: '.rc-gallery', start: 'top bottom', end: 'bottom top', scrub: true } });

        // PROCESS
        document.querySelectorAll('.rc-process-step').forEach((step, i) => {
            gsap.from(step, { y: 60, opacity: 0, scale: 0.8, duration: 0.6, delay: i * 0.15, ease: 'back.out(1.5)', scrollTrigger: { trigger: '.rc-process-grid', start: 'top 75%', toggleActions: 'play none none reverse' } });
        });

        // TESTIMONIALS
        document.querySelectorAll('.rc-testimonial-card').forEach((card, i) => {
            gsap.from(card, { y: 60, opacity: 0, rotateY: i === 1 ? 10 : (i === 0 ? -5 : 5), scale: 0.95, duration: 0.7, delay: i * 0.15, ease: 'power3.out', scrollTrigger: { trigger: card, start: 'top 85%', toggleActions: 'play none none reverse' } });
        });

        // FAQ
        document.querySelectorAll('.rc-faq-item').forEach((item, i) => {
            gsap.from(item, { x: -30, opacity: 0, duration: 0.5, delay: i * 0.1, ease: 'power2.out', scrollTrigger: { trigger: item, start: 'top 85%', toggleActions: 'play none none reverse' } });
        });

        // CTA
        const ctaTl = gsap.timeline({ scrollTrigger: { trigger: '.rc-cta', start: 'top 60%', toggleActions: 'play none none reverse' } });
        ctaTl
            .from('.rc-cta-section .rc-section-tag', { y: 30, opacity: 0, duration: 0.5 })
            .from('.rc-cta-title', { y: 40, opacity: 0, duration: 0.6 }, '-=0.3')
            .from('.rc-cta-phone', { y: 30, opacity: 0, duration: 0.5, scale: 0.9 }, '-=0.3')
            .from('.rc-cta-desc', { y: 30, opacity: 0, duration: 0.5 }, '-=0.2')
            .from('.rc-cta-buttons .rc-btn', { y: 30, opacity: 0, stagger: 0.15, duration: 0.5 }, '-=0.3');

        gsap.to('.rc-cta-bg img', { yPercent: 20, ease: 'none', scrollTrigger: { trigger: '.rc-cta', start: 'top bottom', end: 'bottom top', scrub: true } });

        // FOOTER
        document.querySelectorAll('.rc-footer-grid > div').forEach((col, i) => {
            gsap.from(col, { y: 40, opacity: 0, duration: 0.5, delay: i * 0.1, scrollTrigger: { trigger: '.rc-footer-grid', start: 'top 85%', toggleActions: 'play none none reverse' } });
        });

        // SMOOTH SCROLL
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    gsap.to(window, { scrollTo: { y: target, offsetY: 80 }, duration: 1.2, ease: 'power3.inOut' });
                    rcCloseMobile();
                }
            });
        });

        // MAGNETIC BUTTONS
        document.querySelectorAll('.rc-btn').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const rect = btn.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                gsap.to(btn, { x: x * 0.2, y: y * 0.2, duration: 0.3, ease: 'power2.out' });
            });
            btn.addEventListener('mouseleave', () => {
                gsap.to(btn, { x: 0, y: 0, duration: 0.5, ease: 'elastic.out(1, 0.5)' });
            });
        });

        // GALLERY TILT
        document.querySelectorAll('.rc-gallery-item').forEach(item => {
            item.addEventListener('mousemove', (e) => {
                const rect = item.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width;
                const y = (e.clientY - rect.top) / rect.height;
                gsap.to(item, { rotateY: (x - 0.5) * 10, rotateX: (y - 0.5) * -10, duration: 0.4, ease: 'power2.out' });
            });
            item.addEventListener('mouseleave', () => {
                gsap.to(item, { rotateY: 0, rotateX: 0, duration: 0.6, ease: 'elastic.out(1, 0.5)' });
            });
        });

        // TEXT SPLIT
        document.querySelectorAll('.rc-showcase-title').forEach(title => {
            const text = title.textContent;
            title.innerHTML = '';
            const words = text.split(' ');
            words.forEach((word) => {
                const span = document.createElement('span');
                span.textContent = word + ' ';
                span.style.display = 'inline-block';
                span.style.overflow = 'hidden';
                const inner = document.createElement('span');
                inner.textContent = word + ' ';
                inner.style.display = 'inline-block';
                inner.style.transform = 'translateY(100%)';
                span.appendChild(inner);
                title.appendChild(span);
            });

            ScrollTrigger.create({
                trigger: title,
                start: 'top 80%',
                onEnter: () => {
                    gsap.to(title.querySelectorAll('span > span'), { y: '0%', stagger: 0.05, duration: 0.6, ease: 'power3.out' });
                },
                once: true
            });
        });
    }
});
