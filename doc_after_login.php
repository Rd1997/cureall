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
<form action="" method="post">
<h2 align="center"> Select medicine</h2>

<label>Customer ID:</label><input type="text" name="id" required><br/>

<table>
<tr><td>
<label>Medicine 1:</label>
<select name="med1" required>
<option value="">Select medicine 1</option>
<option id=1 value="Acetaminophen">Acetaminophen</option>
  <option id=2 value="Adderall">Adderall</option>			
  <option id=3 value="Alprazolam">Alprazolam</option>
  <option id=4 value="Amitriptyline">Amitriptyline</option>
  <option id=5 value="Amlodipine">Amlodipine</option>
<option id=6 value="Reclast">Reclast</option>
  <option id=7 value="Rapaflo">Rapaflo</option>
  <option id=8 value="Ranitidine">Ranitidine</option>
  <option id=9 value="Ranexa">Ranexa</option>
  <option id=10 value="Ramipril">Ramipril</option>
<option id=11 value="Xarelto">Xarelto</option>
  <option id=12 value="Xanax XR">Xanax XR</option>
  <option id=13 value="Xalkori">Xalkori</option>
  <option id=14 value="Xalatan">Xalatan</option>
  <option id=15 value="Xanax">Xanax</option>
<option id=16 value="Vascepa">Vascepa</option>
  <option id=17  value="Vancomycin">Vancomycin</option>
  <option id=18 value="Valtrex">Valtrex</option>
  <option id=19 value="Valium">Valium</option>
  <option id=20 value="Valacyclovir">Valacyclovir</option>
<option id=21 value="Carvedilol">Carvedilol</option>
  <option id=22 value="Celebrex">Celebrex</option>
  <option id=23 value="Celexa">Celexa</option>
  <option id=24 value="Celecoxib">Celecoxib</option>
  <option id=25 value="Cephalexin">Cephalexin</option>
<option id=26 value="Baclofen">Baclofen</option>
  <option id=27 value="Bactrim">Bactrim</option>
  <option id=28 value="Bactroban">Bactroban</option>
  <option id=29 value="Belsomra">Belsomra</option>
  <option id=30 value="Benadryl">Benadryl</option>
</select></td><td><label>Quantity :</label><input type="number" name="quan1" value="1"></td></tr>
<tr><td>
<label>Medicine 2:</label>
<select name="med2">
<option value="">Select medicine 2</option>
<option id=1 value="Acetaminophen">Acetaminophen</option>
  <option id=2 value="Adderall">Adderall</option>			
  <option id=3 value="Alprazolam">Alprazolam</option>
  <option id=4 value="Amitriptyline">Amitriptyline</option>
  <option id=5 value="Amlodipine">Amlodipine</option>
<option id=6 value="Reclast">Reclast</option>
  <option id=7 value="Rapaflo">Rapaflo</option>
  <option id=8 value="Ranitidine">Ranitidine</option>
  <option id=9 value="Ranexa">Ranexa</option>
  <option id=10 value="Ramipril">Ramipril</option>
<option id=11 value="Xarelto">Xarelto</option>
  <option id=12 value="Xanax XR">Xanax XR</option>
  <option id=13 value="Xalkori">Xalkori</option>
  <option id=14 value="Xalatan">Xalatan</option>
  <option id=15 value="Xanax">Xanax</option>
<option id=16 value="Vascepa">Vascepa</option>
  <option id=17  value="Vancomycin">Vancomycin</option>
  <option id=18 value="Valtrex">Valtrex</option>
  <option id=19 value="Valium">Valium</option>
  <option id=20 value="Valacyclovir">Valacyclovir</option>
<option id=21 value="Carvedilol">Carvedilol</option>
  <option id=22 value="Celebrex">Celebrex</option>
  <option id=23 value="Celexa">Celexa</option>
  <option id=24 value="Celecoxib">Celecoxib</option>
  <option id=25 value="Cephalexin">Cephalexin</option>
<option id=26 value="Baclofen">Baclofen</option>
  <option id=27 value="Bactrim">Bactrim</option>
  <option id=28 value="Bactroban">Bactroban</option>
  <option id=29 value="Belsomra">Belsomra</option>
  <option id=30 value="Benadryl">Benadryl</option>
	
</select></td><td><input type="number" name="quan2" value="1"></td></tr>
<tr><td>
<label>Medicine 3:</label>
<select name="med3">
 <option value="">Select medicine 3</option>
    <option id=1 value="Acetaminophen">Acetaminophen</option>
  <option id=2 value="Adderall">Adderall</option>			
  <option id=3 value="Alprazolam">Alprazolam</option>
  <option id=4 value="Amitriptyline">Amitriptyline</option>
  <option id=5 value="Amlodipine">Amlodipine</option>
<option id=6 value="Reclast">Reclast</option>
  <option id=7 value="Rapaflo">Rapaflo</option>
  <option id=8 value="Ranitidine">Ranitidine</option>
  <option id=9 value="Ranexa">Ranexa</option>
  <option id=10 value="Ramipril">Ramipril</option>
<option id=11 value="Xarelto">Xarelto</option>
  <option id=12 value="Xanax XR">Xanax XR</option>
  <option id=13 value="Xalkori">Xalkori</option>
  <option id=14 value="Xalatan">Xalatan</option>
  <option id=15 value="Xanax">Xanax</option>
<option id=16 value="Vascepa">Vascepa</option>
  <option id=17  value="Vancomycin">Vancomycin</option>
  <option id=18 value="Valtrex">Valtrex</option>
  <option id=19 value="Valium">Valium</option>
  <option id=20 value="Valacyclovir">Valacyclovir</option>
<option id=21 value="Carvedilol">Carvedilol</option>
  <option id=22 value="Celebrex">Celebrex</option>
  <option id=23 value="Celexa">Celexa</option>
  <option id=24 value="Celecoxib">Celecoxib</option>
  <option id=25 value="Cephalexin">Cephalexin</option>
<option id=26 value="Baclofen">Baclofen</option>
  <option id=27 value="Bactrim">Bactrim</option>
  <option id=28 value="Bactroban">Bactroban</option>
  <option id=29 value="Belsomra">Belsomra</option>
  <option id=30 value="Benadryl">Benadryl</option>
	</select></td><td><input type="number" name="quan3" value="1"></td></tr>
<tr><td>
<label>Medicine 4:</label>
<select name="med4">
<option value="">Select medicine 4</option> 
    <option id=1 value="Acetaminophen">Acetaminophen</option>
  <option id=2 value="Adderall">Adderall</option>			
  <option id=3 value="Alprazolam">Alprazolam</option>
  <option id=4 value="Amitriptyline">Amitriptyline</option>
  <option id=5 value="Amlodipine">Amlodipine</option>
<option id=6 value="Reclast">Reclast</option>
  <option id=7 value="Rapaflo">Rapaflo</option>
  <option id=8 value="Ranitidine">Ranitidine</option>
  <option id=9 value="Ranexa">Ranexa</option>
  <option id=10 value="Ramipril">Ramipril</option>
<option id=11 value="Xarelto">Xarelto</option>
  <option id=12 value="Xanax XR">Xanax XR</option>
  <option id=13 value="Xalkori">Xalkori</option>
  <option id=14 value="Xalatan">Xalatan</option>
  <option id=15 value="Xanax">Xanax</option>
<option id=16 value="Vascepa">Vascepa</option>
  <option id=17  value="Vancomycin">Vancomycin</option>
  <option id=18 value="Valtrex">Valtrex</option>
  <option id=19 value="Valium">Valium</option>
  <option id=20 value="Valacyclovir">Valacyclovir</option>
<option id=21 value="Carvedilol">Carvedilol</option>
  <option id=22 value="Celebrex">Celebrex</option>
  <option id=23 value="Celexa">Celexa</option>
  <option id=24 value="Celecoxib">Celecoxib</option>
  <option id=25 value="Cephalexin">Cephalexin</option>
<option id=26 value="Baclofen">Baclofen</option>
  <option id=27 value="Bactrim">Bactrim</option>
  <option id=28 value="Bactroban">Bactroban</option>
  <option id=29 value="Belsomra">Belsomra</option>
  <option id=30 value="Benadryl">Benadryl</option>
		</select></td><td><input type="number" name="quan4" value="1"></td></tr>

<tr><td>
<label>Medicine :5</label>
<select name="med5">
<option value="">Select medicine 5</option> 
    <option id=1 value="Acetaminophen">Acetaminophen</option>
  <option id=2 value="Adderall">Adderall</option>			
  <option id=3 value="Alprazolam">Alprazolam</option>
  <option id=4 value="Amitriptyline">Amitriptyline</option>
  <option id=5 value="Amlodipine">Amlodipine</option>
<option id=6 value="Reclast">Reclast</option>
  <option id=7 value="Rapaflo">Rapaflo</option>
  <option id=8 value="Ranitidine">Ranitidine</option>
  <option id=9 value="Ranexa">Ranexa</option>
  <option id=10 value="Ramipril">Ramipril</option>
<option id=11 value="Xarelto">Xarelto</option>
  <option id=12 value="Xanax XR">Xanax XR</option>
  <option id=13 value="Xalkori">Xalkori</option>
  <option id=14 value="Xalatan">Xalatan</option>
  <option id=15 value="Xanax">Xanax</option>
<option id=16 value="Vascepa">Vascepa</option>
  <option id=17  value="Vancomycin">Vancomycin</option>
  <option id=18 value="Valtrex">Valtrex</option>
  <option id=19 value="Valium">Valium</option>
  <option id=20 value="Valacyclovir">Valacyclovir</option>
<option id=21 value="Carvedilol">Carvedilol</option>
  <option id=22 value="Celebrex">Celebrex</option>
  <option id=23 value="Celexa">Celexa</option>
  <option id=24 value="Celecoxib">Celecoxib</option>
  <option id=25 value="Cephalexin">Cephalexin</option>
<option id=26 value="Baclofen">Baclofen</option>
  <option id=27 value="Bactrim">Bactrim</option>
  <option id=28 value="Bactroban">Bactroban</option>
  <option id=29 value="Belsomra">Belsomra</option>
  <option id=30 value="Benadryl">Benadryl</option>
		</select></td><td><input type="number" name="quan5" value="1"></td></tr>
<tr><td>
<label>Medicine 6:</label>
<select name="med6">
<option value="">Select medicine 6</option> 
    <option id=1 value="Acetaminophen">Acetaminophen</option>
  <option id=2 value="Adderall">Adderall</option>			
  <option id=3 value="Alprazolam">Alprazolam</option>
  <option id=4 value="Amitriptyline">Amitriptyline</option>
  <option id=5 value="Amlodipine">Amlodipine</option>
<option id=6 value="Reclast">Reclast</option>
  <option id=7 value="Rapaflo">Rapaflo</option>
  <option id=8 value="Ranitidine">Ranitidine</option>
  <option id=9 value="Ranexa">Ranexa</option>
  <option id=10 value="Ramipril">Ramipril</option>
<option id=11 value="Xarelto">Xarelto</option>
  <option id=12 value="Xanax XR">Xanax XR</option>
  <option id=13 value="Xalkori">Xalkori</option>
  <option id=14 value="Xalatan">Xalatan</option>
  <option id=15 value="Xanax">Xanax</option>
<option id=16 value="Vascepa">Vascepa</option>
  <option id=17  value="Vancomycin">Vancomycin</option>
  <option id=18 value="Valtrex">Valtrex</option>
  <option id=19 value="Valium">Valium</option>
  <option id=20 value="Valacyclovir">Valacyclovir</option>
<option id=21 value="Carvedilol">Carvedilol</option>
  <option id=22 value="Celebrex">Celebrex</option>
  <option id=23 value="Celexa">Celexa</option>
  <option id=24 value="Celecoxib">Celecoxib</option>
  <option id=25 value="Cephalexin">Cephalexin</option>
<option id=26 value="Baclofen">Baclofen</option>
  <option id=27 value="Bactrim">Bactrim</option>
  <option id=28 value="Bactroban">Bactroban</option>
  <option id=29 value="Belsomra">Belsomra</option>
  <option id=30 value="Benadryl">Benadryl</option>
		</select></td><td><input type="number" name="quan6" value="0"></td></tr>
<tr><td>
<label>Medicine 7:</label>
<select name="med7">
<option value="">Select medicine 7</option> 
    <option id=1 value="Acetaminophen">Acetaminophen</option>
  <option id=2 value="Adderall">Adderall</option>			
  <option id=3 value="Alprazolam">Alprazolam</option>
  <option id=4 value="Amitriptyline">Amitriptyline</option>
  <option id=5 value="Amlodipine">Amlodipine</option>
<option id=6 value="Reclast">Reclast</option>
  <option id=7 value="Rapaflo">Rapaflo</option>
  <option id=8 value="Ranitidine">Ranitidine</option>
  <option id=9 value="Ranexa">Ranexa</option>
  <option id=10 value="Ramipril">Ramipril</option>
<option id=11 value="Xarelto">Xarelto</option>
  <option id=12 value="Xanax XR">Xanax XR</option>
  <option id=13 value="Xalkori">Xalkori</option>
  <option id=14 value="Xalatan">Xalatan</option>
  <option id=15 value="Xanax">Xanax</option>
<option id=16 value="Vascepa">Vascepa</option>
  <option id=17  value="Vancomycin">Vancomycin</option>
  <option id=18 value="Valtrex">Valtrex</option>
  <option id=19 value="Valium">Valium</option>
  <option id=20 value="Valacyclovir">Valacyclovir</option>
<option id=21 value="Carvedilol">Carvedilol</option>
  <option id=22 value="Celebrex">Celebrex</option>
  <option id=23 value="Celexa">Celexa</option>
  <option id=24 value="Celecoxib">Celecoxib</option>
  <option id=25 value="Cephalexin">Cephalexin</option>
<option id=26 value="Baclofen">Baclofen</option>
  <option id=27 value="Bactrim">Bactrim</option>
  <option id=28 value="Bactroban">Bactroban</option>
  <option id=29 value="Belsomra">Belsomra</option>
  <option id=30 value="Benadryl">Benadryl</option>
		</select></td><td><input type="number" name="quan7" value="0"></td></tr>
<tr><td>
<label>Medicine 8:</label>
<select name="med8">
<option value="">Select medicine 8</option> 
    <option id=1 value="Acetaminophen">Acetaminophen</option>
  <option id=2 value="Adderall">Adderall</option>			
  <option id=3 value="Alprazolam">Alprazolam</option>
  <option id=4 value="Amitriptyline">Amitriptyline</option>
  <option id=5 value="Amlodipine">Amlodipine</option>
<option id=6 value="Reclast">Reclast</option>
  <option id=7 value="Rapaflo">Rapaflo</option>
  <option id=8 value="Ranitidine">Ranitidine</option>
  <option id=9 value="Ranexa">Ranexa</option>
  <option id=10 value="Ramipril">Ramipril</option>
<option id=11 value="Xarelto">Xarelto</option>
  <option id=12 value="Xanax XR">Xanax XR</option>
  <option id=13 value="Xalkori">Xalkori</option>
  <option id=14 value="Xalatan">Xalatan</option>
  <option id=15 value="Xanax">Xanax</option>
<option id=16 value="Vascepa">Vascepa</option>
  <option id=17  value="Vancomycin">Vancomycin</option>
  <option id=18 value="Valtrex">Valtrex</option>
  <option id=19 value="Valium">Valium</option>
  <option id=20 value="Valacyclovir">Valacyclovir</option>
<option id=21 value="Carvedilol">Carvedilol</option>
  <option id=22 value="Celebrex">Celebrex</option>
  <option id=23 value="Celexa">Celexa</option>
  <option id=24 value="Celecoxib">Celecoxib</option>
  <option id=25 value="Cephalexin">Cephalexin</option>
<option id=26 value="Baclofen">Baclofen</option>
  <option id=27 value="Bactrim">Bactrim</option>
  <option id=28 value="Bactroban">Bactroban</option>
  <option id=29 value="Belsomra">Belsomra</option>
  <option id=30 value="Benadryl">Benadryl</option>
		</select></td><td><input type="number" name="quan8" value="0"></td></tr>
<tr><td>
<label>Medicine 9:</label>
<select name="med9">
<option value="">Select medicine 9</option> 
    <option id=1 value="Acetaminophen">Acetaminophen</option>
  <option id=2 value="Adderall">Adderall</option>			
  <option id=3 value="Alprazolam">Alprazolam</option>
  <option id=4 value="Amitriptyline">Amitriptyline</option>
  <option id=5 value="Amlodipine">Amlodipine</option>
<option id=6 value="Reclast">Reclast</option>
  <option id=7 value="Rapaflo">Rapaflo</option>
  <option id=8 value="Ranitidine">Ranitidine</option>
  <option id=9 value="Ranexa">Ranexa</option>
  <option id=10 value="Ramipril">Ramipril</option>
<option id=11 value="Xarelto">Xarelto</option>
  <option id=12 value="Xanax XR">Xanax XR</option>
  <option id=13 value="Xalkori">Xalkori</option>
  <option id=14 value="Xalatan">Xalatan</option>
  <option id=15 value="Xanax">Xanax</option>
<option id=16 value="Vascepa">Vascepa</option>
  <option id=17  value="Vancomycin">Vancomycin</option>
  <option id=18 value="Valtrex">Valtrex</option>
  <option id=19 value="Valium">Valium</option>
  <option id=20 value="Valacyclovir">Valacyclovir</option>
<option id=21 value="Carvedilol">Carvedilol</option>
  <option id=22 value="Celebrex">Celebrex</option>
  <option id=23 value="Celexa">Celexa</option>
  <option id=24 value="Celecoxib">Celecoxib</option>
  <option id=25 value="Cephalexin">Cephalexin</option>
<option id=26 value="Baclofen">Baclofen</option>
  <option id=27 value="Bactrim">Bactrim</option>
  <option id=28 value="Bactroban">Bactroban</option>
  <option id=29 value="Belsomra">Belsomra</option>
  <option id=30 value="Benadryl">Benadryl</option>
		</select></td><td><input type="number" name="quan9" value="0"></td></tr>
<tr><td>
<label>Medicine 10:</label>
<select name="med10">
<option value="">Select medicine 10</option> 
    <option id=1 value="Acetaminophen">Acetaminophen</option>
  <option id=2 value="Adderall">Adderall</option>			
  <option id=3 value="Alprazolam">Alprazolam</option>
  <option id=4 value="Amitriptyline">Amitriptyline</option>
  <option id=5 value="Amlodipine">Amlodipine</option>
<option id=6 value="Reclast">Reclast</option>
  <option id=7 value="Rapaflo">Rapaflo</option>
  <option id=8 value="Ranitidine">Ranitidine</option>
  <option id=9 value="Ranexa">Ranexa</option>
  <option id=10 value="Ramipril">Ramipril</option>
<option id=11 value="Xarelto">Xarelto</option>
  <option id=12 value="Xanax XR">Xanax XR</option>
  <option id=13 value="Xalkori">Xalkori</option>
  <option id=14 value="Xalatan">Xalatan</option>
  <option id=15 value="Xanax">Xanax</option>
<option id=16 value="Vascepa">Vascepa</option>
  <option id=17  value="Vancomycin">Vancomycin</option>
  <option id=18 value="Valtrex">Valtrex</option>
  <option id=19 value="Valium">Valium</option>
  <option id=20 value="Valacyclovir">Valacyclovir</option>
<option id=21 value="Carvedilol">Carvedilol</option>
  <option id=22 value="Celebrex">Celebrex</option>
  <option id=23 value="Celexa">Celexa</option>
  <option id=24 value="Celecoxib">Celecoxib</option>
  <option id=25 value="Cephalexin">Cephalexin</option>
<option id=26 value="Baclofen">Baclofen</option>
  <option id=27 value="Bactrim">Bactrim</option>
  <option id=28 value="Bactroban">Bactroban</option>
  <option id=29 value="Belsomra">Belsomra</option>
  <option id=30 value="Benadryl">Benadryl</option>
		</select></td><td><input type="number" name="quan10" value="0"></td></tr></table>


<input type="submit" value="Send" name="submit"><br><input type="reset"><br><br>



<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['id'])){
 $id = $_POST['id'];
 $med1 = $_POST['med1'];
$med2 = $_POST['med2'];
$med3 = $_POST['med3'];
$med4 = $_POST['med4'];
$med5 = $_POST['med5'];
$med6 = $_POST['med6'];
$med7 = $_POST['med7'];
$med8 = $_POST['med8'];
$med9 = $_POST['med9'];
$med10 = $_POST['med10'];
$quan1 = $_POST['quan1'];
$quan2 = $_POST['quan2'];
$quan3 = $_POST['quan3'];
$quan4 = $_POST['quan4'];
$quan5 = $_POST['quan5'];
$quan6 = $_POST['quan6'];
$quan7 = $_POST['quan7'];
$quan8 = $_POST['quan8'];
$quan9 = $_POST['quan9'];
$quan10 = $_POST['quan10'];
  $gtotal=0;
 $conn = new mysqli('localhost', 'root', '123456') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'cureall') or die("DB Error"); // Select DB from database
 //Selecting Database
 
 $numrows = 1;
 if($numrows == 1)
 {
 //Insert to Mysqli Query
 $sql = "INSERT INTO med(id,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,quan1,quan2,quan3,quan4,quan5,quan6,quan7,quan8,quan9,quan10,gtotal) VALUES('$id','$med1','$med2','$med3','$med4','$med5','$med6','$med7','$med8','$med9','$med10','$quan1','$quan2','$quan3','$quan4','$quan5','$quan6','$quan7','$quan8','$quan9','$quan10','$gtotal')";
 $result = mysqli_query($conn, $sql);
 //Result Message
 if($result)
{
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
