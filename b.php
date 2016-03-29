<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/29
 * Time: 13:06
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

if($_POST['username']=='admin'){
    $arr = array(
        'status'=>1,
        'msg'=>'成功'
    );

    echo json_encode($arr);


}else{
    $arr = array(
        'status'=>0,
        'msg'=>'失败'
    );
    echo json_encode($arr);
}