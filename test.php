In my about page, the menu is not been translated to arabic while switching to arabic mode

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Nemah Min Allah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container d-flex align-items-center">

            <!-- Desktop language (shows on lg and up) -->
            <div class="lang-container d-none d-lg-block">
            <button id="langToggle" class="lang-btn">
                <i class="fas fa-language"></i> <span id="languageText">English</span>
            </button>
            </div>

            <!-- Brand -->
            <a class="navbar-brand" href="index.html" id="siteTitle">Nemah Min Allah</a>

            <!-- Toggler (HAMBURGER) - make sure this exists -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu links (centered on large screens) -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="index.html" id="navHome">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html" id="navAbout">About</a></li>
                <li class="nav-item"><a class="nav-link" href="chapters.html" id="navChapters">Chapters</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html" id="navContact">Contact</a></li>

                <!-- Mobile-only language toggle = LAST item in collapsed menu -->
                <li class="nav-item lang-toggle d-lg-none">
                <button id="langToggleMobile" class="lang-btn w-100">
                    <i class="fas fa-language"></i> <span id="languageTextMobile">English</span>
                </button>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- Page Hero Section -->
    <section class="page-hero">
        <div class="page-hero-content">
            <h1 class="page-hero-title" data-i18n="aboutHeroTitle">About the Book</h1>
            <p class="page-hero-subtitle" data-i18n="aboutHeroSubtitle">Discover the story behind Nemah Min Allah and its author</p>
        </div>
    </section>

    <!-- About Author Section -->
    <section class="section about-author-section">
        <div class="container">
            <h2 class="section-title" data-i18n="authorTitle">About the Author</h2>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <img src="resources/img/author.jpg" alt="Author" class="author-image">
                </div>
                <div class="col-md-8">
                    <h3 data-i18n="authorName">Zkryat Ibrahim Abkar Ali (ACCA)</h3>
                    <p data-i18n="authorBio">Zkryat is a renowned spiritual teacher and author with over 20 years of experience in Islamic studies and spiritual guidance. His works focus on bridging traditional Islamic wisdom with contemporary life challenges.</p>
                    
                    <h4 data-i18n="qualificationsTitle">Qualifications</h4>
                    <ul class="author-qualifications">
                        <li data-i18n="qualification1">PhD in Islamic Studies from Al-Azhar University</li>
                        <li data-i18n="qualification2">Master's in Comparative Religion from International Islamic University</li>
                        <li data-i18n="qualification3">Over 15 published works on spirituality and personal development</li>
                        <li data-i18n="qualification4">Regular speaker at international spiritual conferences</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Accordion Section -->
    <section class="section accordion-section">
        <div class="container">
            <h2 class="section-title" data-i18n="bookOverviewTitle">Book Overview</h2>
            <div class="horizontal-accordion">
                <div class="accordion-item active">
                    <div class="accordion-bg" style="background-image: url('https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');"></div>
                    <div class="accordion-overlay">
                        <div class="accordion-content">
                            <h3 class="accordion-title" data-i18n="introTitle">Introduction</h3>
                            <p class="accordion-text" data-i18n="introText">Nemah Min Allah begins with an exploration of divine blessings in everyday life. The introduction sets the stage for a transformative journey, inviting readers to recognize the subtle ways grace manifests in our daily experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-bg" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');"></div>
                    <div class="accordion-overlay">
                        <div class="accordion-content">
                            <h3 class="accordion-title" data-i18n="chapter1Title">Chapter 1: The Awakening</h3>
                            <p class="accordion-text" data-i18n="chapter1Text">This chapter explores the initial moments of spiritual awakening, when one first becomes aware of the divine presence in their life. It discusses signs, experiences, and the emotional journey of this profound realization.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-bg" style="background-image: url('https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');"></div>
                    <div class="accordion-overlay">
                        <div class="accordion-content">
                            <h3 class="accordion-title" data-i18n="chapter2Title">Chapter 2: The Journey</h3>
                            <p class="accordion-text" data-i18n="chapter2Text">The second chapter delves into the ongoing spiritual journey, with its challenges, milestones, and moments of doubt and certainty. It provides guidance for maintaining faith through life's ups and downs.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-bg" style="background-image: url('https://images.unsplash.com/photo-1543332164-6e82f355badc?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');"></div>
                    <div class="accordion-overlay">
                        <div class="accordion-content">
                            <h3 class="accordion-title" data-i18n="chapter3Title">Chapter 3: Divine Connection</h3>
                            <p class="accordion-text" data-i18n="chapter3Text">The final chapter focuses on achieving a sustained connection with the divine. It explores practices, mindsets, and perspectives that help cultivate this relationship and recognize blessings in all circumstances.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Obtain Book Section -->
    <section class="section obtain-book-section">
        <div class="container">
            <h2 class="section-title" data-i18n="obtainTitle">How to Obtain the Book</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="store-card">
                        <div class="store-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <h4 data-i18n="physicalStores">Physical Stores</h4>
                        <p data-i18n="physicalStoresDesc">Find Nemah Min Allah at major bookstores across UAE. Check with your local bookstore for availability.</p>
                        <button class="btn btn-light mt-3" data-i18n="findStores">Find Stores</button>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="store-card">
                        <div class="store-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h4 data-i18n="onlineStores">Online Retailers</h4>
                        <p data-i18n="onlineStoresDesc">Purchase the book from popular online retailers. Available in both paperback and e-book formats.</p>
                        <button class="btn btn-light mt-3" data-i18n="shopOnline">Shop Online</button>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="store-card">
                        <div class="store-icon">
                            <i class="fas fa-download"></i>
                        </div>
                        <h4 data-i18n="directDownload">Direct Download</h4>
                        <p data-i18n="directDownloadDesc">Get the digital version directly from our website. Instant access after purchase.</p>
                        <button class="btn btn-light mt-3" data-i18n="downloadNow">Download Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4 class="footer-title" data-i18n="footerTitle">Nemah Min Allah</h4>
                    <p data-i18n="footerDesc">A journey of faith, hope, and divine blessings that illuminates the path to inner peace.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="footer-title" data-i18n="linksTitle">Quick Links</h4>
                    <div class="footer-links">
                        <a href="index.html" data-i18n="linkHome">Home</a>
                        <a href="about.html" data-i18n="linkAbout">About</a>
                        <a href="chapters.html" data-i18n="linkChapters">Chapters</a>
                        <a href="contact.html" data-i18n="linkContact">Contact</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="footer-title" data-i18n="contactTitle">Contact</h4>
                    <div class="footer-links">
                        <a href="mailto:info@nemahminallah.com" data-i18n="contactEmail">info@nemahminallah.com</a>
                        <a href="contact.html" data-i18n="contactForm">Contact Form</a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p data-i18n="copyrightText">&copy; 2023 Nemah Min Allah. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Expanded translations object for about page
        const translations = {
            en: {
                // Navigation
                siteTitle: "Nemah Min Allah",
                navHome: "Home",
                navAbout: "About",
                navChapters: "Chapters",
                navContact: "Contact",
                language: "English",
                
                // Page Hero
                aboutHeroTitle: "About the Book",
                aboutHeroSubtitle: "Discover the story behind Nemah Min Allah and its author",
                
                // About Author Section
                authorTitle: "About the Author",
                authorName: "Zkryat Ibrahim Abkar Ali (ACCA)",
                authorBio: "Zkryat holds a Bachelor of Science degree in Accounting and Finance from the University of Science and Technology, Sudan (First Class Honors), and a Master of Science degree in Accounting and Finance from the same university (First Class Honors).  She served as the Head of Department at Ibn Sina University and was a lecturer in the Accounting Department at Ibn Sina University, as well as a lecturer at the University of Science and Technology and several other universities.  She also worked as an auditor for an accounting firm and was a member of several committees, including the committee responsible for developing the Sudanese Fellowship program curriculum.  She has participated in and contributed to numerous international and local conferences and events.",
                qualificationsTitle: "Qualifications",
                qualification1: "PhD in Islamic Studies from Al-Azhar University",
                qualification2: "Master's in Comparative Religion from International Islamic University",
                qualification3: "Over 15 published works on spirituality and personal development",
                qualification4: "Regular speaker at international spiritual conferences",
                
                // Book Accordion Section
                bookOverviewTitle: "Book Overview",
                introTitle: "Introduction",
                introText: "Nemah Min Allah begins with an exploration of divine blessings in everyday life. The introduction sets the stage for a transformative journey, inviting readers to recognize the subtle ways grace manifests in our daily experiences.",
                chapter1Title: "Chapter 1: The Awakening",
                chapter1Text: "This chapter explores the initial moments of spiritual awakening, when one first becomes aware of the divine presence in their life. It discusses signs, experiences, and the emotional journey of this profound realization.",
                chapter2Title: "Chapter 2: The Journey",
                chapter2Text: "The second chapter delves into the ongoing spiritual journey, with its challenges, milestones, and moments of doubt and certainty. It provides guidance for maintaining faith through life's ups and downs.",
                chapter3Title: "Chapter 3: Divine Connection",
                chapter3Text: "The final chapter focuses on achieving a sustained connection with the divine. It explores practices, mindsets, and perspectives that help cultivate this relationship and recognize blessings in all circumstances.",
                
                // Obtain Book Section
                obtainTitle: "How to Obtain the Book",
                physicalStores: "Physical Stores",
                physicalStoresDesc: "Find Nemah Min Allah at major bookstores across UAE. Check with your local bookstore for availability.",
                findStores: "Find Stores",
                onlineStores: "Online Retailers",
                onlineStoresDesc: "Purchase the book from popular online retailers. Available in both paperback and e-book formats.",
                shopOnline: "Shop Online",
                directDownload: "Direct Download",
                directDownloadDesc: "Get the digital version directly from our website. Instant access after purchase.",
                downloadNow: "Download Now",
                
                // Footer
                footerTitle: "Nemah Min Allah",
                footerDesc: "A journey of faith, hope, and divine blessings that illuminates the path to inner peace.",
                linksTitle: "Quick Links",
                linkHome: "Home",
                linkAbout: "About",
                linkChapters: "Chapters",
                linkContact: "Contact",
                contactTitle: "Contact",
                contactEmail: "info@nemahminallah.com",
                contactForm: "Contact Form",
                copyrightText: "© 2023 Nemah Min Allah. All rights reserved."
            },
            ar: {
                // Navigation
                siteTitle: "نعمة من الله",
                navHome: "الرئيسية",
                navAbout: "عن الكتاب",
                navChapters: "الفصول",
                navContact: "اتصل بنا",
                language: "العربية",
                
                // Page Hero
                aboutHeroTitle: "عن الكتاب",
                aboutHeroSubtitle: "اكتشف القصة وراء نعمة من الله ومؤلفه",
                
                // About Author Section
                authorTitle: "عن المؤلف",
                authorName: "زكريات ابراهيم ابكر علي",
                authorBio: "زكريات ، حصلت على بكالوريوس المحاسبه والتمويل جامعة السودان للعلوم والتكنولوجيا ( درجة الاولي ) ، وايضا  حصلت علي ماجستير المحاسبة والتمويل من جامعة السودان للعلوم والتكنولوجيا ( درجة الاولي )  ، حصلت علي منصب رئيس القسم العام في جامعة ابن سينا وايضا محاضر في قسم المحاسبه جامعة ابن سينا ، وايضا محاضر في جامعة السودان للعلوم والتكنولوجيا ومجموعة من الجامعات ، و مراجع في مجموعة حاسبين ،وكانت عضو في مجموعة من الجان من ضمنها لجنة اعداد مقررات الزمالة السودانية ، وايضا شاركت و ساهمة  في مجموعة من الفعاليات و المهرجانات العالمية و المحلية",
                qualificationsTitle: "المؤهلات",
                qualification1: "دكتوراه في الدراسات الإسلامية من جامعة الأزهر",
                qualification2: "ماجستير في الأديان المقارنة من الجامعة الإسلامية الدولية",
                qualification3: "أكثر من 15 عمل منشور عن الروحانية والتطور الشخصي",
                qualification4: "متحدث منتظم في المؤتمرات الروحية الدولية",
                
                // Book Accordion Section
                bookOverviewTitle: "نظرة عامة على الكتاب",
                introTitle: "المقدمة",
                introText: "تبدأ نعمة من الله باستكشاف البركات الإلهية في الحياة اليومية. تضع المقدمة المسرح لرحلة تحويلية، تدعو القراء للتعرف على الطرق الدقيقة التي تتجلى فيها النعمة في تجاربنا اليومية.",
                chapter1Title: "الفصل 1: الصحوة",
                chapter1Text: "يستكشف هذا الفصل اللحظات الأولى من الصحوة الروحية، عندما يصبح المرء لأول مرة على دراية بالوجود الإلهي في حياته. يناقش العلامات والتجارب والرحلة العاطفية لهذا الإدراك العميق.",
                chapter2Title: "الفصل 2: الرحلة",
                chapter2Text: "يخوض الفصل الثاني في الرحلة الروحية المستمرة، مع تحدياتها ومعالمها ولحظات الشك واليقين. يوفر إرشادات للحفاظ على الإيمان خلال صعود وهبوط الحياة.",
                chapter3Title: "الفصل 3: الاتصال الإلهي",
                chapter3Text: "يركز الفصل الأخير على تحقيق اتصال مستدام مع الإلهي. يستكشف الممارسات والعقليات والمنظورات التي تساعد في تنمية هذه العلاقة والتعرف على البركات في جميع الظروف.",
                
                // Obtain Book Section
                obtainTitle: "كيفية الحصول على الكتاب",
                physicalStores: "المتاجر الفعلية",
                physicalStoresDesc: "ابحث عن نعمة من الله في المكتبات الكبرى في جميع أنحاء البلاد. تحقق من توافره في مكتبتك المحلية.",
                findStores: "ابحث عن المتاجر",
                onlineStores: "المتاجر عبر الإنترنت",
                onlineStoresDesc: "اشترِ الكتاب من تجار التجزئة عبر الإنترنت المشهورين. متوفر في كل من النسخة المطبوعة والإلكترونية.",
                shopOnline: "تسوق عبر الإنترنت",
                directDownload: "التنزيل المباشر",
                directDownloadDesc: "احصل على النسخة الرقمية مباشرة من موقعنا على الإنترنت. وصول فوري بعد الشراء.",
                downloadNow: "حمّل الآن",
                
                // Footer
                footerTitle: "نعمة من الله",
                footerDesc: "رحلة إيمان وأمل وبركات إلهية تنير طريق السلام الداخلي.",
                linksTitle: "روابط سريعة",
                linkHome: "الرئيسية",
                linkAbout: "عن الكتاب",
                linkChapters: "الفصول",
                linkContact: "اتصل بنا",
                contactTitle: "اتصل بنا",
                contactEmail: "info@nemahminallah.com",
                contactForm: "نموذج الاتصال",
                copyrightText: "© 2023 نعمة من الله. جميع الحقوق محفوظة."
            }
        };

        // Current language
        let currentLang = 'en';

        // Update page content based on current language
        function updatePageContent() {
            const elements = document.querySelectorAll('[data-i18n]');

            elements.forEach(element => {
                const key = element.getAttribute('data-i18n');
                if (translations[currentLang][key]) {
                    element.textContent = translations[currentLang][key];

                    // Handle RTL for Arabic
                    if (currentLang === 'ar') {
                        element.classList.add('arabic-text');
                        if (element.tagName === 'HTML') {
                            element.dir = 'rtl';
                        }
                    } else {
                        element.classList.remove('arabic-text');
                        if (element.tagName === 'HTML') {
                            element.dir = 'ltr';
                        }
                    }
                }
            });

            // Update page direction
            document.documentElement.dir = currentLang === 'ar' ? 'rtl' : 'ltr';
            document.documentElement.lang = currentLang;

            // Update BOTH language toggle buttons
            const newLabel = currentLang === 'en' ? 'English' : 'العربية';
            const iconHtml = `<i class="fas fa-language"></i> ${newLabel}`;

            if (window.langToggle) langToggle.innerHTML = iconHtml;
            if (window.langToggleMobile) langToggleMobile.innerHTML = iconHtml;
        }

        // Toggle language function
        function toggleLanguage() {
            currentLang = currentLang === 'en' ? 'ar' : 'en';
            updatePageContent();

            // Save preference to localStorage
            localStorage.setItem('preferredLanguage', currentLang);
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function () {
            // Grab both language toggle buttons
            window.langToggle = document.getElementById('langToggle'); // desktop
            window.langToggleMobile = document.getElementById('langToggleMobile'); // mobile

            // Check for saved language preference
            const savedLang = localStorage.getItem('preferredLanguage');
            if (savedLang) {
                currentLang = savedLang;
            }

            // Initial content update
            updatePageContent();

            // Add event listeners to BOTH buttons
            if (langToggle) langToggle.addEventListener('click', toggleLanguage);
            if (langToggleMobile) langToggleMobile.addEventListener('click', toggleLanguage);

            // Navbar scroll effect
            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    document.querySelector('.navbar').classList.add('scrolled');
                } else {
                    document.querySelector('.navbar').classList.remove('scrolled');
                }
            });

            // Horizontal accordion functionality
            const accordionItems = document.querySelectorAll('.accordion-item');
            accordionItems.forEach(item => {
                item.addEventListener('click', function () {
                    // Remove active class from all items
                    accordionItems.forEach(i => i.classList.remove('active'));
                    // Add active class to clicked item
                    this.classList.add('active');
                });
            });
        });

    </script>
</body>
</html>

Please check and fix