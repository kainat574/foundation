<?php
if(isset($_POST['submit'])){
  $amount = $_POST['amount'];//user input ammount
  $name = $_POST['name'];//users name
  $email = $_POST['email'];//user input email
  $phone = $_POST['phone'];//user input phone
  $foundation = $_POST['foundation'];//user input foundation
  $payment = $_POST['payment'];//user input payment
  
  $to = "cemma3448@gmail.com"
  $subject= "form submission";
  $message = "Ammount:".$amount."<br>"."Name:".$name."<br>"."Email:".$email."<br>"."Phone no :".$phone."<br>"."To Foundation :".$foundation."<br>"."Via:".$payment;

  $header = "From:".$email;
 
 
}
?>