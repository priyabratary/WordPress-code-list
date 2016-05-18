<?php
/*
The Page Loop
=============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>


<div class="row" id="post_<?php the_ID()?>" <?php post_class()?>>

                                  <?php the_content(); ?>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                


<?php endwhile; else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); ?>
<?php exit; ?>
<?php endif; ?>
