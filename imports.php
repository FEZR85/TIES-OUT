<?php 
    $base_dir  = __DIR__; // Absolute path
    $doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
    $base_url  = preg_replace("!^${doc_root}!", '', $base_dir); 
    
    define('ROOTPATH', $base_url); 
?>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta charset="utf-8">
<link rel="shortcut icon" href="img/logoTieOut.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo ROOTPATH ?>/css/index.css">
<script type="text/javascript" src="<?php echo ROOTPATH ?>/js/jQuery/jquery-1.5.2.min.js"></script>
<script>var $j = jQuery.noConflict(true);</script>
<script type="text/javascript" src="<?php echo ROOTPATH ?>/js/menu.js"></script>

