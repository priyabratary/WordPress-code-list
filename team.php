<?php get_template_part('includes/header');

/*
Template Name: Team Page

*/

 ?>

<!-- /.container -->

<section>
     <!-- start banner -->
         	<?php get_template_part('includes/inner-banner-team'); ?>
         <!-- end banner -->
         
             <!--start-gry-wraper-->
  
                <div  class="gry-wraper p-t-120 p-b-120" name="myAnchor" id="myAnchor">
                
                
<?php if(have_posts()): while(have_posts()): the_post(); ?>

          
                	<div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12">
                            
                            	<div class="row">
                                    <div class="col-xs-12 col-sm-5 col-lg-5">
                                     <?php the_post_thumbnail('full', array( 'class' => 'img-responsive services-img' )); ?>
                                    	
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-lg-7 p-t-60">

                         			 <?php the_content(); ?>
                                   </div>
                                    
                              </div><!--end-->
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                    
                     <?php echo do_shortcode('[maintainn_team]'); ?> 
                    

<?php endwhile; else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); ?>
<?php exit; ?>
<?php endif; ?>
                
           </div> 
             <!--end-gry-wraper-->
             
            
         
     </section>

<?php get_template_part('includes/footer'); ?>
