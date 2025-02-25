<?php
// /index.php

// Chargement de l'autoloading
require 'vendor/autoload.php';

// Lien vers la classe utilisée
// Le require sera fait par l'autoloading
use App\classes\Member;
//use Cocur\Slugify\Slugify;
use Ausi\SlugGenerator\SlugGenerator;

// Instanciation
$member = new Member("John", "Doe");
var_dump($member);
dump($member);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de l'autoloading PSR-4</title>
</head>

<body>

    <h1>Page de test</h1>

    <h2>Fiche détaillée d'un membre :</h2>
    
    <dl>
        <dt>Prénom</dt>
        <dd><?= $member->getFirstName() ?></dd>
        <dt>Nom</dt>
        <dd><?= $member->getLastName() ?></dd>
        <dt>Date</dt>
        <dd><?= $member->getDate()->format('Y-m-d H:i:s') ?></dd>
    </dl>

    <h2>Display d'un membre : <?= $member->printMember() ?></h2>

    <h2>Test du slug par bundle externe</h2>
    <?php
        $slugify = new Slugify();
        echo $slugify->slugify($member->getFirstName() . ' ' . $member->getLastName() . ' ' . $member->getDate()->format('Y-m-d H:i:s')); 
    ?>

    <h2>Test du slug par bundle externe bis</h2>
    <?php
        $generator = new SlugGenerator;
        echo $generator->generate('Hello Wörld!');  // Output: hello-world
        echo "<br>";
        echo $generator->generate('富士山');         // Output: fu-shi-shan
    ?>

    <h2>Test de Faker</h2>
    <ul>
        <?php
        // use the factory to create a Faker\Generator instance
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            echo '<li>' . $faker->name() . ' : ' . $faker->email() . ' / ' . $faker->phoneNumber() . '</li>';
        }
        ?>
    </ul>
</body>
</html>