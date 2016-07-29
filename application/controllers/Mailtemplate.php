<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailtemplate extends CI_Controller {

	public function index($type ='password-forget')
	{

        /**
         * 根据模板类型和给定的对应数据，生成邮件内容，且仅生成邮件内容
         *
         * 使用方法：
         * 1. 加载配置文件和引用library类库
         *      $this->load->config('etemplate');
         *      $this->load->library('etemplate');
         *
         * 2. 创建模板，并添加数据
         *      $etemplate = new Emailtemplate($type);
         *      $etemplate->setData(array('username'=>'Yin Gang'));
         *
         *      注：$type取值范围：
         *      1.) 'welcome-user',          欢迎注册用户
         *      2.) 'welcome-tutor',         欢迎注册导师
         *      3.) 'booking-confirm',       订单确认
         *      4.) 'class-user',            用户到课时间提醒
         *      5.) 'class-tutor',           导师授课时间提醒
         *      6.) 'password-forget'        忘记密码
         *      注：$type不同，setData()需要的数据也不用，具体结构见下例
         *
         *
         * 3. 获取渲染后的模板
         *      $email_template = $etemplate->render();
         *
         * 4. 添加到邮件正文并发送
         *      $mail = new PHPMailer;
         *      $mail->Body = $email_template;
         *      $mail->CharSet = 'UTF-8'; //发送中文注意设置编码
         *
         *

         */



        // 1. 加载配置文件，引用library类库
        $this->load->config('etemplate');
        $this->load->library('etemplate');

        // 2. 创建新的模板
        $etemplate = new Emailtemplate($type);

        // 根据不同的模板类型，设置模板需要的数据
        // 实际使用时，不需要switch case,只需要添加对应类型的数据即可，这里做演示需要
        switch($type){

            //欢迎新用户或者导师时，只需要称谓
            case 'welcome-user':
            case 'welcome-tutor':
                $etemplate->setData(array('username'=>'Yin Gang'));
                break;

            //找回密码时，需要用户称谓（可以是邮件），请求时间，及重置密码链接
            case 'password-forget':
                $etemplate->setData(array(
                    'username'=>'1062893543@qq.com',
                    'datetime' => '2016-04-12 18:59',
                    'link'=>'http://test.findhobbees.com/pass/reset/100149/228becc37edb2de0e0808a131e8b8d7e'
                ));
                break;

            //订单确认，需要订单细节
            case 'booking-confirm':
                $etemplate->setData(array(
                    'booking'=>array(
                        'courseid' => '10000009',
                        'coursename' => '天氣瓶 Storm Glass 工作坊（迷你版） ',
                        'address' => '銅鑼灣告士打道276號海殿大廈3/F G室',
                        'tutor' => 'DoDo Chen',
                        'orderid' => '100104',
                        'total' => '150',
                        'cover' => 'http://test-server.findhobbees.com/assets/uploads/000/000/000/398/398.jpg',
                        'qrcode' => 'http://test-server.findhobbees.com/cl_api/api_load_order_qrcode?orderId=100104',
                        'schedule'=>array(
                            array(
                                'date'=>'2016-04-05',
                                'time' => '09:00-10:00',
                                'seat' => '3',
                                'price'=> '90'
                            ),
                            array(
                                'date'=>'2016-04-06',
                                'time' => '09:00-10:00',
                                'seat' => '2',
                                'price'=> '60'
                            )
                        )
                    )
                ));
                break;

            // 用户到课提醒需要课程细节
            case 'class-user':
                $etemplate->setData(array(
                    'clazz'=>array(
                        'courseid'=>'10000009',
                        'orderid' => '100104',
                        'coursename' => '天氣瓶 Storm Glass 工作坊（迷你版） ',
                        'tutor' => 'DoDo Chen',
                        'cover' => 'http://test-server.findhobbees.com/assets/uploads/000/000/000/398/398.jpg',
                        'qrcode' => 'http://test-server.findhobbees.com/cl_api/api_load_order_qrcode?orderId=100104',
                        'address' => '銅鑼灣告士打道276號海殿大廈3/F G室',
                        'date'=>'2016-04-05',
                        'time' => '09:00-10:00',
                        'seat' => '3'
                    )
                ));
                break;

            // 导师授课提醒，需要课程细节和学生名单
            case 'class-tutor':
                $etemplate->setData(array(
                    'clazz'=>array(
                        'courseid'=>'10000009',
                        'coursename' => '天氣瓶 Storm Glass 工作坊（迷你版） ',
                        'cover' => 'http://test-server.findhobbees.com/assets/uploads/000/000/000/398/398.jpg',
                        'address' => '銅鑼灣告士打道276號海殿大廈3/F G室',
                        'date'=>'2016-04-05',
                        'time' => '09:00-10:00',
                        'students' => array('張三','李四','王五','馬六')
                    )
                ));
                break;
        }

        // 3.取得渲染后的模板，String类型
        $email_template = $etemplate->render();

        // 4.1 ======> 可直接显示
        echo $email_template;
        exit;


        // 4.2 ======> 作为邮件body发送出去
        $this->load->model('model_email');
        $mail = $this->model_email->gen('This is subject',$email_template);
        $send = $mail->send();
        if($send){
            echo 'ok';
            exit;
        }
        echo 'failed';
        exit;
	}

}
