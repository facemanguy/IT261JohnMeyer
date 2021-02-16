<?php
    $firstName = '';
    $lastName = '';
    $email = '';
    $gender = '';
    $meads = '';
    $region = '';
    $comments = '';
    $agree = '';
    $phone = '';
    
    $firstNameError = '';
    $lastNameError = '';
    $emailError = '';
    $genderError = '';
    $meadsError = '';
    $regionError = '';
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

        function myMeads(){
            $myReturn = '';
            // If array is not empty, implode

            if(!empty($_POST['meads'])){
                $myReturn = implode(' ,', $_POST['meads']);
            }
            return $myReturn;
        }


        if(isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['phone'], $_POST['gender'], $_POST['meads'], $_POST['region'], $_POST['comments'], $_POST['agree'])){
            $to = 'john32meyer@gmail.com';
            $subject = 'Test Email for Form 1 '.date('m/d/y');
            $body = 'First and Last name '.$firstName.' '.$lastName.'!'.PHP_EOL.'
            Your email is: '.$email.''.PHP_EOL.'
            Your Phone Number is: '.$phone.''.PHP_EOL.'
            Your gender is: '.$gender.''.PHP_EOL.'
            Youe comments were: '.$comments.''.PHP_EOL.'
            Your selected region is: '.$region.''.PHP_EOL.'
            Your selected meads are: '.myMeads().'';

            $headers = array('From' => 'no-reply@johnmeyerdev.com', 'Reply-to' => ' '.$email.'');

            if($_POST['firstname'] !== '' && $_POST['lastname'] !== '' && $_POST['email'] && $_POST['phone'] !== '' && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) && $_POST['gender'] !== '' && $_POST['meads'] !== '' && $_POST['region'] !== 'NULL' && $_POST['comments'] !== '' && $_POST['agree'] !== ''){
                mail($to, $subject, $body, $headers);
                header('Location:thanks.php');
            }

        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 4</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Phones and Headers</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
            <label>First Name</label>
            <input type="text" name="firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']);?>">
            <span class="error"><?php echo $firstNameError;?></span>
            <label>Last Name</label>
            <input type="text" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']);?>">
            <span class="error"><?php echo $lastNameError;?></span>
            <label>Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
            <span class="error"><?php echo $emailError;?></span>
            <label>Phone Number</label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
            <span class="error"><?php echo $phoneError;?></span>
            <label>Gender</label>
            <ul>
                <li><input type="radio" name="gender" value="female" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"';?>"> Female</li>
                <li><input type="radio" name="gender" value="male"> Male</li>
                <li><input type="radio" name="gender" value="other"> Other</li>
            </ul>
            <span class="error"><?php echo $genderError;?></span>
            <label>Mead</label>
            <ul>
                <li><input type="checkbox" name="meads[]" value="traditional" <?php if(isset($_POST['meads']) && in_array('traditional', $meads)) echo'checked="checked"';?>> Traditional</li>
                <li><input type="checkbox" name="meads[]" value="hibiscus" <?php if(isset($_POST['meads']) && in_array('hibiscus', $meads)) echo'checked="checked"';?>> Hibiscus</li>
                <li><input type="checkbox" name="meads[]" value="rasberry" <?php if(isset($_POST['meads']) && in_array('rasberry', $meads)) echo'checked="checked"';?>> Rasberry</li>
                <li><input type="checkbox" name="meads[]" value="blueberry" <?php if(isset($_POST['meads']) && in_array('blueberry', $meads)) echo'checked="checked"';?>> Blueberry</li>
                <li><input type="checkbox" name="meads[]" value="wildflower" <?php if(isset($_POST['meads']) && in_array('wildflower', $meads)) echo'checked="checked"';?>> Wildflower</li>
            </ul>
            <span class="error"><?php echo $meadsError;?></span>
            <label>Region</label>
            <select name="region">
                <option value="NULL" <?php if(isset($_POST['region']) && $_POST['region'] == 'NULL') echo'selected="unselected"';?>>Select One</option>
                <option value="northEast" <?php if(isset($_POST['region']) && $_POST['region'] == 'northEast') echo'selected="selected"';?>>NorthEast</option>
                <option value="northWest" <?php if(isset($_POST['region']) && $_POST['region'] == 'northWest') echo'selected="selected"';?>>NorthWest</option>
                <option value="southWest" <?php if(isset($_POST['region']) && $_POST['region'] == 'southWest') echo'selected="selected"';?>>SouthWest</option>
                <option value="southEast" <?php if(isset($_POST['region']) && $_POST['region'] == 'southEast') echo'selected="selected"';?>>SouthEast</option>
                <option value="midwest" <?php if(isset($_POST['region']) && $_POST['region'] == 'midwest') echo'selected="selected"';?>>Midwest</option>
            </select>
            <span class="error"><?php echo $regionError;?></span>
            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
            <span class="error"><?php echo $commentsError;?></span>
            <label>Agree</label>
            <ul>
                <li><input type="radio" name="agree" value="agree" <?php if(isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked="checked"';?>>Agree</li>
            </ul>
            <span class="error"><?php echo $agreeError;?></span>
            <input type="submit" value="submit">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>



</body>
</html>