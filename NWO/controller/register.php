<?php include '../view/header.php'; ?>

<div class = "container">

<?php
require ('../model/database.php');
require ('../model/functions.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];



	
	
$flag = register (rand(),$email, $fname, $lname, $password);
	
if ($flag == "23000"){
	redirect ("Username already taken. Chose a different one.", "../view/register.php", '3') ;
}elseif ($flag == "00000"){
	redirect ("Sucessfully Registered! Please sign in.", "../view/signin.php", '3') ;
}else{
	echo $flag; 
}

?>

</div>

<?php include '../view/footer.php'; ?>