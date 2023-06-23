<?php 

$args = array("post_type" => "posttype");
$query = new WP_Query($args);

?>


<div class="news-line more-news">
  <div class="news-line__title">Більше Новин</div>
  <div class="news-line__content more-news__content">
  <?php
    if($query->have_posts()) : while($query->have_posts()):$query->the_post();
    $id = get_post_thumbnail_id();
    $img_url = wp_get_attachment_image_src( $id, "thumbnail-size", true );
    $date = get_post_time('d-m-Y');

  ?>  
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
                endwhile; endif;
                wp_reset_postdata();
              ?>
    
              <div class="card card-read-more">
                  <a href="" class="card-read-more__link"
                  >Read More news <br /><svg
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M18 9C18 11.3869 17.0518 13.6761 15.364 15.364C13.6761 17.0518 11.3869 18 9 18C6.61305 18 4.32387 17.0518 2.63604 15.364C0.948212 13.6761 0 11.3869 0 9C0 6.61305 0.948212 4.32387 2.63604 2.63604C4.32387 0.948212 6.61305 0 9 0C11.3869 0 13.6761 0.948212 15.364 2.63604C17.0518 4.32387 18 6.61305 18 9ZM9.5625 5.0625C9.5625 4.91332 9.50324 4.77024 9.39775 4.66475C9.29226 4.55926 9.14918 4.5 9 4.5C8.85082 4.5 8.70774 4.55926 8.60225 4.66475C8.49676 4.77024 8.4375 4.91332 8.4375 5.0625V11.5796L6.02325 9.16425C5.91763 9.05863 5.77437 8.99929 5.625 8.99929C5.47563 8.99929 5.33237 9.05863 5.22675 9.16425C5.12113 9.26987 5.06179 9.41313 5.06179 9.5625C5.06179 9.71187 5.12113 9.85513 5.22675 9.96075L8.60175 13.3358C8.654 13.3881 8.71607 13.4297 8.78441 13.4581C8.85275 13.4864 8.92601 13.501 9 13.501C9.07399 13.501 9.14725 13.4864 9.21559 13.4581C9.28393 13.4297 9.346 13.3881 9.39825 13.3358L12.7733 9.96075C12.8789 9.85513 12.9382 9.71187 12.9382 9.5625C12.9382 9.41313 12.8789 9.26987 12.7733 9.16425C12.6676 9.05863 12.5244 8.99929 12.375 8.99929C12.2256 8.99929 12.0824 9.05863 11.9767 9.16425L9.5625 11.5796V5.0625Z"
                      fill="black"
                    /></svg
                ></a>
              </div>
            
</div>

