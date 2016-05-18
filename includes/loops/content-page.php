<?php
/*
The Page Loop
=============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>


<div class="row" id="post_<?php the_ID()?>" <?php post_class()?>>

                                    <div class="col-xs-12">
                                    <?php the_post_thumbnail('full', array( 'class' => 'img-responsive services-img' )); ?>
                                    
                                    </div>
                                    <div class="col-xs-12 col-sm-12 p-t-60">
                                    	<h1 class="m-b-20"><?php the_title()?></h1>
                            <?php the_content()?>
     					   <?php wp_link_pages(); ?>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-lg-12">
                                    	<div class="line-devider m-t-60 m-b-60"></div>
                                    </div>
                                </div>


<?php endwhile; else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); ?>
<?php exit; ?>
<?php endif; ?>
