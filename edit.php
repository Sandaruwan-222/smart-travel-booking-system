<?php

$conn = mysqli_connect("localhost","root","","book_db");

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM book_form WHERE id='$id'");

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>

<html>

<head>
<title>Edit Booking</title>
</head>

<body>

<h1>Edit Booking</h1>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<input type="text" name="name" value="<?php echo $row['name']; ?>">

<input type="text" name="email" value="<?php echo $row['email']; ?>">

<input type="text" name="phone" value="<?php echo $row['phone']; ?>">

<input type="text" name="location" value="<?php echo $row['location']; ?>">

<input type="number" name="guests" value="<?php echo $row['guests']; ?>">

<button type="submit">Update</button>

</form>

</body>

</html>