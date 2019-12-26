<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
    </head>

    <body>

        <form action="calculator.php" method="POST">
            1st Number: <input type="number" name="num1"><br>
            Operator: <input type="text" name="op"><br>
            2nd Number: <input type="number" name="num2"><br>

            <input type="submit">
        </form>

        <br>
        <hr>

        <?php
        
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            if ($op == "+")
            {
                echo $num1 + $num2;
            }
            else if ($op == "-")
            {
                echo $num1 - $num2;
            }
            else if ($op == "*")
            {
                echo $num1 * $num2;
            }
            else if ($op == "/")
            {
                echo $num1 / $num2;
            }
            else
            {
                echo "Invalid Operator";
            }
        
        ?>
    
        
    </body>
</html>