<?php

include('config.php');

$sql = 'SELECT * FROM it261db';
$iConn = mysqli_connect(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<ul>';
        echo '<li>For more information about <a href="people-view.php?id='.$row['Week8PeopleID'].' ">'.$row['FirstName'].'</a></li>';
        echo '<li><b>First Name:</b>  '.$row['FirstName'].'</li>';
        echo '<li><b>Last Name:</b>  '.$row['LastName'].'</li>';
        echo '<li><b>Occupation:</b>  '.$row['Occupation'].'</li>';
        echo '</ul>';
    }
}else{
    echo 'Nobody home';
}

mysqli_free_result($result);
mysqli_close($iConn);


?>