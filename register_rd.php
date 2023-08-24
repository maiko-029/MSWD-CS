<?php

require_once("dbcontroller.php");
$dbhandler = new DBController();



if($_SERVER['REQUEST_METHOD']==='POST'){
    $fname=$dbhandler->verifyData($_POST['fname']);
    $lname=$dbhandler->verifyData($_POST['lname']);
    $email=$dbhandler->verifyData($_POST['email']);
    $psw=$dbhandler->verifyData($_POST['password']);
    
    //encrypted password to msql database
    $encrypted_psw=md5($psw);

    $sql = "INSERT INTO member (fname, lname, email, password)
    VALUES ('$fname','$lname','$email','$encrypted_psw')";

    if($dbhandler->InsertUpdateDelete($sql)){
        echo 'Successfully Registered';
   } else {
        echo 'Failed to register!';
   }

}

?>