<!DOCTYPE html>
<html>
    <head>
        <title>Class and Obejcts</title>
    </head>

    <body>

       <?php 
            class Book
            {
                var $title;
                var $author;
                var $pages;

                function __construct($aTitile, $aAuthor, $aPages)
                {
                    echo "New Book Created<br>";
                    $this->title = $aTitile;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;

                }
            }

            //$book1 = new Book();
            //$book1->title = "Harry Potter";
            //$book1->author = "JK Rowling";
            //$book1->pages = 400;

            $book1 = new Book("Harry Potter", "JK Rowling", 400);
            $book2 = new Book("Lord of the Rings", "Tolkien", 700);

            echo "$book1->title<br>";
            echo "$book1->author<br>";
            echo $book1->pages;

            //Constructor is a Function which is called everytime we call a class.

            echo "<br><br><hr><br>Objection Functions<br>";

            class Student
            {
                var $name;
                var $major;
                var $gpa;

                function __construct($name, $major, $gpa)
                {
                    $this->name = $name;
                    $this->major = $major;
                    $this->gpa = $gpa;
                }

                function hasHonors()
                {
                    if($this->gpa >= 3.5)
                    {
                        return "true";
                    }
                    return "false";
                }
            }

            $student1 = new Student("Jim", "Business", 2.8);
            $student2 = new Student("Pam", "Art", 3.6);

            echo $student1->hasHonors();
            echo "<br>";
            echo $student2->hasHonors();

       ?>

    </body>
</html>