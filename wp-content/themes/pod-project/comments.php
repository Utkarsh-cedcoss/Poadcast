<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pod_project
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<!-- <div id="comments" class="comments-area"> -->

<?php
	if(have_comments() ):
		// we have comments
?>
<div class="comment_area mb-50 clearfix">
	<h5 class="title"><?php echo get_comments_number()." Comments";?></h5>
		<ol>
			<?php 
			$args= array(
				'walker' => null,
				'max_depth' => '',
				//'style' => 'ul',
				'callback' => 'wpwa_comment_list',
				'end-callback' => null,
				'type' => 'all',
				'reply_text' => 'Reply',
				'page' => '',
				'per_page' => '',
				'avatar_size' => 32,
				'reverse_top_leve' => null,
				'reverse_children' => '',
				'format' => 'html5',
				'short_ping' => false,
				'echo' => true
			 ); ?>
			 
			<?php
			wp_list_comments($args);
			?>
			

		</ol>
		</div>


<?php 
	if(!comments_open() && get_comments_number()):
?>

<p class="no-comments"><?php esc_html_e('comments are closed.','sunsettheme');?></p>

<?php 
  endif;
?>

<?php 
  endif;
?>
	<?php

	$fields = array(
		//'author' => '<div><label for="author">'.__('Name','domainreference').'</label> <span class="required">*</span> <input id="author"  name="author" type="text" value="'.esc_attr($commenter['comment_author']).'" maxlength="245" required='required' /></div>'
		'author' => '<div class="col-lg-6"><input id="author" class="form-control mb-30" name="author" aria-required="true" placeholder="Name"></input></div>',
		'email' => '<div class="col-lg-6"><input id="email" class="form-control mb-30" name="email" placeholder="Email"></input></div>'
		//'author' => '<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required='required' /></p>'
	);
	
	$args=array(
		'class_submit'=>'btn poca-btn mt-30',
		'comment_field' => '<div class="col-lg-6"><textarea id="comment" class="form-control mb-30" name="comment" aria-required="true" placeholder="Comment"></textarea></div>',
		'fields' => apply_filters('comment_form_default_fields', $fields)
	);
	?>
	<div class="contact-form">
	<?php
	comment_form($args);?>
	</div>

<!-- </div> -->