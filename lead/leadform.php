<?php
    session_start();
    include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAD FORM</title>
 
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
        <h1>LEAD FORM</h1>
        <form method="POST">
            <label>Lead Title</label>
            <input type="text" name="lead_title" id="lead_title">
            <br>

            <label>Lead Category</label>
            <select id = "lead_category" name="lead_category" type="text">
				<option value="Select Category">-Select Category-</option>
				<option value="abc">abc</option>
                <option value="pqr">pqr</option>
                <option value="xyz">xyz</option>
            </select>
            <br>

            <label>Description</label>
            <textarea id="description" style="height:180px;font-size:19px;font-family:sans-serif;width:100%;line-height:30px;resize:none;"></textarea>
            <br>

           
            <label>Next Action</label>
            <select id = "next_action" name="next_action" type="text">
				<option value="Select Action">-Select Action-</option>
				<option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <br>

            <label>Lead By</label>
            <select id = "lead_by" name="lead_by" type="text">
				<option value="Lead By">-Lead By-</option>
				<option value="Admin">Admin</option>
                <option value="Teacher">Teacher</option>
            </select>
            <br>


            <input type="Submit" name="" value="Submit" onclick="submitForm();">
        </form>  
    </div>

    <script>
    function submitForm(){
       var lead_title = document.getElementById('lead_title').value;
       var lead_category = document.getElementById('lead_category').value;
       var description = document.getElementById('description').value;
       var next_action = document.getElementById('next_action').value;
       var lead_by = document.getElementById('lead_by').value;

       var params= "n1="+lead_title+"&n2="+lead_category+"&n3="+description+"&n4="+next_action+"&n5="+lead_by;

        //alert(params);
        


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

