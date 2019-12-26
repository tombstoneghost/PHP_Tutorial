<!DOCTYPE html>
<html>
    <head>
        <title>Mad Libs Game</title>
    </head>

    <body>

        <form action="madLibsGame.php" method="POST">
            Color: <input type="text" name="color"><br>
            Plural Noun: <input type="text" name="pluralNoun"><br>
            Celebrity: <input type="text" name="celebrity"><br>
            <input type="submit">
        </form>

        <br><br>

        <?php
            $color = $_POST["color"];
            $pluralNoun = $_POST["pluralNoun"];
            $celebrity = $_POST["celebrity"];

            echo "Roses are $color <br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $celebrity <br>";
        ?>
  
    </body>
</html>