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
                <form>
                    <label>Nom d'utilisateur :</label>
                    <input type="text" required>
                    
                    <label>Mot de passe :</label>
                    <input type="password" class = "mdp" required>
                    
                    <button class = "button_connexion" type="submit">Connexion</button>
                    <button class = "button_creer" type="submit">Créer un compte</button>
                </form>
            </section>
    
            <section id="creation">
                <h2>Création de Compte</h2>
                <form action="connexion.php" method="post">
                    <label>Email :</label>
                    <input name="email" required>
                    
                    <label>Nom d'utilisateur :</label>
                    <input name="username" required>
                    
                    <label>Mot de passe :</label>
                    <input type="password" name="mdp" class ="mpd" required>
                    
                    <button type="submit">Créez le compte</button>
                </form>
            </section>
        </div>
    </main>
    <script src="assets/js/script_connexion.js"></script>
</body>
</html>