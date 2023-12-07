<?php

$db = mysqli_connect("localhost","root","","test");
mysqli_query($db, 'SET NAMES utf8');

if(!$db){
    echo 'DB접속 실패';
}