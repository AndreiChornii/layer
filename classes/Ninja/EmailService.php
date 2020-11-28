<?php


namespace Ninja;


class EmailService
{
    public function __construct(){

    }

    public function sendEmail(){
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
        $mail->Username = 'compliance.branch.dn@gmail.com';
        $mail->Password = 'compliance2020';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setLanguage('ru');
        $mail->setFrom('compliance.branch.dn@gmail.com', 'Compliance');
        $mail->addAddress('andrei.chornii@gmail.com');    //Получатель
        $mail->isHTML(true);


        $mail->Subject = 'no FIZGOT on sftp';
        $mail->Body = 'Добрый день, Светлана Евгеньевна!<br />
                       Ежедневно мы от Вас на сфтп получаем выборку FIZGOT.<br />
                       В результате анализа полученной информации, установлено, что отсутствует файл за дату  на sftp://ftpuser@isftp.pbank.com.ua/FIZGOT/<br />';
        if (!$mail->send()) {
            return ' Ошибка при отправке. Ошибка: ' . $mail->ErrorInfo;
        } else {
            return ' Сообщения успешно отправлены';
        }
    }
}