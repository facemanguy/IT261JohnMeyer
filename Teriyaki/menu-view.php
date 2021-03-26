<?php
include('config.php');
include('includes/config.php');
include('includes/header.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}else{
    header('Location:menu.php');
}

$sql = 'SELECT * FROM TimMenu WHERE menuId = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $dishName = stripslashes($row['dishName']);
        $price = stripslashes($row['price']);
        $allergens = stripslashes($row['allergens']);
        $Description = stripslashes($row['description']);
        $feedback = '';
    }
}else{
    $feedback = 'Nobody is home';
}

?>
<div class="gridContainer">
    <header>
        <h1><?php echo $dishName;?></h1>
    </header>
    <div class="menuData">
        <?php
            if($feedback == ''){
                echo '<ul>';
                echo '<li><b>Dish Name:</b> '.$dishName.'</li>';
                echo '<li><b>Price:</b> $'.$price.'</li>';
                echo '<li><b>Allergens:</b> '.$allergens.'</li>';
                echo '</ul>';
                echo '<p>'.$description.'</p>';
                echo '<p><a href="menu.php">Return to Menu</a></p>';
            }else{
                echo $feedback;
            }
            ?>
    </div>
    <div class="aside">
        <?php
            if($feedback == ''){
                echo '<img class="image" src="images/menu'.$id.'.jpg" alt="'.$dishName.'">';
            }
        ?>
    </div>
        <?php
            mysqli_free_result($result);
            mysqli_close($iConn);
        ?>
</div>