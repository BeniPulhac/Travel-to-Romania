<?php
$servername = "internship.rankingcoach.com:13306";
$username = "l.pulhac";
$password = "ZQAWsZfTuw4PboJ";
$dbname = "l_pulhac";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
////-------------------------------------Hotels-------------------------------------
////Insert into DB
////read the json file contents
//$jsonData = file_get_contents('assets/json/hotelsAPI2.json');
//
////convert json object to php associative array
//$data = json_decode($jsonData);
//
//$length = count($data);
//
////var_dump($length);die;
//
//for ($i = 0; $i < $length; $i++) {
//    $query = $data[$i]->query;
//    $name = $data[$i]->name;
//    $site = $data[$i]->site;
//    $category = $data[$i]->category;
//    $city_id = $data[$i]->city;
//    $street = $data[$i]->street;
//    $postal_code = $data[$i]->postal_code;
//    $latitude = $data[$i]->latitude;
//    $longitude = $data[$i]->longitude;
//    $phone = $data[$i]->phone;
//    $rating = $data[$i]->rating;
//    $reviews = $data[$i]->reviews;
//    $photo = $data[$i]->photo;
//    $logo = $data[$i]->logo;
//
//if(empty($postal_code)) {
//    $sql = "INSERT INTO hotels(query, name, site, category, city_id, address, postal_code, latitude, longitude, phone, rating, reviews, photo, logo)
//            VALUES('$query', '$name', '$site', '$category', '$city_id', '$street', null, '$latitude', '$longitude', '$phone', '$rating', '$reviews', '$photo', '$logo')";
//} else {
//    $sql = "INSERT INTO hotels(query, name, site, category, city_id, address, postal_code, latitude, longitude, phone, rating, reviews, photo, logo)
//            VALUES('$query', '$name', '$site', '$category', '$city_id', '$street', '$postal_code', '$latitude', '$longitude', '$phone', '$rating', '$reviews', '$photo', '$logo')";
//}
//
//    $result = mysqli_query($conn, $sql);
//    if($result) {
//        echo "Records inserted successfully.";
//    }else{
//        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//    }
//}
//
////Close Connection
//$conn->close();
////-------------------------------------/Hotels/-------------------------------------

//-------------------------------------Restaurants-------------------------------------
////Insert into DB
////read the json file contents
//$jsonData = file_get_contents('assets/json/restaurante4.json');
//
////convert json object to php associative array
//$datas = json_decode($jsonData);
//
//$length = count($datas);
//
////var_dump($length);die;
//
//foreach ($datas as $data) {
//    $query = $data->query;
//    $name = $data->name;
//    $site = $data->site;
//    $category = $data->category;
//    $city_id = $data->city;
//    $street = $data->street;
//    $postal_code = $data->postal_code;
//    $latitude = $data->latitude;
//    $longitude = $data->longitude;
//    $phone = $data->phone;
//    $rating = $data->rating;
//    $reviews = $data->reviews;
//    $photo = $data->photo;
//    $logo = $data->logo;
//
//    if(empty($postal_code)) {
//        $sql = "INSERT INTO restaurants(query, name, site, category, city_id, address, postal_code, latitude, longitude, phone, rating, reviews, photo, logo)
//            VALUES('$query', '$name', '$site', '$category', '$city_id', '$street', null, '$latitude', '$longitude', '$phone', '$rating', '$reviews', '$photo', '$logo')";
//    } else {
//        $sql = "INSERT INTO restaurants(query, name, site, category, city_id, address, postal_code, latitude, longitude, phone, rating, reviews, photo, logo)
//            VALUES('$query', '$name', '$site', '$category', '$city_id', '$street', '$postal_code', '$latitude', '$longitude', '$phone', '$rating', '$reviews', '$photo', '$logo')";
//    }
//
//    $result = mysqli_query($conn, $sql);
//    if($result) {
//        echo "Records inserted successfully.";
//    }else{
//        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//    }
//}
//
////Close Connection
//$conn->close();
//-------------------------------------/Restaurants/-------------------------------------

//-------------------------------------Tourist Attraction-------------------------------------
////Insert into DB
////read the json file contents
//$jsonData = file_get_contents('assets/json/touristAttraction6.json');
//
////convert json object to php associative array
//$datas = json_decode($jsonData);
//
//$length = count($datas);
//
////var_dump($length);die;
//
//foreach ($datas as $data) {
//    $query = $data->query;
//    $name = $data->name;
//    $site = $data->site;
//    $category = $data->category;
//    $city_id = $data->city;
//    $street = $data->street;
//    $postal_code = $data->postal_code;
//    $latitude = $data->latitude;
//    $longitude = $data->longitude;
//    $phone = $data->phone;
//    $rating = $data->rating;
//    $reviews = $data->reviews;
//    $photo = $data->photo;
//    $logo = $data->logo;
//
//    if(empty($postal_code)) {
//        $sql = "INSERT INTO tourist_attraction(query, name, site, category, city_id, address, postal_code, latitude, longitude, phone, rating, reviews, photo, logo)
//            VALUES('$query', '$name', '$site', '$category', '$city_id', '$street', null, '$latitude', '$longitude', '$phone', '$rating', '$reviews', '$photo', '$logo')";
//    } else {
//        $sql = "INSERT INTO tourist_attraction(query, name, site, category, city_id, address, postal_code, latitude, longitude, phone, rating, reviews, photo, logo)
//            VALUES('$query', '$name', '$site', '$category', '$city_id', '$street', '$postal_code', '$latitude', '$longitude', '$phone', '$rating', '$reviews', '$photo', '$logo')";
//    }
//
//    $result = mysqli_query($conn, $sql);
//    if($result) {
//        echo "Records inserted successfully.";
//    }else{
//        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//    }
//}
//
////Close Connection
//$conn->close();
//-------------------------------------/Tourist Attraction/-------------------------------------

//Close Connection
$conn->close();

