<!DOCTYPE html>

<head>
<title>View Pizza Order</title>
<meta charset="utf-8" />
</head>
<body>
<h1>Pizza Orders</h1>
<?php
$DBConnection = mysqli_connect("localhost", "root", "");
$createdatetime= date('Y-m-d G:i:s');

if (!$DBConnection)
{
	$error = "<p>Unable to connect to the database server.</p>\n"
				. "<p>Connection error code ". mysqli_connect_errno(). "</p> \n";
	include 'error.html.php';
	exit();
}
else
{
	$DBName = "pizza";
	$TableName = "orders";
	
	
	if (!mysqli_select_db($DBConnection, $DBName))
	{
		$error = "<p>Unable to connect to the $DBName database!</p> \n"
				. "<p>Error code " . mysqli_errno($DBConnection)
				. ": " . mysqli_error($DBConnection) . "</p>\n";
		
		include 'error.html.php';
		exit();
	}
	else
	{
	$SQLString="SELECT * FROM $TableName ORDER BY ID";
 
$QueryResult = mysqli_query($DBConnection, $SQLString);
if (!$QueryResult)
{
	$error = 'Error executing query: ' . mysqli_error($DBConnection);
	include 'error.html.php';
	exit();
}
else if (!mysqli_num_rows($QueryResult))
{
	echo "<p>There are no pizza orders .</p>\n";
}

else
{
	echo "<table border='1' cellspacing ='0'>\n";
	echo "<tr><th>ID</th>" .
		"<th>ORDER ID</th>" .
		"<th>First Name</th>" .
		"<th>Last Name</th>" .
		"<th>Email</th>" .
		"<th>Address</th>" .
		"<th>Phone</th>" .
		"<th>Price</th>" .
		"<th>Size</th>" .
		"<th>Anchovies</th>" .
		"<th>Pineapples</th>" .
		"<th>Pepperoni</th>" .
		"<th>Peppers</th>" .
		"<th>Olives</th>" .
		"<th>Onions</th>" .
		"<th>Crust</th>" .
		"<th>Toppings</th>" .
		"</tr>\n";
	while ($report=mysqli_fetch_assoc($QueryResult))
	{
		echo "<tr><td>" . $report['ID'] . "</td>" .
			"<td>" . $report['Order_ID'] . "</td>" .
			"<td>" . $report['customerFName'] . "</td>" .
			"<td>" . $report['customerLName'] . "</td>" .
			"<td>" . $report['email'] . "</td>" .
			"<td>" . $report['address'] . "</td>" .
			"<td>" . $report['phone'] . "</td>" .
			"<td>" . $report['price'] . "</td>" .
			"<td>" . $report['size'] . "</td>" .
			"<td>" . $report['anchovies'] . "</td>" .
			"<td>" . $report['pineapples'] . "</td>" .
			"<td>" . $report['pepperoni'] . "</td>" .
			"<td>" . $report['peppers'] . "</td>" .
			"<td>" . $report['olives'] . "</td>" .
			"<td>" . $report['onions'] . "</td>" .
			"<td>" . $report['crust'] . "</td>" .
			"<td>" . $report['toppings'] . "</td>" .
			
			"<td><a href=\"UpdatePizzaOrder.php?id=" .
				$report['ID'] . "\">Update</a></td>" .
			"</tr>\n";
	}
	echo "</table>\n";
}
	
		echo 'Database connection established.';
	}
}
?>
<a href="pizza.php" target="frame1">Enter a new Pizza Order</a>
</body>
</html>