<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>John's Adder Assignment</title>
    <style>
        p {
            color:red;
            text-align: center;
        }
        
        h1 {
            color:green;
            text-align: center;
        }
        
        h2 {
            font-size: 1.5em;
            text-align: center;
        }
        
        form {
            width: 24rem;
            margin: 0 auto;
            border: 1px solid red;
            padding: 1em;
        }
        
        label {
            padding-bottom: 1em;
        }
        
        input {
            margin-bottom: 0.5em;
        }
    </style>
</head>
<body>
    <h1>Adder.php</h1>
    <form action="" method="post">
        <label>Enter the first number: </label><input type="text" name="num1">
        <br>
        <label>Enter the second number: </label><input type="text" name="num2">
        <br>
        <input type="submit" value="Add Em!!">
    </form>

    <?php
    //adder-wrong.php

use function PHPSTORM_META\type;

if (isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            if (empty($num1 && $num2)){
                $num1 = 0;
                $num2 = 0;
                $myTotal = 0;
                echo '<h2>Please fill out both fields</h2>';
            }elseif(is_numeric($num1) && is_numeric($num2)){
                $myTotal = $num1 + $num2;
                echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
                echo '<p style="color:red;"> and the answer is <br>'. $myTotal .'!</p>';
                echo'<p><a href="">Reset page</a></p>';
            }else{
                $num1 = 0;
                $num2 = 0;
                $myTotal = 0;
                echo '<h2>Please enter a valid number into both fields</h2>';
            }
        }
    ?>

<!--PHP comment on opening tag, Moved to new line-->
<!--Extra quotes on line 8-->
<!--Intermixed quote types on line 8, Unified to only singles seperating variables and text-->
<!--Missing single quote on line 10-->
<!--Missing semicolon on line 11-->
<!--Missing PHP closing tag on line 12, placed on line 13 for formatting-->
<!--Unnecessary slash on line 22-->
<!--Missing opening label tag on line 23-->
<!--Missing closing label tag on line 24-->
<!--Extra / in opening label tag on line 24-->
<!--Missing Quote on line 25-->
<!--Extra charaters beyond html tag on line 45-->
<!--num1 variable spelt wrong on line 23-->
<!--Useless line break in echo on lines 9/10, placed line 10 content on line 9-->
<!--Incorrect use of nested quotes on line 9, unified to singles containing doubles-->
<!--Missing . concatonator on line 9-->
<!--Missing closing p tag on line 10-->
<!--Missing form method on line 21-->
<!--Mispelt variable num2 on line 7-->
<!--Extra - character on line 7-->
<!--Style tag moved inside p tag on line 9-->
<!--Moved php block into html block to match example, Now exists on lines 14-25-->
<!--Code now functions as example-->
<!--Reformatted indentation and line breaks for readability-->
<!--Added Doctype, lang, and meta tag, lines 1,2,4-->
<!--Added styling to roughly match example-->
<!--Added logic to handle non numeric and empty fields-->
<!--here are my errors-->


</body>
</html>