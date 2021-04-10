<?php

$username=$_GET['username'];
$password=$_GET['password'];
// echo($username.' '.$password);
$login='Bqee';
$pass='ged';

if ($login!=$username) {
    echo 'invalid login ';
}

else if($pass!=$password){
    echo 'invalid password';
}

else{
    echo 'successful connected';
}

?>