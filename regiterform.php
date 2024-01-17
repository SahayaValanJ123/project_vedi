<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reg_form</title>
</head>
<link rel="stylesheet" href="/style.css">
<body>

<style>
*{
    margin: 0%;
    padding: 0%;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    
}
body{
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(to right , #3f5efb,#fc466b);
}
form{
    width: 25rem;
    height: 100vh;
    display: flex;
    flex-direction: column;
    background: rgba(255, 255, 255,0.06);
    box-shadow: 0 8px 32px 0 black;
    border-radius: 30px;
    border-left: 1px solid rgba(255, 255, 255,.3);
    border-top: 1px solid rgba(255, 255, 255,.3);

}
h2{
    margin-top: 10px;
    text-align: center;
    color: aqua;
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
    cursor: pointer;
}
a{
    font-size: 12px;
    text-align: center;color: white;
    opacity: .7;
    
}

</style>


<form action="" method="post">

 <h2>REGISTER HERE</h2>
 <label for="fullname">full name <img src="user.png" style="height: 1rem; width:1rem;"></label>
 <input type="text" name="username" placeholder="Enter your full name" required>

 <label for="gmail" >E-mail<img src="gmail.png" style="height: 1rem; width:1rem;"></label>
<input type="text" name="email" placeholder="your email" required>

<label for="phone-No">mobile<img src="phone.png" style="height: 1rem; width:1rem;"></label>
<input type="tel" placeholder="mobile number" required>

<label for="password">password <img src="password.png" style="height: 1rem; width:1rem;"></label>
<input type="password" name="password" placeholder="strong password" required>

<label for="password">confirm password <img src="password.png" style="height: 1rem; width:1rem;"></label>
<input type="password" name="password" placeholder="strong password" required>

<button type="submit" >register</button>
</form>
</body>
</html>