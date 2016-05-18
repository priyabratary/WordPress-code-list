<?php get_template_part('includes/header');

/*
Template Name: What We do

*/

 ?>

<!-- /.container -->

<section>
     <!-- start banner -->
         	<?php get_template_part('includes/inner-banner-what'); ?>
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
                    
                    
                       <?php
                    $special  = get_post_meta( get_the_ID(), '_whatwedo_special', true );
                    $language = get_post_meta( get_the_ID(), '_whatwedo_language', true );
                    $tech   = get_post_meta( get_the_ID(), '_whatwedo_tech', true );
                   
                    ?>
                    
                    
                    
<div class="special-services p-t-80">
                        	<div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-lg-4">
                                    	<!--start-special-services-box-->
                                        	<div class="special-services-box">
                                            	<h3 class="text-uppercase m-b-20">Our Areas of Specialization</h3>
                                                <?php  echo  $special ?>
                                            </div>
                                        <!--end-special-services-box-->
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-lg-4">
                                    	<!--start-special-services-box-->
                                        	<div class="special-services-box bg-green">
                                            	<h3 class="text-uppercase m-b-20">Languages and Platforms Used by our company</h3>
                                                <?php  echo $language  ?>
                                            </div>
                                        <!--end-special-services-box-->
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-4 col-lg-4">
                                    	<!--start-special-services-box-->
                                        	<div class="special-services-box bg-orange">
                                            	<h3 class="text-uppercase m-b-20">Technologies used</h3>
                                             <?php  echo  $tech ?>
                                                
                                            </div>
                                        <!--end-special-services-box-->
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>

<?php endwhile; else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); ?>
<?php exit; ?>
<?php endif; ?>
                
           </div> 
             <!--end-gry-wraper-->
             
            
         
     </section>

<?php get_template_part('includes/footer'); ?>
