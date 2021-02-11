<?php
    $firstName = '';
    $lastName = '';
    $email = '';
    $gender = '';
    $meads = '';
    $region = '';
    $comments = '';
    $agree = '';
    
    $firstNameError = '';
    $lastNameError = '';
    $emailError = '';
    $genderError = '';
    $meadsError = '';
    $regionError = '';
    $commentsError = '';
    $agreeError = '';
    
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

        if(empty($_POST['gender'])){
            $genderError = 'Please enter your gender';
        }else{
            $gender = $_POST['gender'];
        }

        if(empty($_POST['meads'])){
            $meadsError = 'Please enter a selection of meads';
        }else{
            $meads = $_POST['meads'];
        }

        if($_POST['region'] == 'NULL'){
            $regionError = 'Please select a region';
        }else{
            $region = $_POST['region'];
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

        if(isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['gender'], $_POST['meads'], $_POST['region'], $_POST['comments'], $_POST['agree'])){
            $to = 'john32meyer@gmail.com';
            $subject = 'Test Email for Form 1 '.date('m/d/y');
            $body = 'Hello '.$firstName.' '.$lastName.'!'.PHP_EOL.'
            Your email is'.$email.''.PHP_EOL.'
            Your gender is'.$gender.''.PHP_EOL.'
            Your region is'.$region.'';

            mail($to, $subject, $body);
            header('Location:thanks.php');
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
            <label>First Name</label>
            <input type="text" name="firstName">
            <span class="error"><?php echo $firstNameError;?></span>
            <label>Last Name</label>
            <input type="text" name="lastName">
            <span class="error"><?php echo $lastNameError;?></span>
            <label>Email</label>
            <input type="email" name="email">
            <span class="error"><?php echo $emailError;?></span>
            <label>Gender</label>
            <ul>
                <li><input type="radio" name="gender" value="female"> Female</li>
                <li><input type="radio" name="gender" value="male"> Male</li>
                <li><input type="radio" name="gender" value="other"> Other</li>
            </ul>
            <span class="error"><?php echo $genderError;?></span>
            <label>Mead</label>
            <ul>
                <li><input type="checkbox" name="meads[]" value="traditional"> Traditional</li>
                <li><input type="checkbox" name="meads[]" value="hibiscus"> Hibiscus</li>
                <li><input type="checkbox" name="meads[]" value="rasberry"> Rasberry</li>
                <li><input type="checkbox" name="meads[]" value="blueberry"> Blueberry</li>
                <li><input type="checkbox" name="meads[]" value="wildflower"> Wildflower</li>
            </ul>
            <span class="error"><?php echo $meadsError;?></span>
            <label>Region</label>
            <select name="region">
                <option value="NULL">Select One</option>
                <option value="northEast">NorthEast</option>
                <option value="northWest">NorthWest</option>
                <option value="southWest">SouthWest</option>
                <option value="southEast">SouthEast</option>
                <option value="midwest">Midwest</option>
            </select>
            <span class="error"><?php echo $regionError;?></span>
            <label>Comments</label>
            <textarea name="comments"></textarea>
            <span class="error"><?php echo $commentsError;?></span>
            <label>Agree</label>
            <ul>
                <li><input type="radio" name="agree" value="agree">Agree</li>
            </ul>
            <span class="error"><?php echo $agreeError;?></span>
            <input type="submit" value="submit">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>



</body>
</html>