<html>
<body>
<title>Industrial CatFeeder</title>
<style type="text/css">
h1{
        text-align: center;
}
h2{
        font-size: 100%;
        text-align: center;
}
form{
        padding-left: 150px;
}
#settings{
        position: fixed;
        top: 90%;
        left: 35%;
        margin-top: -50px;
        margin-left: -100px;
        width: 200px;
        height: 50px;
}
#reset{
        position: fixed;
        top: 90%;
        left: 50%;
        margin-top: -50px;
        margin-left: -100px;
        width: 200px;
        height: 50px;
}
#photo{
        position: fixed;
        top: 90%;
        left: 65%;
        margin-top: -50px;
        margin-left: -100px;
        width: 200px;
        height: 50px;
        background-color: #FFFF00;
}
#on{
        position: fixed;
        top: 80%;
        left: 50%;
        margin-top: -50px;
        margin-left: -100px;
        width: 200px;
        height: 50px;
}
</style>
<p style="text-align:center;"><h1>Industrial Strength Cat Feeder</h1></p>
<?php
$configFile = fopen("configuration.txt", "r");
$fileStringOne = fgets($configFile);
$fileStringTwo = fgets($configFile);
$fileStringThree = fgets($configFile);
$fileStringFour = fgets($configFile);
$fileStringFive = fgets($configFile);
$fileStringSix = fgets($configFile);
$fileStringSeven = fgets($configFile);
$fileStringEight = fgets($configFile);
$fileStringNine = fgets($configFile);
fclose($configFile);
?>
<h2>Meal One will serve: 
<?php
echo " ".$fileStringThree." "
?>
cup at: 
<?php
echo $fileStringOne." ".$fileStringTwo;
?>
</h2>
<h2>Meal Two will serve: 
<?php
echo " ".$fileStringSix." "
?>
cup at: 
<?php
echo $fileStringFour." ".$fileStringFive;
?>
</h2>
<h2>Meal Three will serve: 
<?php
echo " ".$fileStringNine." "
?>
cup at: 
<?php
echo $fileStringSeven." ".$fileStringEight;
?>
</h2>
<h2>The current feed quantity is: 
<?php
$f = fopen("fdrCount.txt", "r");
echo fgets($f);
fclose($f);
?>
</h2>
<h1>If our bowl is empty, please press the button to feed us</h1>
<p style="text-align:center;"><img src="image.jpg" width="640" height="480"></p>
<form action = "settings.php" method = "POST">
<input type = "submit" name ="settings" id="settings" value = "Change Settings">
</form>
<form action = "button.php" method = "POST">
<input type = "submit" name ="on" id="on" value = "Feed the Cats">
</form>
<form action = "picture.php" method = "POST">
<input type = "submit" name ="on" id="photo" value = "Take New Picture">
</form>
<form action = "refill.php" method = "POST">
<input type = "submit" name ="reset" id="reset" value = "Reset Fill">
</form>
</body>
</html>
