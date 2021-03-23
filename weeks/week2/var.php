<?php
//This will be a page of variables

$name = 'Joey';
echo 'It is a rainy and windy day!';
echo '<br>';
echo $name;
$name = 'John';
$name = 'Sharon';
echo '<br>';
echo $name;
echo '<br>';
$firstName = 'Joey';
$lastName = 'Garza';
echo $firstName. ' ' .$lastName;
//Single quotes vs doubel quotes
echo '<br>';
echo ' '.$firstName.' ';
echo '<br>';
echo "$firstName";
echo '<br>';
$name = 'Joey';
$name .= 'Garza';
echo $name;

echo '<br>';

$x = 20;
$y = 25;
$z = $x + $y;
echo $z;

echo '<br>';

$x = 20;
$x += 25;
echo $x;

echo '<br>';

$a = 100;
$a /= 7;
$aFriendly = number_format($a,2);
echo $a;
echo '<br>';
echo $aFriendly;

echo '<br>';
echo date('Y');
echo '<br>';

// $name[] = 'Joey';
// $name[] = 'Nha';
// $name[] = 'Hank';
// $name[] = 'Daetri';
// $name[] = 'Zach';
// echo $name;
echo '<br>';
$dairy[] = 'milk';
$dairy[] = 'cheese';
$dairy[] = 'ice cream';
$dairy[] = 'yogurt';
echo '<br>';
echo $dairy[2];
echo '<br>';
print_r($dairy);
echo '<br>';
var_dump($dairy);
echo '<br>';

$nav[] = 'Home';
$nav[] = 'About';
$nav[] = 'Daily';
$nav[] = 'Contact';
$nav[] = 'Gallery';
echo '<br>';
echo $nav[2];
echo '<br>';
//you cannot echo an array

$nav = array(
'index.php' => 'Home',
'about.php' => 'About',
'daily.php' => 'Daily',
'contact.php' => 'Contact',
'gallery.php' => 'Gallery'
);
print_r($nav);


$nav = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
];

$show = 'The Crown';
$showActor = 'Olivia Coleman';
$showGenre = 'Historical Fiction';

echo '';