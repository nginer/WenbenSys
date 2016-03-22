<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2015/5/24
 * Time: 7:52
 */
function create_word($data, $file_name)
{
    header("Content-Type:   application/msword");
    header("Content-Disposition:   attachment;   filename=" . $file_name . ".doc"); //指定文件名称
    header("Pragma:   no-cache");
    header("Expires:   0");
    echo $data;
}