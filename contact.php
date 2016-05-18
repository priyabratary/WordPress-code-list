<?php get_template_part('includes/header');

/*
Template Name: Contact Page

*/

 ?>

<!-- /.container -->

<section>
     <!-- start banner -->
         	<?php get_template_part('includes/inner-banner-work'); ?>
         <!-- end banner -->
         
             <!--start-gry-wraper-->
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div  class="gry-wraper p-t-60 " name="myAnchor" id="myAnchor">
                
               
             


          

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
