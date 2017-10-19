<?php  
global $post; 
get_header(); 
?>
<?php if(get_field('enable_mathjax')=="Yes"){?>
    <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
        "HTML-CSS": { linebreaks: { automatic: true } },
             SVG: { linebreaks: { automatic: true } },
      TeX: {extensions: ["AMSmath.js","AMSsymbols.js","mhchem.js","noErrors.js","noUndefined.js"]},
      tex2jax: {
          inlineMath: [ ['$','$'], ["\\(","\\)"] ],
          displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
          processEscapes: true
        },
    });
    </script>
    <script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
<?php } ?>

<div class="page-wrap">
    <div class="blog-posts grid-2-3">
        <?php if(have_posts()):while(have_posts()):the_post();?>
            <article <?php echo post_class("module module-notes"); ?>  id="<?php the_ID(); ?>">
                <?php include 'breadcrumbs.php';?>
               
                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <?php include('note_simple_navi.php');?>
                <?php the_content(); ?>
                <div style="clear:both"></div>
                
                

                <?php numbered_in_page_links(); ?>
                
                <?php include("prev_and_next_post.php");?>

                <?php
                        if( function_exists( 'show_likes_dislikes' ) ) {
                            echo show_likes_dislikes( get_the_ID() );
                        }
                    ?>
            </article>
            <?php if(function_exists('related_entries')){related_entries(array(), $post->ID);} ?>
           
            <?php endwhile;endif;include(get_template_directory()."/functions/template_includes/sharebuttons.php");comments_template(); ?>  
    </div>
    <?php 
    get_sidebar();
    ?>
</div>
<?php 
get_footer(); 
?>