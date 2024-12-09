<?php 

  if(!empty($_POST["n"]))
  {
      $n=$_POST["n"];
      for($i=0;$i<$n;$i++)
      {
          for($j=0;$j<=$i;$j++)
          {
              echo "*";
          }
          echo "<br>";
      }
  }
?>

<form action="e.php" method="post">
Enter Pattern Size <input type="number" name="n" required> <br><br>
<button>Click Here</button>
</form>