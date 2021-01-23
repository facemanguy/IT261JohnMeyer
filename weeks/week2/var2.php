<?php
// More on variables
$money = 100;
$money /=7;

// Round down with floor()
// Round up with ceil()
$moneyFriendly = floor($money);
$moneyFriendly = ceil($money);
$moneyFriendly = number_format($money, 2);
echo '<br>';
echo $money;
echo '<br>';
echo $moneyFriendly;

// Circumference of a circle
echo '<br>';
$radius = 10;
$pie = 3.14;
$circumference = (2 * $pie) * $radius;
echo $circumference;

// Celcius to farenheight
echo '<br>';
$celcius = 14;
$far = ($celcius * 9/5) + 32;
echo '<br>';
$farFriendly = floor($far);
//echo $celcius;
//echo '<br>';
echo $far;
echo '<br>';
echo $farFriendly;

// Currency conversion: Can to US
echo '<br>';
$canada = 100;
$exchange = 0.79;
$american = $canada * $exchange;
echo $american;

?>