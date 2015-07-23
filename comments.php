<?php

/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0
 *
 * This file is here for Backwards compatibility with old themes and will be removed in a future version
 *
 */

_deprecated_file( sprintf( __( 'Theme without %1$s' ), basename(__FILE__) ), '3.0', null, sprintf( __('Please include a %1$s template in your theme.'), basename(__FILE__) ) );



// Do not delete these lines

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))

		die ('Please do not load this page directly. Thanks!');



	if ( post_password_required() ) { ?>

		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.'); ?></p>
		<div class="divider-mini"></div>
	<?php

		return;

	}

?>



<!-- You can start editing here. -->



<?php if ( have_comments() ) : ?>
	<div class="icon-bubble ico-cm-comment"></div>
	<h3 id="comments">  <?php	printf( _n( 'یک پاسخ برای %2$s', '%1$s دیدگاه برای %2$s', get_comments_number() ),

									number_format_i18n( get_comments_number() ), '&#8220;' . get_the_title() . '&#8221;' ); ?></h3>
<div class="divider-mini mgb-80"></div>


	<div class="navigation">

		<div class="alignleft"><?php previous_comments_link() ?></div>

		<div class="alignright"><?php next_comments_link() ?></div>

	</div>



	<ol class="commentlist">

	<?php wp_list_comments();?>

	</ol>



	<div class="navigation">

		<div class="alignleft"><?php previous_comments_link() ?></div>

		<div class="alignright"><?php next_comments_link() ?></div>

	</div>

 <?php else : // this is displayed if there are no comments so far ?>



	<?php if ( comments_open() ) : ?>

		<!-- If comments are open, but there are no comments. -->



	 <?php else : // comments are closed ?>

		<!-- If comments are closed. -->

		<p class="nocomments"><?php _e('نظرات بسته است.'); ?></p>
		<div class="divider-mini"></div>


	<?php endif; ?>

<?php endif; ?>



<?php if ( comments_open() ) : ?>



<div id="respond">



<h3> <?php comment_form_title( __('شما هم نظر خود را بیان کنید'), __('پاسخ دادن به %s' ) ); ?></h3>
<div class="divider-mini"></div>


<div id="cancel-comment-reply">

	<small><?php cancel_comment_reply_link() ?></small>

</div>



<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>

<p><?php printf(__('برای ارسال نظر باید <a href="%s">عضو سایت</a> باشید.'), wp_login_url( get_permalink() )); ?></p>

<?php else : ?>

<form action="<?php echo site_url(); ?>/wp-comments-post.php" method="post" id="commentform">



<?php if ( is_user_logged_in() ) : ?>



<p class="user-signin-cm"><?php printf(__('وارد شده با <a href="%1$s">%2$s</a>.'), get_edit_user_link(), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php esc_attr_e('خروج'); ?>"><?php _e('خروج &raquo;'); ?></a></p>



<?php else : ?>

<div class="row">
<div class="col-md-6 pl-15">

<p><label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label><br><input type="text" name="author" placeholder="نام شما" id="author" value="<?php echo esc_attr($comment_author); ?>" class="cmd-txt" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />

</p>



<p><label for="email"><small><?php _e('Mail (will not be published)'); ?> <?php if ($req) _e('(required)'); ?></small></label><br><input type="text" placeholder="mail@example.com" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" class="cmd-txt" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />

</p>


<p><label for="url"><small><?php _e('Website'); ?></small></label><br><input type="text" class="cmd-txt" placeholder="www.example.com" name="url" id="url" value="<?php echo  esc_attr($comment_author_url); ?>" size="22" tabindex="3" />

</p>

</div>


<?php endif; ?>


<div class="col-md-6">
<!--<p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>'), allowed_tags()); ?></small></p>-->


<p><label for="comment"><small>متن نظر</small></label><textarea class="cmd-txt" name="comment" id="comment" rows="5" tabindex="9"></textarea></p>



<p><input name="submit" class="btn btn-send block mgt-18" placeholder="متن خود را وارد کنید" type="submit" id="submit" tabindex="5" value="<?php esc_attr_e('Submit Comment'); ?>" />

<?php comment_id_fields(); ?>
</p>

<?php do_action('comment_form', $post->ID); ?>



</form>

<?php endif; // If registration required and not logged in ?>

</div>
</div>
</div>



<?php endif; // if you delete this the sky will fall on your head ?>

