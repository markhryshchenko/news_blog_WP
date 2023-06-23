<?php 
/*
 * Template name: пости категорії "Кременчук"
 */

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array(
	'posts_per_page' => 12, // количество постов на странице
	'post_type'       => 'posttype', // тип постов
	'paged'           => $current_page, // текущая страница
	'category_name' => 'kremenchuk'
);
query_posts($params);?>
 

  <?php get_header();?>
<?php get_template_part("start_main");?>

<div class="news-line more-news">
  <div class="news-line__title">Головні новини Кременчука</div>
  <div class="news-line__content more-news__content">
<?php while(have_posts()): the_post();
 $date = get_post_time('d-m-Y');?>


<div class="card card-lg">
    <div class="card-lg__media">
      <div class="card-lg__img">
            <a class="card-lg__link" href="<?= the_permalink();?>">
            <?php the_field("image");?>
             </a>
                  <div class="card-lg__category"><?php the_category();?></div>
      </div>
    </div>
                <div class="card-lg__content">
                  <div class="card__title card-lg__title">
                  <a href="<?= the_permalink();?>"><?php the_title();?>  </a>
                  </div>
                  <div class="card__publish">Опубликовано <?php the_time($date) ;?></div>
                  
                </div>
</div>
<?php
 endwhile;
 ?>
 </div>
 </div> 
 <div class="pagination-box"><?php wp_pagenavi();?></div>
 </div>

 
  <?php get_template_part("end_main");?>
 <?php get_footer();?>
 