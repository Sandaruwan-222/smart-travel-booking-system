<?php
session_start();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="admin" && $password=="1234"){

        $_SESSION['admin']=$username;

        header("Location: admin.php");

    }else{

        echo "Invalid Login";

    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<style>

body{
    background:#f2f2f2;
    font-family:Arial;
}

.box{
    width:300px;
    background:white;
    padding:20px;
    margin:100px auto;
    border-radius:10px;
}

input{
    width:100%;
    padding:10px;
    margin-top:10px;
}

button{
    width:100%;
    padding:10px;
    margin-top:15px;
    background:black;
    color:white;
    border:none;
}

</style>

</head>

<body>

<div class="box">

<h2>Admin Login</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username">

<input type="password" name="password" placeholder="Password">

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>