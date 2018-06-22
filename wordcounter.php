


<center>
<!DOCTYPE html>
<html>







  <head>
	   <style>
	   
	  #logo{
		 color:red; 
		 padding-right:1300px;  
		   
		   
	   }
	   #box{
		   
		  color:red; 
		  size:20px; 
		   
	   }
		   
		   
		.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}



.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}   
		   
	   
	   
	   
	   
	   </style>
	   
	   
	   
	   </head>










<body>
<h1>Word Counter Tool</h1>
<?php

if(isset($_POST['submit1'])){
 echo str_word_count ($love=$_POST["love"]);



}
?>

</body>
</html>
<form action="" method="post">

<br>
<br>
<textarea rows="10" cols="180"   id="love" name="love" >
</textarea>
<input  class="button button2" type="submit" name="submit1" value="submit1">

</form>
<br>


Or 
<br>
Upload Txt/Pdf/Docs Files

<br>
<br>


<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="docfile" />
    <input class="button button2" type="submit" name="submit" />

</form>

<?php
    if(isset($_POST['submit'])){
        $file = $_FILES['docfile']['name'];
        $file = str_replace(" ","_",$file);
        //$file = file_get_contents($file);

        $ext = pathinfo($file, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['docfile']['tmp_name'],"uploads/".$file);

        if($ext == "txt" || $ext == "pdf" || $ext == "doc" || $ext == "docx"){
            $file = file_get_contents("uploads/".$file);
            echo str_word_count($file);
        }
    }
?>

</center>



























