<?php
    session_start();
    include("db.php");

 ?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
 body{
   width: 100%;
   height: 100vh;
   font-family: sans-serif;
}
.loginform{
    width: 350px;
    height: 800px;
    margin: auto;
    background:white;
    border-radius: 3px;
}
.signin{
    width: 350px;
    height:280px;
    margin: auto;
    background:white;
    border-radius: 3px;
}

h1{
   text-align: center;
}
form{
    width: 320px;
    margin: auto;
  
}
form label{
    display: flex;
    margin-top: 20px;
    font-size: 18px;
}
form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid gray;
    outline:none;
}
input[type="submit"]{
    width: 320px;
    height: 35px;
    margin-top:20px;
    border: none;
    background-color: rgb(13,211,247);
    color:white;
    font-size: 18px;
    cursor: pointer;

}
</style>
</head>
<body>
    <div class="Login Form"> 
        <h1>Login Form</h1>
        <form method="POST">
            <label>Email</label>
            <input type="text" name="email" id="email">

            <label>Password</label>
            <input type="password" name="password" id="password">  

            <input type="Submit" name="" value="Submit" onclick="submitForm();">

            <p>Not have an account? <a href="register.php">Register here</a></p>
        </form>

    <script>
    function submitForm(){
       var email = document.getElementById('email').value;
       var password = document.getElementById('password').value;

       var params= "src=login&n1="+email+"&n2="+password;

        // alert(params);
        
        var http = new XMLHttpRequest();
		var url = 'controller.php';


        http.onreadystatechange = function() {
			if(http.readyState == 4 && http.status == 200) {
                alert("Login Successfully");
            }
        }	
			
		http.open('POST', url, true);
		http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		http.send(params);

    }
    </script>
</body>        
</html>