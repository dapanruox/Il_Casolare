<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion - il Casolare</title>
        <link rel="stylesheet" href="assets\CSS\style_connexion.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class = "flex1">
                <div class = "flex2">
                    <h1><strong>Il Casolare</strong></h1>
                    <h2>Page de connexion |  Création de compte</h2>
                </div>
            </div>
            <div class="liens">
                <a href="accueil.php" style="color: white; font-weight:900; text-decoration: underline" >Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="apropos.php" style="color: white;">A propos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="menus.php" style="color: white;">Menu</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="creation_compte.php" style="color: white;">Connexion</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="reservations_table.php" style="color: white;">Réserver</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a  href="verif_admin.php" style="color: white;">Admin</a>
        
            </div>
            <nav> 

            </nav>
            
        
        </header>

        <main>
            <div class="flex_connexion">
                <section id="connexion">
                    <h3>Connexion</h3>
                    <form action="connexion.php" method="post">
                        <label for="username">Nom d'utilisateur :</label>
                        <input type="text" id="username" name="username" required>
                        
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" id="mdp" name="mdp" required>
                        
                        <button class = "button_connexion" type="submit">Connexion</button>
                        <button class = "button_creer" type="submit">Créer un compte</button>
                    </form>
                </section>
        
                <section id="creation">
                    <h3>Création de Compte</h3>
                    <form action="inscription.php" method="post">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required>
                        
                        <label for="username">Nom d'utilisateur :</label>
                        <input type="text" id="username" name="username" required>
                        
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" id="mdp" name="mdp" required>

                        <label for="tel">Téléphone</label>
                        <input type="tel" id="tel" name="tel" required>
                        
                        <button type="submit">Créez le compte</button>
                    </form>
                </section>
            </div>
        </main>
        <script src="assets/js/script_connexion.js"></script>
    </body>
</html>
