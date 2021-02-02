<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Form</title>
    <link href="../../css/celcius-form.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend>John's Celcius Form</legend>
            <label>Enter your value in Celcius</label>
            <input type="text" name="cel">
            <input type="submit" value="Convert">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

    <?php 
        //f = (c * 9/5) +32
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['cel'])){
                $cel = $_POST['cel'];
                $far = ($cel * 9/5) + 32;

                if($far <= 32) {
                    echo '<p class="cool">'.$far.' it\'s freezing cold! </p>';
                }elseif($far <= 50) {
                    echo '<p class="crisp">'.$far.' it\'s a bit crisp! </p>';
                }elseif($far <= 80) {
                    echo '<p class="warm">'.$far.' it\'s getting warm out </p>';
                }else{
                    echo '<p class="hot">'.$far.' it\'s really hot out </p>';
                }
            }
        }
    ?>

</body>
</html>
