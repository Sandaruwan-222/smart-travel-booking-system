<?php

$connection = mysqli_connect('localhost','root','','book_db');

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $package = $_POST['package'];

    $query = "INSERT INTO book_form
    (name,email,phone,address,location,guests,arrivals,leaving,package)

    VALUES

    ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving','$package')";

    mysqli_query($connection,$query);

    echo "
    <script>
        alert('Booking Successful');
        window.location='book.php';
    </script>
    ";

}else{

    echo 'Something Went Wrong';

}
?>