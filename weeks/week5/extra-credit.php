<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Currency Form</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        form{
            max-width: 50vw;
            margin: 2rem auto;
        }
        
        fieldset{
            padding: 1rem;
            background-color: cornsilk;
        }

        label{
            display: block;
            margin-bottom: 0.5rem;
        }

        form ul{
            list-style: none;
            margin-left: 2rem;
            margin-bottom: 0.5rem;
        }

        input[type=text],
        input[type=email]{
            width: 100%;
            margin-bottom: 1rem;
        }

        input[type=submit]{
            margin: 1rem 0.5rem 0.5rem 0;
            padding: 0.5rem;
            background-color: green;
            color: honeydew;
            text-decoration: none;
            display: block;
        }

        h3{
            text-align: center;
            font-weight: 800;
            font-size: 150%;
        }

        .box{
            margin: 0 auto;
            padding: 1rem;
            text-align: center;
        }

        .videobox{
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .goodmoney{
            background-color: cyan;
            padding: 1rem;
            color: blanchedalmond;
            text-shadow: 3px 2px 5px black;
            max-width: 50vw;
            margin: 0 auto;
        }

        .badmoney{
            background-color: darkslategray;
            padding: 1rem;
            color: blanchedalmond;
            text-shadow: 3px 2px 5px black;
            max-width: 50vw;
            margin: 0 auto;
        }

        h1{
            text-align: center;
            margin: 0 auto;
            padding-top: 2rem;
            font-weight: 900;
            font-size: 4rem;
        }

        .reset{
            margin: 0.5rem 0.5rem 0.5rem 0;
            padding: 0.5rem;
            background-color: blueviolet;
            color: honeydew;
            text-decoration: none;
            display: inline-block;
            max-width: 4rem;
            text-align: center;
        }

        .reset a{
            text-decoration: none;
            color: cornsilk;
        }


    </style>
</head>
<body>
    <h1>Extra Credit Currency Assignment</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">
            <label>Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
            <label>How much money do you have?</label>
            <input type="text" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']);?>">
            <label>Currency Type</label>
            <ul>
                <li><input type="radio" name="currency" value="0.013" <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked = "checked"';?>> Rubles</li>
                <li><input type="radio" name="currency" value="0.76" <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.76') echo 'checked = "checked"';?>> Canadian Dollar</li>
                <li><input type="radio" name="currency" value="1.28" <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked = "checked"';?>> Pounds</li>
                <li><input type="radio" name="currency" value="1.18" <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked = "checked"';?>> Euros</li>
                <li><input type="radio" name="currency" value="0.0094" <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.0094') echo 'checked = "checked"';?>> Yen</li>
            </ul>
            <label>Banking Institution</label>
            <select name="bank">
                <option value="NULL" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'NULL') echo 'selected = "unselected"';?>>Select a Bank</option>
                <option value="boa" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'boa') echo 'selected = "selected"';?>>Bank of America</option>
                <option value="chase" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected = "selected"';?>>Chase</option>
                <option value="becu" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected = "selected"';?>>Boeing Employee Credit Union</option>
                <option value="cash" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'cash') echo 'selected = "selected"';?>>Cash</option>
            </select>

            <input type="submit" value="Convert">
            <p class="reset"><a href="">Reset</a></p>

        </fieldset>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['name'])){
                echo '<p>Please enter a name</p>';
            }
            if(empty($_POST['email'])){
                echo '<p>Please enter an email</p>';
            }
            if(empty($_POST['amount']) || !is_numeric($_POST['amount'])){
                echo '<p>Please enter a valid amount</p>';
            }
            if(empty($_POST['currency'])){
                echo '<p>Please select a currency</p>';
            }
            if($_POST['bank'] == 'NULL'){
                echo '<p>Please select a banking institution</p>';
            }

            if(isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank']) && is_numeric($_POST['amount'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $amount = $_POST['amount'];
                $currency = $_POST['currency'];
                $bank = $_POST['bank'];
                $total = $amount * $currency;
                $totalFormat = number_format($total, 2);
                ?>

                <!-- Respond differently to value -->

                <div class="box">
                    <?php
                        if($total >= 2000) {
                            echo '<div class="goodmoney">';
                            echo '<h3>That\'s a lot of money! With $'.$totalFormat.' Dollars I would get up and dance! Just watch your step! 😉</h3>';
                            echo '<div class="videobox">';
                            echo '  <iframe width="560" height="315" src="https://www.youtube.com/embed/1u1gl4ebNaM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                            echo '</div>';
                            echo '</div>';
                        }else{
                            echo '<div class="badmoney">';
                            echo '<h3>That\'s $'.$totalFormat.' Dollars. That not a lot right now but you can make it if you try. We\'ve all got to try! 🌠</h3>';
                            echo '<div class="videobox">';
                            echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/mRfSM-lv55I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
                </div>

                <?php
            }
            
        }

    
    ?>

    <footer class="box">
        <p><a  href="http://validator.w3.org/check/?uri=referer" target="_blank">Html Validation</a></p>
        <p><a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Css Validation</a></p>
    </footer>
</body>
</html>