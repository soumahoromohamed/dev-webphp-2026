<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - TP HTML/CSS</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header>
    <h1>TP HTML & CSS</h1>

    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Pages/formulaire.php">Formulaire</a></li>
            <li><a href="Pages/eau.php">Eau</a></li>
            <li><a href="Pages/mois.php">Mois</a></li>
            <li><a href="Pages/mul.php">Mul</a></li>
            <li><a href="Pages/muls.php">Muls</a></li>
        </ul>
    </nav>

</header>

<main class="container">

<section class="hero">
    <div class="hero-content">
        <h2>Bienvenue sur notre site</h2>

        <p>
            Ce projet constitue la base des futurs TP PHP.
            Ce projet est realisé par l'étudiant Soumahoro pour le cours de JM2
            sous la supervision de MR HADAFA
        </p>

        <a href="Pages/formulaire.php" class="btn">Accéder au formulaire</a>
    </div>
</section>

<section class="features">

    <div class="card">
        <h3>Formulaire</h3>
        <p>Accéder au formulaire PHP.</p>
    </div>

    <div class="card">
        <h3>Etat de l'eau</h3>
        <p>Programme permettant de déterminer l'état de l'eau.</p>
    </div>

    <div class="card">
        <h3>Mois</h3>
        <p>Affichage des nombres de jours des mois de l'année.</p>
    </div>

    <div class="card">
        <h3>Mul</h3>
        <p>Affichage de la table de multiplication de 4.</p>
    </div>

    <div class="card">
        <h3>Muls</h3>
        <p>Affichage des tables de multiplication de 0 à 10.</p>
    </div>

</section>

</main>

<footer>
    <p>&copy; 2026 - Étudiant JM2</p>
    <p>Powered by Soumahoro</p>
</footer>

</body>
</html>