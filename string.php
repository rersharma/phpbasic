<?php 

    $a=12;
    echo "Your a value is $a";

    $a=3434;
    echo '<br>Your A value is $a';

    $b="My name is pankaj";

    $total_word=str_word_count($b);
    echo "<br>Total Word in Your String are $total_word";

    $c="My Name is  Rohan";
    $search_index=strpos($c,"Rohan");
    echo "<br>Element Present in poisition no $search_index";

    $d="muskan";
    $t=strtoupper($d);
    echo "<br>My Name is $t";

    $e="PANKAJ";
    $z=strtolower($e);
    echo "<br>My Name is $z";

    $k="My name is Pankaj and Pankaj from Lalru and Pankaj is not good Person";
    echo "<br>$k";
    $h=str_replace("Pankaj","Rohan",$k);
    echo "<br>$h";

    $bh="Chandigarh";
    $newvalue=strrev($bh);
    echo "<br>$newvalue";

    $jk=" how are you";
    echo "<br>hi".$jk;
    $gt=trim($jk);
    echo "<br>hi".$gt;


    $m="My Name is pankaj";
    $hhh=explode("a",$m);
    print_r($hhh);

    $my="my Name is pankaj";
    $jjj=substr($my,3,7);
    echo "<br>$jjj";


?>