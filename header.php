<!DOCTYPE html>
 
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta charset="utf-8" />
  <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
  <?php   header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days) ?>
  <style type="text/css" media="screen">
    @import url( <?php bloginfo('stylesheet_url'); ?> );
  </style>
  <link href='<?php bloginfo('template_directory') ?>/js/ead-bar/css/meta.min.css' rel='stylesheet' />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
  <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.js "></script>
</head>

<body data-spy="scroll" data-target="#menu-fixed">
  <div class='fondo-header'>
    <div class='wrap header'>
        <a href=' <?php echo home_url(); ?> '>
          <div class='logo'>
            <p class='logo-ead marca'>e[ad]</p>
          </div>
          <div class='logo'>
              <p class='logo-ead'>Escuela de Arquitectura y Diseño
              <span class='bajas'>Pontificia Universidad Católica de Valparaíso</span>
              </p>
          </div>
        </a>
        <div class='navegacion cf oculto-sm oculto-xs'>
          <ul class="nav nav-pills">
           <li class="dropdown">
             <a href="#" data-toggle="dropdown" role="button" id="primer-dropdown" class="dropdown-toggle">Escuela<b class="caret"></b></a>
             <ul aria-labelledby="drop1" role="menu" class="dropdown-menu" id="menuEscuela">
               <li role="presentation"><a href="<?php echo get_permalink(5038); ?>" tabindex="-1" role="menuitem">Historia</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(7); ?>" tabindex="-1" role="menuitem">Amereida</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(6); ?>" tabindex="-1" role="menuitem">Campus</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(5); ?>" tabindex="-1" role="menuitem">Cuerpo académico</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(4); ?>" tabindex="-1" role="menuitem">Autoridades</a></li>
               <li class="divider" role="presentation"></li>
               <li role="presentation"><a href="<?php echo get_category_link(1); ?>" tabindex="-1" role="menuitem">Portada noticias</a></li>
               <li role="presentation"><a href="<?php echo get_permalink( get_page_by_title( 'Events' ) ) ?>" tabindex="-1" role="menuitem">Portada eventos</a></li>
	             <li role="presentation"><a href="<?php echo get_category_link(123); ?>" tabindex="-1" role="menuitem">Portada información académica</a></li>
               <li class="divider" role="presentation"></li>
               <li role="presentation"><a href="http://wiki.ead.pucv.cl" tabindex="-1" role="menuitem">Wiki Casiopea</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(2729); ?>" tabindex="-1" role="menuitem">Prensa</a></li>
               <li class="divider" role="presentation"></li>
               <li role="presentation"><a href="<?php echo get_permalink(43); ?>" tabindex="-1" role="menuitem">Contacto</a></li>
             </ul>
           </li>
         </ul>
         <ul class="nav nav-pills">
           <li class="dropdown">
             <a href="#" data-toggle="dropdown" role="button" id="drop2" class="dropdown-toggle">Carreras y Posgrados<b class="caret"></b></a>
             <ul aria-labelledby="drop2" role="menu" class="dropdown-menu" id="menuCarreras">
               <li role="presentation"><a href="<?php echo get_permalink(13); ?>" tabindex="-1" role="menuitem">Arquitectura</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(14); ?>" tabindex="-1" role="menuitem">Diseño Gráfico</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(15); ?>" tabindex="-1" role="menuitem">Diseño Industrial</a></li>
               <li class="divider" role="presentation"></li>
               <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Magíster de Arquitectura y Diseño</a></li>
             </ul>
           </li>
         </ul>
         <ul class="nav nav-pills">
           <li class="dropdown">
             <a href="#" data-toggle="dropdown" role="button" id="drop3" class="dropdown-toggle">Admisión<b class="caret"></b></a>
             <ul aria-labelledby="drop3" role="menu" class="dropdown-menu" id="menuAdmision">
               <li role="presentation"><a href="<?php echo get_permalink(3); ?>" tabindex="-1" role="menuitem">Pregrado</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(25599); ?>" tabindex="-1" role="menuitem">Posgrado</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(21); ?>" tabindex="-1" role="menuitem">Intercambio estudiantil</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(25603); ?>" tabindex="-1" role="menuitem">Becas y ayudas estudiantiles</a></li>
             </ul>
           </li>
         </ul>
         <ul class="nav nav-pills">
           <li class="dropdown">
             <a href="#" data-toggle="dropdown" role="button" id="drop4" class="dropdown-toggle">Estudiantes<b class="caret"></b></a>
             <ul aria-labelledby="drop4" role="menu" class="dropdown-menu" id="menuEstudiantes">
               <li role="presentation"><a href="<?php echo get_permalink(784); ?>" tabindex="-1" role="menuitem">Cuerpo coordinador</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(13710); ?>" tabindex="-1" role="menuitem">Asuntos estudiantiles</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(25573); ?>" tabindex="-1" role="menuitem">Estudia en el extranjero</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(19); ?>" tabindex="-1" role="menuitem">Servicios</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(26); ?>" tabindex="-1" role="menuitem">Bolsa de trabajo</a></li>
               <li class="divider" role="presentation"></li>
               <li role="presentation"><a href="<?php echo get_permalink(20); ?>" tabindex="-1" role="menuitem">Ex-alumnos</a></li>
             </ul>
           </li>
         </ul>
         <ul class="nav nav-pills">
           <li class="dropdown">
             <a href="#" data-toggle="dropdown" role="button" id="drop5" class="dropdown-toggle">Extensión<b class="caret"></b></a>
             <ul aria-labelledby="drop5" role="menu" class="dropdown-menu" id="menuExtension">
               <li role="presentation"><a href="<?php echo get_permalink(11); ?>" tabindex="-1" role="menuitem">Archivo Histórico</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(305); ?>" tabindex="-1" role="menuitem">Ediciones e[ad]</a></li>
              <li role="presentation"><a href="<?php echo get_permalink(90); ?>" tabindex="-1" role="menuitem">Investigación</a></li>
             </ul>
           </li>
         </ul>
         <ul class="nav nav-pills">
           <li class="dropdown">
             <a href="#" data-toggle="dropdown" role="button" id="ultimo-dropdown" class="dropdown-toggle">Amereida<b class="caret"></b></a>
             <ul aria-labelledby="drop6" role="menu" class="dropdown-menu" id="menuAmereida">
               <li role="presentation"><a href="<?php echo get_permalink(6937); ?>" tabindex="-1" role="menuitem">Taller de Amereida</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(10); ?>" tabindex="-1" role="menuitem">Ciudad Abierta</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(9); ?>" tabindex="-1" role="menuitem">Travesías</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(786); ?>" tabindex="-1" role="menuitem">Biblioteca Constel</a></li>
             </ul>
           </li>
         </ul>
        </div> <!-- fin navegacion -->
   <div id="pattern" class="oculto-lg oculto-md pattern">
      <!--Begin Pattern HTML-->
      <a href="#menu" class="menu-link"><i class="icn icn-menu icn-lg"></i> </a>
      <nav id="menu" role="navigation">
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Escuela
                </a>
              </h5>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                <ul>
               <li role="presentation"><a href="<?php echo get_permalink(5038); ?>" tabindex="-1" role="menuitem">Historia</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(7); ?>" tabindex="-1" role="menuitem">Amereida</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(6); ?>" tabindex="-1" role="menuitem">Campus</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(5); ?>" tabindex="-1" role="menuitem">Cuerpo académico</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(4); ?>" tabindex="-1" role="menuitem">Autoridades</a></li>
               <li role="presentation"><a href="<?php echo get_category_link(1); ?>" tabindex="-1" role="menuitem">Portada noticias</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(25432); ?>" tabindex="-1" role="menuitem">Portada eventos</a></li>
               <li role="presentation"><a href="<?php echo get_category_link(123); ?>" tabindex="-1" role="menuitem">Portada información académica</a></li>
               <li role="presentation"><a href="http://wiki.ead.pucv.cl" tabindex="-1" role="menuitem">Wiki Casiopea</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(2729); ?>" tabindex="-1" role="menuitem">Prensa</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(43); ?>" tabindex="-1" role="menuitem">Contacto</a></li>
              </ul>
            </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  Carreras y Posgrados
                </a>
              </h5>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <ul>
               <li role="presentation"><a href="<?php echo get_permalink(13); ?>" tabindex="-1" role="menuitem">Arquitectura</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(14); ?>" tabindex="-1" role="menuitem">Diseño Gráfico</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(15); ?>" tabindex="-1" role="menuitem">Diseño Industrial</a></li>
               <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Magíster de Arquitectura y Diseño</a></li>
              </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  Admisión
                </a>
              </h5>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                <ul>
               <li role="presentation"><a href="<?php echo get_permalink(3); ?>" tabindex="-1" role="menuitem">Pregrado</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(3); ?>" tabindex="-1" role="menuitem">Posgrado</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(21); ?>" tabindex="-1" role="menuitem">Intercambio estudiantil</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(3); ?>" tabindex="-1" role="menuitem">Becas y ayudas estudiantiles</a></li>
              </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                  Estudiantes
                </a>
              </h5>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
                <ul>
               <li role="presentation"><a href="<?php echo get_permalink(784); ?>" tabindex="-1" role="menuitem">Cuerpo coordinador</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(13710); ?>" tabindex="-1" role="menuitem">Asuntos estudiantiles</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(25573); ?>" tabindex="-1" role="menuitem">Estudia en el extranjero</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(19); ?>" tabindex="-1" role="menuitem">Servicios</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(26); ?>" tabindex="-1" role="menuitem">Bolsa de trabajo</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(20); ?>" tabindex="-1" role="menuitem">Ex-alumnos</a></li>
              </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                  Extensión
                </a>
              </h5>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body">
                <ul>
               <li role="presentation"><a href="<?php echo get_permalink(11); ?>" tabindex="-1" role="menuitem">Archivo Histórico</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(305); ?>" tabindex="-1" role="menuitem">Ediciones e[ad]</a></li>
              <li role="presentation"><a href="<?php echo get_permalink(90); ?>" tabindex="-1" role="menuitem">Investigación</a></li>
              </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                  Amereida
                </a>
              </h5>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
              <div class="panel-body">
                <ul>
               <li role="presentation"><a href="<?php echo get_permalink(6937); ?>" tabindex="-1" role="menuitem">Taller de Amereida</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(10); ?>" tabindex="-1" role="menuitem">Ciudad Abierta</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(9); ?>" tabindex="-1" role="menuitem">Travesías</a></li>
               <li role="presentation"><a href="<?php echo get_permalink(786); ?>" tabindex="-1" role="menuitem">Biblioteca Constel</a></li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    </div> <!-- fin wrap -->
  </div>  
  