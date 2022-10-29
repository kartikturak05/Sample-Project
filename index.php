<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
<?php include 'links.php' ?>

</head>
<body>
<div class="container-fluid">
  <h3>Login page </h3>
  <form method="POST">
      <div>Enter name </div>
      <input type="text" name="name" value="">
      <br>
      <div>Enter Department </div>
      <input type="text" name="department" value="">
      <br>
      <div>Enter Year </div>
      <input type="text" name="Year" value="">
      <br>
      <div>Enter Sem </div>
      <input type="text" name="sem" value="">
      <br>
      <div>Enter phone number  </div>
      <input type="text" name="phone_no" value="">
      <br>
      <div>Enter Email</div>
      <input type="text" name="email" value="">
      <br>
      <input type="submit" name = "submit" >
      <br>
      <a href="display.php" >SHOW</a>
    </form>
    </div>

</body>
</html>
<?php 

include 'connection.php' ;

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $dept  = $_POST['department'];
    $year  = $_POST['Year'];
    $sem = $_POST['sem'];
    $phone = $_POST['phone_no'];
    $email = $_POST['email'];

    $insert_query = "INSERT INTO registration_table (`ID`, `name`, `department`, `year`, `sem`, `phone_no`, `email`) VALUES (NULL, '$name ', '$dept ', '$year ', '$sem', '$phone', '$email')";
    $insert_check = mysqli_query($check,$insert_query);

    if($insert_check){
        ?>
        <script>alert("data inserted successfuly by kartik")</script>
        <?php
    }
    else{
        ?>
        <script>alert("data not inserted ")</script>
        <?php
    }

}
?>