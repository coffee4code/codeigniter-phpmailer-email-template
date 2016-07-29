<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yin
 * Date: 16-7-27
 * Time: 下午3:43
 */

/* End of file file_name.php */
/* Location: ./application/path/to/file_name.php */
Class Model_email extends CI_Model {

    public function __construct(){
        $this->load->library('email');
        $this->load->config('email');
        $this->load->helper('email');


    }

    public function gen($subject='',$body=''){

        $mail = new PHPMailer;

//        $mail->SMTPDebug = 3;
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->CharSet = 'UTF-8';                                   // Set encoding utf-8
        $mail->Host = config_item('smtp_host');                     // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                     // Enable SMTP authentication
        $mail->Username = config_item('smtp_user');                 // SMTP username
        $mail->Password = config_item('smtp_pass');                 // SMTP password
        $mail->SMTPSecure = config_item('smtp_crypto');             // Enable TLS encryption, `ssl` also accepted
        $mail->Port = config_item('smtp_port');                     // TCP port to connect to

        $mail->setFrom(config_item('smtp_user'), 'From Yin');          // Add a sender
        $mail->addAddress('1062893543@qq.com', 'To Yin');           // Add a recipient
        $mail->isHTML(true);                                        // Set email format to HTML

        $mail->Subject = $subject;                                  // Add subject
        $mail->Body    = $body;                                     // Add body

        return $mail;
    }

}