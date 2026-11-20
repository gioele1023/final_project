<?php

function addFood($food, $calories)
{
    return $food . " - " . $calories . " Kalorien";
}

$foods = [];
$total = 0;

echo "Willkommen beim Kalorien Tracker!\n";

do {
    echo "\nWas möchtest du machen?\n";
    echo "1. Essen hinzufügen\n";
    echo "2. Essen anzeigen\n";
    echo "3. Kalorien anzeigen\n";
    echo "4. Beenden\n";

    echo "\nDeine Auswahl: ";
    $choice = trim(fgets(STDIN));

    if ($choice == "1") {
        echo "Was hast du gegessen? ";
        $food = trim(fgets(STDIN));

        if ($food != "") {
            echo "Wie viele Kalorien hat das Essen? ";
            $calories = trim(fgets(STDIN));

            if (ctype_digit($calories)) {
                $calories = intval($calories);

                $foods[] = addFood($food, $calories);
                $total = $total + $calories;

                echo "Essen wurde hinzugefügt!\n";
            } else {
                echo "Bitte gib eine gültige Zahl ein.\n";
            }
        } else {
            echo "Bitte gib einen Namen ein.\n";
        }
    } elseif ($choice == "2") {
        echo "\nDeine gegessenen Lebensmittel:\n";

        if (count($foods) == 0) {
            echo "Du hast noch nichts hinzugefügt.\n";
        } else {
            foreach ($foods as $food) {
                echo "- " . $food . "\n";
            }
        }
    } elseif ($choice == "3") {
        echo "\nDu hast insgesamt " . $total . " Kalorien gegessen.\n";
    }
} while ($choice != "4");
