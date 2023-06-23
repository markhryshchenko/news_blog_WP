<?php $attachment_id = attachment_url_to_postid('http://news/wp-content/uploads/2023/05/logo.png'); // helper
$srcImgGoogle = wp_get_attachment_image_src(7);
$srcImgApple = wp_get_attachment_image_src(6);
$srcImgLogo = wp_get_attachment_image_src(81); ?>
<footer class="footer">
  <div class="footer__top">
    <div class="column column_left">
      <div class="column__logo">
        <a href="<?php bloginfo("url"); ?>"><img src="<?= $srcImgLogo[0]; ?>" alt="logo" /></a>
      </div>
      <h3 class="column__title">Кременчук дайджест</h3>
      <p class="column__subtitle">
        Україна, Полтавська обл.,<br />
        м.Кременчук
      </p>
    </div>
     <div class="column">
      <h3 class="column__title">Категорії</h3>
      <ul class="column__list">
      <?php wp_list_categories('title_li='); ?>
      </ul>
     
    </div>
    <div class="column column-menu">
      <h3 class="column__title">Перейти</h3>
     
            <?php
              $defaults = array(
                "container" => "ul",
                "container_class"=>"column__list"
              );
              wp_nav_menu( $defaults );
            ?>
           
         
      <!-- <ul class="column__list">
        <li>Головна</li>
        <li>Останні</li>
        <li>Кременчук</li>
        <li>Категорії</li>
      </ul> -->
    </div>
    <div class="column column_right">
      <h3 class="column__title">Підпишись</h3>
      <form class="column-form">
        <input class="column-form__input" type="email" />
        <input class="column-form__submit" type="submit" value="Subscribe" />
      </form>
      <h3 class="column__title">Також на:</h3>
      <div class="links-box">

        <a href="<?php bloginfo("url"); ?>"><img src="<?= $srcImgGoogle[0]; ?>" alt="link" /></a>
        <a href="<?php bloginfo("url"); ?>"><img src="<?= $srcImgApple[0]; ?>" alt="link" /></a>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div>Copyright © <a class="footer__link" href="https://github.com/markhryshchenko">Github</a> </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>