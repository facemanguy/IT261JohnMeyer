<?php 
// Form pt1
// ignore main html, focus on form manipulation

if(isset($_POST['name'], $_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo $name;
    echo $email;
}else{
    echo '
    <form action="" method="post">
        <label>NAME</label>
        <input type="text" name="name"><br>
        <label>EMAIL</label>
        <input type="email" name="email"><br>
        <input type="submit" value="Submit"><br>
        <p><a href="">Reset</a></p>
    </form>
    ';
}

?>