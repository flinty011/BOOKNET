<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
    <title>accueil</title>
</head>
<body>

<header>

<div class="logo">
📖 <span>BOOK</span><b>NET</b>
</div>

<nav>
<a href="#">Accueil</a>
<a href="#">Catalogue</a>
<a href="#">Emprunts</a>
<a href="#">Retours</a>
<a href="#">Contact</a>
</nav>

<button class="login"><a href="/login">Se connecter</a></button>

</header>


<section class="hero">

<div class="hero-text">

<h1>Bienvenue sur <span>BOOK</span><b>NET</b></h1>

<p>Votre bibliothèque universitaire, à portée de clic.</p>

<p class="desc">
Gérez, empruntez et retournez vos livres facilement et rapidement.
</p><br>

<div class="buttons">

<a href="#" class="catalogue">Voir le catalogue</a>

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

</div>




</section>

</body>
</html>