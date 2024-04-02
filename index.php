<?php
 //inizio classe
 class Movie{
    public $title;
    public $year;
    public $mainCharacter;
    public $discription;
  
  function __construct($_title, $_year , $_mainCharacter) {

    $this->title = $_title;
    $this->year = $_year;
    $this->mainCharacter = $_mainCharacter;
  }

 }
 //fine classe


 $movie1 = new Movie("TITANIC","1997","Leonardo Di Caprio");
 var_dump($movie1);

 $movie2 = new Movie("CAPTAIN PHILLIPS","2013","Tom Hanks");
 var_dump($movie2)

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