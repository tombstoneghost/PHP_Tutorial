<!DOCTYPE html>
<html>
    <head>
        <title>Arrays</title>
    </head>

    <body>

        <form action="associativeArray.php" method="POST">
            <input type="text" name="student">
            <input type="submit">
        </form>

       <?php
       
            $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
            echo $grades[$_POST["student"]];  
       
       ?>

    </body>
</html>