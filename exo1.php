<?php

    // Création du tableau
    // $tableau = Array("Alice", "Bob", "Charlie", "David", "Emma");
    $tableau = ["Alice", "Bob", "Charlie", "David", "Emma"];
    var_dump($tableau);

    echo "<br>";


    // Push fin du tableau
    array_push($tableau, "Florent");
    var_dump($tableau);
    
    echo "<br>";


    // Push en début de tableau
    array_unshift($tableau, "Alexandra");
    var_dump($tableau);

    echo "<br>";

    // On supprime l'entrée 2 (Bob)
    array_splice($tableau, 1, 2);
    var_dump($tableau);

    echo "<br>";

    foreach($tableau as $name) {
        echo "<br>" . $name ;
    }

    echo "<br><br>";

    echo "Il y a " . count($tableau) . " prénoms";

?>