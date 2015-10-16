<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"

      xmlns:og="http://ogp.me/ns#"

      xmlns:fb="https://www.facebook.com/2008/fbml"

      lang="es" xml:lang="es">

<head>

	<?php include_once "metatags.php";
	$titulo = (isset($title)?strip_tags($title).' - ':'').$page->load('title').' '.$page->load('slogan');
    // cuadramos al dimension  del titulo a <65 caracteres
    $titulo = strip_tags($titulo);
    $titulo = trim($titulo);
    $vowels = array(";", ",", "(", ")");
    $titulo = str_replace($vowels, "", $titulo);
    $titulo = substr($titulo, 0, 65);
    /*function getCurrentUrl(){  
	$domain = $_SERVER['HTTP_HOST'];
	$curreturl =   $_SERVER['REQUEST_URI'];
	$url = "http://" . $domain .$curreturl ;  
	return $url; 
	}*/
	?>
	<title><?php echo $titulo; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
	<meta name="title" content="<?php echo $titulo; ?>" />
	<meta name="description" content="<?php echo getMetaDescription($metas); ?>" />
	<meta name="keywords" content="carteles, <?php echo getMetaKeywords($metas); ?>" />
	<meta name="author" content="CartelesCreativos.COM - Manuel Fernando M." />
	<meta name="owner" content="CartelesCreativos.COM - Manuel Fernando M." />
	<meta name="language" content="es" />
	<meta http-equiv="content-language" content="es">
	<meta name='revisit-after' content='1 day' />
	<meta name='googlebot' content='all' />
	<meta content='all' name='robots'/>
	<meta content='all, index, follow' name='robots'/>
	<meta content='all, index, follow' name='googlebot'/>
	<meta content='all' name='yahoo-slurp'/>
	<meta content='all, index, follow' name='yahoo-slurp'/>
	<meta content='index, follow' name='msnbot'/>
	<meta content='all' name='googlebot-image'/>
	<meta name="p:domain_verify" content="03f14801b7f19095317f884649a8218f"/>
	<!-- link css -->
	<link rel="author" href="https://plus.google.com/+Cartelescreativos" />
	<link rel="canonical" href="http://www.cartelescreativos.com<?php echo parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);?>" />
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php echo $page->host(); ?>_themes/<?php echo $theme; ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $page->host(); ?>_themes/<?php echo $theme; ?>/css/style.css" />
	<!-- javascript y jquery para Ajax -->
	<script type="text/javascript" async src="<?php echo $page->host(); ?>_js/messages.js"></script>
	<script type="text/javascript" async src="<?php echo $page->host(); ?>_themes/<?php echo $theme; ?>/js/scripts.js"></script>
	<script type="text/javascript" async src="<?php echo $page->host(); ?>_js/tools.php?vote"></script>
	<script type="text/javascript" async src="<?php echo $page->host(); ?>_js/tools.php?favorites"></script>
	<script type="text/javascript" async src="<?php echo $page->host(); ?>_js/tools.php?mod"></script>
	<script type="text/javascript" async src="<?php echo $page->host(); ?>_js/facebook.js"></script>
	<script type="text/javascript" async src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
	<script type="text/javascript" src="js/ajax.js" ></script>
	<script type="text/javascript" async src="<?php echo $page->host(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" async src="<?php echo $page->host(); ?>js/jquery.form.js"></script>
	<script type="text/javascript" async src="<?php echo $page->host(); ?>js/jquery.upload.js"></script>
	<script type="text/javascript" async src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" async src="<?php echo $page->host(); ?>_themes/<?php echo $theme; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" async>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-16951670-26', 'cartelescreativos.com');
	  ga('require', 'displayfeatures');
	  ga('send', 'pageview');
	</script>
	<!-- my.pingdom -->
	<script type="text/javascript" async>
		var _prum = [['id', '54421026abe53dee704e9a8d'],
		             ['mark', 'firstbyte', (new Date()).getTime()]];
		(function() {
		    var s = document.getElementsByTagName('script')[0]
		      , p = document.createElement('script');
		    p.async = 'async';
		    p.src = '//rum-static.pingdom.net/prum.min.js';
		    s.parentNode.insertBefore(p, s);
		})();
	</script>

	<?php
	if(isset($img_file)) {
		echo '
			<meta property="og:title" content="'.$img->getObject("#TITLE#",$_GET['id']).' - '.$page->load('title').'" />
			<meta property="og:url" content="'.$img->getObject($rewrite->img("#ID#","#REWRITE-TITLE#"),$_GET['id']).'" />
			<meta property="og:image" content="'.$img->getObject("#SCREENSHOT#",$_GET['id']).'" />
			<meta property="og:site_name" content="'.$page->load('description').'" />
			<meta property="og:type" content="object" />';
	}
	?>

<!-- BEGIN Tynt Script -->
<script type="text/javascript">
if(document.location.protocol=='http:'){
 var Tynt=Tynt||[];Tynt.push('cOW_LMxaOr5j_Lacwqm_6l');
 (function(){var s=document.createElement('script');s.async="async";s.type="text/javascript";s.src='http://tcr.tynt.com/ti.js';var h=document.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})();
}
</script>
<!-- END Tynt Script -->
<!-- pinterest -->
<script type="text/javascript" async  data-pin-color="red" data-pin-height="28" data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>
<!--END pinterest -->
<!-- Start of Woopra Code -->
<script>
(function(){
        var t,i,e,n=window,o=document,a=arguments,s="script",r=["config","track","identify","visit","push","call","trackForm","trackClick"],c=function(){var t,i=this;for(i._e=[],t=0;r.length>t;t++)(function(t){i[t]=function(){return i._e.push([t].concat(Array.prototype.slice.call(arguments,0))),i}})(r[t])};for(n._w=n._w||{},t=0;a.length>t;t++)n._w[a[t]]=n[a[t]]=n[a[t]]||new c;i=o.createElement(s),i.async=1,i.src="//static.woopra.com/js/w.js",e=o.getElementsByTagName(s)[0],e.parentNode.insertBefore(i,e)
})("woopra");

woopra.config({
    domain: 'cartelescreativos.com'
});
woopra.track();
</script>
<!-- End of Woopra Code -->	
</head>
<body>
<!-- Google+ Recomendaciones para móviles -->
<script type="text/javascript" async>
  (function() {
    var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
    po.src = "https://apis.google.com/js/plusone.js?publisherid=105989906679659087113";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<!-- End Google+ Recomendaciones para móviles -->
<!-- Begin Fans Facebook Flota -->
<!-- <div><a  target="_blank" title="Síguenos en Facebook y comparte nuestros contenidos con tus amigos" href="https://www.facebook.com/Cartelescreativos"><img style="float: left; width:100px; height:35px; padding-top:27px; padding-left:2px;" src="/img/siguenos-facebook.png" alt="Síguenos en Facebook CartelesCreativos" /></a>
<div style="float: left; padding-top:15px; padding-left:1px;" class="fb-like" data-href="https://www.facebook.com/Cartelescreativos" data-width="50" data-layout="box_count" data-show-faces="false" data-send="false"></div></div> -->
<!-- End Fans Facebook Flota-->
	<?php echo $ads->load('<div style="position:fixed;left:10px;top:200px;">#AD[left]#</div>'); ?>
	<?php $user->userTemplateInfo(NULL,$inbox->notification($user->userInfo('id'))); ?>
  
  <!-- Begin Header -->
  <nav  class="navbar navbar-default">
  	<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo $page->load('logo'); ?>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a title="Ver Carteles Principales" href="<?php echo $rewrite->index; ?>">Inicio</a></li>
        <li><a title="Los Carteles que están Pendientes por la aprobación de los Administradores." href="<?php echo $rewrite->waiting; ?>">En Cola <span class="badge"><?php echo $img->count(1); ?></span></a></li>
        <li><a title="Te mostraremos uno de los Carteles más Vistos por nuestra Comunidad." href="<?php echo $rewrite->random; ?>">Aleatorio</a></li>
        <?php $user->userTemplateInfo('
		<li><a title="Personalizar la imagen con el título y descripción a tu gusto." href="'.$rewrite->add.'">Crear Cartel</a></li>',
				 

		'<li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Crear Cartel <span class="caret"></span></a>
          	<ul class="dropdown-menu" role="menu">
			<li><a title="Personalizar la imagen con el título y descripción a tu gusto." href="'.$rewrite->add.'">Crear Cartel Personalizado</a></li>
			<li><a title="Agregar un cartel ya creado de Desmotivaciones.es o CuantaRazon.com u otra página." href="'.$rewrite->add2.'">Añadir Cartel Existente</a></li>
		</ul>
        </li>');

		?>
      </ul>
      <!-- Begin Top Navigation -->
      <ul class="nav navbar-nav navbar-right">
      <!-- Begin Search -->
      	<form class="navbar-form navbar-left" role="search" action="<?php echo $rewrite->search; ?>" method="get">
	        <div class="form-group">
	          <input type="text" name="s" class="form-control" placeholder="Buscar Carteles...">
	        </div>
      	</form>
      	<!-- End Search -->
      	<?php $user->userTemplateInfo('
		<li><a href="'.$rewrite->login.'">Iniciar la Sesión</a></li>
		<li><a href="'.$rewrite->register.'">Registrarme</a></li>',
				 

		'<li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">#LOGIN# <span class="caret"></span></a>
          	<ul class="dropdown-menu" role="menu">
			<li><a href="'.$rewrite->profile.'">Perfil</a></li>
			<li><a href="'.$rewrite->inbox.'">Mensajes ('.$inbox->get_new_pms($user->userInfo('id')).')</a></li>
			<li><a href="'.$rewrite->favorites.'">Favoritos</a></li>
			<li class="divider"></li>
			<li><a href="'.$kernel->host().'/?logout=true">Salir</a></li>
		</ul>
        </li>');

		?>
      </ul>
      <!-- End Top Navigation -->
    </div>
  </div>
  </nav>
  <!-- End Header -->
  <!-- Begin Wrapper -->
<div id="container-fluid">
 <?php // include 'ads728.php'; ?>