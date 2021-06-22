<?php
    include('dbconn.php');


    $rno = $_POST['rno'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $mob = $_POST['mob'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['pwd'];
$sql = "INSERT INTO users (registration_no, fname, lname, gender, contact, username, email, pass, date) 
        VALUES ('$rno', '$fname', '$lname', '$gender', '$mob', '$username', '$email', '$pwd', current_timestamp())";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>
