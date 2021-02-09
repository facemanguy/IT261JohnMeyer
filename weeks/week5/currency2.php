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
            <label>Banking Institution</label>
            <select name="bank">
                <option value="NULL">Select a Bank</option>
                <option value="boa">Bank of America</option>
                <option value="chase">Chase</option>
                <option value="becu">Boeing Employee Credit Union</option>
                <option value="cash">Cash</option>
            </select>

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

                <div class="box">
                    <?php
                        echo '<h2>Hello '.$name.'</h2>';
                        echo '<p>You have $ '.$totalFormat.'</p>';
                        echo '<p>Your money will be transferred to '.$bank.' momentarily</p>';
                        echo '<p>We have sent you an email at '.$email.'</p>';
                    ?>
                </div>

                <?php
            }
            
        }

    
    ?>
</body>
</html>