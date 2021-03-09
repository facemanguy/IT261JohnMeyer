<?php
    include('config.php');
	include('includes/config.php');
    include('includes/header.php');
?>

<!-- BEGIN PEOPLE CONTENT -->
		<div style="background-image: url('images/crabArt.jpg');">
			<div class="gridContainer">
				<header>
					<h1>Time for Crab!</h1>
				</header>
			
				<h3>Crabs of the Pacific Northwest!</h3>
				<?php
				$sql = 'SELECT * FROM Crabs';
				$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

				$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<div>';
						echo '<ul>';
						echo '<li><b>Common Name:</b>  '.$row['Name'].'</li>';
						echo '<li><b>Scientific Name:</b>  '.$row['Species'].'</li>';
						echo '<li>Want to learn more about the <a href="crabs-view.php?id='.$row['CrabID'].' ">'.$row['Name'].'?</a></li>';
						echo '</ul>';
						echo '</div>';
					}
				}else{
					echo 'Nobody home';
				}

				mysqli_free_result($result);
				mysqli_close($iConn);
				?>
			

				<?php include('includes/footer.php')?>
				
			</div>
		</div>
	</body>
</html>