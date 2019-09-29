<html>
<head>
<title>Cat Feeder Settings</title>
</head>

<body>

<h1>Industrial Strength Cat Feeder Settings</h1>
<p>Select The Time, before or after noon, and the ammount (in cups) to dispense for the first feeding</p>

<form action="#" method="post">

<select name="timeVarOne">
  <option value="off">off</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
<BR>
<select name="timeVarOneAMPM">
  <option value="am">am</option>
  <option value="pm">pm</option>
</select>
<BR>
<select name="qtyVarOne">
  <option value="0.25">0.25</option>
  <option value="0.5">0.5</option>
  <option value="0.75">0.75</option>
  <option value="1.0">1.0</option>
  <option value="1.25">1.25</option>
  <option value="1.5">1.5</option>
  <option value="1.75">1.75</option>
  <option value="2.0">2.0</option>
</select>
<BR>
<p>Select The Time, before or after noon, and the ammount (in cups) to dispense for the second feeding</p>
<select name="timeVarTwo">
  <option value="off">off</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
<BR>
<select name="timeVarTwoAMPM">
  <option value="am">am</option>
  <option value="pm">pm</option>
</select>
<BR>
<select name="qtyVarTwo">
  <option value="0.25">0.25</option>
  <option value="0.5">0.5</option>
  <option value="0.75">0.75</option>
  <option value="1.0">1.0</option>
  <option value="1.25">1.25</option>
  <option value="1.5">1.5</option>
  <option value="1.75">1.75</option>
  <option value="2.0">2.0</option>
</select>
<BR>
<p>Select The Time, before or after noon, and the ammount (in cups) to dispense for the third feeding</p>
<select name="timeVarThree">
  <option value="off">off</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
<BR>
<select name="timeVarThreeAMPM">
  <option value="am">am</option>
  <option value="pm">pm</option>
 </select>
<BR>
<select name="qtyVarThree">
  <option value="0.25">0.25</option>
  <option value="0.5">0.5</option>
  <option value="0.75">0.75</option>
  <option value="1.0">1.0</option>
  <option value="1.25">1.25</option>
  <option value="1.5">1.5</option>
  <option value="1.75">1.75</option>
  <option value="2.0">2.0</option>
</select>
<BR><BR><BR>
<input type="submit" name="submit" value="Save Settings" />

</form>

<?php
if(isset($_POST['submit'])){
$first_val = $_POST['timeVarOne'];
$second_val = $_POST['timeVarOneAMPM'];  // Storing Selected Value In Variable
$third_val = $_POST['qtyVarOne'];
$fourth_val = $_POST['timeVarTwo'];
$fifth_val = $_POST['timeVarTwoAMPM'];  // Storing Selected Value In Variable
$sixth_val = $_POST['qtyVarTwo'];
$seventh_val = $_POST['timeVarThree'];
$eigth_val = $_POST['timeVarThreeAMPM'];  // Storing Selected Value In Variable
$ninth_val = $_POST['qtyVarThree'];
echo "You have selected :" .$first_val;
?>
<BR>
<?php
echo "You have selected :" .$second_val;  // Displaying Selected Value
?>
<BR>
<?php
echo "You have selected :" .$third_val;  // Displaying Selected Value
?>
<BR><BR>
<?php
echo "You have selected :" .$fourth_val;  // Displaying Selected Value
?>
<BR>
<?php
echo "You have selected :" .$fifth_val;  // Displaying Selected Value
?>
<BR>
<?php
echo "You have selected :" .$sixth_val;  // Displaying Selected Value
?>
<BR><BR>
<?php
echo "You have selected :" .$seventh_val;  // Displaying Selected Value
?>
<BR>
<?php
echo "You have selected :" .$eigth_val;  // Displaying Selected Value
?>
<BR>
<?php
echo "You have selected :" .$ninth_val;  // Displaying Selected Value

?>
<?php
$file = "configuration.txt";
$handle = fopen($file,'w+');
fwrite($handle,$first_val);
fwrite($handle,"\r\n");
fwrite($handle,$second_val);
fwrite($handle,"\r\n");
fwrite($handle,$third_val);
fwrite($handle,"\r\n");
fwrite($handle,$fourth_val);
fwrite($handle,"\r\n");
fwrite($handle,$fifth_val);
fwrite($handle,"\r\n");
fwrite($handle,$sixth_val);
fwrite($handle,"\r\n");
fwrite($handle,$seventh_val);
fwrite($handle,"\r\n");
fwrite($handle,$eigth_val);
fwrite($handle,"\r\n");
fwrite($handle,$ninth_val);
fwrite($handle,"\r\n");
fclose($handle);
}
?>
</body>
</html>
