<?php

$conn = mysqli_connect("localhost","root","","book_db");

$id = $_GET['id'];

$query = "DELETE FROM book_form WHERE id='$id'";

mysqli_query($conn,$query);

header("Location: userdata.php");

?>