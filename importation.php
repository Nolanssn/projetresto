<?php
session_start();


// Vérifier si l'utilisateur est connecté en tant qu'administrateur
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'administrateur') {
    header("Location: ../authentification/login.php");
    exit();
}

// À ce stade, vous pouvez mettre en œuvre le code d'importation des étudiants depuis un fichier CSV
// (Cela nécessite des fonctions spécifiques de la classe EtudiantModel)

// Exemple de code d'importation pour la démonstration
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fichier_csv'])) {
    $fichier_csv = $_FILES['fichier_csv'];

    // Traitement de l'importation (vous devrez mettre en œuvre la logique réelle ici)
    // Utilisez des fonctions spécifiques de la classe EtudiantModel pour mettre à jour la base de données

    $message_importation = "Importation réussie!";
}

?>

<div class="container">
    <h2>Importation des Étudiants</h2>

    <?php if (isset($message_importation)) : ?>
        <div class="alert alert-success" role="alert">
            <?= $message_importation; ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="fichier_csv" class="form-label">Sélectionnez un fichier CSV</label>
            <input type="file" class="form-control" id="fichier_csv" name="fichier_csv" accept=".csv" required>
        </div>
        <button type="submit" class="btn btn-primary">Importer Étudiants</button>
    </form>
</div>


