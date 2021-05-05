<?php
require_once ("connexion.php");

$login=$_POST['login'];
$password=$_POST['password'];

$mdpCrypte = md5($password);

$sql="select niveau from user where login='$login' and password='$mdpCrypte'";

$result = $conn->query($sql);
if($user=$result->fetch_assoc()) {
    header("location:afficherEtudiant.php");
    session_start();
    $_SESSION['NIVEAU']=$user['niveau'];
} else {
    header("location:index.php");
} 

?>


