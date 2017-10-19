<?php  
global $post; 
get_header(); 
?>
<div class="page-wrap">
	<div class="blog-posts grid-2-3">
		<?php if(have_posts()):while(have_posts()):the_post();?>
		   <article <?php echo post_class("module"); ?>  id="<?php the_ID(); ?>">
				<?php include 'breadcrumbs.php';?>
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Important Notes : <?php the_title(); ?></a></h1>

				<?php  if(get_field("show_navigation")=="Yes"):?>
					<?php include('note_simple_navi.php');?>
				<?php endif; ?>

				<?php echo get_field('videos');?>

				<?php
						if( function_exists( 'show_likes_dislikes' ) ) {
							echo show_likes_dislikes( get_the_ID() );
						}
					?>

			</article>
		<?php endwhile;endif;include(get_template_directory()."/functions/template_includes/sharebuttons.php");comments_template(); ?>  
	</div>
	<?php 
	get_sidebar();
	?>
</div>
<?php 
get_footer(); 
?>