<?php
// Page of variables

$name = 'John';
echo 'It is a rainy day!';
echo '<br>';
echo $name;
$name = 'Mike';
$name = 'Sharon';
echo '<br>';
echo $name;
echo '<br>';
$firstName = 'John';
$lastName = 'Meyer';
echo $firstName. ' ' .$lastName;
// quote type matters
echo '<br>';
echo ' '.$firstname.' ';
echo '<br>';
echo '$firstName';
echo '<br>';
$name = 'John';
$name .= 'Meyer';
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
$a /=7;
$aFriendly = number_format($a,2);
echo $a;
echo '<br>';
echo $aFriendly;

echo '<br>';
echo date('Y');
echo '<br>';

echo '<br>';
$dairy[] = 'milk';
$dairy[] = 'cheese';
$dairy[] = 'ice cream';
$dairy[] = 'yogurt';
echo '<br>';
echo $dairy[2];
echo '<br>';
print_r($dairy);
var_dump($dairy);

$nav[] = 'Home';
$nav[] = 'About';
$nav[] = 'Daily';
$nav[] = 'Contact';
$nav[] = 'Gallery';
echo '<br>';
echo $nav[2];
// you can't echo an array

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
print_r($nav);

$nav = ['index.php' => 'Home','about.php' => 'About','daily.php' => 'Daily','contact.php' => 'Contact','gallery.php' => 'Gallery'];

$show = "Jo Jo's Bizzare Adventure";
$showCharacter = "Jo Jo";
$showGenre = 'Anime';

echo 'This was the last show I watched, TV is not my thing haha.';