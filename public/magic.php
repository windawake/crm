<?php
/**
 * Created by PhpStorm.
 * User: zhangzibin
 * Date: 2017/8/3
 * Time: 10:23
 */

class config{
    private $data = array();

    public function __construct($arrData = array())
    {
        $this->data = $arrData;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}

$data = array('name'=>'app','driver'=>'redis');
$config = new config($data);

var_dump($config->driver);