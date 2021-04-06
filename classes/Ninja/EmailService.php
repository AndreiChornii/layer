<?php


namespace Ninja;


class EmailService
{
    public function __construct(){

    }

    public function sendEmail(array $emails_of_recepients, array $arr_of_mail_parameters){
        // var_dump($arr_of_mail_parameters);
//        $path_to_phpmailer = $_SERVER['DOCUMENT_ROOT'] . '/../includes/PHPMailer/PHPMailerAutoload.php';
//        $path_to_phpmailer = '/var/www/lawyer-dnepr/includes/PHPMailer/PHPMailerAutoload.php';
//        $path_to_phpmailer = $_SERVER;
//        require $path_to_phpmailer;
//        return $path_to_phpmailer;
        $mail = new PHPMailer;
//        $mail = new \PHPMailer\PHPMailerAutoload;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; //gmail: smtp.gmail.com
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
//        $mail->SMTPAuth = false;
//        $mail->SMTPAutoTLS = false;
        $mail->Username = 'compliance.branch.dn@gmail.com';
        $mail->Password = 'comp010120';
        $mail->SMTPSecure = 'ssl';
//        $mail->SMTPSecure = 'tls';
        $mail->Port = 465;
        $mail->CharSet = 'UTF-8';
        $mail->setLanguage('ru');
        $mail->setFrom('compliance.branch.dn@gmail.com', 'Got question from site lawyer-dnepr');
//        $mail->addAddress($email_of_recepient);
        foreach ($emails_of_recepients as $el){     //Получатели
            $mail->addAddress($el);
        }
        $mail->isHTML(true);
        $mail->Subject = 'question from site lawyer-dnepr';
        $str_to_email = '';
        foreach ($arr_of_mail_parameters as $el){
            $str_to_email .= $el . '<BR />';
        }
        $mail->Body = $str_to_email;

        $msg = '';
        // echo '<BR />';
        //Attach multiple files one by one
        for ($ct = 0; $ct < count($arr_of_mail_parameters[5]); $ct++) {
            $uploadfile = tempnam(sys_get_temp_dir(), sha1($arr_of_mail_parameters[4][$ct]));
            // $uploadfile = tempnam("/tmp", sha1($arr_of_mail_parameters[4][$ct]));
            $filename = $arr_of_mail_parameters[4][$ct];
            if (move_uploaded_file($arr_of_mail_parameters[5][$ct], $uploadfile)) {
                $mail->addAttachment($uploadfile, $filename);
            } else {
                $msg .= 'Failed to move file to ' . $uploadfile;
            }
        }

        if (!$mail->send()) {
            return 'Помилка при відправці. Помилка: ' . $mail->ErrorInfo . 'attachments:' . $msq;
        } else {
            return 'Ваше повідомлення надіслано.';
        }
    }
}