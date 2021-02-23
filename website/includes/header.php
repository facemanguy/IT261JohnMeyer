<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta  http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="John Meyer PHP Website">
		<meta name="author" content="John Meyer">
        <!-- Title Changes on page change -->
		<title><?php echo $title;?></title>
		<link rel="stylesheet" href="css/website.css">
		<link rel="stylesheet" href="../css/nav.css">
	</head>

	<body class="<?php echo $body;?>">
		<nav class="navbar">
			<ul class="navbar-nav">
                <li id="logobox">
                    <img class="logo" src="images/logo.svg" alt="John Meyer Logo"/>
                </li>
                <?php echo makeLinks($nav);?>
            </ul>
        </nav>
<!-- END HEADER INSERT -->