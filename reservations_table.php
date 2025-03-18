<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de table - Il Casolare</title>
    <link rel="stylesheet" href="style_reservation_table.css">
</head>
<body>

    <header>
        <div class="flex1">
            <div class="flex2">
                <h1><strong>Il Casolare</strong></h1>
                <h2>Réservation de Table</h2>
            </div>
        </div>
        <nav></nav>
    </header>

    <main class="main-content">
        <div class="container">
            <h2>Limoges</h2>
            <p class="address">Groupe 3iL, 43 Rue de Sainte-Anne, 87000 LIMOGES</p>
            <p class="phone">📞 <a href="tel:+33698193659">+33 6 98 19 36 59</a></p>

            <div class="buttons">
                <a href="#" class="btn">📍 Itinéraire</a>
                <a href="#" class="btn">🍕 Commander à emporter</a>
            </div>

            <button class="menu-btn">Voir la carte et les menus</button>

            <div class="toggle-buttons">
                <button class="toggle active">Sur place</button>
                <button class="toggle">À emporter</button>
            </div>

            <div class="schedule">
                <p><strong>lundi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>mardi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong class="highlight">mercredi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>jeudi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>vendredi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>samedi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>dimanche</strong> 11:30 – 14:30, 18:30 – 22:30</p>
            </div>
        </div>

        <section class="reservation-form">
            <h2>Réservez votre table</h2>
            <form action="#" method="POST">
                <!-- Sélection de la date -->
                <div class="form-group">
                    <label for="date">Date :</label>
                    <input type="date" id="date" name="date" required onchange="loadHoraires()">
                </div>

                <!-- Sélection de l'horaire en fonction du jour -->
                <div class="form-group">
                    <label for="time">Heure :</label>
                    <select id="time" name="time" required>
                        <option value="">Sélectionnez une date d'abord</option>
                    </select>
                </div>

                <!-- Sélection du nombre de personnes -->
                <div class="form-group">
                    <label for="guests">Nombre de personnes :</label>
                    <input type="number" id="guests" name="guests" min="1" max="20" required>
                </div>

                <!-- Sélection de la table disponible -->
                <div class="form-group">
                    <label for="table">Tables disponibles :</label>
                    <select id="table" name="table" required>
                        <option value="">Sélectionnez une heure d'abord</option>
                    </select>
                </div>

                <button type="submit">Réserver</button>
            </form>
        </section>

        <script>
            function loadHoraires() {
                var date = document.getElementById("date").value;
                var selectHoraire = document.getElementById("time");
                var selectTable = document.getElementById("table");

                selectHoraire.innerHTML = '<option value="">Chargement...</option>';
                selectTable.innerHTML = '<option value="">Sélectionnez une heure d\'abord</option>';

                if (!date) {
                    selectHoraire.innerHTML = '<option value="">Sélectionnez une date d\'abord</option>';
                    return;
                }

                var xhr = new XMLHttpRequest();
                xhr.open("GET", "get_horaires.php?date=" + encodeURIComponent(date), true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        selectHoraire.innerHTML = xhr.responseText;
                    }
                };
                xhr.send();
            }

            function loadTables() {
                var time = document.getElementById("time").value;
                var date = document.getElementById("date").value;
                var selectTable = document.getElementById("table");

                selectTable.innerHTML = '<option value="">Chargement...</option>';

                if (!time || !date) {
                    selectTable.innerHTML = '<option value="">Sélectionnez une heure d\'abord</option>';
                    return;
                }

                var xhr = new XMLHttpRequest();
                xhr.open("GET", "get_tables.php?date=" + encodeURIComponent(date) + "&time=" + encodeURIComponent(time), true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        selectTable.innerHTML = xhr.responseText;
                    }
                };
                xhr.send();
            }

            document.getElementById("time").addEventListener("change", loadTables);
        </script>
    </main>

</body>
</html>
