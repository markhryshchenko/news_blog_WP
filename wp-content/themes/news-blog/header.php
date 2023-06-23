<?php  $attachment_id = attachment_url_to_postid('http://news/wp-content/uploads/2023/05/logo.png'); // helper
$srcImgLogo = wp_get_attachment_image_src(81); ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo( "name" );?></title>
    <meta charset="<?php bloginfo( "charset" );?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link type="image/x-icon" href="favicon.png" rel="shortcut icon" />
    
    <?php wp_head();?>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <div class="header__top">
          <div class="header__logo">
            <a href="<?php bloginfo( "url");?>"><img src="<?=$srcImgLogo[0]?>" alt="logo" /></a>
          </div>
          <h1 class="header__title">Кременчук дайджест</h1>
        </div>
        <div class="header__bottom">
          <div class="burger">
            <span></span>
          </div>
          <h1 class="header__title_bottom">
          <a href="<?php bloginfo( "url");?>"><img src="<?=$srcImgLogo[0]?>" alt="logo" /></a> Кременчук
            дайджест
          </h1>

          <nav class="nav">
            <?php
              $defaults = array(
                "container" => "ul",
                "container_class"=>"menu"
              );
              wp_nav_menu( $defaults );
            ?>
           
          </nav>
        </div>
      </header>