<?php defined('BASEPATH') OR exit('No direct script access allowed.');

$config['etemplate'] = array(
    'site'=>'http://www.hobbees.hk/',
    'logo'=>'public/download/image/logo-red.png',
    'background'=>array(
        'grey'=>'public/download/image/bg-grey.jpg',
        'transparent'=> 'public/download/image/bg-transparent.png'
    ),
    'action' => array(
        'upgrade'=>'http://www.hobbees.hk/start',
        'blog'=>'http://www.hobbees.hk/blog',
        'event'=>'http://www.hobbees.hk/event',
        'course'=>'http://www.hobbees.hk/browse/0/popular',
        'profile'=>'http://www.hobbees.hk/dashboard/profile/bank',
        'dashboard'=>'http://www.hobbees.hk/dashboard',
        'coursemanagement'=>'http://www.hobbees.hk/dashboard/course',
        'addcourse'=>'http://www.hobbees.hk/dashboard/course/add'
    ),
    'social'=>array(
        'blog'=>array(
            'image'=>'public/download/image/social-rss.png',
            'link'=>'http://www.hobbees.hk/blog'
        ),
        'facebook'=>array(
            'image'=>'public/download/image/social-facebook.png',
            'link'=>'//facebook.com/findhobbees'
        ),
        'instagram'=>array(
            'image'=>'public/download/image/social-instagram.png',
            'link'=>'//www.instagram.com/findhobbees/'
        )
    ),
    'application'=>array(
        'ios'=>array(
            'image'=>'public/download/image/app-ios.png',
            'link'=>'//itunes.apple.com/hk/app/hobbees/id961517080?l=en&mt=8'
        ),
        'android'=>array(
            'image'=>'public/download/image/app-android.png',
            'link'=>'//play.google.com/store/apps/details?id=com.hobbees.hobbees'
        )
    ),
    'team'=> array(
        'name'=>'Hobbees 團隊',
        'contact'=>'(852) 2548 2988',
        'email'=>'support@findhobbees.com',
        'address'=>'香港灣仔菲林明道8號大同大廈13樓1306室'
    )
);