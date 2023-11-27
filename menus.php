<?php
session_start();


// Vérifier si l'utilisateur est connecté en tant que gestionnaire
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'gestionnaire') {
    header("Location: ../authentification/login.php");
    exit();
}

// À ce stade, vous pouvez récupérer les menus depuis la base de données
// (Cela nécessite des fonctions spécifiques de la classe MenuModel)

// Exemple de données statiques pour la démonstration
$menus = [
    ['id' => 1, 'nom' => 'Menu 1', 'quantite' => 10],
    ['id' => 2, 'nom' => 'Menu 2', 'quantite' => 8],
    ['id' => 3, 'nom' => 'Menu 3', 'quantite' => 5],
];

?>

<div class="container">
    <h2>Gestion des Menus</h2>

    <!-- Affichage de la liste des menus -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Menu</th>
                <th>Quantité Disponible</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menus as $menu) : ?>
                <tr>
                    <td><?= $menu['id']; ?></td>
                    <td><?= $menu['nom']; ?></td>
                    <td><?= $menu['quantite']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Formulaire pour ajouter un nouveau menu -->
    <h3>Ajouter un Nouveau Menu</h3>
    <form method="POST" action="ajouter_menu.php">
        <div class="mb-3">
            <label for="nom_menu" class="form-label">Nom du Menu</label>
            <input type="text" class="form-control" id="nom_menu" name="nom_menu" required>
        </div>
        <div class="mb-3">
            <label for="quantite_menu" class="form-label">Quantité Disponible</label>
            <input type="number" class="form-control" id="quantite_menu" name="quantite_menu" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter Menu</button>
    </form>
</div>

<?php require_once '../includes/footer.php'; ?>

