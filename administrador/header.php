<?php 
    $base_dir  = __DIR__;
    $doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
    $base_url  = preg_replace("!^${doc_root}!", '', $base_dir); # ex: '' or '/mywebsite'
    define('ROOTPATH', $base_url); 
?>
	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a class="esconder" title="Inicio" href="<?php echo ROOTPATH ?>/panel.php">TIES-OUT</a>
                    <a class="mostrar" href="<?php echo ROOTPATH ?>/panel.php"><img src="<?php echo ROOTPATH ?>/img/logoTieOut.png" width="10%" alt="" ></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="esconder" href="<?php echo ROOTPATH ?>/listas/cursos.php">Cursos</a>
                    <a class="mostrar glyphicon glyphicon-book" title="Cursos" href="<?php echo ROOTPATH ?>/listas/cursos.php" ></a>
                </li>
                <li>
                    <a class="esconder" href="<?php echo ROOTPATH ?>/listas/usuarios.php">Usuarios</a>
                    <a class="mostrar glyphicon glyphicon-user" title="Usuarios" href="<?php echo ROOTPATH ?>/listas/usuarios.php" ></a>
                </li>
                <li>
                	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

    </div>
	<script src="<?php echo ROOTPATH ?>/js/jQuery/jquery.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
     	