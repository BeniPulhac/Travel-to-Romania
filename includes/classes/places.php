<?php

//declare(strict_types = 1);

//18
interface coordinates
{
    public function showCoordinates();
}

class places implements coordinates
{
    //      Properties
    public $query;
    public $name;
    public $category;
    private $postalCode;
    protected $rating;
    public $reviews;
    //17
    const numberHotels = 25;


    //      Methods
    //3, 16
    public function customize()
    {
        echo 'This is customize';
    }

    //10-11
        public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function setRatingCustom($rating)
    {
        $this->rating = $rating;
    }

    public function getRatingCustom()
    {
        return $this->rating;
    }

    //12
//    public function __construct($query, $name, $category, $postalCode, $rating, $reviews)
//    {
//        $this->query = $query;
//        $this->name = $name;
//        $this->category = $category;
//        $this->postalCode = $postalCode;
//        $this->rating = $rating;
//        $this->reviews = $reviews;
//        var_dump($query . '<br>');
//        var_dump($name . '<br>');
//        var_dump($category . '<br>');
//        var_dump($postalCode . '<br>');
//        var_dump($rating . '<br>');
//        var_dump($reviews . '<br>');
//    }

    //14
    public function whatIsThis()
    {
        var_dump($this);

    }

    //19
    public function showCoordinates()
    {
        // TODO: Implement showCoordinates() method.

        echo 'Latitude: 46.3111745' . '<br>' . 'Longitude: 23.7609796';
    }
}

