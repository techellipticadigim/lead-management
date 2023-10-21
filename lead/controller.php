<?php
session_start();
include("db.php");


$src= $_POST['src'];

    if ($src == "register" )
    {
        $username=$_POST['n1'];
        $email=$_POST['n2'];
        $contact_no=$_POST['n3'];
        $password=$_POST['n4'];
        $confirm_password=$_POST['n5'];

            if(!empty($username) && !empty($email) && !empty($contact_no) && !empty($password) && !empty($confirm_password))
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
        $email=$_POST['n1'];
        $password=$_POST['n2'];

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



    if ($src == "leadform" )
    {
        $lead_title=$_POST['n1'];
        $lead_category=$_POST['n2'];
        $description=$_POST['n3'];
        $next_action=$_POST['n4'];
        $lead_by=$_POST['n5'];

       
        if(!empty($lead_title) && !empty($lead_category) && !empty($description)&& !empty($next_action) && !empty($lead_by))
        {
          $query ="INSERT INTO leadform(LEADTITLE,LEADCATEGORY,DESCRIPTION,NEXTACTION,LEADBY) VALUES ('$lead_title','$lead_category','$description','$next_action','$lead_by')";
           
          mysqli_query($con, $query);
           
           echo "<script type='text/javascript'> alert('Submitted Successfully')</script>";
        }
        else
        {
           echo "<script type='text/javascript'> alert('Please enter all information')</script>";
        }
    } 

    if($src == "leadcategory" )
        {
            $category_name=$_POST['n1'];
            $category_description=$_POST['n2'];

         if(!empty($category_name) && !empty($category_description))
            {
            $query ="INSERT INTO leadcategory(CATEGORYNAME,CATEGORYDESC) VALUES ('$category_name','$category_description')";
            
            mysqli_query($con, $query);
            
            echo "<script type='text/javascript'> alert('Submitted Successfully' )</script>";
            }
            else
            {
            echo "<script type='text/javascript'> alert('Please enter all information')</script>";
            }
        }  
        
    
?>    