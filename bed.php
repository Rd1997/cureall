<!DOCTYPE html>

<html>
<head>
<title>Cure All</title>
<meta charset="utf-8">

<link href="layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="clear"> 
    
     <div id="logo" class="fl_left">
      <h1><a href="index.html">Cure all</a></h1>
    </div>
    
  
  </header>
</div>

<div class="wrapper row2">
  <nav id="mainav" class="clear"> 
 
    <ul class="clear">
      <li class="button"><a href="index.html">Home</a></li>
              <li class ="button"><a href="Emed.php">E-Medicine</a></li>
<li class ="button"><a href="Doctors.php">Doctors</a></li>

<li class ="active"><a href="LOGIN.php"> LOGIN</a></li>
                
    </ul>
   
  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear"> 


<h1>Bed allotment</h1>
<form action="" method="post">
<p>
Username or id:<input type="text" name="user"></p>
Bed:<input type="number" name="select" max="15" min="1"></p>



    </select>
<input type="submit" value="register" name="submit"><br/>


</form
<?php
if(isset($_POST["submit"]))
{
	 
		 $bed = $_POST['select']; 
		$user = $_POST['user'];

		 //DB Connection
		 $conn= mysqli_connect('localhost','root','123456','cureall');
		 
		$query = mysqli_query($conn, "SELECT * FROM bed WHERE bed_no='".$bed."'");

		$numrows = mysqli_num_rows($query);
		 if($numrows == 0)
		  {
				$sql = "INSERT INTO bed(id,bed_no) VALUES('$user','$bed')";
			 $res= mysqli_query($conn, $sql);
			if($res){
			 echo "Aloted";
			 }
			 else
			 {
			 echo "not available";
			 }
		 }
		 else
		 {
		 echo "select other ";
		 }
}
?>
</div>







</div>
    




  

<div class="wrapper row4">
  <footer id="footer" class="clear"> 
  <div class="row">
	







    
  </footer>
</div>
</div>
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    
    <p class="fl_left">&copy;Reserved by Avan avi</p>
    
</div>
  </div>

</html>
