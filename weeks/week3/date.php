<?php
// Date

echo date('Y');
echo '<br>';
echo date('H:i A'); //24 hour
echo '<br>';
echo date('h:i A'); //12 hour
echo '<br>';

date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date('h:i A');
echo '<br>';
$todayDate = date('H:i');
if($todayDate <=11){
    echo 'Good Morning!';
}elseif($todayDate <= 16){
    echo "Good Afternoon";
}else{
    echo "Good Evening";
}


?>