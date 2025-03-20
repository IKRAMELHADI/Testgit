<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur mon site PHP</h1>
    </header>
    <main>
        <p>Ceci est un site dynamique avec PHP.</p>
        
        <?php
            echo "<p>Date et heure actuelles : " . date("d/m/Y H:i:s") . "</p>";
        ?>

        <form method="POST">
            <button type="submit" name="action">Cliquez-moi</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"])) {
                echo "<p id='message'>Bravo ! PHP fonctionne ! 🚀</p>";
            }
        ?>
    </main>
</body>
</html>
