<?php get_template_part('includes/header'); ?>
<section>
<?php get_template_part('includes/inner-banner'); ?>
   	<div class="container p-t-60 p-b-50 " >
                        <div class="row">
                            <div class="col-xs-12 col-sm-8  col-lg-8">
                            <?php get_template_part('includes/loops/content', get_post_format()); ?>
                            	<!--end-->
                                
                                
                                
                                
                                
                            </div>
                            <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
			<?php get_template_part('includes/sidebar'); ?>
		</div>
                        </div>
                    </div>



</section>

<?php get_template_part('includes/footer'); ?>
