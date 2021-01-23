<?php
// foreach loop

$show = array(
    'Name' => 'Handmaids\'s Tale',
    'Actor' => 'Elizabeth Moss',
    'Genre' => 'Drama',
    'Author' => 'Margaret Atwood'
);

//name is the key and Name is the value of the pair

foreach($show as $key => $value) {
    echo '<b>'.$key.': </b>'.$value.' <br>';
}

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

?>
<!doctype html>
<html lang="en">
<head>
    <title>For each Loop</title>
    <meta charset="UTF-8">
</head>
<body>


<ul>

<?php

foreach($nav as $key => $value){
    echo '<li><a href =" '.$key.' ">'.$value.'</a></li>';
}