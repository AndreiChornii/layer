<?php


namespace Ijdb\Controllers;

use \Ninja\EmailService;

class Email
{
    private $emailLawyer;

    public function __construct(EmailService $emailLawyer){
        $this->emailLawyer = $emailLawyer;
    }

    public function email() {
        $title = 'lawyer-dnepr';

        return ['template' => 'email.html.php', 'title' => $title];
    }

    public function processEmail() {
        $rez = $this->emailLawyer->sendEmail();
        return ['template' => 'emailsuccess.html.php', 'title' => 'lawyer-dnepr',
            'variables' => [
                'name' => $_POST['name_field_set'],
                'tel' => $_POST['tel_field_set'],
                'email' => $_POST['email_field_set'],
                'text' => $_POST['text_field_set'],
                'rez' => $rez
            ]];
    }
}