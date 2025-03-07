<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - il Casolare</title>
    <link rel="stylesheet" href="assets/CSS/style_connexion.css">
</head>
<body>
    <header>
        <div class = "flex1">
            <div class = "flex2">
                <h1><strong>Il Casolare</strong></h1>
                <h2>Page de connexion | Création de compte</h2>
            </div>
        </div>

        <nav> 

        </nav>
        
	
    </header>

    <main>
        <div class="flex_connexion">
            <section id="connexion">
                <h2>Connexion</h2>
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
                <h2>Création de Compte</h2>
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