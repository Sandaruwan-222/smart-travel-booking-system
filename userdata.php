<?php

$conn = mysqli_connect("localhost","root","","book_db");

if(isset($_GET['package_filter']) && $_GET['package_filter']!=""){

    $package = $_GET['package_filter'];

    $query = "SELECT * FROM book_form
    WHERE package='$package'";

}

elseif(isset($_GET['search']) && $_GET['search']!=""){

    $search = $_GET['search'];

    $query = "SELECT * FROM book_form
    WHERE location LIKE '%$search%'";

}

else{

    $query = "SELECT * FROM book_form";

}

$result = mysqli_query($conn,$query);


?>

<!DOCTYPE html>

<html>
<head>

<title>User Data</title>

<style>

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    border:1px solid black;
    padding:10px;
}

th{
    background:black;
    color:white;
}

</style>

</head>

<body>

<h1>Booking Data</h1>
<form method="GET">

<select name="package_filter">

<option value="">All Packages</option>

<option value="Family Package">Family Package</option>

<option value="Adventure Package">Adventure Package</option>

<option value="Camping Package">Camping Package</option>

</select>

<button type="submit">Filter</button>

</form>

<br>
<div style="background:#222;
padding:15px;
width:300px;
border-radius:10px;
margin-bottom:20px;
color:white;">

<h3 style="margin-bottom:10px;">Package Types</h3>

<p>
<span style="
background:green;
padding:8px 12px;
border-radius:5px;
display:inline-block;
margin-right:10px;">
</span>

Family Package
</p>

<p>
<span style="
background:red;
padding:8px 12px;
border-radius:5px;
display:inline-block;
margin-right:10px;">
</span>

Adventure Package
</p>

<p>
<span style="
background:blue;
padding:8px 12px;
border-radius:5px;
display:inline-block;
margin-right:10px;">
</span>

Camping Package
</p>

</div>
<form method="GET">

<input type="text" name="search" placeholder="Search Location">

<button type="submit">Search</button>

</form>

<br>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Location</th>
<th>Guests</th>
<th>Package</th>
<th>Action</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['guests']; ?></td>
<td>

<?php

$package = strtolower(trim($row['package']));

if($package=="family package"){

    echo "<span style='background:green;
    color:white;
    padding:5px 10px;
    border-radius:5px;'>
    Family Package
    </span>";

}

elseif($package=="adventure package"){

    echo "<span style='background:red;
    color:white;
    padding:5px 10px;
    border-radius:5px;'>
    Adventure Package
    </span>";

}

elseif($package=="camping package"){

    echo "<span style='background:blue;
    color:white;
    padding:5px 10px;
    border-radius:5px;'>
    Camping Package
    </span>";

}

else{

    echo $row['package'];

}

?>

</td>
<td>

<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>