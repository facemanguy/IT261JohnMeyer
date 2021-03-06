<?php
include('config.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}else{
    header('Location:people.php');
}

$sql = 'SELECT * FROM Week8People WHERE Week8PeopleID = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $FirstName = stripslashes($row['FirstName']);
        $LastName = stripslashes($row['LastName']);
        $Email = stripslashes($row['Email']);
        $Occupation = stripslashes($row['Occupation']);
        $BirthDate = stripslashes($row['BirthDate']);
        $Description = stripslashes($row['Description']);
        $feedback = '';
    }
}else{
    $feedback = 'Nobody is home';
}
?>
<div class="wrapper" style="width: 80vw; margin: 0 auto;">
    <main style="width: 50vw; float: left;">
        <h1>Yay!</h1>
        <h2>Currently viewing <?php echo $FirstName;?>'s page</h2>
        <?php
            if($feedback == ''){
                echo '<ul>';
                echo '<li><b>First Name:</b> '.$FirstName.'</li>';
                echo '<li><b>Last Name:</b> '.$LastName.'</li>';
                echo '<li><b>Occupation:</b> '.$Occupation.'</li>';
                echo '<li><b>Email:</b> '.$Email.'</li>';
                echo '<li><b>Birth Date:</b> '.$BirthDate.'</li>';
                echo '</ul>';
                echo '<p>'.$Description.'</p>';
                echo '<p><a href="people.php">Return to people page</a></p>';
            }else{
                echo $feedback;
            }
            ?>
    </main>
    <aside style="width: 30vw; float: right;">
        <?php
            if($feedback == ''){
                echo '<img src="images/people'.$id.'.jpg" alt="'.$FirstName.'">';
            }
        ?>
    </aside>
        <?php
            mysqli_free_result($result);
            mysqli_close($iConn);
        ?>
</div>