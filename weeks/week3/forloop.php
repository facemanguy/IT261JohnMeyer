<?php
//for loops

//farenheight = (celcius * 9/5) +32

$celcius = 14;
$far = ($celcius * 9/5) + 32;
echo $far;

for($celcius = 0; $celcius <= 100; $celcius += 5){
    $far = ($celcius * 9/5) + 32;
    echo 'C: '.$celcius.' &nbsp; &nbsp; F: '.$far.' ';
    echo '<br>';
}

echo '<br>';

// miles and kilometers
for($kilometer = 0; $kilometer <= 100; $kilometer += 5){
    $miles = ($kilometer * 0.621371);
    echo 'KM: '.$kilometer.' &nbsp; &nbsp; Miles: '.$miles.' ';
    echo '<br>';
}