<?php
    include('config.php');
    include('includes/header.php');
?>

<!-- BEGIN MAIN CONTENT -->
		<div class="gridContainer">
			<header>
				<h1>John Meyer's IT261 Website Page</h1>
			</header>
			<div class="showcase">
				<?php
					echo rpgImages();
				?>
			</div>
			<div class="content">
				<h3>Welcome!</h3>
				<p>This is my very nerdy it261 website. We have role playing games, star trek, and php code galore!</p>
			</div>
			<div class="content">
				<h3>Want more?</h3>
				<p>Take a look around at the other projects here!</p>
			</div>

            <?php include('includes/footer.php')?>
			
		</div>
	</body>
</html>