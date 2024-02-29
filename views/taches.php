<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tâches</title>
</head>
<body>
    <h1>Ajouter une tâche</h1>
    <form method="POST" id="inscriptionForm" action="index.php?page=taches">
    <label for="">Nouvelle Tâche</label>
    <input type="text" name="taches" id="taches">
    <input type="submit" name="submit">
</form>
    <?php
    require_once "javascript/js.js"
    ?>
    <script src="javascript/js.js"></script>
</body>
</html>