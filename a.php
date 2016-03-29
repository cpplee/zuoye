<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/29
 * Time: 12:48
 */
function p($var)
{
    if (is_bool($var)) {
        var_dump($var);
    } else if (is_null($var)) {
        var_dump(NULL);
    } else {
        echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>" . print_r($var, true) . "</pre>";
    }
}


$a=array(
    'a1'=>'123',
    'a2'=>'456'
);

p(json_encode($a));
$arr = array('a' =>1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
p(json_encode($arr));


class Emp {
    public $name = "";
    public $hobbies  = "";
    public $birthdate = "";
}
$e = new Emp();
$e->name = "sachin";
$e->hobbies  = "sports";
$e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

p(json_encode($e));


$arr = array('status'=>1,
    "msg"=>"成功");

echo json_encode($arr);
