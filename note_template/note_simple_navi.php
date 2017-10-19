<?php if(get_field("show_navigation")=="Yes"):?>
    <div class="our_small_navigation">
    <li><a href="<?php echo the_permalink();?>">Notes</a></li><li><a href="<?php echo the_permalink();?>things-to-know">Things To Know</a></li><li><a href="<?php echo the_permalink();?>videos">Videos</a></li>
    </div>
<?php endif; ?>