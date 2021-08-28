<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>calculator</title>
  </head>
  <body>
    <form class="calculator" action="calculator.php" method="post">
      FIRST NUMBER: <input type="number" step="0.01" name="num1" value="" placeholder="INPUT A NUMBER"><br>
      SECOND NUMBER: <input type="number" step="0.01" name="num2" value="" placeholder="INPUT ANOTHER NUMBER"><br>
      OPERATOR: <input type="text" name="op" value=""placeholder="INPUT A OPERATOR"> : can&nbsp;be&nbsp;(+)&nbsp;or&nbsp;(-)&nbsp;or&nbsp;(/)&nbsp;or&nbsp;(*)<br>
      <input type="submit" name="Result" value="Result"><br>
      <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["op"];
      switch ($op) {
        case "+":
          echo $num1 + $num2;
          break;
        case "-":
          echo $num1 - $num2;
          break;
        case "*":
          echo $num1 * $num2;
          break;
          case "/":
          echo $num1 / $num2;
            break;
        default:
          echo "invalido";
          break;
      }
       ?>
    </form>
  </body>
</html>
