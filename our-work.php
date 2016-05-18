<?php get_template_part('includes/header');

/*
Template Name: Our Work

*/

 ?>

<!-- /.container -->

<section>
     <!-- start banner -->
         	<?php get_template_part('includes/inner-banner-work'); ?>
         <!-- end banner -->
         
             <!--start-gry-wraper-->
  
                <div  class="p-b-120" name="myAnchor" id="myAnchor">
                
                
<?php if(have_posts()): while(have_posts()): the_post(); ?>

          

                         			 <?php the_content(); ?>
                            
                                
                                
                                
                         
                    </div>
                    
                   
                    

<?php endwhile; else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); ?>
<?php exit; ?>
<?php endif; ?>
                
           </div> 
             <!--end-gry-wraper-->
             
            
         
     </section>

<?php get_template_part('includes/footer'); ?>
