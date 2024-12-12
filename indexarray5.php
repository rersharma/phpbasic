<?php 

 $student_info=array(12,34,12,767,12,34,3423);
 
 //array_push($student_info,11111); // This is for Inserting new element in array at last position
 //print_r($student_info);
 array_pop($student_info);
 array_pop($student_info);
 array_pop($student_info);
 echo "<br>Elements Are :----";
 foreach($student_info as $item)
 {
     echo "<br>$item";
 }

 ?>