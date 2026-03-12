<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>

    <!-- Police -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<header>
    <h1>Confirmation</h1>

    <nav>
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="formulaire.php">Formulaire</a></li>
            <li><a href="eau.php">Eau</a></li>
            <li><a href="mois.php">Mois</a></li>
            <li><a href="mul.php">Mul</a></li>
            <li><a href="muls.php">Muls</a></li>
        </ul>
    </nav>
</header>

<main class="container">
    <section>

     <h2>Merci !</h2>

     <?php

     if ($_SERVER["REQUEST_METHOD"] == "POST") {

     echo "<p>Votre formulaire a bien été envoyé.</p>";

     } else {

     echo "<p>Vous devez remplir le formulaire pour voir cette page.</p>";

     }

     ?>

     </section>
</main>

<footer>
    <p>&copy; 2026 - Étudiant JM2</p>
    <p>Powered by Soumahoro</p>
</footer>

</body>
</html>