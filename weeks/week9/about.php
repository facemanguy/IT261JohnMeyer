<?php

session_start();
include('config.php');

if(!isset($_SESSION['UserName'])){
    $_SESSION['msg'] = 'You must login';
    header('Location:login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location:login.php');
}

include('includes/header.php');
?>
<main>
<?php
// Notification
if(isset($_SESSION['success'])):?>
    <div class="success">
        <h3>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif;?>

<?php if(isset($_SESSION['UserName'])):?>
    <div class="welcome-logout">
        <h3>Hello, <?php echo $_SESSION['UserName'];?></h3>
        <a href="index.php?logout='1'">Log Out</a>
    </div>
<?php endif;?>
</main>
<h1>Welcome to the About Page!</h1>

</div>

<?php include('includes/footer.php');?>