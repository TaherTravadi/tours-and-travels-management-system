<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
    *{
        font-family: tahoma;
        font-size: 13px;
    }
    form{
    width: 100%;
    max-width: 227px;
    margin: auto;
    border: solid thin #15d7cc;
    border-radius: 5px;
    background: #f1f3ff;
    position: relative;
    margin-top: 210px;
}
    .form h1{
    justify-content: center;
    margin-bottom: 50px;
    display: flex;
    }
    .form a{
     margin: 5px;
    padding: 5px;
    display: flex;
}
    .textbox{
        padding: 10px;
        width: 180px;
        padding: 10px;
    width: 180px;
    border-radius: 10px;
    margin: 10px;
}
    .btn{
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    left: 59px;
    margin: 19px;
}

</style>
<body>

<?php
session_start();
$error=array();
require "mail.php";
if(!$con=mysqli_connect("localhost","root","","travel"))
{
    die("Could not connect");
}
$mode="enter_email";
if(isset($_GET['mode'])){
    $mode=$_GET['mode'];
}
if(count($_POST)>0)
{
    switch($mode)
    {
        case 'enter_email':
            $email=$_POST['email'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $error[]="Please enter a valid email";

            }
            else if(!valid_email($email))
            {
                $error[]="Email was not found";
            }
            else{
                $_SESSION['forgot']['email']=$email;
                send_email($email);
                
                header("Location:forgot_password.php?mode=enter_code");
                die;
            }
            break;
        case 'enter_code':
            $code=$_POST['code'];
            $result=is_code_correct($code);
            if($result=="The code is correct")
            {
                $_SESSION['forgot']['code']=$code;
                header("Location:forgot_password.php?mode=enter_password");
                die;
            }
            else
            {
                $error[]=$result;
            }
           
            
            break;
        case 'enter_password':
            $password=$_POST['password'];
            $password2=$_POST['password2'];
            if($password!==$password2)
            {
                $error[]="Passwords do not match";
            }
            elseif(!isset($_SESSION['forgot']['email']) || !isset($_SESSION['forgot']['code'])){
                header("Location: forgot_password.php");
                die;
            }
            else{
                save_password($password);
                if(isset($_SESSION['forgot']))
                {
                    unset($_SESSION['forgot']);
                }
                header("Location:login.php");
                die;
            }

            
            break;
        default:
            break;
    }
}
function send_email($email)
{
    global $con;
    $expire=time()+(300*1);
    $code=rand(10000,99999);
    $email=addslashes($email);
    $query="insert into code(email,codes,expire) value('$email','$code','$expire')";
    mysqli_query($con,$query);
    send_mail($email,'Password reset',"Your code is".$code);
    return true;

}
function save_password($password)
{
    global $con;
    //$password=password_hash($password,PASSWORD_DEFAULT);
    $email=addslashes($_SESSION['forgot']['email']);
    $query="update newusers set pwd='$password' where email='$email' limit 1";
    mysqli_query($con,$query);
    return true;

}
function valid_email($email)
{
    global $con;
    $email=addslashes($email);
    $query="select * from newusers  where email='$email' limit 1";
    $result=mysqli_query($con,$query);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            
            
                return true;
            
           
        }
        
    }
    
    return false;

}
function is_code_correct($code)
{
    global $con;
    $code=addslashes($code);
    $expire=time();
    $email=addslashes($_SESSION['forgot']['email']);
    $query="select * from code where codes='$code' && email='$email' order by id desc";
    $result=mysqli_query($con,$query);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_assoc($result);
            if($row['expire']>$expire)
            {
                return "The code is correct";
            }
            else{
                return "The code is expired";
            }
        }
        else{
            return "The code is incorrect";
        }
    }
    
    return "The code is incorrect";
}
?>

<?php
 switch($mode)
 {
     case 'enter_email':
?>
<MARQUEE>KYU YAAD NAHI REHTA PASSWORD?</MARQUEE>
    <form action="forgot_password.php?mode=enter_email" method="post">
        <h1 style="justify-content: center; margin-bottom: 50px; display: flex;">Forgot Password</h1>
        <h3>Enter email below</h3>
        <span style="font-size:12px;color:red;">
        <?php
        foreach($error as $er)
        {
            echo $er."<br>";
        }
        ?>
        </span>
        <input class="textbox" type="email" name="email" placeholder="email">
        <br style="clear:both;">
        <input type="submit" class="btn" value="next">
        <br><br>
        <div><a href="login.php">Login</a></div>
    </form>
<?php
     break;
     case 'enter_code':
?>
    <form action="forgot_password.php?mode=enter_code" method="post">
        <h1>Forgot Password</h1>
        <h3>Enter code sent to your email</h3>
        <span style="font-size:12px;color:red;">
        <?php
        foreach($error as $er)
        {
            echo $er."<br>";
        }
        ?>
        </span>
        <input class="textbox" type="text" name="code" placeholder="12345">
        <br style="clear:both;">
        <input type="submit" value="next" style="float:right;">
        <a href="forgot_password.php">
            <input type="button" value="Start over">
        </a>
        <br><br>
        <div ><a href="login.php" style="margin: 5px; padding: 5px; display: flex;">Login</a></div>
    </form>
<?php
     break;
     case 'enter_password':
?>
    <form action="forgot_password.php?mode=enter_password" method="post">
        <h1>Forgot Password</h1>
        <h3>Enter New Password</h3>
        <span style="font-size:12px;color:red;">
        <?php
        foreach($error as $er)
        {
            echo $er."<br>";
        }
        ?>
        </span>
        <input class="textbox" type="password" name="password" placeholder="Password"  maxlength="12" minlength="8" required>
        <input class="textbox" type="password" name="password2" placeholder=" Retype Password" maxlength="12" minlength="8" required>
        <br style="clear:both;">
        <input type="submit" value="next">
        <br><br>
        <div><a href="login.php">Login</a></div>
    </form>
<?php
     break;
     default:
     break;
 }
?>

</body>
</html>