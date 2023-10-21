<?php
    session_start();
    include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAD CATEGORY FORM</title>
 

<style>
body{
   width: 40%;
   height: 60vh;
}

h1{
   text-align: center;
}
select {
  width: 100%;
  padding: 12px 20px;
  border: 1px solid gray;
  border-radius: 4px;
  font-size: 19px;
 }
.textbox{
	font-size:19px;
	width: 300px;
	height: 20px;;
	text-indent:5px;
    padding: 12px 20px;
    border: 1px solid gray;
    border-radius: 4px;
    font-family: sans-serif;
}
form{
    width: 600px;
    margin: auto;
  
}
form label{
    display: flex;
    margin-top: 20px;
    font-size: 20px;
    color: black;
    font-weight:bold;
}
form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid gray;
    outline:none;
    font-size: 19px;
}
input[type="submit"]{
    width: 200px;
    height: 35px;
    margin-top:20px;
    border: none;
    background-color: rgb(13,211,247);
    color:white;
    font-size: 19px;
    cursor: pointer;

}


</style>
</head>
<body>  
    <div class="container">
        <h1>LEAD CATEGORY FORM</h1>
       

        <form method="POST">
            <label>Category Name</label>
            <input type="text" name="category_name" id="category_name">
            <br>

            <label>Category Description</label>
            <textarea id="category_description" style="height:180px;font-size:19px;font-family:sans-serif;width:100%;line-height:30px;resize:none;"></textarea>
            <br>

            
           <input type="Submit" name="" value="Submit" onclick="submitForm();">
          

            
        </form>  
    </div>

    <script>
    function submitForm(){
       var category_name = document.getElementById('category_name').value;
       var category_description = document.getElementById('category_description').value;
  

       var params= "src=leadcategory&n1="+category_name+"&n2="+category_description;

        // alert(params);
        


       var http = new XMLHttpRequest();
		var url = 'controller.php';


        http.onreadystatechange = function() {
			if(http.readyState == 4 && http.status == 200) {
                alert("Submitted Successfully");
            }
        }	
			
		http.open('POST', url, true);
		http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		http.send(params);

    }
    </script>
</body>
</html>

