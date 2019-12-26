<!DOCTYPE html>
<html>
    <head>
        <title>Arrays</title>
    </head>

    <body>

       <form action="arrays.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
            <input type="submit">
       </form>

       <?php 
            $friends = array("Kevin", "Karen", "Oscar", "Jim");
            //echo $friends[2];

            //Accepting Data in Checkboxes

            $fruits = $_POST["fruits"];
            echo $fruits[0];
       ?>

    </body>
</html>