<?php
$servername = "localhost";
$username = "root";
$password = "admin2345678";
$dbname = "inputform";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }



$Name = $Email = $Age = $Phone = $Currency = $Amound = "";


$Namee =  $_POST['name'];
$Emaill =  $_POST['email'];
$Agee = $_POST['age'];
$Phonee = $_POST['phone'];
$Currencyy = $_POST['currency'];
$Amountt = $_POST['amount'];
$PaymentMethodd = $_POST['paymentMethod'];



$sql = "INSERT INTO cryptopayment (Name, Email, Age,Phone,Currency,Amount,Method)
VALUES ('$Namee', '$Emaill', '$Agee' , '$Phonee', '$Currencyy', '$Amountt','$PaymentMethodd')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}







$conn->close();

?>