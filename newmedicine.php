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

<li class ="button"><a href="logout.php"> LOGOUT</a></li>
                
    </ul>
   
  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear"> 





<h2 align="center"> Enter Medicine </h2>
<form action="" method="post">

<label>Name :</label><input type="text" name="name" required>
<label>Quantity :</label><input type="text" name="quantity" required>
<input type="submit" value="Add" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['name']))
{

 $name = $_POST['name'];
 $quantity = $_POST['quantity'];

 $conn = new mysqli('localhost', 'root', '123456') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'cureall') or die("DB Error"); // Select DB from database
 //Selecting Database
 $query = mysqli_query($conn, "SELECT * FROM medicine WHERE name='".$name."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
 
 {
 //Insert to Mysqli Query
 $sql = "INSERT INTO medicine(name,quantity) VALUES('$name','$quantity')";
 $result = mysqli_query($conn, $sql);

 if($result){
 echo "Sent Successfully";
 }
 else
 {
 echo "Failure!";
 }
 }
 else
 {
 echo "That medicine already exists!";
 }
 }
 else
 {
 ?>
 <!--Javascript Alert -->
<script>alert('Required all felds');</script>
 <?php
 }
}
?>

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
