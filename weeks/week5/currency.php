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
        }

        form{
            max-width: 33vw;
            margin: 2rem auto;
        }
        
        fieldset{
            padding: 1rem;
        }

        label{
            display: block;
            margin-bottom: 0.5rem;
        }

        form ul{
            list-style: none;
            margin-left: 2rem;
        }

        input[type=text],
        input[type=email]{
            width: 100%;
            margin-bottom: 1rem;
        }

        .box{
            margin: 0 auto;
            padding: 2rem;
            text-align: center;
        }

    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">
            <label>Email</label>
            <input type="email" name="email">
            <label>How much money do you have?</label>
            <input type="text" name="amount">
            <label>Currency Type</label>
            <ul>
                <li><input type="radio" name="currency" value="0.013">Rubles</li>
                <li><input type="radio" name="currency" value="0.76">Canadian Dollar</li>
                <li><input type="radio" name="currency" value="1.28">Pounds</li>
                <li><input type="radio" name="currency" value="1.18">Euros</li>
                <li><input type="radio" name="currency" value="0.0094">Yen</li>
            </ul>
            <input type="submit" value="Convert">
            <p><a href="">Reset</a></p>

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

            if(isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency']) && is_numeric($_POST['amount'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $amount = $_POST['amount'];
                $currency = $_POST['currency'];
                $total = $amount * $currency;
                ?>

                <div class="box">
                    <?php
                        echo '<h2>Hello '.$name.'</h2>';
                        echo '<p>You have $ '.$total.'</p>';
                    ?>
                </div>

                <?php
            }
            
        }

    
    ?>
</body>
</html>