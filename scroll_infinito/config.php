<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 13/08/2018
 * Time: 17:13
 */

define('DATABASE', [
    'HOST' => 'localhost',
    'USER' => 'root',
    'PASS' => '',
    'NAME' => 'play_scroll_infinito'
]);

require_once __DIR__ . '/source/crud/Conn.php';
require_once __DIR__ . '/source/crud/Read.php';