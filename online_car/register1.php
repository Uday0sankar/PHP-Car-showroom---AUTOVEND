<?php 

include "main.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $username = $_POST['username'];

    $password = $_POST['password'];

        $sql = "INSERT INTO `register`(`name`, `email`, `phone`, `username`, `password`) VALUES ('$name','$email','$phone','$username','$password')";

    $result = $conn->query($sql);

   if ($result == TRUE) {

      header('Location:index.php');

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

  

    $conn->close(); 

  }

?>