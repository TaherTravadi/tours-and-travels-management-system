<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Admin Dashboard</title>
  
  <style>
    /* styles.css */

/* Global Styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline;
  margin-right: 20px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
}

main {
  padding: 20px;
}

/* Summary Section */
.summary {
  display: flex;
  justify-content: space-around;
  margin-bottom: 20px;
}

.summary-card {
  background-color: #f4f4f4;
  padding: 10px 20px;
  border-radius: 5px;
}

/* Quick Actions Section */
.quick-actions {
    margin: 20px;
    display: flex;
    justify-content: space-around;

}
.quick {
    margin: 30px;
    display: flex;
}

.quick button {
  padding: 10px 20px;
  margin-right: 10px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.quick button:hover {
  background-color: #555;
}

/* Booking Management Section */
.booking-management h2 {
    margin-bottom: 10px;
    display: flex;
    font-style: italic;
    font-size: xx-large;
    font-family: ui-rounded;
    /* box-shadow: 10px 10px; */
    /* align-content: center; */
    justify-content: center;
}


table {
  width: 100%;
  border-collapse: collapse;
}

table th, table td {
  padding: 10px;
  border-bottom: 1px solid #ccc;
}

table th {
  background-color:#95d1ff;
  
  box-shadow: 5px 5px 7px;
}
.open-enquiries{
    height: 250px;
    width: 200px;
    background-color: #acacff;;
    border-radius: 10px;
    box-shadow: 8px 8px;
    text-align: center;
    left: 60px;
    position: relative;
    margin: 20px;
    margin-right: 160px;

}
.open-enquiries h1{
    color: red;
    font-size: 3.5em;
    top: 30px;
    position: relative;

}
.open-enquiries h2{
    color:black;

}
.open-enquiries1{
    height: 250px;
    width: 200px;
    background-color: #00cbff;
    border-radius: 10px;
    box-shadow: 8px 8px;
    text-align: center;
    left: 60px;
    position: relative;
    margin: 20px;
    margin-right: 160px;

}

.open-enquiries1 h1{
    color: red;
    font-size: 2.5em;
    top: 51px;
    position: relative;

}
.open-enquiries1 h2{
    color:black;

}
.open-enquiries2{
    height: 250px;
    width: 200px;
    background-color: #00ff6f;
    border-radius: 10px;
    box-shadow: 8px 8px;
    text-align: center;
    left: 60px;
    position: relative;
    margin: 20px;
    margin-right: 160px;

}

.open-enquiries2 h1{
    color: red;
    font-size: 2.5em;
    top: 51px;
    position: relative;
}
.open-enquiries2 h2{
    color:black;

}

/* Footer Section */
footer {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
}


</style>
</head>
<?php include('function.php'); ?>
<body>
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>
  <!-- Header Section -->
  <header>
  <h2>Dashboard</h2><nav>
      <ul>
        <li><a href="#">Bookings</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="index.php" style="color:#00fffa;">Admin Links</a></li>
      </ul>
    </nav>
  </header>
  <?php
// Query to count the number of open inquiries
$sql = "SELECT COUNT(*) AS open_count FROM enquiry WHERE statusfield = 'pending'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $openCount = $row['open_count'];
} else {
    $openCount = 0;
}
?>
<section class="quick-actions">
    <div class="open-enquiries">
        <h2>Open Enquiries: </h2>
        <h1><?php echo $openCount; ?></h1>
</div>



    <div class="open-enquiries1">
    <h2>Total Bookings:</h2>
    <h1> 100</h1>
</div>

      <!-- Add more summary cards as needed -->



    <div class="open-enquiries2">
    <h2>Total Revenue:</h2>
    <h1> $10,000</h1>
</div>

      <!-- Add more summary cards as needed -->
</section>

  <!-- Main Content Section -->
  <main>

    <section class="quick">
      <button>Add New Booking</button>
      <button>Manage Customers</button>
      <button>Edit Destinations</button>
      <!-- Add more quick action buttons as needed -->
    </section>

    <section class="booking-management">
      <h2>Booking Management</h2>
      <table border="0">
        <thead>
          <tr>
            <th> Package Id</th>
            <th>Package Name</th>
            
            <th>Customer Name</th>
            <th>Gender</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>No. of Days</th>
            <th>No. of Children</th>
            <th>no. of Adults</th>
            <th>Status </th>
          
        </thead>
        <tbody style="text-align:center;">
          <!-- Table rows will be populated dynamically with PHP -->
          <form method="post">
<?php

$s="select * from enquiry,package where enquiry.Packageid=package.Packid";
$result=mysqli_query($conn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{

	
		echo "
        <tr> 
        <td style=' padding:5px;'>$data[1]</td>   
        <td style=' padding:5px;'>$data[12]</td>
		<td style=' padding:5px;'>$data[2]</td>
		<td style=' padding:5px;'>$data[3]</td>
		<td style=' padding:5px;'>$data[4]</td>
		<td style=' padding:5px;'>$data[5]</td>
		<td style=' padding:5px;'>$data[6]</td>
		<td style=' padding:5px;'>$data[7]</td>
		<td style=' padding:5px;'>$data[8]</td>
		<td style=' padding:5px;'><button><a href='chstatus.php?eid=$data[0]'>$data[10]</a></button></td>
		</tr>";

}




?>
</tr>
</table>
</td></tr></table>

</form>

</body>
</html>
        </tbody>
      </table>
    </section>

    <!-- Add more sections for customer management, destination management, reports, etc. -->
  </main>

  <!-- Footer Section -->
  <footer>
  <p>TravelogueINDIA. All rights reserved.</p>
    <p><a href="#"style="color: cyan; ">Terms of Service</a> | <a href="#" style="color: cyan; ">Privacy Policy</a></p>
  </footer>
  
  <script src="script.js"></script>
</body>
</html>
