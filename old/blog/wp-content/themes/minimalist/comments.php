<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
<p>This page is password protected. Enter your password to continue!</p>
<?php return; endif; ?>

<?php if ( $comments ) : ?>


<div class="commentheader">Comments</div>

<?php foreach ($comments as $comment) : ?>

<div class="comment">
<div class="gravatarside"><?php if (function_exists('get_avatar')) { echo get_avatar($comment,$size='48'); } ?></div>
<div class="commenticon">
<?php comment_type('Comment','Trackback','Pingback'); ?> from <?php if ('' != get_comment_author_url()) { ?><a href="<?php comment_author_url(); ?>"><?php comment_author() ?></a><?php } else { comment_author(); } ?>
<?php edit_comment_link('[e]',' | '); ?> - <?php comment_date() ?> at <?php comment_time(); ?></div>

<div class="commenttext"><?php comment_text() ?></div>

<?php if ($comment->comment_approved == '0') : ?>
<p>Thank you for your comment! It has been added to the moderation queue and will be published here if approved by the webmaster.</p>
<?php endif; ?>
</div>



<?php endforeach; ?>
<?php endif; ?>

<?php if ($post->comment_status == "open") : ?>
<div id="respond">
<div class="navigation">Write a comment</div>
<?php if (get_option('comment_registration') && !$user_ID) : ?>
<p>You need to <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">login</a> to post comments!</p>
</div>

<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ($user_ID) : ?>
<p class="loggedin">You are logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out">Log out</a>.</p>

<?php else : ?>
<label for="author">Name:</label><br />
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" /><br/><br/>
<label for="email">E-mail:</label><br />
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" /><br/><br/>
<label for="url">URL:</label><br />
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" /><br/><br/>

<?php endif; ?>
<label for="comment">Message:</label><br />
<textarea name="comment" id="comment" cols="45" rows="4" tabindex="4"></textarea><br/><br/>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<input type="submit" name="submit" value="Submit!" class="button" tabindex="5" />
<?php do_action('comment_form', $post->ID); ?>
</form>
</div>

<?php endif; ?>
<?php endif; ?>

