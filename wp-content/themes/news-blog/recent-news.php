<?php 
$argsLeftCol = array(
"post_type" => "posttype",
'posts_per_page' => 1, 
	'paged' => $current_page, 
	);
$argsRightCol = array(
"post_type" => "posttype",
'posts_per_page' => 3, 
	'paged' => $current_page, 
	);
  
?>
    
<div class="news-line recent-news">
            <div class="news-line__title">Recent news</div>
            <div class="news-line__content recent-news__content">
              <div class="recent-news__content_left">
              <?php
                $query = new WP_Query($argsLeftCol);
                if($query->have_posts()) : while($query->have_posts()):$query->the_post();
                $date = get_post_time('d-m-Y');
              ?>  
                <div class="card card-slider">
                      <div class="card-slider__img"><a href="<?= the_permalink();?>"><?php the_field("image");?></a></div>
                
                  <div class="card__category card-slider__category">
                  <?php the_category();?>
                  </div>
                  <div class="card__content card-slider__content">
                    <div class="card__title card-slider__title">
                    <?php the_title();?> 
                    </div>
                    <div class="card__publish card-slider__publish">
                    Опубликовано <?php the_time($date);?>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endwhile; endif;
                wp_reset_postdata();
              ?>


              <div class="recent-news__content_right">
                <?php
                $query = new WP_Query($argsRightCol);
                if($query->have_posts()) : while($query->have_posts()):$query->the_post();
                $date = get_post_time('d-m-Y');
              ?>  
             
                <div class="card card_sm">
                  <div class="card__media">
                    <div class="card__img">
                    <a class="card__link" href="<?= the_permalink();?>"><?php the_field("image");?></a>
                    <div class="card__category"><?php the_category();?></div>
                    </div>
                  </div>
                  <div class="card__content">
                    <div class="card__title">
                    <a href="<?= the_permalink();?>"><?php the_title();?></a>
                  </div>
                    <div class="card__publish">Опубликовано <?php the_time($date) ;?></div>
                  </div>
                </div>
                <?php
                endwhile; endif;
                wp_reset_postdata();
              ?>
              </div>
            </div>
          </div>