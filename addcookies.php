<html>
<head></head>
<body>
<form action="successcookie.php" method="post" align="center">
Enter Cookie: <input type="text" name="c1"></br></br>
Enter Value: <input type="text" name="v1"></br></br>
<input type="submit" value="Add Cookies" name="b1"/>

</form>
<?php
if(isset($_POST["b1"])){
    
    include "sucesscookie.php";
}
?>
 <p> <br> Name :A.Akhila<br> Rollno : 20255A0507<br> Date : 21-03-22 <br></p>
</body>
</html>