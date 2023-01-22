<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// databse connection
//table name(c_form)

$conn = new mysqli('localhost','root','','forms');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error );
}
else
{
    $stmt = $conn->prepare("Insert INTO c_form(name,email,subject,message)values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$subject,$message);
    $stmt->execute();
    echo "<script>alert('FORM SUBMITTED SUCESSFULLY')</script>";
    $stmt->close();
    $conn->close();
}

?>