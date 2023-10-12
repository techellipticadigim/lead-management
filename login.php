<?php
    session_start();
    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
       $username=$_POST ['username'];
       $email=$_POST ['email'];
       $contact_no=$_POST ['contact_no'];
       $password=$_POST ['password'];

       if(!empty($email) && !empty($password))
        {
          $query ="INSERT INTO register(USERNAME,EMAIL,CONTACTNO,PASSWORD) values ('$username','$email','$contact_no','$password')";
           
          mysqli_query($con, $query);
           
           echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
        }
        else
        {
           echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
        }
    }      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css"> 

</head>
<body>  
    <div class="Login Form">
        <h1>Login Form</h1>
        <form method="POST">
            <label>Username</label>
            <input type="text" name="username">
            <label>Email</label>
            <input type="text" name="email">
            <label>Contact No</label>
            <input type="text" name="contact_no">
            <label>Password</label>
            <input type="text" name="password"> 
            <input type="Submit" name="" value="Submit">
        </form>  
        <p>By clicking the Submit button,you are agree to our<br>
        <a href="">Terms and condition</a> and  <a href="">Privacy Policy</a>
        </p>
        <p>Already have an account? <a href="signup.php">Sign Up Here</a></p>
    </div>.
</body>
</html>

