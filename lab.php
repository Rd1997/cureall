

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

<li class ="active"><a href="login.php"> LOGIN</a></li>
                
    </ul>
   
  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear"> 





<h2 align="center"> laboratory Registration </h2>
<form action="lab.php" method="post" >

<h3>Personal Info</h3>
<label><b>Full Name:</b>
    <input type="text" placeholder="Enter Your name" name="nameu" required></label><br>

<label><b>E-Mail:</b></label>
    <input type="email" placeholder="Enter Your Email" name="mailid" required><br>

<label><b>Ph.No:</b></label>
    <input type="tel" placeholder="Enter Number" name="mob" required><br>
<label>Username:</label><input type="var" name="user" required><br>
<label>password :</label><input type="password" name="pass" required><br>

<label><b>Qualification:</b></label>
    <select name="Qualification" required>
        <option value="BMBS"> BMBS</option>
        <option value="BM">BM</option>
<option value="MBChB">MBChB</option>
<option value="BmedSci">BmedSci</option>
<option value="MCM">MCM</option>
<option value="MMSc">MMSc</option>
<option value="MMed">MMed</option>
<option value="MPhil">MPhil</option>
<option value="MS">MS</option>
<option value="MSc">MSc</option>
<option value="DCM">DCM</option>
<option value="DClinSurg">DClinSurg</option><br>

    </select><br>
<label><b>Approved ID:</b></label>
    <input type="var" placeholder="Enter ID" name="aid" required><br>


    <input type="submit" value="Register" name="submit">
<br>
</form>

<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['nameu'])&& !empty($_POST['mailid']) && !empty($_POST['mob'])&&!empty($_POST['user']) && !empty($_POST['pass'])&& !empty($_POST['Qualification'])&& !empty($_POST['aid'])){
 $nameu = $_POST['nameu'];
 $mailid = $_POST['mailid'];
 $mob = $_POST['mob'];
$user = $_POST['user'];
 $pass = $_POST['pass'];
 $Qualification = $_POST['Qualification'];
 $aid = $_POST['aid'];
  
 $conn = new mysqli('localhost', 'root', '123456') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'cureall') or die("DB Error"); // Select DB from database
 //Selecting Database

 $query = mysqli_query($conn, "SELECT * FROM lab WHERE user='".$user."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
 
 {
 //Insert to Mysqli Query
 $sql = "INSERT INTO lab_login(user,pass) VALUES('$user','$pass')";
 $resul = mysqli_query($conn, $sql);

 
 //Insert to Mysqli Query
 $sql = "INSERT INTO lab(nameu,mailid,mob,user,pass,Qualification,aid) VALUES('$nameu','$mailid','$mob','$user','$pass','$Qualification','$aid')";
 $result = mysqli_query($conn, $sql);
 //Result Message
 if($result && $resul){
 echo "Sent Successfully";
 }
 else
 {
 echo "Failure!";
 }
 }
 else
 {
 echo "That Username already exists! Please try again.";
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
    
    <p class="fl_left">&copy; Reserved by Avan avi</p>
    
</div>
  </div>

</html>