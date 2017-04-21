<?php
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = 'root';
    $dbName = 'widget_corp';
    $connection = mysqli_connect($dbHost, $dbPass, $dbPass, 'sgt');

    if(mysqli_connect_errno()) {
        die("Database error error number: " . mysqli_connect_errno());
    }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>

	</body>
</html>

<?php
    mysqli_close($connection);
?>
