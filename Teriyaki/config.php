<?php

    define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    date_default_timezone_set('America/Los_Angeles');

    $nav = array(
        'index.php' => 'Home',
        'about.php' => 'About',
        'daily.php' => 'Daily Special',
        'menu.php' => 'Menu',
        'contact.php' => 'Contact'
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

    function menuImages(){
        $photos[0] = '';
        $photos[1] = '';
        $photos[2] = '';
        $photos[3] = '';
        $photos[4] = '';
        $photos[5] = '';
        $photos[6] = '';
        $photos[7] = '';
        $photos[8] = '';
        $photos[9] = '';
        $photos[10] = '';
        $photos[11] = '';
        
        $i = rand(0, 11);
        $selectedImage = 'images/'.$photos[$i].'.jpg';
        echo '<img class="image" src="'.$selectedImage.'" alt="'.$photos[$i].'">';
    }

    switch(THIS_PAGE){
        case 'index.php':
        $title = "Welcome To Tim's Teriyaki";
        $body = 'home';
        break;

        case 'about.php':
        $title = "About Tim's Teriyaki";
        $body = 'about';
        break;

        case 'daily.php':
        $title = "Tim's Daily Special";
        $body = 'daily';
        break;

        case 'menu.php':
        $title = "Tim's Menu";
        $body = 'menu';
        break;
        
        case 'contact.php':
        $title = "Contact Tim's Teriyaki";
        $body = 'contact';
        break;
        
        default:
        $body = 'home';
        $title = 'Website Default';

    }

    // Form
    $firstName = '';
    $lastName = '';
    $email = '';
    $protein = '';
    $sides = '';
    $faction = '';
    $comments = '';
    $agree = '';
    $phone = '';
    
    $firstNameError = '';
    $lastNameError = '';
    $emailError = '';
    $proteinError = '';
    $sidesError = '';
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

        if(empty($_POST['protein'])){
            $proteinError = 'Please select a protein option';
        }else{
            $protein = $_POST['protein'];
        }

        if(empty($_POST['sides'])){
            $sidesError = 'Please select a preffered sides';
        }else{
            $sides = $_POST['sides'];
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

        function sidedish(){
            $myReturn = '';
            // If array is not empty, implode

            if(!empty($_POST['sides'])){
                $myReturn = implode(' ,', $_POST['sides']);
            }
            return $myReturn;
        }


        if(isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['phone'], $_POST['protein'], $_POST['sides'], $_POST['faction'], $_POST['comments'], $_POST['agree'])){
            $to = 'john32meyer@gmail.com';
            $subject = 'Test Email for Form 1 '.date('m/d/y');
            $body = 'First and Last name '.$firstName.' '.$lastName.'!'.PHP_EOL.'
            Your email is: '.$email.''.PHP_EOL.'
            Your Phone Number is: '.$phone.''.PHP_EOL.'
            Your protein is: '.$protein.''.PHP_EOL.'
            Youe comments were: '.$comments.''.PHP_EOL.'
            Your selected faction is: '.$faction.''.PHP_EOL.'
            Your selected sides are: '.sidedish().'';

            $headers = array('From' => 'no-reply@johnmeyerdev.com', 'Reply-to' => ' '.$email.'');

            if($_POST['firstName'] !== '' && $_POST['lastName'] !== '' && $_POST['email'] && $_POST['phone'] !== '' && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) && $_POST['protein'] !== '' && $_POST['sides'] !== '' && $_POST['faction'] !== 'NULL' && $_POST['comments'] !== '' && $_POST['agree'] !== ''){
                mail($to, $subject, $body, $headers);
                header('Location:../weeks/week6/thanks.php');
            }

        }

    }
?>