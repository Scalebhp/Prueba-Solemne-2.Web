<?php

$servername="localhost";
$username="root";
$password="";
$dbname="Connectar";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Coneccion rechazada".$conn->connect_error);
} else {
    
$stmt("INSERT INTO usuario(Email,password)
        VALUES(?,?)");
$stmt->bind_param("ss",$Email,$password);
      $Email=$_POST['Email'];
      $password= htmlspecialchars(hash($_POST['password']));
      $stmt->execute();
      require_once 'index.php';
      $stmt->close();
      $conn->close();
}

