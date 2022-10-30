<?php
$x=5;
function squarer1($x)
{
 $x=$x*$x;
}
function squarer2(&$x)
{
 $x=$x*$x;
}
echo "Pass by value:<br>";
echo "before the function call:".$x."<br>";
squarer1($x);
echo "after the function call:".$x."<br>";
echo "Pass by Reference:<br>";
echo "before the function call:".$x."<br>";
squarer2($x);
echo "after the function call:".$x."<br>";
echo "deafult Arguments:<br>";
function greeting($name,$message="congrats ")
{
echo $message.  $name."<br>";
}
greeting("akhila");
echo "variable number of arguments:<br>";
function connector()
{
$d="";
$arg=func_get_args();
for($i=0;$i<func_num_args();$i++)
{
 $d.=$arg[$i]." ";
}
echo $d;
}
connector("Hi","akhila","how","r","you");
?>