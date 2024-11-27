<?php

namespace src\handlers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use src\Config;
use src\helpers\Email;

class FormHandler {

    public static function sendForm($fields = []) {

        $subjectField = (isset($fields['subject'])) ? filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS) : null;
        $nameField = (isset($fields['name'])) ? filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) : null;
        $emailField = (isset($fields['email'])) ? filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS) : null;
        $phoneField = (isset($fields['phone'])) ? filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS) : null;
        $wannaABookingField = (isset($fields['booking'])) ? filter_input(INPUT_POST, 'booking', FILTER_SANITIZE_SPECIAL_CHARS) : 'Não';
        $whereWeMetField = (isset($fields['where-did-you-find-us'])) ? filter_input(INPUT_POST, 'where-did-you-find-us', FILTER_SANITIZE_SPECIAL_CHARS) : null;
        $messageField = (isset($fields)) ? filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS) : null;

        $gclidCode = (!empty($_SESSION['gclid_code'])) ? $_SESSION['gclid_code'] : null;

        $formTypeField = (isset($fields['form_type'])) ? filter_input(INPUT_POST, 'form_type', FILTER_SANITIZE_SPECIAL_CHARS) : null;

        

        $formBodyMessage = '';
        $formAltBodyMessage = '';
        $formSubject = '';

        switch ($formTypeField) {

            case "article-form": 
                $formSubject = "$subjectField - Site";

                $formBodyMessage    =
                    '<h2>Formulário de Contato</h2>' .
                    '<p><b>Assunto:</b> ' . $subjectField . ' </p>' .
                    '<p><b>Nome:</b> ' . $nameField . ' </p>' .
                    '<p><b>Email:</b> ' . $emailField . ' </p>' .
                    '<p><b>Telefone:</b> ' . $phoneField . ' </p>' .
                    '<p><b>Deseja fazer uma reserva:</b> ' . $wannaABookingField . ' </p>' .
                    '<p><b>Mensagem:</b> <b>' . $messageField . '</b></p>';

                $formAltBodyMessage = strip_tags($formBodyMessage);

                // Salva os dados na tabela leads
                // LeadHandler::insert([
                //     'name' => $nameField,
                //     'company' => $companyField,
                //     'subject' => $subjectField,
                //     'email' => $emailField,
                //     'phone' => $phoneField,
                //     'mobile' => $mobileField,
                //     'cpf_cnpj' => NULL,
                //     'where_wanna_callback' => NULL,
                //     'where_found_us' => $whereWeMetField,
                //     'message' => $messageField,
                //     'products' => NULL,
                //     'gclid' => $gclidCode
                // ]);

                break;
            default:
                $formSubject = "$subjectField - Site";

                $formBodyMessage    =
                    '<h2>Formulário de Contato</h2>' .
                    '<p><b>Assunto:</b> ' . $subjectField . ' </p>' .
                    '<p><b>Nome:</b> ' . $nameField . ' </p>' .
                    '<p><b>Email:</b> ' . $emailField . ' </p>' .
                    '<p><b>Telefone:</b> ' . $phoneField . ' </p>' .
                    '<p><b>Mensagem:</b> <b>' . $messageField . '</b></p>';

                $formAltBodyMessage = strip_tags($formBodyMessage);

                // Salva os dados na tabela leads
                // LeadHandler::insert([
                //     'name' => $nameField,
                //     'company' => $companyField,
                //     'subject' => $subjectField,
                //     'email' => $emailField,
                //     'phone' => $phoneField,
                //     'mobile' => $mobileField,
                //     'cpf_cnpj' => NULL,
                //     'where_wanna_callback' => NULL,
                //     'where_found_us' => $whereWeMetField,
                //     'message' => $messageField,
                //     'products' => NULL,
                //     'gclid' => $gclidCode
                // ]);

                break;
        }



        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->CharSet = 'UTF-8';                                           //Custom charset
            $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'site@onhostel.com.br';                     //SMTP username
            $mail->Password   = 'Benones@HostelMaintainer2024!gru';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            //Recipients
            $mail->setFrom('site@onhostel.com.br', 'ON Hostel');
            if(Config::APP_ENV == 'DEV'){
                $mail->addAddress('michaelmatheus2001@gmail.com', 'Contato - ON Hostel');     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                $mail->addReplyTo('michaelmatheus2001@gmail.com', 'Contato - ON Hostel');
            } else {
                $mail->addAddress('onhostelcamposdojordao@gmail.com', 'Contato - ON Hostel');     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                $mail->addReplyTo('onhostelcamposdojordao@gmail.com', 'Contato - ON Hostel');
            }
            // $mail->addAddress('campos@onhostel.com.br', 'Contato - ON Hostel');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('campos@onhostel.com.br', 'Contato - ON Hostel');
            // if($formTypeField == 'cart' && !empty($emailField)){
            //     $mail->addCC($emailField);
            // }
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $formSubject;

            $mail->Body    = $formBodyMessage;
            $mail->AltBody = $formAltBodyMessage;


            $_SESSION['form_message_success'] = 'Formulário enviado com sucesso!';

            return $mail->send();
        } catch (Exception $e) {
            $_SESSION['form_message_error'] = 'A mensagem não pode ser enviada, por favor tente mais tarde.';
        }
    }
}
