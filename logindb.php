<?php
$showerr = false;
session_start();    
    $servername="localhost";
    $username="root";
    $password="";
    $db="travel";

    $con= new mysqli($servername,$username,$password,$db);
    if($con->connect_error)
    {

        die("connection failed".$con->connect_error);
    }
    
if(isset($_POST['submit']))
{


// Login process

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM newusers WHERE username = '$username' AND  pwd = '$password'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 1) {
  //  echo "Df";
        
        // $_SESSION['username' = $username];
        header("Location: index.php");
        
        // Redirect to the user's dashboard or another page after successful login
    } 
    
    else 
    { 
        
        
      $showerr ='Incorrect Password!!!';
      header("Location: login.php?id=".$showerr);
         
    }
    

}
$con->close();
}




?>