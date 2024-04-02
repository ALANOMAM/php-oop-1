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


 $movie1 = new Movie("TITANIC","2000","leonardo di caprio");
 var_dump($movie1)

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