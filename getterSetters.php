<!DOCTYPE html>
<html>
    <head>
        <title>Getters and Setters</title>
    </head>

    <body>

       <?php 
            class Movie
            {
                public $title;
                private $rating;

                function __construct($title, $rating)
                {
                    $this->title = $title;
                    $this->setRating($rating);
                }

                function getRating()
                {
                    return $this->rating;
                }

                function setRating($rating)
                {
                    if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR")
                    {
                        $this->rating = $rating;
                    }
                }
            }

            $avengers = new Movie("Avengers", "PG-13");

            /*Valid Ratings are:
             G, PG, PG-13, R, NR
            */

                 $avengers->setRating("PG");
            echo $avengers->getRating();

       ?>

    </body>
</html>