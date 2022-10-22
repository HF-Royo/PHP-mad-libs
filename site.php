<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!╌ site.php is a file name ╌>
    <form action="site.php" method="get">

        Color: <input type="text" name="color"> <br><br>
        Plural Noun: <input type="text" name="PluralNoun"> <br><br>
        Celebrity: <input type="text" name="celebrity"> <br><br>

        <input type="submit">
    </form>
    <br><br>
    <?php

    $color = $_GET["color"];
    $PluralNoun = $_GET["PluralNoun"];
    $celebrity = $_GET["celebrity"];
    echo "Roses are $color <br>";
    echo "$PluralNoun are blue <br>";
    echo "I love $celebrity <br>";

    ?>

  </body>
</html>
