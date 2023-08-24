<?php
session_start();

require_once('dbcontroller.php');
$dbhandler = new DBController();


if($_SERVER['REQUEST_METHOD']==='POST'){
    $fname=$dbhandler->verifyData($_POST['fname']);
    $lname=$dbhandler->verifyData($_POST['lname']);
    $age=$dbhandler->verifyData($_POST['age']);
    $gender=$dbhandler->verifyData($_POST['gender']);
    $address=$dbhandler->verifyData($_POST['address']);
    $birthdate=$dbhandler->verifyData($_POST['birthdate']);
    $birthplace=$dbhandler->verifyData($_POST['birthplace']);
    $educ=$dbhandler->verifyData($_POST['educ']);
    $sector=$dbhandler->verifyData($_POST['sector']);
    $cnumber=$dbhandler->verifyData($_POST['cnumber']);
    $religion=$dbhandler->verifyData($_POST['religion']);
   

    //value ang with $
   

    $sql = "INSERT INTO client (fname, lname,age,gender,address,birthdate,birthplace,educ,sector,cnumber,religion)
    VALUES ('$fname','$lname','$age','$gender','$address','$birthdate','$birthplace','$educ','$sector','$cnumber','$religion')";


          if ($dbhandler->InsertUpdateDelete($sql)) {
     
               echo "New record created successfully";
           } else {
               echo "Failed to create a record!";
          }

}

?>