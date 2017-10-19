<section class="notes-list-box">
	<div class="nn">
		<div class="heading"><?php echo wp_count_posts("class-11")->publish +  wp_count_posts("class-12")->publish;?> Notes</div>
		<div class="boxdescription">With our complete study notes, your homework is much easier.</div>
	</div>
	<div class="ttn">
		<div class="heading"><?php echo count(get_field( 'things_to_remember' ));?> Things To Know</div>
		<div class="boxdescription">Things to know provides additional information on every topic which enhance the knowledge of  the students.</div>
	</div>
	<div class="vdos">
		<div class="heading"><?php echo count(get_field( 'videos' ));?> Videos</div>
		<div class="boxdescription">Reference videos on each topic provides experimental ideas and develops interactive learning technique.</div>
	</div>
	<div class="sqaa">
		<div class="heading">100's Solved Question and Answer</div>
		<div class="boxdescription">With 100's of solved questions solved, now you can easily prepare your exam for free.</div>
	</div>
</section>