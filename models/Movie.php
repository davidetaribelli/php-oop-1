<?php
class Movie
{
    public $title;
    public $plot;
    public $genre;
    public $release;

    public function __construct($title, $plot, $genre, $release)
    {
        $this->title = $title;
        $this->plot = $plot;
        $this->genre = $genre;
        $this->release = $release;
    }

    public function calcolaEtaFilm()
    {
        $annoCorrente = date('Y');
        $eta = $annoCorrente - $this->release;
        return $eta;
    }
}
