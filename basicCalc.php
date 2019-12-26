<!DOCTYPE html>
<html>
    <head>
        <title>Basic Calculator</title>
    </head>

    <body>

        <form action="basicCalc.php" method="GET">
            <input type="number" name="num1"><br>
            <input type="number" name="num2"><br>
            <input type="submit">
        </form>

        <br>
    
        Sum is: <?php echo $_GET["num1"]+$_GET["num2"]?>

    </body>
</html>