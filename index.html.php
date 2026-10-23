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
    echo "<main>
        <article>
            <div class=\"ref-prod\">
                <h2>Eragon</h2>
            </div>
            <div class=\"contenu\">
                <div class=\"image\">
                    <img src=\"./image/Eragon.jpg\">
                </div>
                <div class=\"description\">
                    <p>
                        Tome 1<br />
                        Auteur Christopher PAOLINI<br />
                        20€
                    </p>
                    <form action=\"index.php\" method=\"post\">
                        <input type=\"hidden\" name=\"bookName\" value=\"Eragon\">
                        <input type=\"hidden\" name=\"price\" value=\"20\">
                        <input type=\"number\" name=\"quantity\" placeholder=\"quantité\">
                        <button type=\"submit\">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </article>
        <article>
            <div class=\"ref-prod\">
                <h2>L'ainé</h2>
            </div>
            <div class=\"contenu\">
                <div class=\"image\">
                    <img src=\"./image/l-aine.jpg\">
                </div>
                <div class=\"description\">
                    <p>
                        Tome 2<br />
                        Auteur Christopher PAOLINI<br />
                        20€
                    </p>
                    <form action=\"index.php\" method=\"post\">
                        <input type=\"hidden\" name=\"bookName\" value=\"L'ainé\">
                        <input type=\"hidden\" name=\"price\" value=\"20\">
                        <input type=\"number\" name=\"quantity\" placeholder=\"quantité\">
                        <button type=\"submit\">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </article>
        <article>
            <div class=\"ref-prod\">
                <h2>Brisingr</h2>
            </div>
            <div class=\"contenu\">
                <div class=\"image\">
                    <img src=\"./image/brisingr.jpg\">
                </div>
                <div class=\"description\">
                    <p>
                        Tome 3<br />
                        Auteur Christopher PAOLINI<br />
                        20€
                    </p>
                    <form action=\"index.php\" method=\"post\">
                        <input type=\"hidden\" name=\"bookName\" value=\"Brisingr\">
                        <input type=\"hidden\" name=\"price\" value=\"20\">
                        <input type=\"number\" name=\"quantity\" placeholder=\"quantité\">
                        <button type=\"submit\">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </article>
        <article>
            <div class=\"ref-prod\">
                <h2>L'héritage</h2>
            </div>
            <div class=\"contenu\">
                <div class=\"image\">
                    <img src=\"./image/heritage.jpg\">
                </div>
                <div class=\"description\">
                    <p>
                        Tome 4<br />
                        Auteur Christopher PAOLINI<br />
                        20€
                    </p>
                    <form action=\"index.php\" method=\"post\">
                        <input type=\"hidden\" name=\"bookName\" value=\"L'héritage\">
                        <input type=\"hidden\" name=\"price\" value=\"20\">
                        <input type=\"number\" name=\"quantity\" placeholder=\"quantité\">
                        <button type=\"submit\">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </article>
    </main>";
echo "</body>
</html>";