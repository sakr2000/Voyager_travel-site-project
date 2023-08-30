<?php
$connection = mysqli_connect('localhost','root','','book_db');
if ($connection->connect_error) {
    die("Connection failed: ".$connection->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $location = $_REQUEST['location'];
    $address = $_REQUEST['address'];
    $guests = $_REQUEST['guests'];
    $arrivals = $_REQUEST['arrivals'];
    $leaving = $_REQUEST['leaving'];

    $request = "insert into book_form(name,email,address,phone,location,guests,arrivals,leaving) values ('$name','$email','$address','$phone','$location','$guests','$arrivals','$leaving')";
    if(mysqli_query($connection,$request)){
        // Close connection
        mysqli_close($connection);
        header('location:book.php');
    }else{
        echo "ERROR: Hush! Sorry $request. "
            . mysqli_error($connection);
    }
}
