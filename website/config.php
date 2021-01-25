<?php

    define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    $nav = array(
        'index.php' => 'Home',
        'about.php' => 'About',
        'daily.php' => 'Daily',
        'people.php' => 'People',
        'contact.php' => 'Contact',
        'gallery.php' => 'Gallery'
    );

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
    }

?>