<?php
date_default_timezone_set("Asia/Calcutta");
echo $_REQUEST['name'];
if(isset($_REQUEST['Submit']))
{
session_start();
$_SESSION['name'] = $_REQUEST['name'];
$_SESSION['timestart'] = time();
}
?>
<html>
<head>
<title>Session</title>
</head>
<body>
<p align="right">Session started at:
<?php echo date("h: i: sa",$_SESSION['timestart']) ; ?></p>
<h1 align="center">
<?php
echo "Welcome".$_SESSION['name'];
?>
</h1>
<center>
<form method = "post" action="logout.php">
<input type = "submit" name = "Logout" value = "Logout"/>
</form></center>
<p>A.Akhila<br>20255A0507<br>21-04-2022<p>
</body>
</html>