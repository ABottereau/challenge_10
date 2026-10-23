<?php 
echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
    <title></title>
</head>
<body>
    <header>
        <div class=\"title\">
            <h1>The Library Factory</h1>
        </div>
            <nav class=\"nav\">
                <ul class=\"nav-item-container\">
                    <a class=\"nav-item\" href=\"index.php\">Accueil</a>";
                    if (!empty($_SESSION['userName'])) {
                        echo "<a class=\"nav-item\" href=\"logout.php\">Déconnexion</a>";
                    } else {
                        echo "<a class=\"nav-item\" href=\"login.php\">Login</a>";
                    }
                    echo "<a class=\"nav-item\" href=\"cart.php\">Panier</a>";
                    echo "<a id=\"navHello\">";
                        if (!empty($_SESSION['userName'])) {
                            echo "Bonjour " . $_SESSION['userName'];
                        } else {
                            echo "Bonjour Donkey";
                        }
                    echo "</a>
                </ul>
            </nav>
    </header>";





    
echo "</body>
</html>";