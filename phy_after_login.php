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
<script type='text/javascript'>
function mul1(m,n)
{
var no1=parseFloat(m)
var no2=parseFloat(n)
var no3=no1*no2
form1.total1.value=no3
}
function mul2(m,n)
{
var no1=parseFloat(m)
var no2=parseFloat(n)
var no3=no1*no2
form1.total2.value=no3
}
function mul3(m,n)
{
var no1=parseFloat(m)
var no2=parseFloat(n)
var no3=no1*no2
form1.total3.value=no3
}
function mul4(m,n)
{
var no1=parseFloat(m)
var no2=parseFloat(n)
var no3=no1*no2
form1.total4.value=no3
}
function mul5(m,n)
{
var no1=parseFloat(m)
var no2=parseFloat(n)
var no3=no1*no2
form1.total5.value=no3
}
function mul6(m,n)
{
var no1=parseFloat(m)
var no2=parseFloat(n)
var no3=no1*no2
form1.total6.value=no3
}
function mul7(m,n)
{
var no1=parseFloat(m)
var no2=parseFloat(n)
var no3=no1*no2
form1.total7.value=no3
}
function mul8(m,n)
{
var no1=parseFloat(m)
var no2=parseFloat(n)
var no3=no1*no2
form1.total8.value=no3
}
function mul9(m,n)
{
var no1=parseFloat(m)
var no2=parseFloat(n)
var no3=no1*no2
form1.total9.value=no3
}
function mul10(m,n)
{
var no1=parseFloat(m)
var no2=parseFloat(n)
var no3=no1*no2
form1.total10.value=no3
}
function add(n1,n2,n3,n4,n5,n6,n7,n8,n9,n10)
{
var no1=parseFloat(n1)
var no2=parseFloat(n2)
var no3=parseFloat(n3)
var no4=parseFloat(n4)
var no5=parseFloat(n5)
var no6=parseFloat(n6)
var no7=parseFloat(n7)
var no8=parseFloat(n8)
var no9=parseFloat(n9)
var no10=parseFloat(n10)
var no11=no1+no2+no3+no4+no5
form1.gtotal.value=no11
}
</script>
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




<h1>Search</h1>



<form action="phy_after_login.php" name='form1' method="post">

<p><input type="text" name="id" placeholder="Search by ID "></p>
<p><input type="submit" name="search" value="search"></p>
<?php
$m = mysqli_connect('localhost', 'root', '123456', 'cureall') or die("ERROR");

/*if(isset($_POST['submit']))
{
$id=$_POST['id'];
$gtotal = $_POST['gtotal'];
$gto= "UPDATE med SET gtotal = '$gtotal'  WHERE id= '$id'";
$result = mysqli_query($m,$gto);

if($result)
{
echo "successfully sent";
}
else
{
echo "error sending";
}*/
if(isset($_POST["id"]))
{
$id=$_POST["id"];
$q="select * from med where id='$id' ";
$res=mysqli_query($m,$q);
$r=mysqli_fetch_array($res);
if ($r[0]==NULL)
{
echo "No user found";
}
else
{
echo "<p><h3>ID : ".$r[0]."</h3></p>";
?>
<table>
<tr>
<td>Total Medicines : </td>
<td>Name</td>
<td>Quantity</td>
<td>Price of each medicine</td>
<td>Total cost of each medicine</td><td></td>
</tr>
<tr>
<td>
</td>
</tr>
<tr>
<td>Medicine1 : </td>
<td><?php echo $r[1] ?></td>
<td><input type='number' name='quan1' value='<?php echo$r[11]?>'></td>
<td><input type='number' name='cost1' value='0'></td>
<td><input type='text' name='total1' value='0'></td>
<td><button type='button' onclick='mul1(quan1.value,cost1.value)'>Cost</button></td>
</tr>
<tr>
<td>Medicine2  : </td>
<td><?php echo $r[2] ?></td>
<td><input type='number' name='quan2' value='<?php echo $r[12] ?>'></td>
<td><input type='number' name='cost2' value='0'></td>
<td><input type='text' name='total2' value='0'></td>
<td><button type='button' onclick='mul2(quan2.value,cost2.value)'>Cost</button></td>
</tr>
<tr>
<td>Medicine3  : </td>
<td><?php echo $r[3] ?></td>
<td><input type='number' name='quan3' value='<?php echo  $r[13]?>'></td>
<td><input type='number' name='cost3' value='0'></td>
<td><input type='text' name='total3' value='0'></td>
<td><button type='button' onclick='mul3(quan3.value,cost3.value)'>Cost</button></td>
</tr>
<tr>
<td>Medicine4  : </td>
<td><?php echo $r[4] ?></td>
<td><input type='number' name='quan4' value='<?php echo $r[14] ?>'></td>
<td><input type='number' name='cost4' value='0'></td>
<td><input type='text' name='total4' value='0'></td>
<td><button type='button' onclick='mul4(quan4.value,cost4.value)'>Cost</button></td>
</tr>
<tr>
<td>Medicine5  : </td>
<td><?php echo $r[5] ?></td>
<td><input type='number' name='quan5' value='<?php echo $r[15]?>' ></td>
<td><input type='number' name='cost5' value='0'></td>
<td><input type='text' name='total5' value='0'></td>
<td><button type='button' onclick='mul5(quan5.value,cost5.value)'>Cost</button></td>
</tr>
<tr>
<td>Medicine6  : </td>
<td><?php echo $r[6] ?></td>
<td><input type='number' name='quan6' value='<?php echo $r[16] ?>'></td>
<td><input type='number' name='cost6' value='0'></td>
<td><input type='text' name='total6' value='0'></td>
<td><button type='button' onclick='mul6(quan6.value,cost6.value)'>Cost</button></td>
</tr>
<tr>
<td>Medicine7  : </td>
<td><?php echo $r[7] ?></td>
<td><input type='number' name='quan7' value='<?php echo $r[17] ?>'></td>
<td><input type='number' name='cost7' value='0'></td>
<td><input type='text' name='total7' value='0'></td>
<td><button type='button' onclick='mul7(quan7.value,cost7.value)'>Cost</button></td>
</tr>
<tr>
<td>Medicine8  : </td>
<td><?php echo $r[8] ?></td>
<td><input type='number' name='quan8' value='<?php echo $r[18] ?>'></td>
<td><input type='number' name='cost8' value='0'></td>
<td><input type='text' name='total8' value='0'></td>
<td><button type='button' onclick='mul8(quan8.value,cost8.value)'>Cost</button></td>
</tr>
<tr>
<td>Medicine9  : </td>
<td><?php echo $r[9] ?></td>
<td><input type='number' name='quan9' value='<?php echo $r[19] ?>'></td>
<td><input type='number' name='cost9' value='0'></td>
<td><input type='text' name='total9' value='0'></td>
<td><button type='button' onclick='mul9(quan9.value,cost9.value)'>Cost</button></td>
</tr>
<tr>
<td>Medicine10  : </td>
<td><?php echo $r[10] ?></td>
<td><input type='number' name='quan10' value='<?php echo $r[20] ?>'></td>
<td><input type='number' name='cost10' value='0'></td>
<td><input type='text' name='total10' value='0'></td>
<td><button type='button' onclick='mul10(quan10.value,cost10.value)'>Cost</button></td>
</tr></table>
<br>
<form action="" method="post">
<center><input type='text' name='gtotal'>
<input type='button' value='Total Cost' onclick='add(total1.value,total2.value,total3.value,total4.value,total5.value,total6.value,total7.value,total8.value,total9.value,total10.value)'>
<br>
<input type='submit' name='submit' value='Submit'>
</form>
</center></form>
<?php
if(isset($_POST["submit"]))
{
$gtotal = $_POST['gtotal'];
$s = mysqli_connect('localhost', 'root', '123456', 'cureall') or die("ERROR");
$gto= "UPDATE med SET gtotal = '$gtotal'  WHERE id= '$id'";
$result = mysqli_query($s,$gto)or die("gtotal ERROR");

if($result)
{
echo "successfully sent";
}
else
{
echo "error sending";
}
}
}}
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
