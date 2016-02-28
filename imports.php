<?php 
    $base_dir  = __DIR__; // Absolute path
    $doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
    $base_url  = preg_replace("!^${doc_root}!", '', $base_dir); 
    
    define('ROOTPATH', $base_url); 
?>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<link rel="shortcut icon" href="img/logoTieOut.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo ROOTPATH ?>/css/index.css">
<script type="text/javascript" src="<?php echo ROOTPATH ?>/js/jQuery/jquery-1.5.2.min.js"></script>
<script>var $j = jQuery.noConflict(true);</script>
<script type="text/javascript" src="<?php echo ROOTPATH ?>/js/menu.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo ROOTPATH ?>/js/bootstrap/css/bootstrap.min.css">
	<script src="<?php echo ROOTPATH ?>/js/bootstrap/js/bootstrap.min.js"></script>
	<script>$('.carousel').carousel({interval: 3000 }) </script>