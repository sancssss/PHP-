<?php

@define(__SITE_ROOT,$_SERVER['DOCUMENT_ROOT']); 
require(__SITE_ROOT.'/config/init.php');
header("Content-Type: text/html; charset=UTF-8");
session_start();

?>