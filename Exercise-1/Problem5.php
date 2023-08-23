<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Program using loop in PHP</title>
</head>
<body>
    <form action="" method="post">

     Enter the Number:<br>

     <input type="text" name="number" id="number">

     <input type="submit" name="submit" value="Submit">


    </form>

    <?php

    // Factorial of Number using Form
      if($_POST)
      {
        $fact=1;
        $number=$_POST['number'];
        echo"Factorial of $number: <br> <br>";
        for($i=1; $i<=$number; $i++)
        {
            $fact=$fact*$i;
        }
        echo $fact."<br>";

      }

    ?>
    
</body>
</html>
