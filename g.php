<?php 

  if(isset($_POST["n"]))
  {
      $i=0;
      $n=$_POST["n"];
      do
      {
         echo "<br>value is $i";
         $i++;
      }
      while($i<$n);
  }
?>
<form action="g.php" method="post">
Enter Loop Size <input type="number" name="n" required> <br><br>
<button>Click Here</button>
</form>