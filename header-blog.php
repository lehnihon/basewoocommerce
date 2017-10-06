<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Data Certa Logistica Icone.png"; ?>" />
<?php wp_head(); ?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76592607-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<div id="page">
  <section id="header">
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-2 box clearfix">
            <span class="cor-amarelo">Operação: </span>
            <span class="texto-branco">11 <strong>2061-3138</strong></span>
          </div>
          <div class="col-md-4 box clearfix">
            <span class="cor-amarelo">Comercial: </span>
            <span class="texto-branco">11 <strong>96321-7360</strong></span>
          </div>
          <div class="col-md-3 col-md-offset-3 box clearfix">
            <span class="cor-amarelo">Redes sociais </span> 
            <ul class="redes_sociais_header">
                    <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCb42k7qXDCeQSI7LvPDc8ZA"></a></li>
                    <li class="instagram"><a target="_blank" href="https://www.instagram.com/datacerta"></a></li>
                    <li class="twitter"><a target="_blank" href="https://twitter.com/datacertalog"></a></li>
                    <li class="facebook"><a target="_blank" href="https://www.facebook.com/datacertalogistica"></a></li>
                    <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company-beta/10804304"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-md-3 text-left">
            <a href="<?php echo home_url( '/' )."blog-logistica"; ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>" /></a>
          </div>
          <div class="col-md-7 col-md-offset-2">
            <div class="menu-responsivo">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo home_url( '/' )."categoria/noticias"; ?>">NOTÍCIAS</a></li
                ><li><a href="<?php echo home_url( '/' )."categoria/logistica"; ?>">LOGÍSTICA</a></li
                ><li><a target="_blank" href="<?php echo home_url( '/' )."contato"; ?>">CONTATO</a></li>
              </ul>
              <div class="wrap-search"><?php get_search_form(); ?></div>               
            </div>            
            <div class="menu-header-blog clearfix">
              <div class="menu-op wrap-search"><?php get_search_form(); ?></div>             
              <div class="menu-op"><a target="_blank" href="<?php echo home_url( '/' )."contato"; ?>">CONTATO</a></div>
              <div class="menu-op"><a href="<?php echo home_url( '/' )."categoria/logistica"; ?>">LOGÍSTICA</a></div>
              <div class="menu-op"><a href="<?php echo home_url( '/' )."categoria/noticias"; ?>">NOTÍCIAS</a></div>
            </div>
          </div>          
        </div>
      </div>
    </nav>
  </section>
