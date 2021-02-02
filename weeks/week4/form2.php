<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our First Form</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        form {
            width: 400px;
            margin: 0 auto;
        }

        fieldset {
            padding: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        input {
            display: block;
            margin-bottom: 1rem;
        }

        input[type=text],
        input[type=email]{
            width: 100%;
            height: 2rem;
        }

        textarea {
            width: 100%;
            height: 10rem;
            margin-bottom: 1rem;
        }

        ul {
            list-style: none;
        }

        .box {
            width: 30vw;
            margin: 1rem auto;
            padding: 1rem;
            background: limegreen;
        }

        .error {
            color: red;
            text-align: center;
            font-size: 1.5em;
            margin-top: 1rem;
        }

    </style>
</head>
    <body>
        <form action="" method="post">
            <fieldset>
                <label>First Name</label>
                <input type="text" name="firstName">
                <label>Last Name</label>
                <input type="text" name="lastName">
                <label>Email</label>
                <input type="email" name="email">
                <label>Comments</label>
                <textarea name="comments"></textarea>
                <input type="submit" value="Submit">
                <p><a href="">Reset Form</a></p>
            </fieldset>
        </form>
        <?php 
            // If set then apply variables
            if(isset($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['comments'])){
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $email = $_POST['email'];
                $comments = $_POST['comments'];

                if(empty ($firstName && $lastName && $email && $comments)){
                    echo '<p class="error">Fill out missing fields</p>';
                }else{
                    // echo $firstName;
                    // echo '<br>';
                    // echo $lastName;
                    // echo '<br>';
                    // echo $email;
                    // echo '<br>';
                    // echo $comments;
                    // echo '<br>';

                    echo '<div class="box">';
                    echo '<ul>';
                    echo '<li><b>First Name: </b>'.$firstName.'</li>';
                    echo '<li><b>Last Name: </b>'.$lastName.'</li>';
                    echo '<li><b>Email: </b>'.$email.'</li>';
                    echo '<li><b>Comments: </b>'.$comments.'</li>';
                    echo '</ul>';
                    echo '</div>';
                }
                    }
        ?>
    </body>
</html>