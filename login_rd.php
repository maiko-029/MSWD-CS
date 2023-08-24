<?php
session_start();

require_once("dbcontroller.php");
$dbhandler = new DBController();

if($_SERVER['REQUEST_METHOD']==='POST'){
 
    $email=$dbhandler->verifyData($_POST['email']);
    $psw=$dbhandler->verifyData($_POST['password']);

    $encrypted_psw=md5($psw);


    if(hasData($email,$encrypted_psw)){
        $query = "SELECT * FROM member WHERE email='$email' AND password='$encrypted_psw'";
        $result=$dbhandler->runQuery($query);

        foreach ($result as $key => $value) {
                $_SESSION['id']=$value['id'];
                $_SESSION['fname']=$value['fname'];
                $_SESSION['lname']=$value['lname'];
                $_SESSION['email']=$value['email'];
        }

        $_SESSION['firstloged']=1;
        echo $_SESSION['fname']." ".$_SESSION['lname'];
    } else { 
        echo "nodata";
    }

}


function hasData($email,$pass){
        $dbObject = new DBController();
        $sql = "SELECT * FROM member WHERE email='$email' AND password='$pass'";
        $numData=$dbObject->numRows($sql);
        if($numData==1) {
            return true;
        } else { return false; }
}

?>