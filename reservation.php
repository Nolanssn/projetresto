<?php
session_start();


// Vérifier si l'utilisateur est connecté en tant qu'étudiant
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'etudiant') {
    header("Location: ../authentification/login.php");
    exit();
}

// À ce stade, vous pouvez récupérer la liste des menus disponibles depuis la base de données
// (Cela nécessite des fonctions spécifiques de la classe MenuModel)

// Exemple de données statiques pour la démonstration
$menus_disponibles = [
    ['id' => 1, 'nom' => 'Menu 1', 'quantite_disponible' => 5],
    ['id' => 2, 'nom' => 'Menu 2', 'quantite_disponible' => 8],
    ['id' => 3, 'nom' => 'Menu 3', 'quantite_disponible' => 10],
];

?>

<div class="container">
    <h2>Réservation de Repas</h2>

    <!-- Affichage des menus disponibles -->
    <form method="POST" action="valider_reservation.php">
        <div class="mb-3">
            <label for="menu_id" class="form-label">Sélectionnez un Menu</label>
            <select class="form-select" id="menu_id" name="menu_id" required>
                <?php foreach ($menus_disponibles as $menu) : ?>
                    <option value="<?= $menu['id']; ?>">
                        <?= $menu['nom']; ?> (<?= $menu['quantite_disponible']; ?> disponibles)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="quantite" class="form-label">Quantité souhaitée</label>
            <input type="number" class="form-control" id="quantite" name="quantite" required>
        </div>
        <button type="submit" class="btn btn-primary">Valider la Réservation</button>
    </form>
</div>


