<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Page Admin Il Casolare</title>
  <link rel="stylesheet" href="cssAdmin.css">
  <script src="scriptAdmin.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>

    <?php
    session_start();

    // Empêcher la fixation de session
    if (!isset($_SESSION['initiated'])) {
        session_regenerate_id(true);
        $_SESSION['initiated'] = true;
    }

    // Vérifier si l'utilisateur est bien connecté
    if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
        die("Accès interdit. Veuillez vous connecter.");
    }

    // Vérifier si c'est bien un administrateur
    if ($_SESSION['role'] !== 'admin') {
        die("Accès refusé. Vous devez être administrateur.");
    }

    // Si tout est bon, on continue
    echo "Bienvenue, administrateur !";
    ?>
    

</body>