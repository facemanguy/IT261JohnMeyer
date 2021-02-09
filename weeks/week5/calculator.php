<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Calculator</title>
</head>
<body>
    <h1>Trip Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <fieldset>
            <label>How many miles will you be driving?</label>
            <input type="text" name="distance" value="<?php if(isset($_POST['distance'])) echo htmlspecialchars($_POST['distance']);?>">
            <label>Price per gallon of Gas</label>
            <ul>
                <li><input type="radio" name="PPG" value="2.50" <?php if(isset($_POST['PPG']) && $_POST['PPG'] == '2.50') echo 'checked = "checked"';?>>$2.50</li>
                <li><input type="radio" name="PPG" value="3.00" <?php if(isset($_POST['PPG']) && $_POST['PPG'] == '3.00') echo 'checked = "checked"';?>>$3.00</li>
                <li><input type="radio" name="PPG" value="3.50" <?php if(isset($_POST['PPG']) && $_POST['PPG'] == '3.50') echo 'checked = "checked"';?>>$3.50</li>
                <li><input type="radio" name="PPG" value="4.00" <?php if(isset($_POST['PPG']) && $_POST['PPG'] == '4.00') echo 'checked = "checked"';?>>$4.00</li>
            </ul>
            <label>Fuel Effeciency rating</label>
            <select name="efficency">
                <option value="NULL" <?php if(isset($_POST['efficency']) && $_POST['efficency'] == 'NULL') echo 'selected = "unselected"';?>>Select</option>
                <option value="guzzler" <?php if(isset($_POST['efficency']) && $_POST['efficency'] == 'guzzler') echo 'selected = "selected"';?>>Guzzler</option>
                <option value="poor" <?php if(isset($_POST['efficency']) && $_POST['efficency'] == 'poor') echo 'selected = "selected"';?>>Poor</option>
                <option value="decent" <?php if(isset($_POST['efficency']) && $_POST['efficency'] == 'decent') echo 'selected = "selected"';?>>Decent</option>
                <option value="good" <?php if(isset($_POST['efficency']) && $_POST['efficency'] == 'good') echo 'selected = "selected"';?>>Good</option>
                <option value="excellent" <?php if(isset($_POST['efficency']) && $_POST['efficency'] == 'excellent') echo 'selected = "selected"';?>>Excellent</option>
            </select>

            <input type="submit" value="calculate">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>    

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['distance']) || !is_numeric($_POST['distance'])){
                echo '<p>Please enter a Distance in Miles</p>';
            }
            if(empty($_POST['PPG'])){
                echo '<p>Please select a price per gallon estimate</p>';
            }
            if(empty($_POST['efficency'])){
                echo '<p>Please select an efficency rating</p>';
            }

            if(isset($_POST['distance'], $_POST['PPG'], $_POST['efficency']) && is_numeric($_POST['distance'])){
                $distance = $_POST['distance'];
                $PPG = $_POST['PPG'];
                $efficency = $_POST['efficency'];
                $mpg = 0;

                if($efficency == 'guzzler'){
                    $mpg = 8;
                }elseif($efficency == 'poor'){
                    $mpg = 18;
                }elseif($efficency == 'decent'){
                    $mpg = 26;
                }elseif($efficency == 'good'){
                    $mpg = 35;
                }elseif($efficency == 'excellent'){
                    $mpg = 42;
                }else{
                    $mpg = 100000;
                }
                
                $estimate = ($distance / $mpg) * $PPG;
                $estimateFormat = number_format($estimate, 2);
            
                ?>
                <div class="results">
                    <?php
                        echo '<p>Your trip is '.$distance.' miles long.</p>';
                        echo '<p>Your estimated MPG is '.$mpg.' miles per gallon.</p>';
                        echo '<p>Your estimated cost for gasoline is approxiametly $'.$estimateFormat.'dollars.</p>';
                    ?>
                </div>
                <?php
            }
        }
    
    ?>

    
</body>
</html>