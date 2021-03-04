<?php

    ob_start();
    define('DEBUG', 'TRUE');

    include('../weeks/week8/credentials.php');

    define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    date_default_timezone_set('America/Los_Angeles');

    $nav = array(
        'index.php' => 'Home',
        'about.php' => 'About',
        'daily.php' => 'Daily',
        'people.php' => 'People',
        'contact.php' => 'Contact',
        'gallery.php' => 'Gallery'
    );

    function makeLinks($nav){
        $myReturn = '';
        foreach($nav as $key => $value){
            if(THIS_PAGE == $key){
                $myReturn .= '<li class="active"><a href="'.$key.'"> '.$value.'</a></li>';
            }else{
                $myReturn .= '<li><a href="'.$key.'"> '.$value.'</a></li>';
            }
        }
        return $myReturn;
    }

    // old method
    // // Set to active page style
    // foreach($nav as $key => $value){
    //     if(THIS_PAGE == $key){
    //         echo '<li class="active"><a href="'.$key.'"> '.$value.'</a></li>';
    //     }else{
    //         echo '<li><a href="'.$key.'"> '.$value.'</a></li>';
    //     }
    // }

    function rpgImages(){
        $photos[0] = 'barbarian';
        $photos[1] = 'bard';
        $photos[2] = 'cleric';
        $photos[3] = 'druid';
        $photos[4] = 'fighter';
        $photos[5] = 'monk';
        $photos[6] = 'paladin';
        $photos[7] = 'ranger';
        $photos[8] = 'rogue';
        $photos[9] = 'sorcerer';
        $photos[10] = 'warlock';
        $photos[11] = 'wizard';
        
        $i = rand(0, 11);
        $selectedImage = 'images/'.$photos[$i].'.jpg';
        echo '<img class="image" src="'.$selectedImage.'" alt="'.$photos[$i].'">';
    }

    switch(THIS_PAGE){
        case 'index.php':
        $title = "Home page of John's website project";
        $body = 'home';
        break;

        case 'about.php':
        $title = "About page of John's website project";
        $body = 'about';
        break;

        case 'daily.php':
        $title = "Daily page of John's website project";
        $body = 'daily';
        break;

        case 'people.php':
        $title = "People page of John's website project";
        $body = 'people';
        break;
        
        case 'contact.php':
        $title = "Contact page of John's website project";
        $body = 'contact';
        break;
        
        case 'gallery.php':
        $title = "Gallery page of John's website project";
        $body = 'gallery';
        break;

        default:
        $body = 'home';
        $title = 'Website Default';

    }

    // Form
    $firstName = '';
    $lastName = '';
    $email = '';
    $archetype = '';
    $playstyle = '';
    $faction = '';
    $comments = '';
    $agree = '';
    $phone = '';
    
    $firstNameError = '';
    $lastNameError = '';
    $emailError = '';
    $archetypeError = '';
    $playstyleError = '';
    $factionError = '';
    $commentsError = '';
    $agreeError = '';
    $phoneError = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // If a field is empty create an error variable
        if(empty($_POST['firstName'])){
            $firstNameError = 'Please enter a First Name';
        }else{
            $firstName = $_POST['firstName'];
        }

        if(empty($_POST['lastName'])){
            $lastNameError = 'Please enter a last Name';
        }else{
            $lastName = $_POST['lastName'];
        }

        if(empty($_POST['email'])){
            $emailError = 'Please enter an email';
        }else{
            $email = $_POST['email'];
        }

        if(empty($_POST['phone'])){
            $phoneError = 'Please enter your phone number';
        }elseif(array_key_exists('phone', $_POST)){
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){
                $phoneError = 'Invalid Format (Use xxx-xxx-xxxx)';
            }else{
                $phone = $_POST['phone'];
            }
        }

        if(empty($_POST['archetype'])){
            $archetypeError = 'Please select an archetype';
        }else{
            $archetype = $_POST['archetype'];
        }

        if(empty($_POST['playstyle'])){
            $playstyleError = 'Please select a preffered playstyle';
        }else{
            $playstyle = $_POST['playstyle'];
        }

        if($_POST['faction'] == 'NULL'){
            $factionError = 'Please select a faction';
        }else{
            $faction = $_POST['faction'];
        }

        if(empty($_POST['comments'])){
            $commentsError = 'Please enter a comment';
        }else{
            $comments = $_POST['comments'];
        }

        if(empty($_POST['agree'])){
            $agreeError = 'You must agree to proceed';
        }else{
            $agree = $_POST['agree'];
        }

        function myplaystyle(){
            $myReturn = '';
            // If array is not empty, implode

            if(!empty($_POST['playstyle'])){
                $myReturn = implode(' ,', $_POST['playstyle']);
            }
            return $myReturn;
        }


        if(isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['phone'], $_POST['archetype'], $_POST['playstyle'], $_POST['faction'], $_POST['comments'], $_POST['agree'])){
            $to = 'john32meyer@gmail.com';
            $subject = 'Test Email for Form 1 '.date('m/d/y');
            $body = 'First and Last name '.$firstName.' '.$lastName.'!'.PHP_EOL.'
            Your email is: '.$email.''.PHP_EOL.'
            Your Phone Number is: '.$phone.''.PHP_EOL.'
            Your archetype is: '.$archetype.''.PHP_EOL.'
            Youe comments were: '.$comments.''.PHP_EOL.'
            Your selected faction is: '.$faction.''.PHP_EOL.'
            Your selected playstyle are: '.myplaystyle().'';

            $headers = array('From' => 'no-reply@johnmeyerdev.com', 'Reply-to' => ' '.$email.'');

            if($_POST['firstName'] !== '' && $_POST['lastName'] !== '' && $_POST['email'] && $_POST['phone'] !== '' && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) && $_POST['archetype'] !== '' && $_POST['playstyle'] !== '' && $_POST['faction'] !== 'NULL' && $_POST['comments'] !== '' && $_POST['agree'] !== ''){
                mail($to, $subject, $body, $headers);
                header('Location:../weeks/week6/thanks.php');
            }

        }

    }

    function myError($myFile, $myLine, $errorMsg){
        if(defined('DEBUG') && DEBUG){
            echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
            echo 'Error message: <b> '.$errorMsg.'</b>';
            die();
        }else{
            echo ' Houston, we have a problem!';
            die();
        }
    }

?>