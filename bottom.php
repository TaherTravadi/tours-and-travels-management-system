<?php
    // Start the session at the very beginning of the file
    // session_start();

    include('function.php');

    // Initialize $showmsg variable
    $showmsg = '';

    // Check if the form is submitted and not already processed
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnn']) && isset($_POST['newsletter']) ) {// && !isset($_SESSION['form_submitted'])
        // Mark the form as submitted to prevent multiple submissions
        // $_SESSION['form_submitted'] = true;

        // Get the input value
        $newsletter = $_POST['newsletter'];
        date_default_timezone_set("Asia/kolkata");
        // Get current date and time
        $currentDateTime = date('Y-m-d H:i:s'); // Ensure correct date format
        
        // Insert data into the database with current date and time
        $stmt = $conn->prepare("INSERT INTO news_letter (email, samaiiy) VALUES (?, ?)");
        $stmt->bind_param("ss", $newsletter, $currentDateTime);
            
        if ($stmt->execute()) {
            // If insertion is successful, set $showmsg
            $showmsg = "Thank You For Showing Interest.";
            
        } else {
            // If insertion fails, set $showmsg
            $showmsg = "Error inserting data.";
        }    
    }
?>
<!-- icon link  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<style src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></style>
<script src="https://kit.fontawesome.com/b0a5cfef0e.js" crossorigin="anonymous"></script>

<style>
/* ----------------------------------------------------------------------footer section  */
* {

    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Poppins', sans-serif;
}

.fcontainer {
    max-width: 1170px;
    margin: auto;
    height: 241px;

}

.row {
    display: flex;
    flex-wrap: wrap;
}

ul {
    list-style: none;
    padding-inline-start: 40px;
}

.p {
    color: white;

}

footer {
    background-color: #24262b;
    padding: 5px 0 5px 0;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    margin: 40px 0 15px 0;
    position: relative;
}

.footer-col {
    width: 331px;
    padding: 0 15px;
    position: relative;
    right: 130px;
}

.footer-col h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}

.footer-col h4::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #fc6907;
    height: 2px;
    box-sizing: border-box;
    width: 100px;
}

.social {
    margin-left: 100px;
}

.footer-col ul li:not(:last-child) {
    margin-bottom: 10px;
}

.footer-col ul li a {
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: white;
    display: block;
    transition: all 0.3s ease;
}

.footer-col ul li a:hover {
    color: #fc6907;
    padding-left: 8px;
}

.wrapper {
    display: inline-flex;
    list-style: none;
    margin-right: 10px;
    padding-inline-start: 80px;
}

.wrapper .icon {
    position: relative;
    background: #ffffff;
    border-radius: 50%;
    padding: 10px;
    margin: 10px;
    width: 35px;
    height: 35px;
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip {
    position: absolute;
    top: 0;
    font-size: 14px;
    background: #ffffff;
    color: #ffffff;
    padding: 5px 8px;
    border-radius: 5px;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
    position: absolute;
    content: "";
    height: 8px;
    width: 8px;
    background: #ffffff;
    bottom: -3px;
    left: 50%;
    transform: translate(-50%) rotate(45deg);
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon:hover .tooltip {
    top: -45px;
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
    text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
    background: #1877F2;
    color: #ffffff;
}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
    background: #1DA1F2;
    color: #ffffff;
}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
    background: #E4405F;
    color: #ffffff;
}

.wrapper .github:hover,
.wrapper .github:hover .tooltip,
.wrapper .github:hover .tooltip::before {
    background: #333333;
    color: #ffffff;
}

.wrapper .youtube:hover,
.wrapper .youtube:hover .tooltip,
.wrapper .youtube:hover .tooltip::before {
    background: #CD201F;
    color: #ffffff;
}

.right-col {
    height: 100px;
    width: 496px;
    justify-items: right;
    display: grid;
    left: 964px;
    position: absolute;
    color: white;
}

.right-col h1 {
    font-size: 26px;
    margin: 0 0 4px 0;
}

.right-col p {
    font-size: 20px;
    padding: 0;
    margin: 0;
}

.border {
    width: 180px;
    height: 4px;
    background: #38b6ff;
}

.newsletter-form {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding-bottom: 8px;
}

.txtb {
    flex: 1;
    padding: 18px 40px;
    font-size: 16px;
    color: #293043;
    background: #e6f4ff;
    border: none;
    font-weight: 700;
    outline: none;
    border-radius: 30px;
    /* min-width: 260px; */
}

.btn {
    padding: 18px 40px;
    font-size: 16px;
    color: #f1f1f1;
    background: #38b6ff;
    border: none;
    font-weight: 700;
    outline: none;
    border-radius: 30px;
    margin-left: 20px;
    cursor: pointer;
    transition: opacity .3s linear;
}

.btn:hover {
    opacity: .7;
}

.msg {
    width: 360px;
}
</style>
<!-- ------------------------------------------------/ footer / -->
<footer>
    <footer class="footer">
        <div class="fcontainer">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>

                        <li><a href="aboutus.php">about us</a></li>
                        <li><a href="service.php">our services</a></li>
                        <li><a href="privacy.php">privacy policy</a></li>

                    </ul>
                    <p style="color:white; margin: 10px 0 0 0;">© 2024 Created By <b>travelogueindia.com.</b> All Rights
                        Reserved.</p>
                </div>
                <div class="footer-col">
                    <h4 class="social">follow us</h4>
                    <ul class="wrapper">
                        <li class="icon facebook">
                            <span class="tooltip">Facebook</span>
                            <span><i class="fab fa-facebook"></i></span>
                        </li>
                        <li class="icon twitter">
                            <span class="tooltip">Twitter</span>
                            <span><i class="fab fa-twitter"></i></span>
                        </li>
                        <li class="icon instagram">
                            <span class="tooltip">Instagram</span>
                            <span><i class="fab fa-instagram"></i></span>
                        </li>
                        <li class="icon github">
                            <span class="tooltip">Github</span>
                            <span><i class="fab fa-github"></i></span>
                        </li>
                        <li class="icon youtube">
                            <span class="tooltip">Youtube</span>
                            <span><i class="fab fa-youtube"></i></span>
                        </li>
                    </ul>
                </div>


                <div class="right-col">
                    <div class="msg">
                        <?php
    if($showmsg){
        echo '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>'.$showmsg.'</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
?>
                    </div>

                    <h1>Our Newsletter</h1>

                    <div class="border"></div> <br>

                    <p>Enter Your Email to get our news and updates.</p><br>
                    <form method="post" class="newsletter-form" action="">

                        <input type="email" class="txtb" name="newsletter" placeholder="Enter Your Email" required>

                        <input type="submit" name="btnn" class="btn" value="Submit">
                    </form>

                </div>

            </div>
        </div>
        <!-- Animation -->
        
        <!-- <div class="visme_d" data-title="Untitled Project" data-url="4d7m8gxy-untitled-project?fullPage=true" data-domain="forms" data-full-page="true" data-min-height="100vh" data-form-id="27748"></div>
        <script src="https://static-bundles.visme.co/forms/vismeforms-embed.js"></script> -->
        </div>
    </footer>
    <script>
    var toastElList = [].slice.call(document.querySelectorAll('.toast'))
    var toastList = toastElList.map(function(toastEl) {
        return new bootstrap.Toast(toastEl, option)
    })
    </script>
    <script src="https://kit.fontawesome.com/b0a5cfef0e.js" crossorigin="anonymous"></script>