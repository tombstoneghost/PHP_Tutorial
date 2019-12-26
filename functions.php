<!DOCTYPE html>
<html>
    <head>
        <title>Functions</title>
    </head>

    <body>

       <?php 
            function sayHi($name, $age)
            {
                echo "Hello $name, you are $age<br>";
            }
            
            sayHi("Tom",40);
            sayHi("Dave",13);
            sayHi("Oscar",80);

            echo "<br><hr><br>";

            function cube($num)
            {
                return pow($num,3);
            }

            $cubeResult = cube(4);
            echo "Cube of 4 is: ";
            echo $cubeResult;
       ?>

    </body>
</html>