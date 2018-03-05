<?php include '../view/header.php'; ?>

<div class = "container">

<?php
require ('../model/database.php');
require ('../model/functions.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];


register ($id, $email, $fname, $lname, $password);

redirect ("Sucessfully Registered! Please sign in.", "../view/signin.php", '3') ; 
?>

</div>

<?php include '../view/footer.php'; ?>