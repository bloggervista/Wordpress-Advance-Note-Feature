<?php
add_filter( 'template_include', function ( $template  ) {
    $post_types = array( 'class-11', 'class-12',);
    if ( is_post_type_archive ( $post_types ) ) {
    	return ADVANCED_NOTES_DIR . 'note_template/notes_list/note_class_archive.php';
    }
    return $template ;
}) ;
add_filter( 'single_template', function( $template ) {
  $cpt = [ 'class-11', 'class-12'];
  return in_array( get_queried_object()->post_type, $cpt, true )? ADVANCED_NOTES_DIR . 'note_template/note-single.php': $template;
} );
add_filter('query_vars', function ($vars) {
    $vars[] = 'note_action';

    $vars[]='class';
    $vars[]='class-11';
    $vars[]='class-12';
    $vars[]='subject';
    $vars[]='show_note_class_and_subject';
    
    return $vars;
});

add_action('generate_rewrite_rules', function ($wp_rewrite) {
    global $wp_rewrite;
    $new_rules = array(
        '^(class-[12]{2})/([^/]+)/?$'=>'index.php?class='.$wp_rewrite->preg_index(1).'&subject='. $wp_rewrite->preg_index(2),
        '^notes/?$'=>'index.php?show_note_class_and_subject=true',
        '^(class-[12]{2})/([^/]+)/?$'=>'index.php?class='.$wp_rewrite->preg_index(1).'&subject='. $wp_rewrite->preg_index(2),

        '^class-11/(.+?/([^/]+))/things-to-know/?$'=>'index.php?post_type=class-11&class-11='.$wp_rewrite->preg_index(1).'&name='.$wp_rewrite->preg_index(2).'&note_action=things_to_know',
        '^class-11/(.+?/([^/]+))/videos/?$'=>'index.php?post_type=class-11&class-11='.$wp_rewrite->preg_index(1).'&name='.$wp_rewrite->preg_index(2).'&note_action=videos',

        '^class-12/(.+?/([^/]+))/things-to-know/?$'=>'index.php?post_type=class-11&class-11='.$wp_rewrite->preg_index(1).'&name='.$wp_rewrite->preg_index(2).'&note_action=things_to_know',
        '^class-12/(.+?/([^/]+))/videos/?$'=>'index.php?post_type=class-11&class-11='.$wp_rewrite->preg_index(1).'&name='.$wp_rewrite->preg_index(2).'&note_action=videos',
       
    );
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
});

add_action("template_redirect", function () {
    global $wp;
    global $wp_query, $wp_rewrite;
    if(!empty($wp_query->query_vars['show_note_class_and_subject'])){
    	require (ADVANCED_NOTES_DIR . 'note_template/notes_list/note_archive.php');
        die();
    }
    if((!empty($wp_query->query_vars['class-11']) OR !empty($wp_query->query_vars['class-12']))AND !empty($wp_query->query_vars['post_type']) AND !empty($wp_query->query_vars['name']) AND !empty($wp_query->query_vars['note_action'])){
            $redirect_page = $wp_query->query_vars['note_action'];
            if ($redirect_page == "videos") {
                require (ADVANCED_NOTES_DIR . 'note_template/videos.php');
                die();
            }
            if ($redirect_page == "things_to_know") {
                require (ADVANCED_NOTES_DIR . 'note_template/things_to_know.php');
                die();
            }
    }
    if(!empty($wp_query->query_vars['class']) AND !empty($wp_query->query_vars['subject'])){
        if($wp_query->query_vars['subject']=="nepali"){
            require (ADVANCED_NOTES_DIR . 'note_template/notes_list/note_list_chapter.php');
            die();
        }
        require (ADVANCED_NOTES_DIR . 'note_template/notes_list/notes_list_all.php');
        die();
    }
});

?>