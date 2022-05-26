<?php


abstract class placesClass
{
    //  Properties
    public $id;
    public $query;
    public $name;
    public $site;
    public $category;
    public $city;
    public $address;
    public $postal_code;
    public $latitude;
    public $longitude;
    public $phone;
    public $rating;
    public $reviews;
    public $photo;
    public $logo;

    //  Methods
    public function __construct()
    {

    }

    protected function getPlaces($tableName)
    {
        include '../../dataBase.php';
        $conn = $GLOBALS['conn'];

        $tableName = strtolower($tableName);

        switch ($tableName) {
            case 'hotels': $sql = "SELECT * FROM hotels";
                $result = mysqli_query($conn, $sql);
                $hotels = mysqli_fetch_all($result);
                mysqli_free_result($result);

                return $hotels;

//            break;

            case 'restaurants': $sql = "SELECT * FROM restaurants";
                $result = mysqli_query($conn, $sql);
                $restaurants = mysqli_fetch_object($result);
                mysqli_free_result($result);

                return $restaurants;
//            break;

            case 'attractions': $sql = "SELECT * FROM attractions";
                $result = mysqli_query($conn, $sql);
                $attractions = mysqli_fetch_object($result);
                mysqli_free_result($result);

                return $attractions;
//            break;

            default: echo 'No table selected';
        }
        $conn->close();
    }
}


class hotels extends placesClass
{
    public function getHotels($tableName)
    {
        if($tableName == 'hotels') {
            return parent::getPlaces($tableName);
        } else {
            return 'The class hotels can return only places of type Hotels!';
        }
    }
}


class restaurants extends placesClass
{
    public function getRestaurants($tableName)
    {
        if($tableName == 'restaurants') {
            return parent::getPlaces($tableName);
        } else {
            return 'The class restaurants can return only places of type Restaurants!';
        }
    }
}


class attractions extends placesClass
{
    public function getAttactions($tableName)
    {
        if($tableName == 'attractions') {
            return parent::getPlaces($tableName);
        } else {
            return 'The class attractions can return only places of type attractions!';
        }
    }
}


class cities
{
    private $id;
    public $citys_name;

    public function getCity($q)
    {
        include '../../dataBase.php';
        $conn = $GLOBALS['conn'];
        $hint = '';

        $sql = "SELECT * FROM cities";
        $result = mysqli_query($conn, $sql);
        $city = mysqli_fetch_all($result);
        mysqli_free_result($result);

        return $city;


        if($q !== '' && strlen($q) >= 1) {
            $q = strtolower($q);
            $len = strlen($q);

            for ($i = 0; $i < count($city); $i++) {

                if (stristr($q, substr($city[$i]->citys_name, 0, $len))) {

                    if ($hint === '') {
                        $hint = $city[$i]->citys_name;

                        return $hint;
                    }
                    else {
                        $hint = '';
                        $hint = $hint[$i] . ", " . $city[$i]->citys_name;

                        return $hint;
                    }
                }
            }
        }


        $conn->close();
    }
}