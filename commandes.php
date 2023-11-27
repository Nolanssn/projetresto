<?php
session_start();


// Vérifier si l'utilisateur est connecté en tant que gestionnaire
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'gestionnaire') {
    header("Location: ../authentification/login.php");
    exit();
}

// À ce stade, vous pouvez récupérer les commandes du jour depuis la base de données
// (Cela nécessite des fonctions spécifiques de la classe CommandeModel)

// Exemple de données statiques pour la démonstration
$commandes = [
    ['id' => 1, 'nom_menu' => 'Menu 1', 'quantite' => 2, 'total' => 15.00],
    ['id' => 2, 'nom_menu' => 'Menu 2', 'quantite' => 1, 'total' => 8.50],
    ['id' => 3, 'nom_menu' => 'Menu 3', 'quantite' => 3, 'total' => 22.50],
];

?>

<div class="container">
    <h2>Gestion des Commandes</h2>

    <!-- Affichage des commandes du jour -->
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
            <?php foreach ($commandes as $commande) : ?>
                <tr>
                    <td><?= $commande['id']; ?></td>
                    <td><?= $commande['nom_menu']; ?></td>
                    <td><?= $commande['quantite']; ?></td>
                    <td><?= $commande['total']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Formulaire pour encaisser une commande -->
    <h3>Encaisser une Commande</h3>
    <form method="POST" action="encaisser_commande.php">
        <div class="mb-3">
            <label for="id_commande" class="form-label">ID de la Commande</label>
            <input type="number" class="form-control" id="id_commande" name="id_commande" required>
        </div>
        <button type="submit" class="btn btn-success">Encaisser Commande</button>
    </form>
</div>

<?php require_once '../includes/footer.php'; ?>
