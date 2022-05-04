<?php
$formData = $_POST;
$name = $_POST['name'];
$email = $_POST['email'];
$rate = $_POST['rate'];
$review = $_POST['review'];

$response = [
    'name' => [
        'isError' => false,
        'errorMessage' => '',
    ],
    'email' => [
        'isError' => false,
        'errorMessage' => '',
    ]
];

if(empty($name)) {
    $response['name']['isError'] = true;
    $response['name']['errorMessage'] = 'Name is required';
} else {
    $name = test_input($name);
    //Checking for letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $response['name']['isError'] = true;
        $response['name']['errorMessage'] = "Only letters and white space allowed";
    }
}

if (empty($email)) {
    $response['email']['isError'] = true;
    $response['email']['errorMessage'] = 'Email is required';
} else {
    $email = test_input($email);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['email']['isError'] = true;
        $response['email']['errorMessage'] = "Invalid email format";
    }
}

if (empty($rate)) {
    $rate = "";
} else {
    $rate = test_input($rate);
   }

if (empty($review)) {
    $review = "";
} else {
    $review = test_input($review);
   }

//
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo json_encode($response);
