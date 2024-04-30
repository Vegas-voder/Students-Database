<?php
$conn = mysqli_connect("localhost", "root", "", "students");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$matric = $_POST['matric'];
$level = $_POST['level'];

$query = "INSERT INTO students (name, matric_number, level) VALUES ('$name', '$matric', '$level')";

if (mysqli_query($conn, $query)) {
	header("Location: success.html");
	exit;
}
 else {
	echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
