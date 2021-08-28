<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>
    <form class="calculator" action="calculator.php" method="post">
      First Num: <br> <input type="number" step="0.1" name="num1" value=""> <br>
      Op : <br> <input type="text" name="op"> <br>
      Second Num: <br> <input type="number" step="0.1" name="num2" value=""> <br>
      <input type="submit" value="Result">
    </form>
      <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["op"];
      if($op == "+"){
        echo $num1 + $num2;
      }elseif($op == "-"){
        echo $num1 - $num2;
      }elseif($op == "/"){
        echo $num1 / $num2;
      }elseif($op == "*"){
        echo $num1 * $num2;
      }else{
        echo "Invalid Operator";
      }
      ?>
  </body>
</html>
