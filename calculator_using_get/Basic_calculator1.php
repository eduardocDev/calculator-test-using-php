<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic Calculator</title>
  </head>
  <body>
    <h1>Subtraction</h1>
<a href="Basic_calculator.php">Addition</a>
<a href="Basic_calculator2.php">Division</a>
<a href="Basic_calculator3.php">Multiplication</a>
    <form action="Basic_calculator1.php" method="get">
      <input type="number" name="num1">
      <br>
      <input type="number" name="num2">
      <input type="submit" value="SUBTRACT">
    </form>
    Answer: <?php echo $_GET["num1"] - $_GET["num2"]; ?>
  </body>
</html>
