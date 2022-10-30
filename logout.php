<?php
session_start();
if(isset($_POST['Logout']))
$duration = (time() - $_SESSION['timestart']);
?>
<html>
<head>
<title>Logout</title>
</head>
<body>
<h1 align="center">LOGGED OUT<br/><br/>
Thank you, <?php echo $_SESSION['name']; ?><br/>
Duration of usage: <?php echo $duration." seconds"; ?></h1>
<p>A.Akhila<br>20255A0507<br>21-04-2022<p>
</body>
</html>