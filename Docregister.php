

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





<h2 align="center"> Doctors Registration </h2>
<form action="" method="post" enctype="multipart/form-data">
<label>ID :</label><input type="text" name="id" required>
<label>Password :</label><input type="password" name="pass" required>
<label>Name :</label><input type="text" name="name" required>
<label>E-mail :</label><input type="email" name="email" required>
<label>Phone_1   :</label><input type="tel" name="phone_1" required>
<label>Phone_2   :</label><input type="tel" name="phone_2">

<label>Address:</label><input type="var" name="address" required>

<label>gender  :</label>
<input type="radio" name="gender"  required value="Male"/>Male

<input type="radio" name="gender"  required value="Female"/>Female

<label>Qualification:</label><select name="qualification">
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

    </select>

<label>field:</label><input type="text" name="field" required>



<input type="submit" value="Register" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['id']))
{
$id = $_POST['id'];
 $pass= $_POST['pass'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone_1 = $_POST['phone_1'];
$phone_2 = $_POST['phone_2'];
 $address = $_POST['address'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$field = $_POST['field'];

 $conn = new mysqli('localhost', 'root', '123456') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'cureall') or die("DB Error"); // Select DB from database
 //Selecting Database
 $query = mysqli_query($conn, "SELECT * FROM dor WHERE id='".$id."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
  {
 //Insert to Mysqli Query
 $sql = "INSERT INTO doc_login(user,pass) VALUES('$id','$pass')";
 $result = mysqli_query($conn, $sql);

$sql = "INSERT INTO dor(id,pass,name,email,phone_1,phone_2,address,gender,qualification,field) VALUES('$id','$pass','$name','$email','$phone_1','$phone_2','$address','$gender','$qualification','$field')";
 $resul = mysqli_query($conn, $sql)or die("ERROR");


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
    
    <p class="fl_left">&copy;Reserved by Avan avi</p>
    
</div>
  </div>

</html>