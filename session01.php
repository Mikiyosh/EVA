<?php
// session変数を定義して値を入れよう
session_start();

$_SESSION['keyword'] = 'session_start()は忘れる';

var_dump($_SESSION['keyword']);
exit();