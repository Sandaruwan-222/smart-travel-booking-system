<?php

$conn = mysqli_connect("localhost","root","","book_db");

?>

<!DOCTYPE html>

<html>

<head>

<title>My Bookings</title>

</head>

<body>

<h1>My Bookings</h1>

<form method="GET">

<input type="email"

name="email"

placeholder="Enter Your Email"

required>

<button type="submit">

View Bookings

</button>

</form>

<br><br>

<?php

if(isset($_GET['email'])){

    $email = $_GET['email'];

    $query = "SELECT * FROM book_form
    WHERE email='$email'";

    $result = mysqli_query($conn,$query);

?>

<table border="1" cellpadding="10">

<tr>

<th>ID</th>

<th>Name</th>

<th>Location</th>

<th>Package</th>

<th>Guests</th>

<th>Action</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['location']; ?></td>

<td><?php echo $row['package']; ?></td>

<td><?php echo $row['guests']; ?></td>

<td>

<a href="cancel.php?id=<?php echo $row['id']; ?>">

Cancel

</a>

</td>

</tr>

<?php

}

?>

</table>

<?php

}

?>

</body>

</html>