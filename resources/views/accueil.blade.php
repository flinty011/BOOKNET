<!--
    ===========================================
    PAGE D'ACCUEIL BOOKNET - BIBLIOTHÈQUE UNIVERSITAIRE
    ===========================================
    Créé par GitHub Copilot - Version moderne et responsive
    Date: Avril 2026
    Fonctionnalités: Design moderne, animations fluides, responsive
    ===========================================
-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNet - Bibliothèque Universitaire en Ligne</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>


<body>
    <!-- ===========================================
         NAVIGATION HEADER
         =========================================== -->
    <nav class="navbar">
        <div class="nav-container">
            <!-- Logo de la bibliothèque -->
            <div class="nav-logo">
                <i class="fas fa-book-open"></i>
                <span>BookNet</span>
            </div>

            <!-- Menu principal -->
            <div class="nav-menu">
                <a href="#home" class="nav-link active">Accueil</a>
                <a href="{{ url('/catalogue') }}" class="nav-link">Catalogue</a>
                <a href="#categories" class="nav-link">Emprunt</a>
                <a href="#about" class="nav-link">Rétour</a>
            </div>

            <!-- Menu hamburger pour mobile -->
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- ===========================================
         SECTION HÉRO - ACCUEIL PRINCIPAL
         =========================================== -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content">
                <!-- Badge d'introduction -->
                <span class="hero-subtitle">Lire, apprendre, grandir</span>

                <!-- Titre principal -->
                <h1 class="hero-title">Bienvenue sur BookNet</h1>

                <!-- Description de la bibliothèque -->
                <p class="hero-description">
                    Découvrez des milliers de livres numériques et physiques. Empruntez ou réservez
                    vos ouvrages préférés gratuitement. Une bibliothèque universitaire moderne à votre service.
                </p>

                <!-- Boutons d'action principaux -->
                <div class="hero-buttons">
                    <a href="{{ url('/catalogue') }}" class="btn btn-primary">
                        <i class="fas fa-book"></i>
                        Explorer le catalogue
                    </a>
                    <a href="#about" class="btn btn-secondary">
                        En savoir plus
                    </a>
                </div>
            </div>

            <!-- Image illustrative -->
            <div class="hero-image">
                <div class="image-container">
                    <img src="{{ asset('images/accueill.jpeg') }}" alt="Femme lisant un livre" class="hero-img">
                    <div class="image-overlay"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===========================================
         SECTION AVANTAGES - ACCÈS RAPIDE
         =========================================== -->
    <section class="advantages">
        <div class="container">
            <div class="advantages-grid">
                <!-- Avantage 1: Accès gratuit -->
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Accès gratuit</h3>
                    <p>Empruntez gratuitement tous nos ouvrages. Aucun frais d'adhésion requis pour les étudiants.</p>
                </div>

                <!-- Avantage 2: Collection académique -->
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Collection académique</h3>
                    <p>Des ouvrages soigneusement sélectionnés pour répondre aux besoins éducatifs et de recherche.</p>
                </div>

                <!-- Avantage 3: Accessibilité -->
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Accessible partout</h3>
                    <p>Lisez vos livres sur tous vos appareils, où que vous soyez sur le campus.</p>
                </div>

                <!-- Avantage 4: Emprunt prolongé -->
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Emprunt prolongé</h3>
                    <p>Bénéficiez de délais d'emprunt étendus pour vos travaux de recherche et études.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===========================================
         SECTION LIVRES POPULAIRES
         =========================================== -->
    <section class="popular-books">
        <div class="container">
            <!-- En-tête de section -->
            <div class="section-header">
                <h2>Livres populaires</h2>
                <p>Découvrez les ouvrages les plus appréciés de nos lecteurs</p>
            </div>

            <!-- Grille des livres -->
            <div class="books-grid">
                <!-- Livre 1: Droit de l'image -->
                <div class="book-card">
                    <div class="book-image">
                        <img src="{{ asset('images/livre1.png') }}" alt="Droit de l'image">
                        <div class="book-badge">Nouveau</div>
                    </div>
                    <div class="book-info">
                        <h4>Droit de l'image</h4>
                        <p class="author">Joëlle Verbrugge</p>
                        <div class="rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <button class="btn-book">Consulter en ligne</button>
                    </div>
                </div>

                <!-- Livre 2: Algorithmique et algorithmes -->
                <div class="book-card">
                    <div class="book-image">
                        <img src="{{ asset('images/livre2.png') }}" alt="Algorithmique et algorithmes">
                    </div>
                    <div class="book-info">
                        <h4>Algorithmique et algorithmes</h4>
                        <p class="author">John P. Mueller</p>
                        <div class="rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <button class="btn-book">Emprunter</button>
                    </div>
                </div>

                <!-- Livre 3: La boussole dans les étoiles -->
                <div class="book-card">
                    <div class="book-image">
                        <img src="{{ asset('images/livre3.png') }}" alt="La boussole dans les étoiles">
                        <div class="book-badge">Populaire</div>
                    </div>
                    <div class="book-info">
                        <h4>La boussole dans les étoiles</h4>
                        <p class="author">Megara Nolhan</p>
                        <div class="rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-text">(4.2)</span>
                        </div>
                        <button class="btn-book">Consulter en ligne</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===========================================
         SECTION DOMAINES ACADÉMIQUES
         =========================================== -->
    <section class="categories" id="categories">
        <div class="container">
            <!-- En-tête de section -->
            <div class="section-header">
                <h2>Domaines académiques</h2>
                <p>Explorez notre collection par discipline universitaire</p>
            </div>

            <!-- Grille des catégories académiques -->
            <div class="categories-grid">
                <!-- Sciences -->
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-atom"></i>
                    </div>
                    <h3>Sciences</h3>
                    <p>Physique, chimie, biologie et astronomie</p>
                </div>

                <!-- Informatique -->
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Informatique</h3>
                    <p>Programmation, algorithmique et technologies</p>
                </div>

                <!-- Histoire & Droit -->
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3>Histoire & Droit</h3>
                    <p>Histoire, droit et sciences politiques</p>
                </div>

                <!-- Lettres & Langues -->
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <h3>Lettres & Langues</h3>
                    <p>Littérature, langues et sciences humaines</p>
                </div>

                <!-- Économie & Gestion -->
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Économie & Gestion</h3>
                    <p>Économie, management et sciences sociales</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===========================================
         SECTION CALL TO ACTION
         =========================================== -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <a href="#" class="btn btn-cta">
                    <i class="fas fa-id-card"></i>
                    S'inscrire à la bibliothèque
                </a>
            </div>
        </div>
    </section>

    <!-- ===========================================
         FOOTER - PIED DE PAGE
         =========================================== -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Section principale du footer -->
                <div class="footer-section">
                    <div class="footer-logo">
                        <i class="fas fa-book-open"></i>
                        <span>BookNet</span>
                    </div>
                    <p>Votre bibliothèque universitaire de confiance depuis 2026. Lire, apprendre, grandir ensemble dans un environnement académique.</p>

                    <!-- Réseaux sociaux -->
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Liens de navigation -->
                <div class="footer-section">
                    <h4>Explorer</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li><a href="{{ url('/catalogue') }}">Catalogue</a></li>
                        <li><a href="#categories">Domaines académiques</a></li>
                        <li><a href="#about">À propos</a></li>
                    </ul>
                </div>

                <!-- Catégories -->
                <div class="footer-section">
                    <h4>Disciplines</h4>
                    <ul>
                        <li><a href="#">Sciences</a></li>
                        <li><a href="#">Informatique</a></li>
                        <li><a href="#">Lettres</a></li>
                        <li><a href="#">Économie</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div class="footer-section">
                    <h4>Aide</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Conditions</a></li>
                    </ul>
                </div>

                <!-- Mon compte -->
                <div class="footer-section">
                    <h4>Mon compte</h4>
                    <ul>
                        <li><a href="#">Connexion</a></li>
                        <li><a href="#">Inscription</a></li>
                        <li><a href="#">Mes emprunts</a></li>
                        <li><a href="#">Historique</a></li>
                    </ul>
                </div>
            </div>

            <!-- Barre de copyright -->
            <div class="footer-bottom">
                <div class="footer-bottom-links">
                    <a href="#">Confidentialité</a>
                    <a href="#">Mentions légales</a>
                    <a href="#">CGU</a>
                </div>
                <p>&copy; 2026 BookNet - Bibliothèque Universitaire. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- ===========================================
         SCRIPTS JAVASCRIPT
         =========================================== -->
    <script>
        // ===========================================
        // FONCTIONNALITÉS JAVASCRIPT - GitHub Copilot
        // ===========================================

        // Gestion du menu hamburger
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Fermeture du menu au clic sur un lien
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

        // Scroll fluide pour les ancres
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // ===========================================
        // EFFETS VISUELS ET ANIMATIONS
        // ===========================================

        // Navbar - effet au scroll
        const navbar = document.querySelector('.navbar');
        let lastScrollY = window.scrollY;

        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;

            if (currentScrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            lastScrollY = currentScrollY;
        });

        // Animations d'entrée avec Intersection Observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Application des animations aux cartes
        document.querySelectorAll('.advantage-card, .book-card, .category-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(40px)';
            card.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
            observer.observe(card);
        });

        // ===========================================
        // EFFETS SPÉCIAUX AVANCÉS
        // ===========================================

        // Parallaxe pour l'image hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroImage = document.querySelector('.hero-image');
            if (heroImage) {
                heroImage.style.transform = `translateY(${scrolled * 0.2}px)`;
            }
        });

        // Effets de chargement sur les boutons
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                if (!this.classList.contains('btn-cta')) {
                    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Chargement...';
                    setTimeout(() => {
                        this.innerHTML = this.getAttribute('data-original-text') || 'Cliquez ici';
                    }, 2000);
                }
            });
        });

        // Sauvegarde du texte original des boutons
        document.querySelectorAll('.btn').forEach(btn => {
            btn.setAttribute('data-original-text', btn.innerHTML);
        });

        // ===========================================
        // EFFETS DE SURVOL INTERACTIFS
        // ===========================================

        // Effet ripple sur les boutons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function (e) {
                const ripple = document.createElement('span');
                ripple.className = 'ripple';
                this.appendChild(ripple);

                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;

                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // CSS pour l'effet ripple
        const style = document.createElement('style');
        style.textContent = `
            .ripple {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.4);
                transform: scale(0);
                animation: ripple-animation 0.6s linear;
                pointer-events: none;
            }

 feature/accueil
            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // ===========================================
        // EFFETS SPÉCIAUX ET AMBIANCE
        // ===========================================

        // Particules flottantes subtiles
        function createParticles() {
            const hero = document.querySelector('.hero');
            if (!hero) return;

            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
                hero.appendChild(particle);
            }
        }

        // CSS pour les particules
        const particleStyle = document.createElement('style');
        particleStyle.textContent = `
            .particle {
                position: absolute;
                width: 4px;
                height: 4px;
                background: rgba(20, 184, 166, 0.1);
                border-radius: 50%;
                pointer-events: none;
                animation: float-particle linear infinite;
                top: 100%;
            }

            @keyframes float-particle {
                0% { transform: translateY(0) rotate(0deg); opacity: 0; }
                10% { opacity: 1; }
                90% { opacity: 1; }
                100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
            }
        `;
        document.head.appendChild(particleStyle);

        // Initialisation des particules
        setTimeout(createParticles, 2000);

        // ===========================================
        // EFFETS MAGNÉTIQUES ET INTERACTIFS
        // ===========================================

        // Effet magnétique sur les icônes
        document.querySelectorAll('.icon-btn, .advantage-icon, .category-icon').forEach(icon => {
            icon.addEventListener('mousemove', (e) => {
                const rect = icon.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;

                icon.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.05)`;
            });

            icon.addEventListener('mouseleave', () => {
                icon.style.transform = 'translate(0, 0) scale(1)';
            });
        });

        // ===========================================
        // BARRE DE PROGRESSION DE SCROLL
        // ===========================================

        // Indicateur de progression du scroll
        const progressBar = document.createElement('div');
        progressBar.className = 'scroll-progress';
        document.body.appendChild(progressBar);

        const progressStyle = document.createElement('style');
        progressStyle.textContent = `
            .scroll-progress {
                position: fixed;
                top: 0;
                left: 0;
                width: 0%;
                height: 3px;
                background: linear-gradient(90deg, #14b8a6, #0f766e);
                z-index: 1001;
                transition: width 0.3s ease;
            }
        `;
        document.head.appendChild(progressStyle);

        window.addEventListener('scroll', () => {
            const scrolled = (window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            progressBar.style.width = scrolled + '%';
        });

        // ===========================================
        // MODE SOMBRE (OPTIONNEL)
        // ===========================================

        // Bouton de mode sombre
        const darkModeToggle = document.createElement('button');
        darkModeToggle.innerHTML = '<i class="fas fa-moon"></i>';
        darkModeToggle.className = 'dark-mode-toggle';
        darkModeToggle.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #14b8a6, #0f766e);
            color: white;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(20, 184, 166, 0.3);
            z-index: 1000;
            transition: all 0.3s ease;
        `;
        document.body.appendChild(darkModeToggle);

        darkModeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            darkModeToggle.innerHTML = document.body.classList.contains('dark-mode')
                ? '<i class="fas fa-sun"></i>'
                : '<i class="fas fa-moon"></i>';
        });

        // Styles pour le mode sombre
        const darkModeStyle = document.createElement('style');
        darkModeStyle.textContent = `
            .dark-mode {
                background: #0f172a !important;
                color: #e2e8f0 !important;
            }

            .dark-mode .navbar,
            .dark-mode .advantage-card,
            .dark-mode .book-card,
            .dark-mode .category-card {
                background: rgba(30, 41, 59, 0.9) !important;
                backdrop-filter: blur(20px) !important;
                border-color: rgba(20, 184, 166, 0.2) !important;
            }

            .dark-mode .hero {
                background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%) !important;
            }

            .dark-mode .popular-books,
            .dark-mode .categories {
                background: #0f172a !important;
            }

            .dark-mode h2, .dark-mode h3, .dark-mode h4 {
                color: #f1f5f9 !important;
            }

            .dark-mode p, .dark-mode .author, .dark-mode .rating-text {
                color: #cbd5e1 !important;
            }
        `;
        document.head.appendChild(darkModeStyle);

        // ===========================================
        // FIN DES FONCTIONNALITÉS JAVASCRIPT
        // Créé par GitHub Copilot - Avril 2026
        // ===========================================
    </script>


</body>
</html>
</html>