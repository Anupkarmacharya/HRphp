<?php
  $organization_name =  $_GET['organization_name'];
  $address = $_GET['address'];
  $email = $_GET['email'];
  $website = $_GET['website'];
  $contact_number = $_GET['contact_number'];
  $longitude = $_GET['longitude'];
  $latitude = $_GET['latitude'];


  $servername = "localhost";
  $username = "poltics";
  $password = "poltics";
  $dbname = 'hrsewa';
  ?>
  <?php 
  
  //Create connection
     $conn = mysqli_connect($servername, $username, $password, $dbname);
  if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO organizations(organization_name,address,email,website,contact_number,longitude,latitude) VALUES
                     ('$organization_name','$address','$email','$website','$contact_number','$longitude','$latitude')";
  
  if(mysqli_query($conn, $sql)) {
    // output data of each row
          
            echo 'record added successfully';

  } else {
    echo "0 result" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>
