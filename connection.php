<?php

$username = "root";
$password = "root";
$server = "localhost";
$db = "practice_database";

$check = mysqli_connect($server,$username,$password,$db);

if($check)
{
    ?>
        <script>

            alert("connection successfull");
        </script>
    <?php
}
else{
    echo "connection failed";
}

?>