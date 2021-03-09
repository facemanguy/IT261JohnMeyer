<?php
include('config.php');
include('includes/config.php');
include('includes/header.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}else{
    header('Location:crabs.php');
}

$sql = 'SELECT * FROM Crabs WHERE CrabID = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $Name = stripslashes($row['Name']);
        $Species = stripslashes($row['Species']);
        $Description = stripslashes($row['Description']);
        $feedback = '';
    }
}else{
    $feedback = 'Nobody is home';
}
$Occupation = 'Crab';
?>
<div class="gridContainer">
    <header>
        <h1>All about the <?php echo $Name;?></h1>
    </header>
    <div class="crabData">
        <?php
            if($feedback == ''){
                echo '<ul>';
                echo '<li><b>Common Name:</b> '.$Name.'</li>';
                echo '<li><b>Scientific Name:</b> '.$Species.'</li>';
                echo '<li><b>Occupation:</b> '.$Occupation.'</li>';
                echo '</ul>';
                echo '<p>'.$Description.'</p>';
                echo '<p><a href="crabs.php">Return to crabs page</a></p>';
            }else{
                echo $feedback;
            }
            ?>
    </div>
    <div class="image aside">
        <?php
            if($feedback == ''){
                echo '<img src="images/crab'.$id.'.jpg" alt="'.$Species.'">';
            }
        ?>
    </div>
        <?php
            mysqli_free_result($result);
            mysqli_close($iConn);
        ?>
</div>