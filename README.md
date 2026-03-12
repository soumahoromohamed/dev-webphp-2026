# TP HTML / CSS

## 📌 Objectif

Ce projet a pour objectif de produire une interface web propre et structurée en HTML & CSS et PHP.  
Elle servira de base aux futurs travaux pratiques en PHP (formulaires, confirmation, eau, mois, mul, muls).

---

## 📂 Structure du projet

dev-webphp-2026/

- index.php
- pages/
  - formulaire.php
  - confirmation.php
  - eau.php
  - mois.php
  - mul.php
  - muls.php
- assets/
  - css/
    - style.css
  - img/ (optionnel)
- README.md

---


---

## 🧱 Choix réalisés

- Utilisation des balises sémantiques : "header", "main", "footer", "section", "article" 
- Feuille de style unique ( style.css ) pour tout le site  
- Utilisation de **Flexbox et Grid** pour la mise en page responsive  
- Palette simple : dégradé violet/rose, blanc, gris clair  
- Formulaire complet avec attributs `name` et `required`  
- Messages de confirmation centrés et stylés après soumission  
- Tables de multiplication affichées sous forme de cards  
- Structure claire et réutilisable pour PHP  

---

## 🖌️ Pages et fonctionnalités

### 1️⃣ index.php – Accueil

- Page d’accueil du projet  
- Présente le projet, l’étudiant et le TP JM2  
- Bouton pour accéder directement au formulaire  
- Section “Features” avec **5 cartes** menant aux pages : Formulaire, État de l’eau, Mois, Mul, Muls  

### 2️⃣ formulaire.php – Formulaire

- Permet de remplir un formulaire avec différents champs  
- Validation côté serveur avec attributs "name" et "required" 
- Bouton d’envoi utilisant la méthode POST  
- Redirection vers "confirmation.php" après envoi  

### 3️⃣ confirmation.php – Confirmation

- Affiche un message de confirmation après l’envoi du formulaire  
- Message centré et stylé, avec "Merci ! Votre formulaire a bien été envoyé."  

### 4️⃣ eau.php – État de l’eau

- Détermine l’état de l’eau en fonction d’une température  
- Affichage dynamique : glace, froide, chaude, brûlante ou vapeur  

### 5️⃣ mois.php – Mois

- Affiche le nombre de jours de chaque mois de l’année  
- Utilisation d’une boucle PHP pour afficher dynamiquement les résultats  

### 6️⃣ mul.php – Mul

- Affiche la **table de multiplication de 4**  
- Mise en page avec cards stylées et responsive  

### 7️⃣ muls.php – Muls

- Affiche les **tables de multiplication de 0 à 10**  
- Cards flexibles et responsive  

---

## ▶️ Instructions d'exécution

1. Ouvrir le dossier "dev-webphp-2026"  
2. Lancer un **serveur local PHP** (avec XAMPP pour Macbook ou WAMPSERVER avec Windows )  
3. Accéder à "index.php" dans un navigateur  
4. Utiliser le menu pour naviguer entre les pages  
5. Les formulaires doivent être soumis via POST pour afficher la page de confirmation  

---

## 👨‍💻 Technologies utilisées

- HTML5  
- CSS3 (Flexbox, Grid, dégradés, animations)  
- PHP (POST, affichage dynamique, validation)  

---

Projet réalisé dans le cadre du **TP HTML/CSS & PHP 2026**, intégrant des pages dynamiques, un formulaire avec confirmation et des tables de multiplication stylées.