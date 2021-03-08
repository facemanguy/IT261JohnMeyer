<?php
// Server communication with database

session_start();

$FirstName = '';
$LastName = '';
$Email = '';
$UserName = '';
$errors = array();
$success = 'You are now logged in';

//Connection Start
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//register user
if(isset($_POST['reg_user'])){
    //Receive information
    $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
    $Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);

    //Error Checking
    if(empty($FirstName)){
        array_push($errors, 'First Name is required');
    }

    if(empty($LastName)){
        array_push($errors, 'Last Name is required');
    }
    
    if(empty($Email)){
        array_push($errors, 'Email is required');
    }

    if(empty($UserName)){
        array_push($errors, 'Username is required');
    }

    if(empty($Password_1)){
        array_push($errors, 'Password is required');
    }

    if($Password_1 != $Password_2){
        array_push($errors, 'Passwords do not match');
    }

    $user_check_query = "SELECT * FROM Users WHERE UserName = '$UserName' OR Email = '$Email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($db)));
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($user['UserName'] == $UserName){
            array_push($errors, 'Username already exists');
        }

        if($user['Email'] == $Email){
            array_push($errors, 'Email already exists');
        }
    }
    
    // On success, encrypt password
    if(count($errors) == 0){
        $Password = md5($Password_1);
        $query = "INSERT INTO Users (FirstName, LastName, Email, UserName, Password) VALUES ('$FirstName','$LastName','$Email','$UserName','$Password')";

        mysqli_query($db, $query);
        $_SESSION['UserName'] = $UserName;
        $_SESSION['success'] = $success;

        header('Location:login.php');
    }
}

?>