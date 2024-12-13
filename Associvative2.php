<?php 
$info=array("Name"=>'Pankaj','Roll'=>124,"branch"=>"cse");
$chd=array_keys($info);
//var_dump($chd);
//print_r($chd);
foreach($chd as $value)
{
     echo "<br>$value";
}
?>