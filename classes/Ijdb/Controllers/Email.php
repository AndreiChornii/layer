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
        $arr_of_mail_parameters = [];
        $arr_of_mail_parameters[] = $_POST['name_field_set'];
        $arr_of_mail_parameters[] = $_POST['tel_field_set'];
        $arr_of_mail_parameters[] = $_POST['email_field_set'];
        $arr_of_mail_parameters[] = $_POST['text_field_set'];
        $rez = $this->emailLawyer->sendEmail(\Ijdb\Entity\Email::EMAILS_TO_SEND, $arr_of_mail_parameters);
        return ['template' => 'emailsuccess.html.php', 'title' => 'lawyer-dnepr',
            'variables' => [
                'rez' => $rez
            ]];
    }
}