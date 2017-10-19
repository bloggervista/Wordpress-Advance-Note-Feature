<?php if(get_field("disable_breadcrumb")=="No" Or null==get_field("disable_breadcrumb")) {?>
   <div class="breadcrumbs">
        <?php global $wp_query;
        $class=ucwords(str_replace("-", " ", $wp_query->query_vars['post_type']));
        $post_type=explode("/",$wp_query->query_vars[$wp_query->query_vars['post_type']]);
        $reverse_post_type=array_reverse($post_type);
        $permalink=get_permalink();
        $link=explode('/',str_replace('http://', '', get_permalink()));

        $first_link="http://".$link[0].'/'.$link["1"];
        $secondlink=$first_link."/".$link["2"];

        $firsttext=ucwords(str_replace("-", " ", $wp_query->query_vars['post_type']));
        $secondtext=ucwords($post_type['0']);
        $thirdtext=get_the_title();

echo <<<EOF
		<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		  <a href="http://letslearnnepal.com/notes/" itemprop="url">
		    <span itemprop="title">Notes</span>
		  </a> ›
		</span>
		<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		  <a href="{$first_link}" itemprop="url">
		    <span itemprop="title">{$firsttext}</span>
		  </a> ›
		</span>
		<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		  <a href="{$secondlink}" itemprop="url">
		    <span itemprop="title">{$secondtext}</span>
		  </a> ›
		</span>
		<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		  <a href="{$permalink}" itemprop="url">
		    <span itemprop="title">{$thirdtext}</span>
		  </a>
		</span>
EOF;
        ?>
    </div>
<?php }?>