<?php
// --- 1. GESTION DU PANIER (Toujours AVANT le HTML) ---

// On récupère le panier existant ou on crée un tableau vide s'il n'existe pas
if (isset($_COOKIE['cart'])) {
    $panier = json_decode($_COOKIE['cart'], true);
} else {
    $panier = [];
}

// On vérifie si l'utilisateur a cliqué sur un bouton "Ajouter"
if (isset($_GET['action']) && $_GET['action'] === 'ajouter' && isset($_GET['produit'])) {
    
    $nouveau_produit = $_GET['produit']; // Exemple : "Appareil Photo" ou "Livre"
    
    // On ajoute le produit dans notre tableau PHP
    $panier[] = $nouveau_produit;
    
    // On sauvegarde le tableau mis à jour dans le cookie (valable 1 heure)
    setcookie('cart', json_encode($panier), time() + 3600, '/');
    
    // ÉTAPE CRUCIALE : On redirige immédiatement sur la même page pour nettoyer l'URL.
    // Cela évite que le produit soit réajouté si l'utilisateur rafraîchit la page (F5).
    header('Location: panier.php');
    exit();
}

// On vérifie si l'utilisateur veut vider le panier
if (isset($_GET['action']) && $_GET['action'] === 'vider') {
    setcookie('cart', '', time() - 3600, '/'); // Supprime le cookie
    header('Location: panier.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice Panier PHP</title>
</head>
<body>

    <h1>Mon Magasin PHP</h1>
    
    <!-- Liens pour simuler l'ajout de produits -->
    <ul>
        <li><a href="panier.php?action=ajouter&produit=Appareil+Photo">Ajouter un Appareil Photo</a></li>
        <li><a href="panier.php?action=ajouter&produit=Livre+PHP">Ajouter un Livre PHP</a></li>
        <li><a href="panier.php?action=ajouter&produit=Cafetiere">Ajouter une Cafetière</a></li>
    </ul>

    <hr>

    <h2>Contenu de votre panier :</h2>
    
    <?php if (!empty($panier)): ?>
        <ul>
            <?php foreach ($panier as $article): ?>
                <li><?php echo htmlspecialchars($article); ?></li>
            <?php endforeach; ?>
        </ul>
        <p><a href="panier.php?action=vider">🗑️ Vider le panier</a></p>
    <?php else: ?>
        <p>Votre panier est vide pour le moment.</p>
    <?php endif; ?>

</body>
</html>
