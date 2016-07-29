<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yin
 * Date: 16-7-27
 * Time: 下午6:07
 */

/* End of file file_name.php */
/* Location: ./application/path/to/file_name.php */
class Etemplate {

    public function __construct(){

        $mailtemplate_class_exists = class_exists('Emailtemplate', true);

        if (!$mailtemplate_class_exists) {

            $autoloader = APPPATH.'third_party/emailtemplate/class.emailtemplate.php';
            @ include_once $autoloader;
            $mailtemplate_class_exists = class_exists('Emailtemplate', true);
        }

        if (!$mailtemplate_class_exists) {
            throw new Exception('The file class.emailtemplate.php can not be found.');
        }

    }

}