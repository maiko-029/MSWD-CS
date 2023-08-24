<?php
session_start();
require_once("dbcontroller.php");
$dbhandler = new DBController();


if($_SERVER["REQUEST_METHOD"] == "POST") {
     $id=$_POST['id'];
     $sql1 = "SELECT * FROM client WHERE id=$id";
     $sql = "DELETE FROM client WHERE id=$id";

     $result=$dbhandler->runQuery($sql1);
     $numRow=$dbhandler->numRows($sql1);

    if($numRow==1) {
	    	foreach ($result as $key => $value) {
	          $_SESSION['stud_fn']=$value['fname'];
	        $_SESSION['stud_mn']=$value['mname'];
	        $_SESSION['stud_ln']=$value['lname'];
	        $_SESSION['stud_gn']=$value['gender'];
	        $_SESSION['stud_bd']=$value['bdate'];
	        $_SESSION['stud_ad']=$value['address'];
	        $_SESSION['stat']='dl';
	     }
    }

   if($dbhandler->InsertUpdateDelete($sql)){
        echo 'Record Successfully Deleted';
   } else {
        echo 'Failed to delete the record!';
   }
}
?>