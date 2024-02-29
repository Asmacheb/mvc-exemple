<?php
require_once "models/delete.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des Tâches</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Liste des tâches</h1>
    <?php foreach ($data as $value): ?>
        <form method="post" action="index.php?page=supprimer&type=supprimer">
            <p>
                <?php echo $value['taches']; ?>
                <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                <input type="submit" value="supprimer">
<!--                 
                <form method="post" action="index.php?page=modifier">
               <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
               <input type="submit" value="modifier"> -->
    </p>
</form>        
    <?php endforeach; ?>

    <h2>Modifier</h2>
    <?php foreach ($data as $value): ?>
    <form method="post" action="index.php?page=modifier">
        <p>
            <?php echo $value['taches']; ?>
            <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
            <input type="submit" value="Modifier">
            <input type="text" name="nouvelle_tache" style="display: none;">
        </p>
    </form>
<?php endforeach; ?>
<script>document.addEventListener('DOMContentLoaded', function() {
    var submitButtons = document.querySelectorAll('input[type="submit"]');
    submitButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var form = this.parentNode;
            var input = form.querySelector('input[type="text"]');
            input.style.display = 'inline-block';
            this.style.display = 'none';
        });
    });
});</script>
</body>
</html>
