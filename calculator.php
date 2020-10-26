<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="its2style.css">
  </head>
  <body>
    <h1>Multiply these numbers!</h1>
    <br>
    <div class="nav">
      <a href="welcome.php">Home</a>
      <a href="calculator.php">Calculator</a>
    </div>
    <br>
    <h2>This calculator accepts two inputs and multiplies them together.</h2>
    <br>
    <form action="calculator.php" method="POST">
      <label for="firstValue">First Number: </label>
      <input type="number" step="any" name="firstValue" id="firstValue" required
        value="<?php echo isset($_POST['firstValue']) ? $_POST['firstValue'] : '' ?>">
      <label for="secondValue">Second Number: </label>
      <input type="number" step="any" name="secondValue" id="secondValue" required
        value="<?php echo isset($_POST['secondValue']) ? $_POST['secondValue'] : '' ?>">
      <input type="submit" value="Calculate!">
    </form>

    <?php

        if(!empty($_POST)) {

            if($_POST['firstValue'] != '' && $_POST['secondValue'] != '') {

                echo "<p> Your answer is: " . $_POST['firstValue'] * $_POST['secondValue'] . "</p>";

            }

        }

    ?>

  </body>
</html>

