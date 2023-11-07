<?php

class Movie {

    public $title;
    public $description;
    public $img_url;
    public $cast;
    public $genre;

    public function __construct(
        $title,
        $description,
        $img_url,
        $cast,
        $genre
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->img_url = $img_url;
        $this->cast = $cast;
        $this->genre = $genre;
    }

    public function getTitle() 
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImg_url()
    {
        return $this->img_url;
    }

    public function getCast()
    {
        return $this->cast;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}



?>