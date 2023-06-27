<?php
$name = 'Jérémy';
$lastname = 'Deurvil';
$firstname = 'Jejerem';
$age = 33;
$km = 1;

$myString = 'Moi';
$myInt = 7;
$myFloat = 5.5;
$myBool = true;

$unIntNull = null;

$ope = 3 + 4;
$multi = 5 * 20;
$divi = 45 / 5;

echo '<p>' . $name . '</p>';

echo '<p>' . $lastname . ' ' . $firstname . ', ' . $age . '</p>';

echo '<p>' . $km . '</p>';

$km = 3;

echo '<p>' . $km . '</p>';

$km = 125;

echo '<p>' . $km . '</p>';

echo "<p>$myString $myInt $myFloat $myBool</p>";

echo '<p>' . $unIntNull . '</p>';

$unIntNull = 10;

echo '<p>' . $unIntNull . '</p>';

echo  "<p>Bonjour $name, comment vas tu ?</p>";

echo  "<p>Bonjour $lastname $firstname ,tu as $age ans</p>";

echo "<p>+ : $ope, x : $multi, / : $divi</p>";
?>
