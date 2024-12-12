<?php 

 $student_info=array(12,34,12,767,12,34,3423);
 $new_records=array(34,44,7822,222,111);
 $final_records=array_merge($student_info,$new_records);

 $length=count($final_records);
 echo "<br>Total Elements in this Array Are $length";

 echo "<br>Elements Are :----";
 foreach( $final_records as $item)
 {
     echo "<br>$item";
 }

 ?>