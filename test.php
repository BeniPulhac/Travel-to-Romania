<?php
//-----------------------------Timestamp-----------------------------
//date_default_timezone_set('UTC');
//$timeStart = 1653011947;
//$timeEnd = 1653695947;
//
//
//$star = date("d/m/Y", $timeStart);
//
//echo $star;







//-----------------------------CURL-----------------------------
//                 uploadImagesPosts/post40.jpg

//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//
////1. Initialize
//$ch = curl_init();
//
////2. Set options
////URL to send the request to
//$url = 'http://hungryesuriit.000webhostapp.com/';
//curl_setopt($ch, CURLOPT_URL, $url);
//
////Return instead of outputting directly
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//
////Whether to include the header in the output. Set to false here
//curl_setopt($ch, CURLOPT_HEADER, 0);
//
////3. Execute the request and fetch the response. Check for errors
//$content = curl_exec($ch);
//
//if($content === FALSE) {
//    echo 'cURL Error: ' . curl_error($ch);
//}
//
//preg_match_all("(uploadImagesPosts/post(\d+).jpg)", $content, $image_match);
//
//
//for ($i = 0; $i < 10; $i++){
//
//    $image_url = $url.$image_match[0][$i];
//
//    echo '<img src = "' . $image_url . '">'."\n";
//
//}
//
////4. Close and free up the curl handle
//curl_close($ch);

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

//include 'dataBase.php';
//$conn = $GLOBALS['conn'];
//
////Insert into DB
////read the json file contents
//$jsonData = file_get_contents('assets/json/hotelsAPI2.json');
//
////convert json object to php associative array
//$data = json_decode($jsonData);
//
//$length = count($data);
////var_dump($length . '<br>');
////var_dump($data[0]->city);die;
//
//for ($i = 0; $i < $length; $i++) {
//    $city_id = $data[$i]->city;
//
////    var_dump($data[$i]->city);
//
//    $sql = "INSERT INTO cities(citys_name)
//    VALUES('$city_id')";
//
//    $result = mysqli_query($conn, $sql);
//    if($result) {
////        echo "Records inserted successfully.";
//    }else{
//        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//    }
//}
//
////Close Connection
//$conn->close();

