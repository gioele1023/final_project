<?php

echo "Willkommen beim Kalorien Tracker!\n";

do {
    echo "\nWas möchtest du machen?\n";
    echo "1. Essen hinzufügen\n";
    echo "2. Essen anzeigen\n";
    echo "3. Kalorien anzeigen\n";
    echo "4. Beenden\n";

    echo "\nDeine Auswahl: ";
    $choice = trim(fgets(STDIN));
} while ($choice != "4");
