<?php 
    $base_dir  = __DIR__; // Absolute path
    $doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
    $base_url  = preg_replace("!^${doc_root}!", '', $base_dir); 
    
    define('ROOTPATH', $base_url); 
?>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="img/logoTieOut.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo ROOTPATH ?>/js/jQuery/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo ROOTPATH ?>/js/bootstrap/css/bootstrap.min.css">
<script src="<?php echo ROOTPATH ?>/js/bootstrap/js/bootstrap.min.js"></script>
<link type="text/css" href="<?php echo ROOTPATH ?>/css/simple-sidebar.css" rel="stylesheet">