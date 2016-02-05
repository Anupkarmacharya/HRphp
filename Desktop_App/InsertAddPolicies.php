<?php
  $policies_name =  $_POST['policies_name'];
  $description = $_POST['description'];

  $servername = "localhost";
  $username = "poltics";
  $password = "poltics";
  $dbname = 'hrsewa';
  
  //Create connection
     $conn = mysqli_connect($servername, $username, $password, $dbname);
  if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO policies(policies_name, description) VALUES ('$policies_name','$description')";
  
  if(mysqli_query($conn, $sql)) {
    // output data of each row
          
            echo 'record added successfully';

  } else {
    echo "0 result" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>