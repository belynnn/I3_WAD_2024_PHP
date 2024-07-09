<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays - Exercice 8</title>
</head>
<body>
    <?php
        $student_notes = [15, 10, 20, 8, 18];

        echo "Notes des élèves :<br>";
        foreach ($student_notes as $note) {
            echo "$note<br>";
        }
        
        echo "<br>Note(s) < 10 :<br>";
        foreach ($student_notes as $note) {
            if ($note < 10) {
                echo "<span style='color: red;'>$note</span><br>";
            } else {
                echo "$note<br>";
            }
        }

        // foreach ($student_notes as $note) {
        //     $couleur = $note < 10 ? "<span style='color: red;'>$note</span>" : $note; // Couleur rouge pour les notes < 10
        //     echo "$couleur "; // Affichage de la note avec la couleur éventuelle
        // }

    ?>
</body>
</html>