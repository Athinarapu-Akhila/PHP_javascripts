<html>
<body>
<form action="listcookies.php" method="post" align="center">
<?php
    $cook=$_POST["c1"];
    $val=$_POST["v1"];
    setcookie($cook,$val,time()+86400);
    echo "Added cookie succesfully!<br> ";
?>
<input type="submit" value="List Cookies" name="b2"/>
</form>
<?php
if(isset($_POST["b2"])){

    include "listcookies.php";
}
?>
 <p> <br> Name :A.Akhila<br> Rollno : 20255A0507<br> Date : 21-03-22 <br></p>
</body>
</html>