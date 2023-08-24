<?php
session_start();

require_once('dbcontroller.php');
$dbhandler = new DBController();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $fname=$dbhandler->verifyData($_POST['fname']);
    $mname=$dbhandler->verifyData($_POST['mname']);
    $lname=$dbhandler->verifyData($_POST['lname']);
    $gender=$dbhandler->verifyData($_POST['gender']);
    $bdate=$dbhandler->verifyData($_POST['birthdate']);
    $address=$dbhandler->verifyData($_POST['address']);

    $sql = "INSERT INTO students (fname, mname, lname, gender, bdate, address)
    VALUES ('$fname','$mname','$lname','$gender','$bdate','$address')";

    if ($dbhandler->InsertUpdateDelete($sql)) {
        $_SESSION['stud_fn']=$fname;
        $_SESSION['stud_mn']=$mname;
        $_SESSION['stud_ln']=$lname;
        $_SESSION['stud_gn']=$gender;
        $_SESSION['stud_bd']=$bdate;
        $_SESSION['stud_ad']=$address;
        $_SESSION['stat']='cr';
        echo "New record created successfully";
    } else {
        echo "Failed to create a record!";
    }

}

?>