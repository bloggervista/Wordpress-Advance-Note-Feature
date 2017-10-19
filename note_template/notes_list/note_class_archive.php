<?php 
if(!empty($wp_query->query_vars["post_type"]) AND ($wp_query->query_vars["post_type"]=="class-11" OR $wp_query->query_vars["post_type"]=="class-12")){
	if($wp_query->query_vars["post_type"]=="class-11"){
		$items=[
		"Class 11"=>["Science"=>["Physics","Chemistry","Biology","Mathematics","English","Computer"],"Management"=>["Business Math","Accountancy","Economics"],"Humanities"=>["Major English","Arts"]],
		];
	}
	if($wp_query->query_vars["post_type"]=="class-12"){
		$items=[
		"Class 12"=>["Science"=>["Physics","Chemistry","Biology","Mathematics","English","Nepali"],"Management"=>["Business Math","Accountancy","Economics"],"Humanities"=>["Major English","Arts"]],
		];
	}
}else{
	$items=[
	"Class 11"=>["Science"=>["Physics","Chemistry","Biology","Mathematics","English","Computer"],"Management"=>["Business Math","Accountancy","Economics"],"Humanities"=>["Major English","Arts"]],
	"Class 12"=>["Science"=>["Physics","Chemistry","Biology","Mathematics","English","Nepali"],"Management"=>["Business Math","Accountancy","Economics"],"Humanities"=>["Major English","Arts"]],
	];
}
get_header();?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/data/css/notes-lists.css">
<div class="page-wrap">

		<section class="blog-posts grid-2-3">
			<section class="module module-home-posts-lists">
				<ul class="list_topics">
					<?php foreach($items as $class=>$streams):?>
						<li class="attractive_item"><?php echo($class);?>
							<ul class="chapter_lists">
								<?php foreach($streams as $stream=>$subjects):?>
									<li class="chapter"><?php echo $stream;?>
										<ul class="topic_list">
											<?php foreach($subjects as $key=>$subject):?>
											<li class="topic"><a href="/<?php echo strtolower(str_replace(' ','-', $class));?>/<?php echo strtolower(str_replace(' ','-', $subject))?>"><?php echo $subject;?></a></li>
											<?php endforeach;?>
										</ul>
									</li>
								<?php endforeach;?>
							</ul>
						
						</li>
					<?php endforeach;?>
				</ul>
			</section>
			<?php include(ADVANCED_NOTES_DIR . 'note_template/notes_list_attractive_box.php');?>
		</section>
		<?php get_sidebar();?>
</div>
<?php get_footer(); ?>