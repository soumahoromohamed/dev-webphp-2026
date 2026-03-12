<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mois</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header>
    <h1>Mois</h1>
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
        <h2>Nombre de jours</h2>
        <?php

          $mois = 2;
          $annee = 2000;
          switch($mois){
              case 4:
              case 6:
              case 9:
             case 11:
                  echo "Le mois $mois de l'année $annee compte 30 jours"; break;
             case 2:
                  if ($annee %4 == 0){
                     echo "Le mois 2 de l'année $annee compte 29 jours";
                  }else{
                      echo "Le mois 2 de l'année $annee compte 28 jours";
                  }
                      break;
             default:
              echo "Le mois $mois de l'année $annee compte 31 jours";
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
