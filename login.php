
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Travelogue INDIA-login</title>

    <!------------------------------------/ CSS LINK /---------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></style>
    <link rel="stylesheet" href="login.css" >
    
</head>

<!--nevigation-->

<header>
    
    <h1 class="pro-nm">Travelogue INDIA</h1>
   <?php include('sign-updb.php');
   if($showalert){
    echo'
    <div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    '.$showalert.'
  </div>
</div>';
   }
?>
<?php include('sign-updb.php');
   if($showerror){
    echo'
    <div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    '.$showerror.'
  </div>
</div>';
   }
?>
<?php include('logindb.php');
 $showerr1="";
if(isset($_GET['id']))
{
  $showerr1=$_GET['id'];
}

   if(!$showerr){
    echo'
    <div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    '.$showerr1.'
  </div>
</div>';
   }
?>
    <nav class="navigation">
        <a href="index.php"><b> Back to Home</b></a>
        <a href="#"><b>about-us</b></a>
        <!-- <button class="loginbtn">login</button> -->
        
    </nav>
    
</header>


<body>
    
    
    <!--login form-->

    <div class="wrapper-box">
        <!-- <span class="close-icon">
            <ion-icon name="close"></ion-icon>
        </span> -->

        <div class="form-boxlg">
            <h2>Login page</h2>
            <form action="logindb.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>

                    <input type="text" name="username" required>
                    <label>Username</label>

                </div>

                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="eye"></ion-icon>
                    </span>

                    <input type="password" name="password" maxlength="12" minlength="8" required>
                    <label>Password</label>
                </div>

                <div class="rem-frgt">
                    <input type="checkbox" /><label>Remember me </label>
                    <a href="forgot_password.php">Forgot password?</a>
                </div>

                <button type="submit" name="submit" class="btn">Login</button>

                <div class="register">
                    <p>Don't have an account? <a href="#" class="register-link"> Register</a>
                    </p>
                </div>

            </form>
        </div>

        <!--Registration form-->
        

        <div class="form-boxreg">
            <h2>Sign-up</h2>
            <form action="sign-updb.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>

                    <input type="text" name="username" required>
                    <label>Username</label>

                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>

                    <input type="email" name="email" required>
                    <label>Email</label>

                </div>
                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="eye"></ion-icon>
                    </span>

                    <input type="password" name="password" maxlength="12" minlength="8" id="psw"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <label>Password</label>

                </div>
                <div class="input-box">
                    <span class="icon" id="password-toggle">
                    <ion-icon name="eye" ></ion-icon>
                    </span>

                    <input type="password" name="cpassword" id="cpsw" maxlength="12" minlength="8" required>
                    <label>Confirm-Password</label>
                    

                </div>

                <div class="terms-con">
                    <label><input type="checkbox" required> I Agree All </label>
                    <a href="#">Terms & Condition</a>
                </div>

                <button type="submit" name="submit" class="btn">Sign-up</button>

                <div class="log-in">
                    <p>Already have an account?<a href="#" class="login-link">Login</a>
                    </p>
                </div>
                
                
            </form>
                
        </div>
        
    </div>
    <div id="message">
         <h3>Password must contain the following:</h3>
         <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
         <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
         <p id="number" class="invalid">A <b>number</b></p>
         <p id="length" class="invalid">Minimum <b>8 characters</b></p>
    </div>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>  
<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
    <!--/ Javascript /-->

    <script src="login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>