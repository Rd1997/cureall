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


<h1>Appoinment</h1>
<form action="" method="post">
<p>
Username or id:<input type="text" name="user"></p>
<label>time:</label><select name="select">
	<option value="non"> Select</option>
        <option value="1">10:00 - 10:30</option>
        <option value="2">10:30 - 11:00</option>
		<option value="3">11:00 - 11:30</option>
		<option value="4">11:30 - 12:00</option>
		<option value="5">12:00 - 12:30</option>
		<option value="6">12:30 - 01:00</option>
		<option value="7">04:00 - 04:30</option>
		<option value="8">04:30 - 05:00</option>
		<option value="9">05:00 - 05:30</option>
		<option value="10">05:30 - 06:00</option>
		<option value="11">06:00 - 06:30</option>
		<option value="12">06:30 - 07:00</option>


    </select>
<input type="submit" value="register" name="submit"><br/>


</form
<?php
if(isset($_POST["submit"]))
{
	 if(!empty($_POST['user']) )
	 {
		 $time = $_POST['select']; 
		$user = $_POST['user'];

		 //DB Connection
		 $conn= mysqli_connect('localhost','root','123456','cureall');
		 
		$query = mysqli_query($conn, "SELECT * FROM appo WHERE time='".$time."'");

		$numrows = mysqli_num_rows($query);
		 if($numrows == 0)
		  {
				$sql = "INSERT INTO appo(id,time) VALUES('$user','$time')";
			 $result = mysqli_query($conn, $sql);
			if($result){
			 echo "Registered";
			 }
			 else
			 {
			 echo "time taken";
			 }
		 }
		 else
		 {
		 echo "select other time";
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
