<?php
 //inizio classe
 class Movie{
    public $title;
    public $year;
    public $mainCharacter;
    public $stars;
    public $discription;
    //imposto il genere come array in modo tale che possa prendere più valori
    public $genre=[];


  
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
 //imposto il numero di stelle del film 1
 $movie1->stars = 4;
 //imposto i vari generi  del film 2
 $movie1->genre[0] = "horror";
 $movie1->genre[1] = "thriller";
  //var_dump($movie1);
 //chiamo il metodo presente nella mia classe per l'oggetto 1
 //$movie1->ratings();

 //------------------------------------------------------------------------

 $movie2 = new Movie("CAPTAIN PHILLIPS","2013","Tom Hanks");
 //imposto il numero di stelle del film 2
 $movie2->stars = 5;
 //imposto i vari generi  del film 2
 $movie2->genre[0] = "thriller";
 $movie2->genre[1] = "horror";
 $movie2->genre[2] = "horror";
 
 //var_dump($movie2);
  //chiamo il metodo presente nella mia classe per l'oggetto 2
 //$movie2->ratings();


 //creo un array che contiene i miei films
 $movies = [
    $movie1,
    $movie2,
 ];
 var_dump($movies)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>

 <ul>
   <?php
    foreach($movies as $movie){
        echo "
        <li>
            ". $movie->title . ", " . $movie->mainCharacter . ", " . $movie->year. ", ". $movie->genre[0]. ",
        </li>";


    }

    ?>
 </ul>



    
</body>
</html>