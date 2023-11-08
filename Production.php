
<?php

class Production {

    public function __construct(
        string $title,
        string $description,
        string $img_url,
        array $cast,
        array $genre,
        int $publish_year,
        int $running_time
    ){
        parent::__construct($title, $description, $img_url, $cast, $genre);

        $this->title = $title;
        $this->description = $description;
        $this->img_url = $img_url;
        $this->cast = $cast;
        $this->genre = $genre;
        $this->publish_year = $publish_year;
        $this->running_time = $running_time;
    }
}