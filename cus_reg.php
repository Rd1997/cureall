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

<li class ="button"><a href="LOGIN.php"> LOGIN</a></li>
                
    </ul>
   
  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear"> 


<body>


<h2 align="center"> Customer Registration </h2>
<form action="cus_reg.php" method="POST">

<label>Name :</label><input type="text" name="nam"  required> 
<label>Age :</label><input type="number" name="age" required>
<label>gender  :</label>
<input type="radio" name="gen"  required value="Male"/>Male
<input type="radio" name="gen"  required value="Female"/>Female
<label>Blood Group :</label><select name="bgroup">
        <option value="O+"> O+</option>
        <option value="O-">O-</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option><br>

    </select>
<label>E-mail :</label><input type="mail" name="mai" required>
<label>Phone.No   :</label><input type="tel" name="pho" required>
<label>User :</label><input type="text" name="user" placeholder="Ron23-4-1997" pattern="[A-Za-z]{3}[0-9]{2}/[0-9]{2}/[0-9]{4}"required> (Enter your name's three letters followed by your birth date )
<label>Password :</label><input type="password" name="pass" required>
<label>Address:</label><input type="var" name="addr" required>
<label>City  :</label><input type="var" name="cit" required>
<br>
<label>Medical History :</label><textarea rows="4" cols="80" name="mh">Medical History if any...</textarea><br>

<input type="submit" value="Register" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
$nam = $_POST['nam'];
$age = $_POST['age'];
$gen = $_POST['gen'];
$bgroup = $_POST['bgroup'];
$mai = $_POST['mai'];
$pho = $_POST['pho'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$addr = $_POST['addr'];
$cit = $_POST['cit'];
$mh = $_POST['mh'];

$dbc = mysqli_connect('localhost', 'root', '123456', 'cureall')or die('Error connecting to MySQL server.');
$query = "INSERT INTO cus_login(user,pass) VALUES('$user','$pass')";
 $resul = mysqli_query($dbc,$query);
$sql = "INSERT INTO cur(nam,age,gen,bgroup,mai,pho,user,pass,addr,cit,mh) VALUES('$nam','$age','$gen','$bgroup','$mai','$pho','$user','$pass','$addr','$cit','$mh')";

$result = mysqli_query($dbc,$sql);

if($result && $resul)
{
echo "Successfully sent";
}
else
{
echo "Change User ";
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
</body>
</html>
