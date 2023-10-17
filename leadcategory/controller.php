<?php
session_start();
include("db.php");

   
if ($_SERVER['REQUEST_METHOD'] == "POST" )
    {
        $category_name=$_POST ['n1'];
        $category_description=$_POST ['n2'];
        $start_timestamp=$_POST ['n3'];
     
 
        if(!empty($category_name) && !empty($category_description) && !empty($start_timestamp))
        {
          $query ="INSERT INTO leadcategory(CATEGORYNAME,CATEGORYDESC,CATADDTIMESTAMP) VALUES ('$category_name','$category_description','$start_timestamp')";
           
          mysqli_query($con, $query);
           
           echo "<script type='text/javascript'> alert('Submitted Successfully')</script>";
        }
        else
        {
           echo "<script type='text/javascript'> alert('Please enter all information')</script>";
        }
    }  


    
?>    