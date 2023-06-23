<?php 
/*
 * Template name: всі категорії
 */
?>
<?php get_header();?>
<?php get_template_part("start_main");?>
<ul>
<?php wp_list_categories('title_li='); ?>
</ul>

<?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php $categories = get_categories([]);?>
 
<!-- --------======== -->
<div class="categories">
</div> <!-- ---===end categories===--- -->
<?php get_template_part("end_main");?>
 <?php get_footer();?>
 