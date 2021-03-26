<?php
    include('config.php');
	include('includes/config.php');
    include('includes/header.php');
?>

<!-- BEGIN PEOPLE CONTENT -->
		<div style="background-image: url('images/display.jpg');">
			<div class="gridContainer" style="grid-template-columns: (4, 1fr);">
				<header>
					<h1>Time to Eat!</h1>
				</header>
				<?php
				$sql = 'SELECT * FROM TimMenu';
				$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

				$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<div style="background-color: rgba(255, 245, 238, 0.6);">';
						echo '<ul>';
						echo '<li><b>Dish:</b>  '.$row['dishName'].'</li>';
						echo '<li><b>Price:</b>  $'.$row['price'].'</li>';
						echo '<li>More information <a href="menu-view.php?id='.$row['menuId'].' ">Here</a></li>';
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