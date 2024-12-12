<?php 

 $student_info=array(12,34,12,767,12,34,3423);

$newdata=array_unique($student_info);
echo "<br>Your Array Elements Are ....";
foreach($newdata as $item)
{
      echo "<br>$item";
}
 ?>