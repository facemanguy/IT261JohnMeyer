<?php
//switch

// echo date('Y');
// echo '<br>';
// echo date('l');

//if today is thursday show thursday content

//global variable
//$_GET , $_POST

date_default_timezone_set('America/Los_Angeles');
$todayDate = date('H:i A');

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

//echo '<br>';

switch($today){
    case 'Monday':
    $coffee = 'Thursday is latte day';
    $pic = 'latte.jpg';
    $alt = "Latte";
    $content = 'amazing latte content';
    $background = 'pink';
    break;

    case 'Tuesday':
    $coffee = 'Friday is cappacuino day';
    $pic = 'capa.jpg';
    $alt = "Cappacuino";
    $content = 'amazing capacuionsasdgds content';
    $background = 'orange';
    break;
    
    case 'Wednesday':
    $coffee = 'Friday is cappacuino day';
    $pic = 'capa.jpg';
    $alt = "Cappacuino";
    $content = 'amazing capacuionsasdgds content';
    $background = 'orange';
    break;

    case 'Thursday':
    $coffee = 'Thursday is latte day';
    $pic = 'latte.jpg';
    $alt = "Latte";
    $content = 'amazing latte content';
    $background = 'pink';
    break;

    case 'Friday':
    $coffee = 'Friday is cappacuino day';
    $pic = 'capa.jpg';
    $alt = "Cappacuino";
    $content = 'amazing capacuionsasdgds content';
    $background = 'orange';
    break;
    
    case 'Saturday':
    $coffee = 'Friday is cappacuino day';
    $pic = 'capa.jpg';
    $alt = "Cappacuino";
    $content = 'amazing capacuionsasdgds content';
    $background = 'orange';
    break;

    case 'Sunday':
    $coffee = 'Friday is cappacuino day';
    $pic = 'capa.jpg';
    $alt = "Cappacuino";
    $content = 'amazing capacuionsasdgds content';
    $background = 'orange';
    break;
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Switch</title>
    <meta charset="UTF-8">
    <style>
        .pink{background-color: hotpink;}

        .orange{background-color: orange;}
    </style>
</head>
<body class="<?php echo $background;?>">
    <h1>
        <?php
        if($todayDate <=11){
            echo 'Good Morning!';
        }elseif($todayDate <= 16){
            echo "Good Afternoon";
        }else{
            echo "Good Evening";
        }
        echo "<br>";
        echo $coffee;?>
    </h1>
    <img src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    <p><?php echo $content;?></p>
    <h2>Check out this stuff below</h2>
    <ul>
        <li><a href="switch.php?today=Monday"></a>Monday</li>
        <li><a href="switch.php?today=Tuesday"></a>Tuesday</li>
        <li><a href="switch.php?today=Wednesday"></a>Wednesday</li>
        <li><a href="switch.php?today=Thursday"></a>Thursday</li>
        <li><a href="switch.php?today=Friday"></a>Friday</li>
        <li><a href="switch.php?today=Saturday"></a>Saturday</li>
        <li><a href="switch.php?today=Sunday"></a>Sunday</li>
    </ul>


</body>
</html>