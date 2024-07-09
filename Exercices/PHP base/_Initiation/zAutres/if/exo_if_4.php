<?php
    // Pourcentage minimal de présence requis par année
    $minimum_attendance_1 = 0.8;
    $minimum_attendance_2 = 0.7;
    $minimum_attendance_3 = 0.6;

    // Nombre total de cours
    $total_classes = 50;

    // Récupérer les données entrées par l'utilisateurice
    $student_year = (int)readline("Année d'étude (1, 2 ou 3) : ");
    $student_missed_classes = (int)readline("Total jour d'absence : ");

    // Calculer le taux de présence minimum requis en fonction de l'année
    $minimum_classes = 0;
    if ($student_year == 1) {
        $minimum_classes = $total_classes * $minimum_attendance_1;
    } else if ($student_year == 2) {
        $minimum_classes = $total_classes * $minimum_attendance_2;
    } else if ($student_year == 3) {
        $minimum_classes = $total_classes * $minimum_attendance_3;
    }

    // Calculer le nombre de présence actuel
    $actual_attendance = $total_classes - $student_missed_classes;

    // Déterminer si l'élève a réussi ou non
    if ($actual_attendance >= $minimum_classes) {
        echo "L'élève a réussi son année.\n";
    } else {
        echo "L'élève n'a pas réussi son année. Il faut au minimum avoir été présent.e durant $minimum_classes cours et l'élève n'a été présent.e que durant $actual_attendance cours.\n";
    }
?>