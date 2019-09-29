<?php
$file = "fdrCount.txt";
$handle = fopen($file,'w+');
if (isset($_POST['reset']))
{
$onstring = "0";
fwrite($handle,$onstring);
fclose($handle);
print "
<html>
<body>
<title>CatFeeder Refill</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Industrial Cat Feeder</h2>
<h2>We thank you for refilling our feeder. </h2>
</body>
</html>
";
}
?>
