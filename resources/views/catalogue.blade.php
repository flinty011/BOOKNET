<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNet - Catalogue</title>
    <link rel="stylesheet" href="{{ asset('css/catalogue.css') }}">
</head>
<body>

<!-- HEADER -->
<header>
    <div class="logo">📚 BookNet</div>
    <nav id="nav-menu">
        <a href="{{ url('/') }}">Accueil</a>
        <a href="{{ url('/catalogue') }}">Catalogue</a>
        <a href="{{ url('/emprunt') }}">Emprunt</a>
        <a href="{{ url('/retour') }}">Retour</a>
    </nav>
    <div class="menu-toggle" id="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

<!-- HERO SECTION -->
<section class="hero">
    <h1>Parcourir notre collection</h1>
    <h2>Découvrez nos meilleurs livres</h2>
    <div class="search-bar">
        <input type="text" placeholder="Rechercher des livres...">
        <button type="submit">Rechercher</button>
    </div>
</section>

<!-- MAIN CONTENT -->
<div class="main-content">
    <!-- SIDEBAR -->
    <aside class="sidebar">
        <h3>Catégories</h3>
        <ul>
            <li><a href="#">Informatique</a></li>
            <li><a href="#">Mathématiques</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">Littérature</a></li>
        </ul>
    </aside>

    <!-- BOOKS GRID -->
    <section class="books-grid">
        <div class="book-card">
            <div class="book-image-container">
                <img src="{{ asset('images/livre1.png') }}" alt="Droit de l'image">
                <div class="availability-badge available">Disponible</div>
            </div>
            <div class="book-info">
                <h4>Droit de l'image</h4>
                <p class="author">Joëlle Verbrugge</p>
                <div class="rating">
                    <span class="stars">★★★★☆</span>
                    <span class="rating-text">(4.2)</span>
                </div>
                <p class="details">Droit • 2015 • 180 pages</p>
                <p class="publisher">Éditions Larcier • ISBN: 978-2-8044-1234-5</p>
            </div>
            <div class="card-actions">
                <button class="btn-details">📖 Voir détails</button>
                <button class="btn-borrow">📚 Emprunter</button>
            </div>
        </div>

        <div class="book-card">
            <div class="book-image-container">
                <img src="{{ asset('images/livre2.png') }}" alt="Algorithmique et algorithmes">
                <div class="availability-badge available">Disponible</div>
            </div>
            <div class="book-info">
                <h4>Algorithmique et algorithmes</h4>
                <p class="author">John P. Mueller</p>
                <div class="rating">
                    <span class="stars">★★★★★</span>
                    <span class="rating-text">(4.8)</span>
                </div>
                <p class="details">Informatique • 2016 • 320 pages</p>
                <p class="publisher">Dunod • ISBN: 978-2-10-074567-8</p>
            </div>
            <div class="card-actions">
                <button class="btn-details">📖 Voir détails</button>
                <button class="btn-borrow">📚 Emprunter</button>
            </div>
        </div>

        <div class="book-card">
            <div class="book-image-container">
                <img src="{{ asset('images/livre3.png') }}" alt="La boussole dans les étoiles">
                <div class="availability-badge borrowed">Emprunté</div>
            </div>
            <div class="book-info">
                <h4>La boussole dans les étoiles</h4>
                <p class="author">Megara Nolhan</p>
                <div class="rating">
                    <span class="stars">★★★★☆</span>
                    <span class="rating-text">(4.5)</span>
                </div>
                <p class="details">Science-fiction • 2022 • 280 pages</p>
                <p class="publisher">Gallimard • ISBN: 978-2-07-289876-3</p>
            </div>
            <div class="card-actions">
                <button class="btn-details">📖 Voir détails</button>
                <button class="btn-reserve">⏰ Réserver</button>
            </div>
        </div>

        <div class="book-card">
            <div class="book-image-container">
                <img src="{{ asset('images/livre4.png') }}" alt="Pride and Prejudice">
                <div class="availability-badge available">Disponible</div>
            </div>
            <div class="book-info">
                <h4>Pride and Prejudice</h4>
                <p class="author">Jane Austen</p>
                <div class="rating">
                    <span class="stars">★★★★★</span>
                    <span class="rating-text">(4.9)</span>
                </div>
                <p class="details">Roman classique • 1813 • 432 pages</p>
                <p class="publisher">Penguin Classics • ISBN: 978-0-14-143951-8</p>
            </div>
            <div class="card-actions">
                <button class="btn-details">📖 Voir détails</button>
                <button class="btn-borrow">📚 Emprunter</button>
            </div>
        </div>

        <div class="book-card">
            <div class="book-image-container">
                <img src="{{ asset('images/livre5.png') }}" alt="L'homme et ses symboles">
                <div class="availability-badge available">Disponible</div>
            </div>
            <div class="book-info">
                <h4>L'homme et ses symboles</h4>
                <p class="author">Carl Gustav Jung</p>
                <div class="rating">
                    <span class="stars">★★★★☆</span>
                    <span class="rating-text">(4.3)</span>
                </div>
                <p class="details">Psychologie • 1964 • 320 pages</p>
                <p class="publisher">Albin Michel • ISBN: 978-2-226-06745-1</p>
            </div>
            <div class="card-actions">
                <button class="btn-details">📖 Voir détails</button>
                <button class="btn-borrow">📚 Emprunter</button>
            </div>
        </div>

        <div class="book-card">
            <div class="book-image-container">
                <img src="{{ asset('images/livre6.png') }}" alt="Bases de données">
                <div class="availability-badge available">Disponible</div>
            </div>
            <div class="book-info">
                <h4>Bases de données</h4>
                <p class="author">Philippe Rigaux</p>
                <div class="rating">
                    <span class="stars">★★★★☆</span>
                    <span class="rating-text">(4.1)</span>
                </div>
                <p class="details">Informatique • 2018 • 450 pages</p>
                <p class="publisher">Dunod • ISBN: 978-2-10-078901-2</p>
            </div>
            <div class="card-actions">
                <button class="btn-details">📖 Voir détails</button>
                <button class="btn-borrow">📚 Emprunter</button>
            </div>
        </div>

        <div class="book-card">
            <div class="book-image-container">
                <img src="{{ asset('images/livre1.png') }}" alt="Le Petit Prince">
                <div class="availability-badge available">Disponible</div>
            </div>
            <div class="book-info">
                <h4>Le Petit Prince</h4>
                <p class="author">Antoine de Saint-Exupéry</p>
                <div class="rating">
                    <span class="stars">★★★★★</span>
                    <span class="rating-text">(4.7)</span>
                </div>
                <p class="details">Littérature jeunesse • 1943 • 96 pages</p>
                <p class="publisher">Gallimard • ISBN: 978-2-07-061275-8</p>
            </div>
            <div class="card-actions">
                <button class="btn-details">📖 Voir détails</button>
                <button class="btn-borrow">📚 Emprunter</button>
            </div>
        </div>

        <div class="book-card">
            <div class="book-image-container">
                <img src="{{ asset('images/livre2.png') }}" alt="Calcul différentiel">
                <div class="availability-badge borrowed">Emprunté</div>
            </div>
            <div class="book-info">
                <h4>Calcul différentiel</h4>
                <p class="author">Marie Curie</p>
                <div class="rating">
                    <span class="stars">★★★☆☆</span>
                    <span class="rating-text">(3.5)</span>
                </div>
                <p class="details">Mathématiques • 1920 • 280 pages</p>
                <p class="publisher">Presses Universitaires • ISBN: 978-2-13-056789-4</p>
            </div>
            <div class="card-actions">
                <button class="btn-details">📖 Voir détails</button>
                <button class="btn-reserve">⏰ Réserver</button>
            </div>
        </div>
    </section>
</div>

<!-- FOOTER -->
<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h3>📚 BookNet</h3>
            <p>Votre bibliothèque numérique de confiance. Découvrez des milliers de livres et empruntez facilement.</p>
            <div class="social-links">
                <a href="#" class="social-link">📘 Facebook</a>
                <a href="#" class="social-link">🐦 Twitter</a>
                <a href="#" class="social-link">📷 Instagram</a>
                <a href="#" class="social-link">💼 LinkedIn</a>
            </div>
        </div>

        <div class="footer-section">
            <h4>Liens Rapides</h4>
            <ul>
                <li><a href="{{ url('/') }}">🏠 Accueil</a></li>
                <li><a href="{{ url('/catalogue') }}">📚 Catalogue</a></li>
                <li><a href="{{ url('/emprunt') }}">📖 Mes Emprunts</a></li>
                <li><a href="{{ url('/retour') }}">↩️ Retours</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Catégories</h4>
            <ul>
                <li><a href="#">📖 Littérature</a></li>
                <li><a href="#">🔬 Science</a></li>
                <li><a href="#">💻 Informatique</a></li>
                <li><a href="#">📜 Histoire</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Contact</h4>
            <ul>
                <li>📧 contact@booknet.com</li>
                <li>📞 +223 77 08 09 07</li>
                <li>📍 Bamako, Mali</li>
                <li>🕒 Lun-Ven: 9h-00h</li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-content">
            <p>&copy; 2026 BookNet. Tous droits réservés.</p>
            <div class="footer-links">
                <a href="#">Politique de confidentialité</a>
                <a href="#">Conditions d'utilisation</a>
                <a href="#">Mentions légales</a>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');
    const header = document.querySelector('header');

    menuToggle.addEventListener('click', function() {
        menuToggle.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Fermer le menu quand on clique sur un lien
    const navLinks = navMenu.querySelectorAll('a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            menuToggle.classList.remove('active');
            navMenu.classList.remove('active');
        });
    });

    // Fermer le menu quand on clique en dehors
    document.addEventListener('click', function(event) {
        if (!header.contains(event.target)) {
            menuToggle.classList.remove('active');
            navMenu.classList.remove('active');
        }
    });
});
</script>

</body>
</html>