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

<!-- BEGIN MAIN CONTENT -->
		<div class="gridContainer">
			<header>
				<h1>Tim's Teriyaki Takeout</h1>
			</header>
			<div class="hero">
				<?php
					echo menuImages();
				?>
			</div>
			<div class="content">
				<h2>Fast, Friendly, teriyaki for delivery and takeout since 1989 😊</h2>
				<p>Located off of main street and 6th, Tim's has been around since the late 80s. Wanting to provide an excellent meal quickly Tim's has been providing takeout from the beginning!</p>
			</div>
			<div style="background-color: rgba(100, 100, 100, .3);">
				<img class="image" src="images/timlogo.png" alt="tim's logo">
			</div>
			<div class="content">
				<h3>Daily Lunch Special</h3>
				<p>Only $6.99 every day!</p>
			</div>
            <?php include('includes/footer.php')?>
		</div>
	</body>
</html>