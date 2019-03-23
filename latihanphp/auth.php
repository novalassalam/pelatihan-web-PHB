<?php

$username = $_POST["user"];
$password = $_POST["pass"];

if ($username == 'admin' && $password == 'tes') {
	echo 'masuk';
} else if($username == 'admin' && $password != 'tes'){
	echo 'username cocok password salah';	
} else if($username != 'admin' && $password == 'tes'){
	echo 'username salah  password cocok';	
} else {
	echo 'salah semua';
}

?>