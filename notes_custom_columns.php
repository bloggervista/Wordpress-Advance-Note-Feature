<?php
//Head
function SB_note_columns_head($defaults) {
    $defaults['featured_image'] = 'Featured Image';
    $defaults['prev_and_next_pager'] = 'Previous and Next Post';
    return $defaults;
}
//Content
function SB_note_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
       
        $post_featured_image = get_post_meta($post_ID, 'fifu_image_url', true);
        if ($post_featured_image) {
            echo '<img src="' . $post_featured_image . '" width=50 height=50/>';
        }
    }
};

add_filter('manage_class-11_posts_columns', 'SB_note_columns_head');
add_action('manage_class-11_posts_custom_column', 'SB_note_columns_content', 10, 2);
add_filter('manage_class-12_posts_columns', 'SB_note_columns_head');
add_action('manage_class-12_posts_custom_column', 'SB_note_columns_content', 10, 2);


add_action('quick_edit_custom_box',  function($column_name, $post_type) {
        wp_nonce_field("note_edit_action", 'note_edit_nounce' );
if ($column_name != 'prev_and_next_pager') return;
?>
<fieldset class="inline-edit-col-left">
    <div class="inline-edit-col">
        <span class="title">Next and Previous Post</span>
        <input type="hidden" name="previous_and_next_post_noncename" id="previous_and_next_post_noncename" value="" />
        <?php
            $next_and_previous_post_html_code = get_field("next_and_previous_post_html_code");
        ?>
        <textarea name="next_and_previous_post_html_code"><?php echo $next_and_previous_post_html_code;?></textarea>
            
    </div>
</fieldset>
<fieldset class="inline-edit-col-left">
            <label>
                <span class="title">Featured Image Url</span>
                <span class="input-text-wrap"><input type="text" name="feature_image" class="ptitle" value=""></span>
            </label>
</fieldset>
    <?php
}, 10, 2);


// Add to our admin_init function
add_action('save_post', function($post_id) {
    // verify if this is an auto save routine. If it is our form has not been submitted, so we dont want
    // to do anything
    if(!current_user_can( 'manage_options' )){
        return $post_id;
    }
    if ( ! isset( $_POST['note_edit_nounce'] ) || ! wp_verify_nonce( $_POST['note_edit_nounce'], 'note_edit_action')) {
        return;
       exit;
    }
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
        return $post_id;

    // Check permissions
    if ( 'class-11' == $_POST['post_type'] OR 'class-12' == $_POST['post_type'] ) {
        if ( !current_user_can( 'edit_page', $post_id ) )return $post_id;
    } else {
        if ( !current_user_can( 'edit_post', $post_id ) )
        return $post_id;
    }  
    $post = get_post($post_id);
   
    if (isset($_POST['next_and_previous_post_html_code']) && ($post->post_type != 'revision')) {
        $next_and_previous_post_html_code = esc_attr($_POST['next_and_previous_post_html_code']);
        if ($next_and_previous_post_html_code)
            update_post_meta( $post_id, 'next_and_previous_post_html_code', $next_and_previous_post_html_code); 
    }
    if (isset($_POST['feature_image']) && ($post->post_type != 'revision')) {
        $feature_image = esc_attr($_POST['feature_image']);
        if ($feature_image)
            update_post_meta( $post_id, 'fifu_image_url', $feature_image); 
    }
    return true;  
});
 

?>