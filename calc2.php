<?php
if(isset($_POST)){
 $n1=$_POST['num1'];
 $n2=$_POST['num2'];
 $op=$_POST['op'];
 $con=mysqli_connect("localhost","root","") or die("could not connect to the server");
 $d=mysqli_select_db($con,"le507");
 $query="select * from calculator";
 $result=mysqli_query($con,$query) or die("query failed!");
 $f=0;
 while($row=mysqli_fetch_array($result)){
  if($row['num1']==$n1 && $row['num2']==$n2 && $row['operator']==$op){
   echo"the result is:".$row['result'];
   $f=1;
   break;
  }
 }

 if($f==0){
  switch($op){
   case '+':$res=$n1+$n2;echo "result:".$res;
   break;
   case '-':$res=$n1-$n2;echo "result:".$res;
   break;
   case '*':$res=$n1*$n2;echo "result:".$res;
   break;
   case '/':$res=$n1/$n2;echo "result:".$res;
   break;
   //default:"no value computed"
   //break;
  }
  $query1="insert into calculator values($n1,$n2,'$op',$res)";
  $result1=mysqli_query($con,$query1) or die("query failed!".mysqli_error());

 }
 mysqli_close($con);
}
?>

