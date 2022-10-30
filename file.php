<?php
$handle=fopen($_FILES['userfile']['tmp_name'],"r");
while(!feof($handle))
{
$text=fgets($handle);
echo $text." ";
}
?>