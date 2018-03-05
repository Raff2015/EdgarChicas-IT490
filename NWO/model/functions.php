<?php

function auth ($email , $pass) {
	global $db;
	$query = 'SELECT * FROM accounts WHERE email = :email and password = :pass '; 
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':pass', $pass);
	$statement->execute();
	$s = $statement->fetchAll();
	$name = $s[0]['fname'] . " " . $s[0]['lname'];
	if (count($s) > 0){

		return $name;}
	else {
		return NULL;}
}

function register ($id, $email, $fname, $lname, $password) {
    global $db;
    $query = 'INSERT INTO accounts
                 (id, email, fname, lname, password)
              VALUES
                 (:id, :email, :fname, :lname, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}	

function redirect ($message, $file, $delay) {
	echo $message;
	header ("refresh: $delay; url = $file"); 
	exit(); 
}	
?>