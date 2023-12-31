<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production {
    public $publish_year;
    public $running_time;

    public function __construct(
        string $title,
        string $description,
        string $img_url,
        array $cast,
        array $genre,
        int $publish_year,
        int $running_time
    ) {
        parent::__construct($title, $description, $img_url, $cast, $genre);

        $this->title = $title;
        $this->description = $description;
        $this->img_url = $img_url;
        $this->cast = $cast;
        $this->genre = $genre;
        $this->publish_year = $publish_year;
        $this->running_time = $running_time;
    }

    public function addActor($actorName) {
        $this->cast [] = $actorName;
    }
    public function removeActor($actorName) {
        $indexToDelete = array_search($actorName, $this->cast);
        if ($indexToDelete) {
            array_splice($this->cast, $indexToDelete, 1);
        }
    }
}  