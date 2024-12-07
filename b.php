<?php 

  if(!empty($_POST["n"]))
  {
      $n=$_POST["n"];
      for($i=2∑;$i<$n;$i++)
      {
          echo "<br>Your i value is $i";
      }
  }
?>

<form action="a.php" method="post">
Enter Loop Size <input type="number" name="n" required> <br><br>
<button>Click Here</button>
</form>