<?php 
    $base_dir  = __DIR__; // Absolute path
    $doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
    $base_url  = preg_replace("!^${doc_root}!", '', $base_dir); 
    
    define('ROOTPATH', $base_url); 
?>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<link rel="shortcut icon" href="<?php echo ROOTPATH ?>/../../recursos/img/logoTieOut.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo ROOTPATH ?>/../../recursos/css/index.css">
<script type="text/javascript" src="<?php echo ROOTPATH ?>/../../recursos/js/jQuery/jquery-1.5.2.min.js"></script>
<script>var $j = jQuery.noConflict(true);</script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo ROOTPATH ?>/../../recursos/js/bootstrap/css/bootstrap.min.css">
<script src="<?php echo ROOTPATH ?>/../../recursos/js/bootstrap/js/bootstrap.min.js"></script>
<script>$('.carousel').carousel({interval: 3000 }) </script>
<link rel="stylesheet" type="text/css" href="<?php echo ROOTPATH ?>/../../recursos/css/encabezados.css">

