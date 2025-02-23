<?php

include_once 'products.php';
// var_dump($produits);
$fmt = new NumberFormatter('fr_FR', NumberFormatter::CURRENCY)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence immobilière</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

</head>
<body class="bg-zinc-300 max-w-[1400px] m-auto">
    <h1 class="m-2 text-center text-2xl font-semibold">Fauché Immobilier</h1>
    <div class="flex flex-col lg:flex-row mx-4 flex-wrap gap-2 justify-around items-center">

        <?php foreach ($produits as $key => $value) { ?>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full h-40">
                    <div class="bg-cover bg-center w-full h-full" style="background-image : url('<?= $value["image"] ?>');"></div>
                </div>
                <div class="p-5 z-5">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $value["nom"] ?></h5>
                        <h3 class="uppercase text-white"><?= $value["categorie"] ?></h3>
                        <p class="font-normal text-gray-700 dark:text-gray-400"><?= $value["description"] ?></p>
                        <p class="font-normal text-gray-700 dark:text-gray-400"><?= $fmt->formatCurrency($value["prix"], "EUR"); ?></p>
                </div>
            </div>
        <?php } ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>