<?php
session_start();
include("db.php");

   
if ($_SERVER['REQUEST_METHOD'] == "POST" )
    {
        $lead_title=$_POST ['n1'];
        $lead_category=$_POST ['n2'];
        $description=$_POST ['n3'];
        $next_action=$_POST ['n4'];
        $lead_by=$_POST ['n5'];


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


    
?>    