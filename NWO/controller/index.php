<?php
require ('../model/database.php');
require ('../model/functions.php');
require ('../model/todo_db.php');

session_start();

$email = $_POST['email']; //Gets email from user
$pass= $_POST['pass']; //Gets password from user

if($_SESSION['logged'] != true) { //Creates a new session
    $_SESSION['username'] = auth ($email, $pass);

    if ($_SESSION['username'] == NULL) { //Authorizes users signin
	   redirect ("Missing or Incorrect Email or Password, Returning to Main Page", "../view/signin.php", '4') ; }
    else {
        $_SESSION['email'] = $email;
        $_SESSION['logged'] = true; }
    }

$username = $_SESSION['username'];

$action = filter_input (INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'load_items';
    }
}

if ($action == 'load_items') {
    $user_email = filter_input(INPUT_GET, 'email',
            FILTER_VALIDATE_INT);
    if ($email== NULL || $email == FALSE) {
        $email = 1;
    }
    $items = get_all_items();
    include('../view/todo_list.php');
}



?>
