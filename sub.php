<?php 
if(!empty($_REQUEST['a']) and !empty($_REQUEST['b']))
{
$ist=$_REQUEST['a'];
$iind=$_REQUEST['b'];
$result=$ist-$iind;

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
        <h1>Subtract Application</h1>
        <form action="sub.php" method="post">
           Enter Your Ist Value <input type="number" name="a" required> <br><br>
           Enter Your iind value <input type="number" name="b" required><br><br>
           <button>Find Subtraction</button>
        </form>
        <?php 
        if(!empty($result))
        {
             if($result<10)
             {
             echo "<h3 style='color:green;'>Your ans is $result</h3>";
             }
             elseif($result>=10 and $result<=20) 
             {
                echo "<h3 style='color:red;'>Your ans is $result</h3>";
             }
             else 
             {
                echo "<h3 style='color:orange;'>Your ans is $result</h3>";
             }
        }
        ?>
     </center>
</body>
</html>