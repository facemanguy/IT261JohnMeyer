<?php
//if statement

// $temp = '80';
// if($temp <= 60){
//     echo "It's hot";
// }else{
//     echo 'It could be hot';
// }

$temp = '80';
if($temp <= 60){
    echo "It's not too hot";
}elseif($temp <= 70){
    echo "It's getting warmer";
}elseif($temp <= 80) {
    echo "It's getting really hot";
}else{
    echo 'temperature is unkown';
}

$salary = '200000';
if($salary == 200000){
    echo "I'm happy";
}

// if i make 200000 and my quota of 800000 I get a 10% bonus
// at 750000 its 5% and 500000 is nothing

$sales = 800000;
if($sales <= 500000){
    // salary stays same
    $salary *= 1;
    echo $salary;
}elseif($sales <= 750000){
    $salary *= 1.05;
    echo $salary;
}elseif($sales >= 800000){
    $salary *= 1.1;
    echo $salary;
}else{
    echo 'No bonus';
    echo $salary;
}
