<?php
require ('../model/database.php');
require ('../model/functions.php');
require ('../model/todo_db.php');

session_start();


ses_logut($_SESSION['id'],$_SESSION['email']);


session_unset();

session_destroy();

header("location:../");

exit();

?>
