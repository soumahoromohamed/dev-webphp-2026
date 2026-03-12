<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Muls</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header>
    <h1>Table de multiplication de 0 à 10</h1>
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
        <h2>Tables de multiplication de 0 à 10</h2>

        <div class="cards-container" style="display:flex; flex-wrap: wrap; gap: 20px;">
            <?php
            $maxTable = 10;
            $cols = 4; // nombre de cartes par ligne

            for ($table = 0; $table <= $maxTable; $table++) {
                echo '<article class="card" style="flex: 1 1 calc(25% - 20px); padding: 15px; border: 1px solid #ccc; border-radius: 10px; background:#f9f9f9; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">';
                echo "<h3>Table de $table</h3>";
                echo "<p>";
                for ($i = 0; $i <= 10; $i++) {
                    echo "$table x $i = " . ($table * $i) . "<br>";
                }
                echo "</p>";
                echo "</article>";
            }
            ?>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2026 - Étudiant JM2</p>
    <p>Powered by Soumahoro</p>
</footer>

</body>
</html>