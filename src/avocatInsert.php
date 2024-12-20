<?php 

include('./db.php');

$fname =$_POST['nom'];
$lname=$_POST['prenom'];
$phone=$_POST['telephone'];
$mail=$_POST['email'];
$password=$_POST['password'];
$post='admin';
$adress=$_POST['adress'];
$speciality=$_POST['specialite'];
$biography=$_POST['biographie'];
// $photo =$_POST['photo'];

$stmt = $conn->prepare("INSERT INTO users (fname,lname,phone,mail,password,post) VALUES (?,?,?,?,?,?)");
$stmt->bind_param('ssssss',$fname, $lname, $phone, $mail, $password,$post);
$stmt->execute();
$stmt->close();

$last_id=mysqli_insert_id($conn);
$rqt = $conn->prepare("INSERT INTO info (id_lawyer, biography, adress, speciality) VALUES (?, ?, ?, ?)");
if ($rqt === false) {
    die('MySQL prepare error: ' . $conn->error);
}

$rqt->bind_param('isss', $last_id, $biography, $adress, $speciality);
$rqt->execute();
$rqt->close();
header('location:./login.php');
?>