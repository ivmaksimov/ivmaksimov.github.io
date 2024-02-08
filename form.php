<?php

$errors=[];
if ($_SERVER["REQUEST_METHOD"] == 'POST') { // Check if the User coming from a request
    $name = isset($_POST["name"]) ? strip_tags(trim($_POST['email'])) : '';
  $email = isset($_POST["email"]) ? trim($_POST['email']) : ''; // simple validation if you insert an email
  $msg = isset($_POST["msg"]) ? strip_tags(trim($_POST['msg'])) : ''; // simple validation if you insert a string

  if(empty($name)){
    $errors[] ='Name is empty';
  }
  
  if(empty($email)){
    $errors[]='Email is empty';
  } else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors[]='Email is invalid';
  }
  if(empty($msg)){
    $errors[]='Message is empty';
  }
  if (empty($errors)){
    $recipient = "ivan_kratovo@hotmail.com";

    $headers = "From: $name <$email>";;

    if (mail($recipient,$msg,$headers)){
        echo "Email sent successfully";
    }else{
        echo "Failed to send email. Please try again later.";
    }
  }else {
    echo "The form contains thee folowing errors:<br>";
    foreach($errors as $error){
        echo "- $error<br>";
    }
  }

}else {
    header("HTTP/1.1 403 Forbiden");
    echo "You are not allowed to access this page.";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>

</head>

<body>


</body>

</html>