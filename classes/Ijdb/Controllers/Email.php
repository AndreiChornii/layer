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
        $arr_of_mail_parameters[] = $_FILES['userfile']['name'];
        $arr_of_mail_parameters[] = $_FILES['userfile']['tmp_name'];

        // //Attach multiple files one by one
        // $msg = '';
        // for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
        //     $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
        //     $filename = $_FILES['userfile']['name'][$ct];
        //     if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
        //         $this->emailLawyer->addAttachment($uploadfile, $filename);
        //     } else {
        //         $msg .= 'Failed to move file to ' . $uploadfile;
        //     }
        // }

        // if($msg !== '') echo $msq;

        $rez = $this->emailLawyer->sendEmail(\Ijdb\Entity\Email::EMAILS_TO_SEND, $arr_of_mail_parameters);
        return ['template' => 'emailsuccess.html.php', 'title' => 'lawyer-dnepr',
            'variables' => [
                'rez' => $rez
            ]];
    }
}