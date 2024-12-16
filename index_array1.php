
<?php 

  if(!empty($_POST["elements"]))
  {
      
         $records=$_POST["elements"];
         $myarrays=explode(',',$records);
         echo "Array Elements ..........<br>";
         foreach($myarrays as $items)
         {
             echo "<br>$items";
         }
  }

?>

<form action="index_Array1.php" method="post">
Enter Array Elements <input type="text" name="elements" required><br><br>
<button>Insert Now</button>
</form>