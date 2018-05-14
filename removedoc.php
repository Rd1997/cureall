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


<h1>Admin</h1>
<h2 align="center"> Doctor's List</h2>
 <table class="table table-hover">
           <tr>
               <th>Name</th>
               <th>Specialist in</th>
           </tr>
		   

		   
		   
		   
		   
           
<?php
 $conn = new mysqli('localhost', 'root', '123456') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'cureall') or die("DB Error"); // Select DB from database
 //Selecting Database
 if(isset($_POST["submit"])){
				 if(!empty($_POST['user'])){
$user = $_POST['user'];
$conn = new mysqli('localhost', 'root', '123456') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'Cureall') or die("DB Error"); // Select DB from database
$query = mysqli_query($conn, " DELETE FROM dor WHERE name='".$user."'");
$query = mysqli_query($conn, " DELETE FROM doc_login WHERE user='".$user."'");
}}
 $sql = "Select name,field from dor";
 $result = $conn->query($sql);
 //Result Message
 
 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 ?>
		                   <tr>
						   <td><?php echo $row['name']; ?></td> 
		                   <td><?php echo $row['field']; ?></td>
					   </tr>
		                 <?php
				     }
				 } else {
				     echo "0 results";
				 }
				 
				 $conn->close();
				 
				 ?>

		               </tr>
		        </table>


<form action="" method="post">
Username:<input type="text" name="user"></p>

<input type="submit" value="Remove" name="submit"><br/>
</form>




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