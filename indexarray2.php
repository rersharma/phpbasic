<?php 

 $student_info=array(12,34,546546,2323,3434,12312);

//sort($student_info); // this is for accedning order
rsort($student_info); // this for descenading order
//print_r($student_info);

echo "<br>Your Array Elements Are ....";
foreach($student_info as $item)
{
      echo "<br>$item";
}
 ?>