<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Package</title>
    <style>
    body {
    font-family: Arial, sans-serif;
}

.container {
    text-align: center;
    margin-top: 50px;
}

.payment-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input,
select,
button {
    margin-bottom: 10px;
    width: 100%;
    padding: 10px;
}

button {
    background-color: #4caf50;
    color: white;
    border: none;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background-color: #45a049;
}
.green{
    background-color: #00a800;
    color: white;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
}
    </style>
</head>
<?php include('function.php'); ?>
<?php
if(isset($_POST["submit"]))
{
	// $conn=makeconnection();	
	
	
		
	
	echo "<script>alert('Booking Request Send succesfull. ');</script>";
	header("location:booking.php");
	 exit();
	 	 
}

?>


<?php

include('function.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the selected payment method and package price
    $paymentMethod = $_POST['payment-method'];
    $packageId = $_POST['package-id']; // Assuming you have a hidden input for package ID
    $packagePrice = getPackagePrice($packageId); // Call a function to get package price by ID from database

    // For demonstration purposes, just echoing the details
    echo "Payment Method: $paymentMethod<br>";
    echo "Package Price: $packagePrice";
}

function getPackagePrice($packageId) {
    // Assuming you have a database connection
    $conn = new mysqli('localhost', 'username', 'password', 'database_name');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute query to get package price by ID
    $stmt = $conn->prepare("SELECT packprice FROM packages WHERE packid = ?");
    $stmt->bind_param("i", $packageId);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch package price
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['packprice'];
    } else {
        return 0; // Return 0 if package price is not found
    }
}
?>

<body > <!--Replace 100 and 1 with actual values--><!--onload="showPaymentPage($packagePrice,$packageId)"-->  
    <div class="container">
        <h1>Book Package</h1>
    </div>
<div class="green">Choose Payment Method</div>
    <div class="payment-container" id="payment-container">
        <h2>Payment Options</h2>
        <form action="payment.php" method="post">
            <label for="package-price">Package Price:</label>
            <input type="text" id="package-price" name="package-price" value="22799" readonly>

            <label for="payment-method">Select Payment Method:</label>
            <select id="payment-method" name="payment-method">
                <option value="credit-card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="paypal">Google Pay</option>
                <option value="paypal">Phone Pay</option>
            </select>

            <button  type="submit" name="submit">Proceed to Payment</button>
        </form>
    </div>

    <!-- <script>
       function showPaymentPage(packagePrice, packageId) {
    // Display the payment container
    document.getElementById('payment-container').style.display = 'block';

    // Set the package price and ID in the payment page
    document.getElementById('package-price').value = packagePrice;
    document.getElementById('package-id').value = packageId;
}

    </script> -->
</body>
</html>
