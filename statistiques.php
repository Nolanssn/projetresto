<?php
session_start();


// Vérifier si l'utilisateur est connecté en tant que gestionnaire
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'gestionnaire') {
    header("Location: ../authentification/login.php");
    exit();
}

// À ce stade, vous pouvez récupérer les données statistiques depuis la base de données
// (Cela nécessite des fonctions spécifiques de la classe StatistiquesModel)

// Exemple de données statiques pour la démonstration
$statistiques = [
    'commandes_total' => 50,
    'revenu_total' => 450.00,
    'menu_populaire' => 'Menu 1',
];

?>

<div class="container">
    <h2>Statistiques de Fin du Service</h2>

    <ul>
        <li>Nombre total de commandes : <?= $statistiques['commandes_total']; ?></li>
        <li>Revenu total : <?= $statistiques['revenu_total']; ?> €</li>
        <li>Menu le plus populaire : <?= $statistiques['menu_populaire']; ?></li>
    </ul>
</div>

<?php require_once '../includes/footer.php'; ?>
