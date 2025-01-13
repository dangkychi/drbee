<?php

/**
 * HỆ THỐNG TRẮC NGHIỆM ONLINE
 * View Login
 * @author: Dang Ky Chi
 * Mail: dangkychi@gmail.com
 * @link https://github.com/dangkychi/drbee
 **/

class View_Login
{
    public function show_login()
    {
        require_once 'config/config.php';
        include 'res/templates/login.php';
    }
}
