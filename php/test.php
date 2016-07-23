<?php
/**
 * Created by IntelliJ IDEA.
 * User: q9360
 * Date: 2016/7/23
 * Time: 22:57
 */
function _get($str)
{
    $val = !empty($_GET[$str]) ? $_GET[$str] : null;
    return $val;
}

if (_get('name') != "") {
    echo "我是好人！！！";
}
