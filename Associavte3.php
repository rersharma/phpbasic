<?php 
$info=array("Name"=>'Pankaj','Roll'=>124,"branch"=>"cse");
$chd=array_values($info);

//var_dump($chd);
//print_r($chd);
/*foreach($chd as $value)
{
     echo "<br>$value";
}*/
echo "Your Array Elements Are :----";
$n=count($chd);
for($i=0;$i<$n;$i++)
{
      echo "<br>".$chd[$i];
}
?>