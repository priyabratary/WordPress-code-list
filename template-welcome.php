<?php 
/*
Template Name: Welcome Template
*/
?>

<?php get_template_part('includes/header'); ?>
  
  <!--body-->
  	 <section>
     <!-- start banner -->
         	      <?php echo do_shortcode('[slider]'); ?>
         <!-- end banner -->
         
             <!--start-gry-wraper-->
                <div  class="gry-wraper p-t-120 p-b-120" name="myAnchor" id="myAnchor">
                
                	
                            	<!--end-->
                                
                                <?php echo do_shortcode('[services]'); ?>
                                
                                <!--end-->
                                
                                
                                <!--end-->
                                
                                <!--end-->
                                
                      

                </div>
             <!--end-gry-wraper-->
             
             <!-- quick contact -->
             	<div class="quick-contact">
                	<div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12"><h1 class="white text-center bold text-uppercase m-b-40">Quick Contact Us</h1></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                            	<?php echo do_shortcode('[contact-form-7 id="154" title="Homepage Contact"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
             <!-- end quick contact -->
             
             <!--latest-work-->
            
             <!--end-latest-work-->
         <?php echo do_shortcode('[sumer_portfolio]'); ?>
     </section>
  <!--end-body-->
  
  <?php get_template_part('includes/footer'); ?>