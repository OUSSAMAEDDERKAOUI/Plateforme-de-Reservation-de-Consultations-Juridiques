<?php
include('./db.php');

$fname =$_POST['nom'];
$lname=$_POST['prenom'];
$phone=$_POST['telephone'];
$mail=$_POST['email'];
$password=$_POST['password'];
$post='client';

$stmt = $conn->prepare("INSERT INTO users (fname,lname,phone,mail,password,post) VALUES (?,?,?,?,?,?)");
$stmt->bind_param('ssssss', $fname,$lname,$phone,$mail,$password,$post);
$stmt->execute();
$stmt->close();

header('location:./login.php');

$stmt->close();

?>