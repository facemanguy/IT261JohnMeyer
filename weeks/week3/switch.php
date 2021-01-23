<?php
//switch

echo date('Y');
echo '<br>';
echo date('l');

//if today is thursday show thursday content

//global variable
//$_GET , $_POST

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

echo '<br>';

switch($today){
    case 'Thursday':
    $coffee ='Thursday is latte day';
    $pic = 'latte.jpg';
    $alt = "Latte";
    $content = 'amazing latte content';
    $background = 'pink';
    break;

    case 'Friday':
    $coffee ='Friday is cappacuino day';
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
<body class="<?php echo $background; ?>">
    <h1><?php echo $coffee; ?></h1>
    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    <p><?php echo $content; ?></p>
</body>
</html>