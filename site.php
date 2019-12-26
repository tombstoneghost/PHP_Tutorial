<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head> 
    
    <body>

        <?php
            echo("Hello World");
            echo("<h1>Hello World</h1><hr>");
            
            $characterName = "Johnny";
            $chracterAge = 35;

            echo "There once was a man named $characterName<br>";
            echo "He was $chracterAge old<hr>";

            $phrase = "Giraffe Academy";
            
            echo strtolower($phrase);
            echo "<br>";
            echo strtoupper($phrase);
            echo "<br>";
            echo strlen($phrase);
            echo "<br>";
            echo $phrase[0];
            echo "<br>";
            echo str_replace("Giraffe","Panda",$phrase);
            echo "<br>";
            echo substr($phrase,0,7);
            echo "<hr>";

            echo "Number Operations<br>";

            $num = 10;
            echo (4+5)*10;
            echo "<br>";
            $num++;
            echo $num;
            echo "<br>";
            $num--;
            echo $num;
            echo "<br>";   
            $num+=25;
            echo $num;

            echo "<hr>Math Operations<br>";
            echo abs(-100); echo "<br>";
            echo pow(2,4); echo "<br>";
            echo sqrt(144); echo "<br>";
            echo max(120,110); echo "<br>";
            echo min(12,1); echo "<br>";
            echo round(3.2); echo "<br>";
            echo round(3.7); echo "<br>";
            echo floor(3.5); echo "<br>";
            echo floor(3.4); echo "<br>";
            echo floor(3.7); echo "<hr>";
        ?>
    </body>
</html>