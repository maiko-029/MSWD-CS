<?php
session_start();

require_once('dbcontroller.php');
$dbhandler = new DBController();

if($_SERVER['REQUEST_METHOD']==='POST'){

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $birthdate=$_POST['birthdate'];
    $birthplace=$_POST['birthplace'];
    $religion=$_POST['religion'];
    $cnumber=$_POST['cnumber'];
    $sector=$_POST['sector'];
    $educ=$_POST['educ'];
    $status=$_POST['status'];
    

    $sql = "UPDATE client SET fname='$fname',lname='$lname',age='$age',
    gender='$gender',address='$address',birthdate='$birthdate',birthplace='$birthplace',
    religion='$religion',cnumber='$cnumber',sector='$sector',educ='$educ',status='$status' WHERE fname='$fname'";

    if ($dbhandler->InsertUpdateDelete($sql)) {
        $_SESSION['fname']=$fname;
        $_SESSION['lname']=$lname;
        $_SESSION['age']=$age;
        $_SESSION['gender']=$gender;
        $_SESSION['address']=$address;
        $_SESSION['birthdate']=$birthdate;
        $_SESSION['birthplace']=$birthplace;
        $_SESSION['educ']=$educ;
        $_SESSION['sector']=$sector;
        $_SESSION['cnumber']=$cnumber;
        $_SESSION['religion']=$religion;
        $_SESSION['status']=$status;
        
       
        
        echo "Record successfully updated!";
    } else {
        echo "Failed to update record!";
    }
}
?>