<?php
    define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    $nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Daily';
    $nav['people.php'] = 'People';
    $nav['contact.php'] = 'Contact';
    $nav['gallery.php'] = 'Gallery';

    function makeLinks($nav){
        $myReturn = '';
        foreach($nav as $key => $value){
            if(THIS_PAGE == $key){
                $myReturn .= '<li><a class="active" href="'.$key.'">'.$value.'</a></li>';
            }else{
                $myReturn .= '<li><a href="'.$key.'">'.$value.'</a></li>';
            }
        }
        return $myReturn;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 6 Index page Nav Function</title>
    <style>
        .active{
            color: red;
        }
    </style>
</head>
<body>
    <h1>This is a navigation function test</h1>
    <nav>
        <ul>
            <?php        
                echo makeLinks($nav);
            ?>
        </ul>
    </nav>

    
</body>
</html>