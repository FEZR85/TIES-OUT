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
                    <a class="esconder" href="#">TIES-OUT</a>
                    <a class="mostrar" href="#"><img src="<?php echo ROOTPATH ?>/img/logoTieOut.png" width="10%" alt="" ></a>
                </li>
                <hr>
                <li>
                    <a class="esconder" href="#">Configurar empleos</a>
                    <a class="mostrar glyphicon glyphicon-cog" title="Configurar empleos" href="#" ></a>
                </li>
                <li>
                    <a class="esconder" href="#">Editar cursos</a>
                    <a class="mostrar glyphicon glyphicon-pencil" title="Editar cursos" href="#" ></a>
                </li>
                <li>
                    <a class="esconder" href="#">Agregar cursos</a>
                    <a class="mostrar glyphicon glyphicon-plus" title="Agregar cursos" href="#" ></a>
                </li>
                <li>
                    <a class="esconder" href="#">Eliminar cursos</a>
                    <a class="mostrar glyphicon glyphicon-remove" title="Eliminar cursos" href="#" ></a>
                </li>
                <li>
                    <a class="esconder" href="#">Usuarios</a>
                    <a class="mostrar glyphicon glyphicon-user" title="Usuarios" href="#" ></a>
                </li>
                <li>
                	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

    </div>
	<script src="js/jQuery/jquery.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
     	