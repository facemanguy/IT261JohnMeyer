<?php
    include('config.php');
    include('includes/header.php');

    date_default_timezone_set('America/Los_Angeles');
$todayDate = date('H:i A');

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

//echo '<br>';

switch($today){
    case 'Monday':
    $character = 'Monday\'s special is Chicken Teriyaki';
    $pic = 'chicken.jpg';
    $alt = "Chicken Teriyaki";
    $content = "An absolute classic, Tim's chicken teriyaki is sure to be a crowd pleaser. Start your week off right with Tim's!";
    $background = 'white';
    break;

    case 'Tuesday':
    $character = 'Tuesday\'s special is Bento';
    $pic = 'bento.jpg';
    $alt = "Bento Box";
    $content = 'A home cooked box of goodness that sparks joy in everyone\'s day. Bring home some bento for cheap every Tuesday!';
    $background = 'darkorange';
    break;
    
    case 'Wednesday':
    $character = 'Wednesday\'s special is General Tso\'s spicy chicken.';
    $pic = 'tso.jpg';
    $alt = "General Tso Chicken";
    $content = 'What a way to spice up your Wednesday!';
    $background = 'yellow';
    break;

    case 'Thursday':
    $character = 'Thursday\'s special is Pork Combo';
    $pic = 'combo.jpg';
    $alt = "Pork and Chicken Combo";
    $content = 'Pick any pork combination meal and enjoy a nice discount!';
    $background = 'lightblue';
    break;

    case 'Friday':
    $character = 'Friday\'s special is Yakisoba';
    $pic = 'yakisoba.jpg';
    $alt = "Yakisoba";
    $content = "Long noodles for a long week. Enjoy some yakisoba with the start of the weekend!";
    $background = 'red';
    break;
    
    case 'Saturday':
    $character = 'Saturday\'s special is Gyoza';
    $pic = 'gyoza.jpg';
    $alt = "Gyoza dumpling platter";
    $content = 'Gyoza is the perfect appetizer to any dish. Grab a discount on all the different platters!';
    $background = 'salmon';
    break;

    case 'Sunday':
    $character = 'Sunday\'s special is Sushi';
    $pic = 'sushi.jpg';
    $alt = "Sushi platter";
    $content = "Sushi is the perfect poppable snack. Grab any plate for cheap every Sunday!";
    $background = 'violet';
    break;
}

?>

<!-- BEGIN DAILY CONTENT -->
		<div class="gridContainer">
            <header>
                <h1>Tim's Daily Special</h1>
                <h2>
                    <?php
                        if($todayDate <=11){
                            echo 'Good Morning!';
                        }elseif($todayDate <= 16){
                            echo "Good Afternoon!";
                        }else{
                            echo "Good Evening!";
                        }
                        echo "<br>";
                        echo $character;
                    ?>
                </h2>
            </header>
			<div class="showcase  <?php echo $background;?>">
                <img class="image" src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
			</div>
			<div class="<?php echo $background;?>">
                <h2><?php echo $content;?></h2>
            </div>
            <div class="<?php echo $background;?>">
				<h3>Check out our other daily specials below:</h3>
                <ul>
                    <li><a style="color: <?php if($today == 'Monday'){echo 'goldenrod';}else{echo 'blue';};?>" href="daily.php?today=Monday">Monday</a></li>
                    <li><a style="color: <?php if($today == 'Tuesday'){echo 'cyan';}else{echo 'blue';};?>" href="daily.php?today=Tuesday">Tuesday</a></li>
                    <li><a style="color: <?php if($today == 'Wednesday'){echo 'hotpink';}else{echo 'blue';};?>" href="daily.php?today=Wednesday">Wednesday</a></li>
                    <li><a style="color: <?php if($today == 'Thursday'){echo 'darkorange';}else{echo 'blue';};?>" href="daily.php?today=Thursday">Thursday</a></li>
                    <li><a style="color: <?php if($today == 'Friday'){echo 'green';}else{echo 'blue';};?>" href="daily.php?today=Friday">Friday</a></li>
                    <li><a style="color: <?php if($today == 'Saturday'){echo 'darkred';}else{echo 'blue';};?>" href="daily.php?today=Saturday">Saturday</a></li>
                    <li><a style="color: <?php if($today == 'Sunday'){echo 'white';}else{echo 'blue';};?>" href="daily.php?today=Sunday">Sunday</a></li>
                </ul>
                <p><?php echo "Doesn't ".$alt." sound great on a ".$today."?"?></p>
			</div>

			
            <?php include('includes/footer.php')?>
			
		</div>
	</body>
</html>