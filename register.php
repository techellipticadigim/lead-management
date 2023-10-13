<?php
    session_start();
    include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
 
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
    <div class="Registration Form">
        <h1>Registration Form</h1>
        <form method="POST">
            <label>Username</label>
            <input type="text" name="username" id="username">
            <label>Email</label>
            <input type="text" name="email" id="email">
            <label>Contact No</label>
            <input type="text" name="contact_no" id="contact_no">
            <label>Password</label>
            <input type="text" name="password" id="password"> 
            <label>Confirm Password</label>
            <input type="text" name="confirm_password" id="confirm_password"> 
            <input type="Submit" name="" value="Submit" onclick="submitForm();">
            <p>Already have an account? <a href="login.php">Login Here</a></p>
        </form>  
    </div>

    <script>
    function submitForm(){
       var username = document.getElementById('username').value;
       var email = document.getElementById('email').value;
       var contact_no = document.getElementById('contact_no').value;
       var password = document.getElementById('password').value;
       var confirm_password = document.getElementById('confirm_password').value;

       var params= "src=register&n1="+username+"&n2="+email+"&n3="+contact_no+"&n4="+password+"&n5="+confirm_password;

        // alert(params);
        


       var http = new XMLHttpRequest();
		var url = 'controller.php';


        http.onreadystatechange = function() {
			if(http.readyState == 4 && http.status == 200) {
                alert("Registration done successfully");
            }
        }	
			
		http.open('POST', url, true);
		http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		http.send(params);

    }
    </script>
</body>
</html>

