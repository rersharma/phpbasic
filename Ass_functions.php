<?php

 $array=array("Name"=>"Pankaj","branch"=>"cse","Roll"=>211);
 //array_push($array,"Department","IT");


 //$array2=array("Name"=>"j","branch"=>"Mech");
//  $array3=array("k"=>"Pankaj","d"=>"mech");

//  $newarray=array_intersect($array,$array2,$array3); // value based

//$newarray=array_intersect_key($array,$array2);

if(array_key_exists("branchs",$array))
{
     echo "Key is Present";
}
else 
{
    echo "Key Is Not Present";
}

//print_r($array);


?>