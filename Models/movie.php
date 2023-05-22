<?php
include __DIR__ . '/Genre.php';
class Movie
{
  public $title, $poster, $duration, $language, $genre;

  public function __construct(string $title = '', string $poster = '', int $duration = 180, string $language = 'en', Genre $genre)
  {
    $this->title = $title;
    $this->poster = $poster;
    $this->duration = $duration;
    $this->language = $language;
    $this->genre = $genre;
  }

  public function getDetails(){
    
    return "Duration: $this->duration Language: $this->language Genre: {$this->genre->name}";
  }
}

$movie = new Movie('Il Padrino', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXuY1efvaolNDnj4046S.jpg', 120, 'en', new Genre('Drammatico'));
var_dump($movie);

echo $movie->getDetails();