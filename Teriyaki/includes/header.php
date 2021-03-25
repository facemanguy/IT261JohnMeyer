<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta  http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="Tim's Teriyaki">
		<meta name="author" content="John Meyer">
        <!-- Title Changes on page change -->
		<title><?php echo $title;?></title>
		<link rel="stylesheet" href="css/styles.css">
	</head>

	<body class="<?php echo $body;?>">
		<nav class="navbar">
			<ul class="navbar-nav">
				<a href="index.php"><li id="logobox">
                    <img class="logo" src="images/take-away.png" alt="Tim Logo"/>
                </li></a>
                <?php echo makeLinks($nav);?>
            </ul>
        </nav>
<!-- END HEADER INSERT -->