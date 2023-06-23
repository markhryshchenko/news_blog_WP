<?php 
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$paramsCat1 = array(
	'posts_per_page' => 3, // количество постов на странице
	'post_type'       => 'posttype', // тип постов
	
	'category_name' => 'mizhnarodni'
);
$paramsCat2 = array(
	'posts_per_page' => 3, // количество постов на странице
	'post_type'       => 'posttype', // тип постов
	'paged'           => $current_page, // текущая страница
	'category_name' => 'ukraїna'
);
$paramsCat3 = array(
	'posts_per_page' => 3, // количество постов на странице
	'post_type'       => 'posttype', // тип постов
	'paged'           => $current_page, // текущая страница
	'category_name' => 'kremenchuk'
);
$paramsCat4 = array(
	'posts_per_page' => 3, // количество постов на странице
	'post_type'       => 'posttype', // тип постов
	'paged'           => $current_page, // текущая страница
	'category_name' => 'inshe'
);
$paramsAllCat = array(
	'posts_per_page' => 14, // количество постов на странице
	'post_type'       => 'posttype', // тип постов
	'paged'           => $current_page, // текущая страница
	
);
?>


<div class="news-line category-news">
<div class="news-line__content category-news__content">
    <div class="category-news__content_left-col">
      <!-- ------======категорія міжнародні====------ -->
      <div class="category-box">
                      <div class="trending-box__title">
                        <div class="news-line__title">Міжнародні</div>
                        <a href="" class="news-line__link">дивитись більше</a>
                      </div>
                      <div class="category-box__list">              

                  <?php
                      $query = new WP_Query($paramsCat1);
                      if($query->have_posts()) : while($query->have_posts()):$query->the_post();
                      $date = get_post_time('d-m-Y');
                    ?>  
                        <div class="card card_sm">
                          <div class="card__media">
                            <div class="card__img">
                              <a class="card-lg__link card__img_category" href="<?= the_permalink();?>">
                              <?php the_field("image");?>
                                </a>
                            </div>
                          </div>
                          <div class="card__content">
                            <div class="card__title">
                            <a href="<?= the_permalink();?>"><?php the_title();?>  </a>
                            </div>
                          </div>
                        </div>
                  <?php
                    endwhile; endif;
                    wp_reset_postdata();
                  ?>
                      </div>
                      
      </div>
      <!-- ------======категорія Україна====-------->
      <div class="category-box">
                      <div class="trending-box__title">
                        <div class="news-line__title">Україна</div>
                        <a href="" class="news-line__link">дивитись більше</a>
                      </div>
                      <div class="category-box__list">              

                  <?php
                      $query = new WP_Query($paramsCat2);
                      if($query->have_posts()) : while($query->have_posts()):$query->the_post();
                      $date = get_post_time('d-m-Y');
                    ?>  
                        <div class="card card_sm">
                          <div class="card__media">
                            <div class="card__img">
                              <a class="card-lg__link card__img_category" href="<?= the_permalink();?>">
                              <?php the_field("image");?>
                                </a>
                            </div>
                          </div>
                          <div class="card__content">
                            <div class="card__title">
                            <a href="<?= the_permalink();?>"><?php the_title();?>  </a>
                            </div>
                          </div>
                        </div>
                  <?php
                    endwhile; endif;
                    wp_reset_postdata();
                  ?>
                      </div>
                      
      </div>  
      <!-- ------======категорія Кременчук====-------->
      <div class="category-box">
                      <div class="trending-box__title">
                        <div class="news-line__title">Кременчук</div>
                        <a href="" class="news-line__link">дивитись більше</a>
                      </div>
                      <div class="category-box__list">              

                  <?php
                      $query = new WP_Query($paramsCat3);
                      if($query->have_posts()) : while($query->have_posts()):$query->the_post();
                      $date = get_post_time('d-m-Y');
                    ?>  
                        <div class="card card_sm">
                          <div class="card__media">
                            <div class="card__img">
                              <a class="card-lg__link card__img_category" href="<?= the_permalink();?>">
                              <?php the_field("image");?>
                                </a>
                            </div>
                          </div>
                          <div class="card__content">
                            <div class="card__title">
                            <a href="<?= the_permalink();?>"><?php the_title();?>  </a>
                            </div>
                          </div>
                        </div>
                  <?php
                    endwhile; endif;
                    wp_reset_postdata();
                  ?>
                      </div>
                      
      </div>
      <!-- ------======категорія Інше====-------->
      <div class="category-box">
                      <div class="trending-box__title">
                        <div class="news-line__title">Інше</div>
                        <a href="" class="news-line__link">дивитись більше</a>
                      </div>
                      <div class="category-box__list">              

                  <?php
                      $query = new WP_Query($paramsCat4);
                      if($query->have_posts()) : while($query->have_posts()):$query->the_post();
                      $date = get_post_time('d-m-Y');
                    ?>  
                        <div class="card card_sm">
                          <div class="card__media">
                            <div class="card__img">
                              <a class="card-lg__link card__img_category" href="<?= the_permalink();?>">
                              <?php the_field("image");?>
                                </a>
                            </div>
                          </div>
                          <div class="card__content">
                            <div class="card__title">
                            <a href="<?= the_permalink();?>"><?php the_title();?>  </a>
                            </div>
                          </div>
                        </div>
                  <?php
                    endwhile; endif;
                    wp_reset_postdata();
                  ?>
                      </div>
                      
      </div>


                  
    </div>
    <!-- ----====right column===--- -->
    <aside class="category-news__content_right-col">
                <div class="trending-box">
                  <div class="trending-box__title">
                    <div class="news-line__title">У трендах</div>
                    <a href="" class="news-line__link">дивитись більше</a>
                  </div>
                  <ul class="trending-box__list">
                    <!-- max li in list = 13 item -->
                    <?php
                      $query = new WP_Query($paramsAllCat);
                      if($query->have_posts()) : while($query->have_posts()):$query->the_post();
                      $date = get_post_time('d-m-Y');
                    ?>  
                       <a href="<?= the_permalink();?>">
                      <li><?php the_title();?></li> 
                    </a >
                  <?php
                    endwhile; endif;
                    wp_reset_postdata();
                  ?>
                  </ul>
                </div>
              </aside>
    <!-- ----====end right column===--- -->


</div>         
</div>                   


