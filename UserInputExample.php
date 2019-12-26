<!DOCTYPE html>
<html>
    <head>
        <title>USER INPUT</title>
    </head>

    <body>

        <form action="UserInputExample.php" method="GET">
            Name: <input type="text" name="name"><br>
            Age:  <input type="number" name="age"><br>
            <input type="submit">
        </form>

        <br>

        Your Name is: <?php echo $_GET["name"] ?><br>
        Your Age is: <?php echo $_GET["age"] ?>
    
    </body>
</html>