<figure class="banner">
            
            <div class="carousel-inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/inner-banner-seo.jpg" class="img-responsive"  alt=""/>
                        <div class="carousel-caption">
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                        	<h1 class="white light lg m-b-20"><?php wp_title('', true, 'right'); ?></h1>
                                            
                                            	
                                                <?php if ( function_exists('yoast_breadcrumb') ) 
												{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
                                            
                              </div>
                        </div>
                    </div>
            </div>
            	
                    <!--jump-to-bottom-->
                            <a href="#myAnchor" rel="" id="anchor1" class="anchorLink hidden-xs"><div class="jump-bottom"><img src="<?php echo get_template_directory_uri(); ?>/images/bottom-doen-arrow.png"  alt=""/></div></a>
                        <!--end-jump-to-bottom-->  
            </figure>