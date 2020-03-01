<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


  
  $a = $_POST['q'];

  $b = $_POST['s']; 

  $c = $_POST['qw'];

  $e = $_POST['sn'];

  $f = $_POST['gs'];

  echo "Пароль $a";

  echo "Почта $b";

  echo "Логин $c";

  echo "Имя $e";

  echo "Фамилия $f";



  $z = mysqli_connect ('localhost','root','');

  $al = "CREATE DATABASE regtable";

  $zapros =  mysqli_query ($z,$al);
  $table = "CREATE TABLE regtable.info(
      id_regtable INT (30) NOT NULL AUTO_INCREMENT PRIMARY KEY,


      `pas` VARCHAR (30) NOT NULL,
      
      

      `email` VARCHAR (30) NOT NULL,
      
      

      `userlog` VARCHAR (30) NOT NULL,
      
      

      `usernam` VARCHAR (30) NOT NULL,
      
      

      `fam` VARCHAR (30) NOT NULL
      )";
    
  $otprav = mysqli_query ($z,$table);

  $zapol = "INSERT INTO regtable.info (pas,email,userlog,usernam,fam)
            VALUES ('$a','$b','$c','$e','$f')";

   
  $otp = mysqli_query ($z,$zapol);
  
?>