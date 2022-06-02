<?php
require_once '../../system/Model.php';

class FormModel extends Model
{
    public function displayEmailTemplait($subject, $email, $text)
    {
        $result = 'Name: ' . $subject . '<br>' .
            'Email: ' . $email . '<br>' .
            'Message: ' . $text ;

        return $result;
    }


    public function sendEmail($subject, $email, $text)
    {
        $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($email, $subject, $text, $headers);
    }

    public function checkErrors($subject, $email, $text)
    {
//        $errorsArray = array();
        $errorsArray = [
            'subjectForm' => [
                'error' => '',
                'check' => false,
            ],
            'emailForm' => [
                'error' => '',
                'check' => false,
            ],
            'textAreaForm' => [
              'error' => '',
              'check' => false,
            ],
            'formCheck' => false,
        ];

        if(empty($email)) {
            $errorsArray['emailForm']['check'] = true;
            $errorsArray['emailForm']['error'] = '*Email is required';
        } else {

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorsArray['emailForm']['check'] = true;
                $errorsArray['emailForm']['error'] = '*Invalid email format';
            }
        }

        if(empty($subject)) {
            $errorsArray['subjectForm']['check'] = true;
            $errorsArray['subjectForm']['error'] = '*Last name is required';
        } else {
            $uppercase = preg_match('@[A-Z]@', $subject);
            $lowercase = preg_match('@[a-z]@', $subject);

            if(!($uppercase || $lowercase)) {
                $errorsArray['subjectForm']['check'] = true;
                $errorsArray['subjectForm']['error'] = '*Use only A-Z lower and uppercase letters';
            }
        }

        if(empty($text)) {
            $errorsArray['textAreaForm']['check'] = true;
            $errorsArray['textAreaForm']['error'] = '*Please add a text';
        }

        if($errorsArray['emailForm']['check'] === false || $errorsArray['subjectForm']['check'] === false || $errorsArray['textAreaForm']['check'] === false) {
            $errorsArray['formCheck'] = true;
        }

        return $errorsArray;
    }
}