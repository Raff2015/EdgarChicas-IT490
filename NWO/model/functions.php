<?php

function auth ($email , $pass) {
	global $db;
	$query = 'SELECT * FROM Users WHERE email = :email and password = SHA1(:pass) '; 
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


//JW - Adds session id and login time when user logs in
function ses_login ($id, $user){
	global $db;
	
	$query = "UPDATE Users SET session_id=:id,last_login=:time where email=:user";
	$statement = $db->prepare($query);
	$statement->bindValue(':id',$id);
	$statement->bindValue(':time',time()); //JW - Time of login in *epoch*.
	$statement->bindValue(':user',$user);
	$statement->execute();
	
	$statement->closeCursor();
}


//JW - Deletes Session_id upon logout
function ses_logut ($id, $user){
	global $db;
	
	$query = "UPDATE Users SET session_id='' where session_id=:id AND email=:user";
	$statement = $db->prepare($query);
	$statement->bindValue(':id',$id);
	$statement->bindValue(':user',$user);
	$statement->execute();
	$statement->closeCursor();
	
}


function register ($num, $email, $fname, $lname, $password) {
    global $db;
    $query = "INSERT INTO Users
                 (UID, session_id, email, password, fname, lname, reg_date, last_login)
              VALUES
                 (:id, '', :email, SHA1(:password), :fname, :lname, :time, 0)";
    $statement = $db->prepare($query);
    
	$statement->bindValue(':id', $num);
    $statement->bindValue(':email', $email);
	$statement->bindValue(':password', $password);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
   	$statement->bindValue(':time', time());
    $statement->execute();
	
	return $statement->errorCode();
    $statement->closeCursor();
}	

function redirect ($message, $file, $delay) {
	echo $message;
	header ("refresh: $delay; url = $file"); 
	exit(); 
}	


?>