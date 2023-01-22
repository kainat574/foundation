<!-- INSERT INTO `student` (`id`, `name`, `roll`, `adress`) VALUES (NULL, 'shayan', '101', 'karachi'), (NULL, 'shoaib', '102', 'lahore'); -->

<!-- database name = connection || table name = student || coloums = id , name , roll , adress || -->
<?php 

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "donationdb";

//created a connection

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

//checking the connection

if($conn){
    echo "";
}
else{
    die("connection failed");
}

/* $sql = "INSERT INTO student (name, roll, adress) values('afnan','104','Dha')";
if(mysqli_query($conn, $sql)){
    echo "Data inserted successfully";
}else{
    echo "data insertion failed";
}
*/

//vALIDATIONS

if(isset($_REQUEST['submit'])){

    if(($_REQUEST['amount']== "") || ($_REQUEST['name']== "") || ($_REQUEST['email']== "") || ($_REQUEST['phone']== "")|| ($_REQUEST['foundation']== "")|| ($_REQUEST['payment']== "")  ){
        echo "<script>alert('Please fill all the fields')</script>";
    }
    else{
      $amount =  $_REQUEST['amount'];
      $name =  $_REQUEST['name'];
      $email =  $_REQUEST['email'];
      $phone =  $_REQUEST['phone'];
      $foundation =  $_REQUEST['foundation'];
      $payment =  $_REQUEST['payment'];
      $sql = "INSERT INTO payment (name, email, phone,foundation,payment,amount) values('$name','$email','$phone','$foundation','$payment','$amount')";
      if(mysqli_query($conn , $sql)){
        echo"<script>alert('Donation Submitted')</script>";
    }else{
        echo"Submition failed";
    
    }
    }


}


?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card-form">
        <form action="" method="POST" class="deposit">
          <div class="form-indicator"></div>
          <div class="form-body">
            <div class="row">
              <h1 style="margin-bottom:0px;">DEPOSIT FUNDS</h2>
            </div> 
            <div class="row" >
              <p style="margin-top:0px;" id ="donation">Donate to needy people</p>
            </div>
            
            <!-- paisa paisa -->

            <div class="row">
                <input  name="amount" type="text" id="cc" maxlength="16" placeholder="Enter your the amount">
              </div>


            <!-- username -->

            <div class="row">
              <input  name="name" class="input" type="text" id="cc"  placeholder="Enter your name">
            </div>
            <!-- email -->

            <div class="row">
              <input name="email" type="text" id="cc" maxlength="35" placeholder="Enter your email">
            </div>
            <!-- phone -->

            <div class="row">
                <input name="phone" type="text" id="cc" maxlength="16" placeholder="Enter your phone number">
              </div>
            <!-- foundation name -->
              
              <div class="row">
                <select name="foundation" style="cursor: pointer;" id="payment">
                <option value="0">Select Foundation Name</option>
                
                <option value=" Aga Khan Foundation"> Aga Khan Foundation</option>

                <option value=" Chhipa Welfare Association">Chhipa Welfare Association</option>

                <option value=" Darul Sukun">Darul Sukun</option>

                <option value="Edhi Foundation"> Edhi Foundation</option>

                
                <option value=" Shahid Afridi Foundation"> Shahid Afridi Foundation</option>

                <option value=" Shaukat Khanum Cancer Hospital"> Shaukat Khanum Cancer Hospital</option>

                <option value=" Transparent Hand Trust"> Transparent Hand Trust</option>



                </select>
              </div>
            <div class="row">
              <select name="payment" style="cursor: pointer;" id="payment">

                <option value="0">Select Payment Method</option>
                <option value="paypal">Paypal</option>
                <option value="easypaisa">EasyPaisa</option>
                <option value="googlepay">Google Pay</option>

              </select>
            </div>
          </div>
          <div class="form-footer">
            <button name="submit" value="submit" style="cursor:pointer ;" class="btn" onclick="validate(this)">Deposit Funds</button>
          </div>
        </form>
      </div>

<?php
if(isset($_POST['submit'])){
  $mailto = "cemme3448@gmail.com";//my email
  $from = $_POST['email'];// senders email address
  $amount = $_POST['amount'];//user input ammount
  $name = $_POST['name'];//users name
  $email = $_POST['email'];//user input email
  $phone = $_POST['phone'];//user input phone
  $foundation = $_POST['foundation'];//user input foundation
  $payment = $_POST['payment'];//user input payment
  $subject2= "your message submitted sucessfully";
  $message = "Ammount:".$amount."<br>"."Name:".$name."<br>"."Email:".$email."<br>"."Phone no :".$phone."<br>"."To Foundation :".$foundation."<br>"."Via:".$payment;
  $message2 = "Dear".$name."<br>"."Thank you for your Donation we will make sure that your money is reached to the right person in need";
  $header = "From:".$from;
  $header2 = "From". $mailto;
  $result = mail($mailto,$message,$header);
  $result2 = mail($from,$subject2,$message2,$header2);

}

?>


</body>
</html>