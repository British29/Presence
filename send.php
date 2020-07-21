<?php
 include 'conn.php';

 $sql = "INSERT INTO student (nom, email, password) VALUES ('".$_POST["nom"]."','".$_POST["email"]."','".$_POST["password"]."')";
 
 $result = $conn->query($sql);
 
 
 $conn->close();