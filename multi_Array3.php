<?php 

$record=array(array(12,34),array(2323,55));
echo "<br>Array Elements Are:----<br>";

$total_rows=count($record);
for($i=0;$i<$total_rows;$i++)
{
      for($j=0;$j<count($record[$i]);$j++)
      {
           echo "&nbsp;&nbsp;".$record[$i][$j];
      }
      echo "<br>";
}



?>