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
<a href="removedoc.php">Remove Doctor</a></p>
<a href="removephy.php">Remove Pharmacist</a></p>
<a href="removecus.php">Remove customer</a></p>
<a href="removelab.php">Remove lab</a></p>
<a href="appo.php">Appoinment</a></p>
<a href="bed.php">Bed allotment</a></p>
<a href="cus_reg.php">New User Registeration for customer</a></p>
<a href="csshier.html">casheir</a></p>
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
