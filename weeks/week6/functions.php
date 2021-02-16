<?php
    function sayHello(){
        echo 'Hello PHP Function';
    }

    sayHello();
    echo '<br>';


    function sayHello2($name){
        echo 'Hello '.$name.'';
    }

    sayHello2('John');
    echo '<br>';
    sayHello2('Bob');
    echo '<br>';
    sayHello2('Henry');
    echo '<br>';

    function sayHello3($name, $age){
        echo 'Hello '.$name.', and you are '.$age.' years old!';
    }

    sayHello3('John', 26);
    echo '<br>';
    sayHello3('Bob', 38);
    echo '<br>';
    sayHello3('Henry', 79);
    echo '<br>';
    echo '<h2>Math problems</h2>';

    function cube($n){
        $cubing = $n * $n * $n;
        echo $cubing;
    }

    cube(15);
    
    echo '<h2>Celcius Converter</h2>';
    function celciusConverter($temp){
        $far = ($temp * 9/5) + 32;
        echo $far;
    }
    celciusConverter(5);

    echo '<h2>Area and volume math problem</h2>';

    function areaVolume($val1, $val2, $val3){
        $area = $val1 * $val2;
        $volume = $val1 * $val2 * $val3;
        return array($area, $volume);
    }
    $result = areaVolume(10, 5, 2);
    echo '<b>Area: </b> '.$result[0].'';
    echo '<br>';
    echo '<b>Volume: </b> '.$result[1].'';
    echo '<br>';

    function areaVolume2($val4, $val5, $val6){
        $area2 = $val4 * $val5;
        $volume2 = $val4 * $val5 * $val6;
        return array($area2, $volume2);
    }

    list($myArea, $myVolume) = areaVolume2(10, 5, 2);
    echo $myArea;
    echo '<br>';
    echo $myVolume;


?>