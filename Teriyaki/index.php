<?php
    include('config.php');
    include('includes/header.php');
?>

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