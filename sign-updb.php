<?php
// session_start();
$showerror = false;
$showalert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username1 = $_POST['username'];
    $email = $_POST['email'];
    $password1= $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $servername="localhost";
    $username="root";
    $password="";
    $db="travel";

    $con=  new mysqli($servername,$username,$password,$db);
    if($con->connect_error)
    {

        die("connection failed".$con->connect_error);
    }

    if($password1 == $cpassword)
    {
        $sql="insert into newusers (username, email, pwd) values ('$username1','$email','$password1')";
        $result = mysqli_query($con, $sql);
        if($result)
            {

                header("Location: login.php");
                
                // exit;

             }
        else
             {

                $showalert ="Username already exist. Try using onthere username";
                
             }
    
    }
    else
    {
      $showerror = "Password didn't match !!!";
    }
$con->close();

}
// session_unset();
?>