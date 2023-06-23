<?php
get_header();?>
<?php get_template_part("start_main");?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="post">
            <h2 class="post__title"><?php the_title();?></h2>
            <div class="post__media"><?php the_field("image");?></div>
            <article class="post__content">
                <?php the_field('content');?>
            </article>
            <br>
            <div class="post__link">новини взято з <?php the_field("link");?></div>
          </div>

<?php endwhile; endif;?>

<?php get_template_part("end_main");?>
<?php get_footer();?>
