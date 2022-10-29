<?php

include 'connection.php';

$selectquery = 'select * from registration_table';

$query = mysqli_query($check,$selectquery);

while($res = mysqli_fetch_array($query))
{
    echo $res['name']." ".$res['department']." ".$res['year']." ".$res['sem']." ".$res['phone_no']." ".$res['email']." "."</br>";
    
}


?>