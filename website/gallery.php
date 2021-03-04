<?php
    include('config.php');
    include('includes/header.php');

	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
	}else{
		header('Location:gallery.php');
	}
	
	$sql = 'SELECT * FROM FantasyFolk WHERE FantasyFolkID = '.$id.'';
	
	$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
	
	$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
	
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$Name = stripslashes($row['Name']);
			$Homeland = stripslashes($row['Homeland']);
			$Rarity = stripslashes($row['Rarity']);
			$Description = stripslashes($row['Description']);
			$feedback = '';
		}
	}else{
		$feedback = 'Nobody is home';
	}
?>

<!-- BEGIN GALLERY CONTENT -->
		<div class="gridContainer">
            <header>
                <h1>John Meyer's IT261 Gallery Page</h1>
            </header>
			<h1>Yay!</h1>
			<h2>Currently viewing <?php echo $FirstName;?>'s page</h2>
			<?php
				if($feedback == ''){
					echo '<ul>';
					echo '<li><b>Name:</b> '.$Name.'</li>';
					echo '<li><b>Homeland:</b> '.$Homeland.'</li>';
					echo '<li><b>Rarity:</b> '.$Rarity.'</li>';
					echo '</ul>';
					echo '<p>'.$Description.'</p>';
					echo '<p><a href="gallery.php">Return to gallery page</a></p>';
				}else{
					echo $feedback;
				}
			?>
			<?php
				if($feedback == ''){
					echo '<img src="images/folk'.$id.'.jpg" alt="'.$Name.'">';
				}
			?>
            <?php include('includes/footer.php')?>
			<?php
				mysqli_free_result($result);
				mysqli_close($iConn);
        	?>
		</div>
	</body>
</html>