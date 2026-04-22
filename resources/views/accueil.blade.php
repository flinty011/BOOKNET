<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
    <title>accueil</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
</head>

<body>

<header>
    <div class="logo">
        📖 <span>BOOK</span><b>NET</b>
    </div>

    <nav>
        <a href="/">Accueil</a>
        <a href="/catalogue">Catalogue</a>
        <a href="/emprunts">Emprunts</a>
        <a href="/retours">Retours</a>
        <a href="/contact">Contact</a>
    </nav>

    <a href="/login" class="login-btn">Se connecter</a>
</header>

<section class="hero">
    <div class="hero-text">

        <h1>Bienvenue sur <span>BOOK</span><b>NET</b></h1>

        <p>Votre bibliothèque universitaire, à portée de clic.</p>

        <p class="desc">
            Gérez, empruntez et retournez vos livres facilement et rapidement.
        </p>

        <div class="buttons">
            <a href="/catalogue" class="catalogue">Voir le catalogue</a>
            <a href="/login" class="connect">Se connecter</a>
        </div>

        <div class="stats">

            <div class="card">
                <h3>20,450</h3>
                <p>Livres disponibles</p>
            </div>

            <div class="card">
                <h3>3,820</h3>
                <p>Emprunts actifs</p>
            </div>

            <div class="card">
                <h3>1,250</h3>
                <p>Étudiants inscrits</p>
            </div>

        </div>

    </div> <!-- hero-text -->
</section>

</body>
</html>
</html>