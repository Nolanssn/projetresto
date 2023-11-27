<?php
session_start();


// Vérifier si l'utilisateur est connecté en tant qu'étudiant
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'etudiant') {
    header("Location: ../authentification/login.php");
    exit();
}

// À ce stade, vous pouvez récupérer l'historique des commandes de l'étudiant depuis la base de données
// (Cela nécessite des fonctions spécifiques de la classe CommandeModel)

// Exemple de données statiques pour la démonstration
$historique_commandes = [
    ['id' => 1, 'nom_menu' => 'Menu 1', 'quantite' => 2, 'total' => 15.00],
    ['id' => 2, 'nom_menu' => 'Menu 2', 'quantite' => 1, 'total' => 8.50],
    ['id' => 3, 'nom_menu' => 'Menu 3', 'quantite' => 3, 'total' => 22.50],
];

?>

<div class="container">
    <h2>Historique des Commandes</h2>

    <!-- Affichage de l'historique des commandes -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Menu</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($historique_commandes as $commande) : ?>
                <tr>
                    <td><?= $commande['id']; ?></td>
                    <td><?= $commande['nom_menu']; ?></td>
                    <td><?= $commande['quantite']; ?></td>
                    <td><?= $commande['total']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


