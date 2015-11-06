<?php

$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='messages';
$db=new mysqli($db_host,$db_user,$db_pass,$db_name);
if($db->connect_errno>0){
    die('Connect failed:'.$db->connect_error);
  
}
