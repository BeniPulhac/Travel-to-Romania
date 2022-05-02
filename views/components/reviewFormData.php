<?php

//echo 'The name is: ' . $_POST["name"] . '<br />';
//echo 'The email address is: ' . $_POST["email"] . '<br />';
//echo 'The rating is: ' . $_POST["rate"] . '<br />';
//echo 'The review is: ' . $_POST["comment"] . '<br />';


//              Work on security
$nameErr = $emailErr = "";
$name = $email = $rate = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        //Checking for letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["rate"])) {
        $rate = "";
    } else {
        $rate = test_input($_POST["rate"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//

echo "<h2>Your Input:</h2>";
echo 'The name: ' . $name;
echo "<br>";
echo 'The email: ' . $email;
echo "<br>";
echo 'The rate: ' . $rate;
echo "<br>";
echo 'The comment: ' . $comment;

