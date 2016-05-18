<?php get_template_part('includes/header');

/*
Template Name: Why choose us

*/

 ?>

<!-- /.container -->

<section>
     <!-- start banner -->
         	<?php get_template_part('includes/inner-banner'); ?>
         <!-- end banner -->
         
             <!--start-gry-wraper-->
                <div  class="gry-wraper p-t-120 p-b-120" name="myAnchor" id="myAnchor">
                
                	<div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12">
                            
                            	<!--end-->
                                
                                 <?php get_template_part('includes/loops/content', 'page-why'); ?>
                                <!--end-->
                                
                                
                            </div>
                        </div>
                    </div>

                </div>
             <!--end-gry-wraper-->
             
            
         
     </section>

<?php get_template_part('includes/footer'); ?>
