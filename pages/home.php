<?php
// Disable caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="styles.css">
    <title>homepage</title>
</head>
<body>
        <div class="header" id="header">
                <h1>Welcome to Asset monitoring tool</h1>
				<ul class="nav-menu">
					<li><a href="assets.php">Assets</a></li>
					<li><a href="#">Users</a></li>
					<li><a href="#">About</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>			
        </div>
   <div class="container" id="container">
        <div class="assets-container">
            <h1 class="header">Assets</h1>
			<!-- <form action="#"> -->
                <ul class="list">
					<li><a href="#"><img src="computer.png" alt="Computers"><span>Computers</span></a></li>
					<li><a href="#"><img src="laptop.jpg" alt="Laptops"><span>Laptops</span></a></li>
					<li><a href="#"><img src="Printer.jpg" alt="Computers"><span>Printers</span></a></li>
					<li><a href="#"><img src="Switch.jpg" alt="Computers"><span>Switches</span></a></li>
					<li><a href="#"><img src="Router.jpg" alt="Computers"><span>Routers</span></a></li>
				</ul>
                <button id="openForm">Add new Asset</button>
				
		<div class="container2" id="formContainer">
        <h2>Add an Asset</h2>
        <form action="addAsset.php" method="post">
            <label for="name">Serial number:</label>
            <input type="text" id="SerialNumber" name="serialnumber" required>

            <label for="model">Model:</label>
            <input type="text" id="model" name="model" required>
			
			<label for="AssetType">Asset type:</label>
				<select id="AssetType" name="AssetType" placeholder="select asset type">
					<option value="computer">computer</option>
					<option value="laptop">laptop</option>
					<option value="Router">Router</option>
					<option value="Switch">Switch</option>
					<option value="Printer">Printer</option>
				</select>
				
			<label for="datepicker">Date of purchase:</label>
			<input type="date" id="datepicker" name="datepicker">
			
			<label for="name">Name of the user:</label>
            <input type="text" id="name" name="name" required>

            <input type="submit" value="Submit">
        </form>
        <button id="closeForm">Close</button>
    </div>
	<script src="script1.js"></script>
            <!-- </form> -->		
   </div>
    <script src="script.js"></script>
</body>
</html>
