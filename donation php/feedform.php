<?php
$visited = $_POST['visited'];
$reason = $_POST['reason'];
$needed = $_POST['needed'];
$found = $_POST['found'];
$easy = $_POST['easy'];
$imp = $_POST['imp'];
$likelihood = $_POST['likelihood'];
$message = $_POST['message'];

// databse connection
//table name(f_forms)

$conn = new mysqli('localhost','root','','forms');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error );
}
else
{
    $stmt = $conn->prepare("Insert INTO f_forms(visited,reason,needed,found,easy,imp,likelihood,message)values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$visited,$reason,$needed,$found,$easy,$imp,$likelihood,$message);
    $stmt->execute();
    echo "<script>alert('FORM SUBMITTED SUCESSFULLY')</script>";
    $stmt->close();
    $conn->close();
}

?>