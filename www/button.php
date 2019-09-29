<html>
<body>
<title>Cat Feeder</title>
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
<h1>Welcome to Industrial CatFeeder web server</h2>
<h2>We thank you for pressing the button to feed us. </h2>
</body>
</html>
<?php
shell_exec("/usr/bin/sudo /var/www/html/feedNow.sh");
?>
