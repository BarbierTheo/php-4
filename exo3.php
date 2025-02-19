<?php

$produits = [
    [
        "categorie" => "maison",
        "nom" => "Petite maison rouge",
        "prix" => 50000,
        "description" => "Petite maison rouge en haut d'une colline",
        "image" => "./img/photo_maison_rouge.jpg"
    ],
    [
        "categorie" => "maison",
        "nom" => "Maison résidentiel",
        "prix" => 100000,
        "description" => "Maison résidentiel, quartier calme",
        "image" => "./img/photo_maison_residentiel.jpg"
    ],
    [
        "categorie" => "maison",
        "nom" => "Grande maison grise",
        "prix" => 150000,
        "description" => "Grande maison grise, 4 chambres",
        "image" => "./img/grande_maison_grise.jpg"
    ],
    [
        "categorie" => "maison",
        "nom" => "Grande maison en brique",
        "prix" => 175000,
        "description" => "Grande maison en brique, 3 chambres, grand garage",
        "image" => "./img/grande_maison_brique.jpg"
    ],
    [
        "categorie" => "maison",
        "nom" => "Maison en bois",
        "prix" => 160000,
        "description" => "Grande maison en bois, 3 chambres",
        "image" => "./img/grande_maison_bois.jpg"
    ],
    [
        "categorie" => "villa",
        "nom" => "Villa à la grecque",
        "prix" => 200000,
        "description" => "Grande villa à la grecque, avec garage",
        "image" => "./img/villa_grec.jpg"
    ],
    [
        "categorie" => "villa",
        "nom" => "Villa sur les collines",
        "prix" => 300000,
        "description" => "Grande villa situé sur les collines, avec beaucoup de flow",
        "image" => "./img/villa_coline.jpg"
    ],
    [
        "categorie" => "villa",
        "nom" => "Villa dans la montée",
        "prix" => 250000,
        "description" => "Grande villa situé sur les hauteurs, jolie vue",
        "image" => "./img/villa_montee.jpg"
    ],
    [
        "categorie" => "appartement",
        "nom" => "Kondo en centre-ville",
        "prix" => 220000,
        "description" => "Super vue, salle de sport et piscine compris dans les charges",
        "image" => "./img/apprtmt_kondo.jpg"
    ],
    [
        "categorie" => "appartement",
        "nom" => "Appartement neuf",
        "prix" => 260000,
        "description" => "Super vue, proche des transports",
        "image" => "./img/apprtmt_neuf.jpg"
    ],
    [
        "categorie" => "appartement",
        "nom" => "Appartement récent",
        "prix" => 280000,
        "description" => "Proche de la plage, très lumineux",
        "image" => "./img/apprtmt_recent.jpg"
    ],
    [
        "categorie" => "appartement",
        "nom" => "Appartement en briques rouges",
        "prix" => 195000,
        "description" => "Charges comprises",
        "image" => "./img/apprtmt_brique.jpg"
    ]
];

// var_dump($produits);
$fmt = new NumberFormatter( 'fr_FR', NumberFormatter::CURRENCY )
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

        <?php
        foreach ($produits as $key => $value) {
            // echo var_dump($produits[$key]);
            // echo var_dump($value["nom"])

            // 
        ?>
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

        <!-- <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full h-40">
                <div class="bg-cover bg-center w-full h-full" style="background-image : url('https://images.unsplash.com/photo-1579632652768-6cb9dcf85912?q=80&w=1886&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
            </div>

            <div class="p-5 z-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>

        </div> -->




    </div>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>