<?php 

 $student_info=array("Pankaj","Rohan","Sammer");

 //echo "Your value is ".$student_info[2];
echo "<br>Your Array Elements Are:-----";
 /* foreach($student_info as $chandigarh)
 {
    if($chandigarh=='Rohan' or $chandigarh=='Sammer')
    {
         continue;
    }
     echo "<br>$chandigarh";
 } */
  $total=count($student_info);

  for($i=0;$i<$total;$i++)
  {
      echo "<br>".$student_info[$i];
  }


?>