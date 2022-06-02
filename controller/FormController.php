<?php
require_once '../../system/Controller.php';
require_once '../../model/FormModel.php';
require_once '../../system/Views.php';

class FormController extends Controller
{

    public function displayEmail()
    {
        $subject = $_POST['subjectForm'];
        $email = $_POST['emailForm'];
        $text = $_POST['textAreaForm'];

        $formModel = new FormModel();
        $formModelMethod = $formModel->displayEmailTemplait($subject, $email, $text);


        View::output('../../emailTemplate.php', $formModelMethod);
    }

    public function sendEmail()
    {
        $formModel = new FormModel();


        $subject = $_POST['subjectForm'];
        $email = $_POST['emailForm'];
        $text = $_POST['textAreaForm'];

        $response = $formModel->checkErrors($subject, $email, $text);
        if($response['formCheck'] === true) {
            $formModel->sendEmail($subject, $email, $text);
        }

        return $response;
    }
}

