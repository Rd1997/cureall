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


<h1>Login</h1>
<form action="" method="post">
<p>
<label>Select:</label><select name="select">
	<option value="non"> select</option>
        <option value="Customer"> Customer</option>
        <option value="Doctors">Doctors</option>
<option value="Pharmacist">Pharmacist</option><br>

    </select>
Username:<input type="text" name="user"></p>
<label>Password:</label><input type="password" name="pass"><br/>
<input type="submit" value="Login" name="submit"><br/>

<!--New user Register Link -->
<p>
<a href="Docregister.php">New User Registeration for Doctor</a></p>
<a href="Pharmacists.php">New User Registeration for Pharmacists</a></p>
<a href="cus_reg.php">New User Registeration for customer</a></p>
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $select = $_POST['select']; 
$user = $_POST['user'];
 $pass = $_POST['pass'];

 //DB Connection
 $conn = new mysqli('localhost', 'root', '123456') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'cureall') or die("databse error");
 //Selecting database
if ($select == 'Doctors')
{

 $query = mysqli_query($conn, "SELECT * FROM doc_login WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sess_user']=$user;
 //Redirect Browser
 header("Location:doc_after_login.php");
 }
 
 else
 {
 echo "Invalid Username or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }

}
else if ($select == 'Customer')
{
$query = mysqli_query($conn, "SELECT * FROM cus_login WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sess_user']=$user;
 //Redirect Browser

 header("Location:cus_after_login.php");
 }
 
 else
 {
 echo "Invalid Username or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }
}
else if ($select == 'Pharmacist')
{
$query = mysqli_query($conn, "SELECT * FROM phy_login WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sess_user']=$user;
 //Redirect Browser

 header("Location:phy_after_login.php.php");
 }
 
 else
 {
 echo "Invalid Username or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }
}
else
{
$query = mysqli_query($conn, "SELECT * FROM admin WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sess_user']=$user;
 //Redirect Browser
 header("Location:Admin.php");
 }
 else
 {
 echo "Invalid Username or Password!";
 }
}
 else
 {
 echo "Required All fields!";
 }
}}
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
