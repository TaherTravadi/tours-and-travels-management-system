<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<title>Admin side</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

<?php include('function.php'); ?>




<?php
if(isset($_POST["sbmt"]))
{
	// $conn=makeconnection();
	$s="delete from subcategory  where subcatid='" . $_POST["s1"] . "'";
	mysqli_query($conn,$s);
	mysqli_close($conn);
	echo "<script>alert('Record Delete');</script>";
    }
?>



<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">




<form method="post" enctype="multipart/form-data">
<table border="0" width="400px" height="250px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Delete Subcategory</td></tr>
<tr><td class="lefttxt">Select Category</td><td><select name="t2" required/><option value="">Select</option>

<?php
// $conn=makeconnection();
$s="select * from category";
$result=mysqli_query($conn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
		if(isset($_POST["show"])&& $data[0]==$_POST["t2"])
		{
		echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
	
}
mysqli_close($conn);
?>
</select>

<form method="post" action="">
    <input type="submit" value="Show" name="show" formnovalidate/>
</form>

<tr>
    <td class="lefttxt">Select Subcategory</td>
    <td>
        <select name="s1" required>
            <option value="">Select</option>
            <?php
            if(isset($_POST["show"])) {
                // Assuming you have established the database connection elsewhere and stored it in $conn
                $conn= new mysqli($servername,$username,$password,$db); // Your database connection
				$s = "SELECT * FROM subcategory WHERE catid='" . $_POST["t2"] . "'";
                $result = mysqli_query($conn, $s);
				$r=mysqli_num_rows($result);
                if ($result) {
                    while($data = mysqli_fetch_array($result)) {
                        echo "<option value='" . $data[0] . "'>" . $data[1] . "</option>";
                    }
                    mysqli_free_result($result);
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
            ?>
        </select>
    </td>
</tr>


</select>

</td></tr>

<tr><td>&nbsp;</td><td ><input type="submit" value="Delete" name="sbmt" /></td></tr>

</table>
</form>

</div>


</div>
<?php include('bottom.php'); ?>

</body>
</html>


             