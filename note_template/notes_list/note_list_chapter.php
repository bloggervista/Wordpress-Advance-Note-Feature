<?php 
$class=$wp_query->query_vars['class'];
$subject=lcfirst(esc_attr(htmlspecialchars($wp_query->query_vars['subject'])));

if ( $post = get_page_by_path( $subject, OBJECT, $class ) )
    $subject_id = $post->ID;
else
    $subject_id = 0;

function show_chapter($pid){
	global $class;
$args = new WP_Query( array ('post_type'=> $class,'post_parent' =>$pid,'order'   => 'ASC','orderby'=>'menu_order'));
if( $args->have_posts() ) {
	echo "<ul class='chapter_lists' >";
    while ($args->have_posts()) : $args->the_post(); ?>
        <li class="chapter"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </li>
<?php
endwhile;echo "</ul>";}
wp_reset_query();
}


get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/data/css/notes-lists.css">
<div class="page-wrap">
	<section class="grid-2-3">
		<section class="module module-notes module-home-posts-lists">
			<div class="notes-lists-heading h3"><?php echo ucwords($subject);?> : <?php echo ucwords(str_replace("-", " ",$class ));?></div>

			<ul class="list_topics">
				<?php
					$query = new WP_Query(['post_type'=>$class,'orderby' => 'title','order'=> 'ASC','orderby'=>'menu_order','post_parent' =>$subject_id]);
					if( $query->have_posts() AND $subject_id!=0) {
					    while ($query->have_posts()) : $query->the_post();?>
					    	<li class="attractive_item">
								<span class="chapter_title boldandlarger"><?php the_title(); ?></span></span>
									<?php show_chapter(get_the_ID());?>
					    	</li> 
				<?php
				endwhile;
				}else{echo "<p>Notes UPLOADING SOON</p>";}
				wp_reset_query();
				?>
			</ul>
		</section>
	</section>
	<?php get_sidebar();?>
</div>

	
<script>
	(function($){
		var topic_lists=$(".topic_list").hide();
		topic_lists.parent(".chapter").on("click",function(){
			console.log($(this));
			$(this).children(".topic_list").fadeToggle("fast");
		});
	})(jQuery);
</script>
<?php get_footer();?>