<?php
// 1
$tableau = array(
    "nom" => "Barbier",
    "prenom" => "Théo",
    "age" => 26,
    "ville" => "Le Havre",
    "hobbies" => ["Tennis", "Foot", "Ouais"]
);
var_dump($tableau);

// 2
$tableau["profession"] = "webdev";
var_dump($tableau);

// 3
$tableau["ville"] = "Rouen";
var_dump($tableau);

// 4
array_push($tableau["hobbies"], "Cinéma");
var_dump($tableau["hobbies"]);

// 5
unset($tableau["age"]);
var_dump($tableau);

// 6
// echo $tableau["profession"] ? "La personne exerce la profession de " . $tableau["profession"] : "La personne n'a pas de profession";
if (array_key_exists("profession", $tableau)) {
    echo "La personne exerce la profession de " . $tableau["profession"] . "<br><br>";
} else {
    echo "La personne n'exerce aucune profession <br><br>";
}

// 7
foreach ($tableau as $key => $value) {
    if ($key !== "hobbies") {
        echo $key . " = " . $value . "<br>";
    } else {
        echo $key . " = ";
        foreach ($tableau["hobbies"] as $key => $value) {
            echo $value . ", ";
        }
        echo "<br>";
    }
}

echo "<br>";

// 8
sort($tableau["hobbies"]);
foreach ($tableau["hobbies"] as $key => $value) {
    echo $value . ", ";
}
echo "<br>";

// 9
// echo "Il y a " . count($tableau + $tableau["hobbies"]) . " valeurs rentrées dans le tableau";

$countvalues = 0;

foreach ($tableau as $key => $value) {

    if (is_array($tableau[$key])) {
        foreach ($tableau[$key] as $key => $value) {
            $value = ! "" ? $countvalues++ : "";
        }
    } else {
        $countvalues++;
    }
}

echo "<br>";
echo "On trouve " . $countvalues . " entrées dans ce tableau";
?>
