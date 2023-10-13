<?php
session_start();
include("db.php");

   
$src=$_POST ['src'];
    if ($src == "register" )
    {
        $username=$_POST ['n1'];
        $email=$_POST ['n2'];
        $contact_no=$_POST ['n3'];
        $password=$_POST ['n4'];
        $confirm_password=$_POST ['n5'];


       if(!empty($email) && !empty($password))
        {
          $query ="INSERT INTO registration(USERNAME,EMAIL,CONTACTNO,PASSWORD,CONFIRMPASSWORD) VALUES ('$username','$email','$contact_no','$password','$confirm_password')";
           
          mysqli_query($con, $query);
           
           echo "<script type='text/javascript'> alert('Registration done successfully')</script>";
        }
        else
        {
           echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
        }
    }  


    if ($src == "login" )
    {
        $email=$_POST ['n1'];
        $password=$_POST ['n2'];
  

       if(!empty($email) && !empty($password))
        {
          $query ="INSERT INTO registration(EMAIL,PASSWORD) VALUES ('$email','$password')";
           
          mysqli_query($con, $query);
           
           echo "<script type='text/javascript'> alert('Login Successfully')</script>";
      
        }
        else
        {
           echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
        }
    }  
?>    