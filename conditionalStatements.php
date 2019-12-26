<!DOCTYPE html>
<html>
    <head>
        <title>Conditional Statements</title>
    </head>

    <body>

        <form action="conditionalStatements.php" method="POST">
            Your Grade is: <br><input type="text" name="grade"><br>
            <input type="submit">
        </form>
        <br>
        <br>


        <?php

            $isMale = true;
            $isTall = false;
            if ($isMale && $isTall) //is ($isMale || $isTall)
            {
                echo "You are tall male";
            }
            elseif ($isMale && !$isTall)
            {
                echo "You are short male";
            }
            else
            {
                echo "You are not male";
            }

            echo "<br><hr><br>";

            function getMax($num1, $num2, $num3)
            {
                if($num1 >= $num2 && $num1 >= $num3)
                {
                    return $num1;
                }
                else if($num2 >= $num1 && $num2 >= $num3)
                {
                    return $num2;
                }
                else   
                {    
                    return $num3;
                }
            }

            echo "Max in 10,15 and 5 is: ";
            echo getMax(10,15,5);

            //Switch Statements

            echo "<hr><br>";
            echo"Switch Statements<br><br>";

            $grade = $_POST["grade"];
            switch($grade)
            {
                case "A":
                    echo "You did amazing!";
                    break;
                case "B":
                    echo "You did pretty Good";
                    break;
                case "C":
                    echo "You did poorly";
                    break;
                case "D":
                    echo "You did very bad";
                    break;
                case "F":
                    echo "You Failed!";
                    break;
                default:
                    echo "Invaid Grade";
            }

            //While Loops

            echo "<br><br><hr><br>";
            echo "While Loops<br>";

            $index = 1;

            while($index <=5)
            {
                echo "$index <br>";
                $index++;
            }

            //Do While Loops

            echo "<br><br><hr><br>";
            echo "Do While Loops<br>";

            $index = 6;

            do
            {
                echo "$index <br>";
                $index++;
            }
            while($index <= 5);

            //For Loops

            echo "<br><br><hr><br>";
            echo "For Loops<br>";

            for($index=1;$index<=5;$index++)
            {
                echo "$index<br>";
            }

            echo "<br>";

            $numbers = array(4, 8, 14, 16, 23, 42);
            for($i=0;$i<=count($numbers);$i++)
            {
                echo "$numbers[$i]<br>";
            }

        ?>

    </body>
</html>