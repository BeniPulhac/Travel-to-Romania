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

    protected function getPlaces($tableName, $q, $cityName)
    {

        include '../../dataBase.php';
        $conn = $GLOBALS['conn'];

        $tableName = strtolower($tableName);

        switch ($tableName) {
            case 'hotels':

                if ($q == null) {
                    $sql = "SElECT * FROM hotels WHERE city LIKE '%" . $cityName . "%'LIMIT 50";
                    $result = mysqli_query($conn, $sql);
                    $rowHotel = mysqli_fetch_all($result);
                    mysqli_free_result($result);

                    return $rowHotel;
                } else {
                    $sql1 = "SELECT * FROM hotels WHERE (name LIKE '%" . $q . "%' OR query LIKE '%" . $q . "%') AND city LIKE '%" . $cityName . "%' LIMIT 50";
                    $result1 = mysqli_query($conn, $sql1);
                    $hotels = mysqli_fetch_all($result1);
                    mysqli_free_result($result1);

                    return $hotels;
                }
             break;

            case 'restaurants':

                if ($q == null) {
                    $sql = "SELECT * FROM restaurants WHERE city= '$cityName' LIMIT 50";
                    $result = mysqli_query($conn, $sql);
                    $rowRestaurants = mysqli_fetch_all($result);
                    mysqli_free_result($result);

                    return $rowRestaurants;
                } else {
                    $sql1 = "SELECT * FROM restaurants WHERE (name LIKE '%" . $q . "%' OR query LIKE '%" . $q . "%') AND city LIKE '%" . $cityName . "%' LIMIT 50";
                    $result1 = mysqli_query($conn, $sql1);
                    $restaurants = mysqli_fetch_all($result1);
                    mysqli_free_result($result1);

                    return $restaurants;
                }


            break;

            case 'attractions':
                if ($q == null) {
                    $sql = "SELECT * FROM attractions WHERE city= '$cityName' LIMIT 50";
                    $result = mysqli_query($conn, $sql);
                    $rowAttractions = mysqli_fetch_all($result);
                    mysqli_free_result($result);

                    return $rowAttractions;
                } else {
                    $sql1 = "SELECT * FROM attractions WHERE (name LIKE '%" . $q . "%' OR query LIKE '%" . $q . "%') AND city LIKE '%" . $cityName . "%' LIMIT 50";
                    $result1 = mysqli_query($conn, $sql1);
                    $attractions = mysqli_fetch_all($result1);
                    mysqli_free_result($result1);

                    return $attractions;
                }
             break;

            default: echo 'No table selected';
        }
        $conn->close();

    }
}


class hotels extends placesClass
{
    public function getHotels($tableName, $q, $cityName)
    {
        if($tableName == 'hotels') {
            return parent::getPlaces($tableName, $q, $cityName);
        } else {
            return 'The class hotels can return only places of type Hotels!';
        }
    }
}


class restaurants extends placesClass
{
    public function getRestaurants($tableName, $q, $cityName)
    {
        if($tableName == 'restaurants') {
            return parent::getPlaces($tableName, $q, $cityName);
        } else {
            return 'The class restaurants can return only places of type Restaurants!';
        }
    }
}


class attractions extends placesClass
{
    public function getAttractions($tableName, $q, $cityName)
    {
        if($tableName == 'attractions') {
            return parent::getPlaces($tableName, $q, $cityName);
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