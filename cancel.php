<?php

$conn = mysqli_connect("localhost","root","","book_db");

$id = $_GET['id'];

mysqli_query($conn,
"DELETE FROM book_form WHERE id='$id'");

header("Location: mybooking.php");

?>