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

<h1>Welcome to the Home Page!</h1>

<main>
    <p>Here is some inforamtion for you:</p>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit cupiditate, illo consectetur eos placeat tempora esse provident ullam similique delectus, rem sequi, enim repudiandae nobis voluptas quod incidunt iure iste?</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit quas porro libero modi placeat, unde harum delectus, ullam possimus non rem consectetur officia, consequatur sint accusamus laudantium ipsum corporis. Provident.</p>
</main>

</div>

<?php include('includes/footer.php');?>