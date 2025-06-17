<?php
$caracteres = "abcdefghijklmnopqrstuvwxyz0123456789!%$@#";

$password = "";
$tours = 0;
//$hash = password_hash("ab", PASSWORD_DEFAULT);
$hash = md5("phil");

$debut = time();
//while(!password_verify($password, $hash)) {
while(md5($password) != $hash) {
    $tours++;
    $car1 = substr($caracteres, rand(0, 40), 1);
    $car2 = substr($caracteres, rand(0, 40), 1);
    $car3 = substr($caracteres, rand(0, 40), 1);
    $car4 = substr($caracteres, rand(0, 40), 1);
    //$car5 = substr($caracteres, rand(0, 40), 1);
    //$car6 = substr($caracteres, rand(0, 40), 1);
    //$car7 = substr($caracteres, rand(0, 40), 1);
    //$car8 = substr($caracteres, rand(0, 40), 1);

    $password = $car1 . $car2 . $car3 . $car4; // . $car5 . $car6 . $car7 . $car8;
    //$password = $car1 . $car2;
}
$fin = time();

$duree = $fin - $debut;

echo "Password = " . $password . " trouvé en " . $tours . " essais !<br>";

echo "Durée = " . $duree . " secondes, soit " .$duree / $tours . " secondes/tour<br>";