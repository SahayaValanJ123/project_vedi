<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vedi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
</head>
<body>
   


<form action="" method="post">
    <h1>LOGIN</h1>
    <label >Username</label>
    <input name="email" type="text" placeholder="enter ur name ">
    <label >Password</label>
    <input name="password" type="password" placeholder="contains 8 digits">
    <button>login</button>
    <a href="#">forgot password ? </a><br>
   <p style="font-size: 12px;text-align: center;"> Don't have an account<a href="regiterform.php">Register</a>
</p>
</form>

<style>
    *{
    margin: 0%;
    padding: 0%;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
   
}
body{
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(to right , #3f5efb,#fc466b);
}
form{
    width: 25rem;
    height: 27rem;
    display: flex;
    flex-direction: column;
    background: rgba(255, 255, 255,0.06);
    box-shadow: 0 8px 32px 0 rgba(18, 18, 24, 0.37);
    border-radius: 30px;
    border-left: 1px solid rgba(255, 255, 255,.3);
    border-top: 1px solid rgba(255, 255, 255,.3);

}
h1{
    font-size: 50px;
    text-align: center;
    color: beige;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
    letter-spacing: 3px;
    margin-bottom: 5%;
    opacity: .7;
}
label{
    font-size: 20px;
    color: white;
    margin-left: 10%;
    opacity: .8;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
}
input{
    width: 80%;
    margin: 5% auto;
    margin-bottom: 8%;
    border: none;
    outline: none;
    background: transparent;
    color: white;
    border-bottom: 1px solid rgba(255, 255, 255,.6) ;
    opacity: .8;
}
button{
    width: 50%;
    margin: 3% auto;
    color: black;
    font-size: 15px;
    opacity: .7;
    background: rgba(255, 255, 255,.6);
    padding: 10px 30px;
    border: none;
    outline: none;
    border-radius: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
    box-shadow: 3px 3px 5px rgba(31, 38, 135, .37);
    border-left: 1px solid rgba(255, 255, 255,.6) ;
    border-top: 1px solid rgba(255, 255, 255,.6);
}
a{
    font-size: 12px;
    text-align: center;color: white;
    opacity: .7;
    
}
</style>

<?php
$conn= require_once('dbFunction.php');
if ($_SERVER["REQUEST_METHOD"]=="POST" && ISSET($_POST["register"])) {
    $username=$_POST["username"];
    $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
}

?>
</body>
</html>

