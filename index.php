<?php
 //inizio classe
 class Movie{
    public $title;
    public $year;
    public $mainCharacter;
    public $stars;
    public $discription;
  
  function __construct($_title, $_year , $_mainCharacter) {

    $this->title = $_title;
    $this->year = $_year;
    $this->mainCharacter = $_mainCharacter;
  }

  //creo un metodo dentro la mia classe Movie
 function ratings(){
    echo "This movie has ". $this->stars." stars";
 }

 }
 //fine classe


 $movie1 = new Movie("TITANIC","1997","Leonardo Di Caprio");
 $movie1->stars = 4;
 var_dump($movie1);
 //chiamo il metodo presente nella mia classe per l'oggetto 1
 $movie1->ratings();

 $movie2 = new Movie("CAPTAIN PHILLIPS","2013","Tom Hanks");
 $movie2->stars = 5;
 var_dump($movie2);
  //chiamo il metodo presente nella mia classe per l'oggetto 2
 $movie2->ratings();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>




 <h1>titolo</h1>
    
</body>
</html>