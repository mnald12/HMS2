<?php

include 'db/connection.php';

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$bday = mysqli_real_escape_string($conn, $_POST['bday']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$add = mysqli_real_escape_string($conn, $_POST['add']);
$number = mysqli_real_escape_string($conn, $_POST['number']);
$idtype = mysqli_real_escape_string($conn, $_POST['idtype']);
$idnumber = mysqli_real_escape_string($conn, $_POST['idnumber']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$checkin = mysqli_real_escape_string($conn, $_POST['checkin']);
$checkout = mysqli_real_escape_string($conn, $_POST['checkout']);
$adult = mysqli_real_escape_string($conn, $_POST['adult']);
$child = mysqli_real_escape_string($conn, $_POST['child']);
$room = mysqli_real_escape_string($conn, $_POST['room']);
$message = mysqli_real_escape_string($conn, $_POST['message']);
$date = date("m/d/Y");

$insert="INSERT Into bookings (first_name, last_name, birth_date, address, country, number, id_number, id_type, email, check_in, check_out, adult, child, room, status, request, created) 
VALUES ('$fname', '$lname', '$bday', '$add', '$country', '$number', '$idnumber', '$idtype', '$email', '$checkin', '$checkout', '$adult', '$child', '$room', 'Pending', '$message', '$date')";
$res=mysqli_query($conn, $insert);

session_start();
$_SESSION['booking'] = 'Your request has been sent! Please check your email for our response, Thank You!';

header('location: booking.php#booking');

?>