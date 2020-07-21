

<?php
 include 'conn.php';
 session_start();
 
 $sql = "SELECT * FROM student where email = '".$_POST["email"]."' and password = '".$_POST["password"]."'";
 $result = $conn->query($sql);
 $etudiant = $result -> fetch_array(MYSQLI_ASSOC);
 //var_dump(@$etudiant['email']);
 if(!empty(@$etudiant['email'])){
  $_SESSION["email"] = $_POST["email"];
  echo "success";
 }else{
  echo "fail";
 

 }
 ?>