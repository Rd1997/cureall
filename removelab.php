<?php
 session_start();
if ( !isset ($_SESSION['sess_user']))
die( "not logged in");
?>
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

<li class ="active"><a href="logout.php"> LOGOUT</a></li>
                
    </ul>
   
  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear"> 


<h1>Admin</h1>
<form action="" method="post">

</form>


<h2 align="center"> lab List</h2>
 <table class="table table-hover">
           <tr>
               <th>Name</th>
           </tr>
           
<?php
if(isset($_POST["submit"])){
if(!empty($_POST['user'])){
$user = $_POST['user'];
$conn = new mysqli('localhost', 'root', '123456') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'cureall') or die("DB Error"); // Select DB from database
$query = mysqli_query($conn, " DELETE FROM lab WHERE user='".$user."'");
$query = mysqli_query($conn, " DELETE FROM lab_login WHERE user='".$user."'");
}}
$conn = new mysqli('localhost', 'root', '123456') or die (mysqli_error()); // DB Connection
$db = mysqli_select_db($conn, 'cureall') or die("DB Error"); // Select DB from database
//Selecting Database
$sql = "Select user from lab";
$result = $conn->query($sql);
//Result Message
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['user']; ?></td> 
</tr>
<?php
}
}
else
{
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
    
    <p class="fl_left">&copy; Reserved by Avan avi</p>
    
</div>
  </div>

</html>
