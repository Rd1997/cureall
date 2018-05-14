<?php
 session_start();
if ( !isset ($_SESSION['sess_user']))
die( "not logined");
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
      <li class="active"><a href="index.html">Home</a></li>
              <li class ="button"><a href="Emed.php">E-Medicine</a></li>
<li class ="button"><a href="Doctors.php">Doctors</a></li>

<li class ="button"><a href="logout.php"> LOGOUT</a></li>
                
    </ul>
   
  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear"> 
	  
<?php
$m=mysqli_connect("localhost","root","123456","cureall") or die("ERROR");
$id= $_SESSION['sess_user'];
$sql = "select id,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,quan1,quan2,quan3,quan4,quan5,quan6,quan7,quan8,quan9,quan10 from med where id = '$id'";

$res=mysqli_query($m,$sql);
$r=mysqli_fetch_array($res);

if ($r[0]==NULL)
{
echo "no data available";
}
else
{
echo "<p><h3>ID : ".$r[0]."</h3></p>";
echo "<form name='form1'>
<table>
<tr>
<td>Total Medicines : </td>
<td>Name</td>
<td>Quantity</td>
</tr>
<tr>
<td>Medicine1 : </td>
<td>".$r[1]."</td>
<td>".$r[11]."</td>
</tr>
<tr>
<td>Medicine2 : </td>
<td>".$r[2]."</td>
<td>".$r[12]."</td>
</tr>
<tr>
<td>Medicine3 : </td>
<td>".$r[3]."</td>
<td>".$r[13]."</td>
</tr>
<tr>
<td>Medicine4 : </td>
<td>".$r[4]."</td>
<td>".$r[14]."</td>
</tr>
<tr>
<td>Medicine5 : </td>
<td>".$r[5]."</td>
<td>".$r[15]."</td>
</tr>
<tr>
<td>Medicine6 : </td>
<td>".$r[6]."</td>
<td>".$r[16]."</td>
</tr>
<tr>
<td>Medicine7 : </td>
<td>".$r[7]."</td>
<td>".$r[17]."</td>
</tr>
<tr>
<td>Medicine8 : </td>
<td>".$r[8]."</td>
<td>".$r[18]."</td>
</tr>
<tr>
<td>Medicine9 : </td>
<td>".$r[9]."</td>
<td>".$r[19]."</td>
</tr>
<tr>
<td>Medicine10 : </td>
<td>".$r[10]."</td>
<td>".$r[20]."</td>
</tr>
</table>
</form>";

echo "total =$r[20]";
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
