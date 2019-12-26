<!DOCTYPE html>
<html>
    <head>
        <title>Inheritance</title>
    </head>

    <body>

       <?php 
            class Chef
            {
                function makeChicken()
                {
                    echo "The chef makes chicken <br>";
                }

                function makeSalad()
                {
                    echo "The chef makes salad <br>";
                }

                function makeSpecialDish()
                {
                    echo "The chef makes bbq ribs <br>";
                }
            }

            class ItalianChef extends Chef
            {
                function makePasta()
                {
                    echo "The chef makes pasta <br>";
                }

                //Function Overriding

                function makeSpecialDish()
                {
                    echo "The chef makes chicken parm <br>";
                }
            }

            $chef = new Chef();
            $chef->makeChicken();
            $chef->makeSpecialDish();

            $ItalianChef = new ItalianChef();
            $ItalianChef->makeChicken();
            $ItalianChef->makePasta();
            $ItalianChef->makeSpecialDish();
       ?>

    </body>
</html>