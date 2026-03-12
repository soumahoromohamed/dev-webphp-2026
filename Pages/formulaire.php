<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire - TP HTML/CSS</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header>
    <h1>Formulaire d'inscription</h1>
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

<main>

    <section class="form-section">
        <div class="form-card">
            <h2>Remplissez le formulaire</h2>

            <form action="confirmation.php" method="post">

                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="age">Âge</label>
                    <input type="number" id="age" name="age" min="1" required>
                </div>

                <div class="form-group">
                    <label for="niveau">Niveau d'étude</label>
                    <select id="niveau" name="niveau" required>
                        <option value="">-- Choisissez --</option>
                        <option value="licence">Licence</option>
                        <option value="master">Master</option>
                        <option value="ingenieur">Ingénieur</option>
                    </select>
                </div>

                <div class="form-group">
                    <p class="group-title">Genre</p>
                    <div class="inline-group">
                        <input type="radio" id="homme" name="genre" value="homme" required>
                        <label for="homme">Homme</label>

                        <input type="radio" id="femme" name="genre" value="femme">
                        <label for="femme">Femme</label>
                    </div>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" id="conditions" name="conditions" required>
                    <label for="conditions">J'accepte les conditions</label>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4"></textarea>
                </div>

                <button type="submit" class="btn form-btn">Envoyer</button>

            </form>
        </div>
    </section>

</main>

<footer>
    <p>&copy; 2026 - Étudiant JM2</p>
    <p>Powered by Soumahoro</p>
</footer>

</body>
</html>