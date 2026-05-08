<?php

$conn = mysqli_connect("localhost","root","","book_db");

$id = $_POST['id'];

$name = $_POST['name'];

$location = $_POST['location'];

$guests = $_POST['guests'];

$query = "UPDATE book_form

SET

name='$name',
location='$location',
guests='$guests'

WHERE id='$id'";

mysqli_query($conn,$query);

header("Location: userdata.php");

?>