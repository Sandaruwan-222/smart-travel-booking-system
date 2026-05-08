<?php

$conn = mysqli_connect("localhost","root","","book_db");

$total = mysqli_query($conn,"SELECT COUNT(*) as total FROM book_form");

$row = mysqli_fetch_assoc($total);
$result = mysqli_query($conn,"SELECT * FROM booking_view");

?>

<h1>Booking Report</h1>

<h2>Total Bookings :
<?php echo $row['total']; ?>
</h2>