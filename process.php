<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "chlesacpetravel@gmail.com";
    $name = $_POST['nameClient'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $how_many = $_POST['howMany'];
	$where_from = $_POST['whereFrom'];
	$where_to = $_POST['whereTo'];
	$medical = $_POST['medical'];
	$diet = $_POST['diet'];
	$message = $_POST['requests'];
    
    //send email
    mail($admin_email, "New Client Form", $message, $ $name . ' - ' . $phone . , "From:" . $email, "Travels:" . $how_many, "Where From:" . $where_from, "Where To:" . $where_to, "Medical:" . $medical, "Diet:" . $diet);
    
    header('Location: /success.html');
  }