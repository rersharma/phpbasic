<?php 

$record=array( array(23,434,23,2123), array(23,21,23,322,1) );

$row=count($record);
for($i=0;$i<$row;$i++)
{
    for($j=0;$j<count($record[$i]);$j++)
    {
          echo "&nbsp;&nbsp;".$record[$i][$j];
    }
    echo "<br>";
}






?>