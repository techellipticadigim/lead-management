<?php
    session_start();
    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email=$_POST ['email'];
        $password=$_POST ['password'];
   
        
        if(!empty($email) && !empty($password))
        {
            $query = "SELECT * from register where EMAIL='$email' limit 1";
            $result = mysqli_query($con,$query);
 
            if($result) 
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);   
                    
                    if($user_data['PASSWORD'] == $password)
                    {
                        header("location:index.php"); 
                        die;
                    }
                }
            }
            echo "<script type='text/javascript'> alert('Wrong Email or Password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Wrong Email or Password')</script>";
        }
    }
    
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="style.css"> 

</head>
<body>
    <div class="Sign Up Form"> 
        <h1>Sign Up Form</h1>
        <form method="POST">
            <label>Email</label>
            <input type="text" name="email">
            <label>Password</label>
            <input type="text" name="password">  
            <input type="Submit" name="" value="Submit">
            <p>Not have an account? <a href="login.php">Register here</a></p>
        </form>
</body>        
</html>