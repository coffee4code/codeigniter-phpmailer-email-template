<?php

/**
 * Class Emailtemplate
 */
class Emailtemplate {

    /**
     * @var string
     */
    private $_type;

    /**
     * @var string
     */
    private $_theme;

    /**
     * @var string
     */
    private $_lang;

    /**
     * @var string
     */
    private $properties;

    /**
     * @param string $type
     * @param array $data
     * @param string $theme
     * @param string $lang
     */
    public function __construct($type='welcome',$data=array(),$theme='default',$lang='zh-tw'){
        $this->_type = $type;
        $this->_data = $data;
        $this->_theme = $theme;
        $this->_lang = $lang;
        $this->properties = config_item('etemplate');
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->_type = $type;
    }

    /**
     * @return string
     */
    public function getTheme()
    {
        return $this->_theme;
    }

    /**
     * @param string $theme
     */
    public function setTheme($theme)
    {
        $this->_theme = $theme;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->_lang;
    }

    /**
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->_lang = $lang;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->properties;
    }

    /**
     * @param $data
     */
    public function setData($data)
    {
        foreach($data as $k => $v){
            $this->properties[$k] = $v;
        }
    }

    /**
     * @param $k
     * @param $v
     */
    public function __set($k, $v){
        $this->properties[$k] = $v;
    }

    /**
     * @param $k
     * @return mixed
     */
    public function __get($k){
        return $this->properties[$k];
    }

    /**
     * @return string
     */
    private function _get_script_path(){
        return dirname(__FILE__) . '/theme/' . $this->_theme .'/'. $this->_lang .'/' . $this->_type . '.php';
    }

    /**
     * process template
     * @return string
     * @throws Exception
     */
    private function _process(){
        ob_start();
        $path = $this->_get_script_path();
        if(file_exists($path)){
            include($path);
        } else throw new Exception('Template Not Found: ' . $path);
        return ob_get_clean();
    }


    /**
     * return rendered string of template.
     * @return string
     * @throws Exception
     */
    public function render(){
        return $this->_process();
    }

    /**
     * Echo rendered string of template, usually for browser UI check.
     * @return string
     * @throws Exception
     */
    public function display(){
        echo $this->_process();
        exit(EXIT_SUCCESS);
    }
}