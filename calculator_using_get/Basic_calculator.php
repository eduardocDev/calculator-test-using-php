<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic Calculator</title>
  </head>
  <body>
    <h1>Addition</h1>
<a href="Basic_calculator1.php">Subtraction</a>
<a href="Basic_calculator2.php">Division</a>
<a href="Basic_calculator3.php">Multiplication</a>
    <form action="Basic_calculator.php" method="get">
      <input type="number" name="num1">
      <br>
      <input type="number" name="num2">
      <input type="submit" value="ADD">
    </form>
    Answer: <?php echo $_GET["num1"] + $_GET["num2"]; ?>
  </body>
</html>
