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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <form method="POST" class="container">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
                name="email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Send</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>