<?php 
      if(!empty($_POST['a']) and !empty($_POST['b']))
      {
            $ist=$_POST['a'];
            $iind=$_POST['b'];
            $operation=!empty($_POST['sum'])? 'sum' :(!empty($_POST['sub'])? 'sub':null);
            switch($operation)
            {
                   case 'sum':
                    {
                         $ans=$ist+$iind;
                         $result="Your Addition is $ans";
                         break;
                    }
                  case 'sub':
                    {
                        $ans=$ist-$iind;
                        $result="Your subtraction is $ans";
                        break;
                    }
            }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Mathamtic Calculations</h1>
        <form action="#" method="post">
         Enter Your Ist value=<input type="number" name="a" required><br><br>
         Enter Your IInd value=<input type="number" name="b" required><br><br>
         <input type="submit" value="Add Now" name="sum"/>  &nbsp;&nbsp;
         <input type="submit" value="Sub Now" name="sub"/>
       </form>
       <?php 
             if(!empty($result))
             {
                   echo "<h5>$result</h5>";
             }
       ?>
    </center> 
</body>
</html>