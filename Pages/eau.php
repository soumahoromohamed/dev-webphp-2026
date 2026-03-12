<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>eau</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header>
    <h1>Etat de l'eau</h1>
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
        <h2>Etat de l'eau</h2>
        <?php

        $temperature = 50;

        if ($temperature<0){
            echo "À $temperature degrés, la glace";
        }else if ($temperature>=0 && $temperature<25){
            echo "À $temperature degrés, froide";
        }else if ($temperature>=25 && $temperature<50){
            echo "À $temperature degrés, chaude";
        }else if ($temperature>=50 && $temperature<100){
            echo "À $temperature degrés, brûlante";    
        }else{
            echo "À $temperature degrés, vapeur";
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
