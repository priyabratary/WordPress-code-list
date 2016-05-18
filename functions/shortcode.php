<?php
/*
Shortcode
=================
*/
add_filter('widget_text', 'do_shortcode');

//Slider shortcode
function slider_shortcode($atts, $content){
extract( shortcode_atts (array( // a few default values
   )
   , $atts));

	$q = new WP_Query(
	
		array('posts_per_page' => -1, 'post_type' => 'slider', 'order' => 'ASC', )
	);
	$list = '<figure class="banner">
            <div id="owl-slider" class="owl-carousel owl-theme">';
	
	while($q->have_posts()) : $q->the_post();
			$idd = get_the_ID();
	
			$list .= '
            
            
            
            <div class="item">
                          '.get_the_post_thumbnail( get_the_ID(), 'slider', array( 'class' => 'img-responsive' ) ).'
                          <div class="carousel-caption">
                          	 <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-11 col-md-12 col-lg-9 text-left">
                                        	<h1 class="white light lg m-b-30">'.get_the_title().'</h1><br>
											<a href="'.get_bloginfo('url').'/contact-us" class="btn-warning">Contact Us Now</a>
                                        </div>
                                    </div>
                              </div>
                          </div>
                          </div>

	
	
	';
		
	endwhile;
	$list.= '    </div>
                        
                        <!--jump-to-bottom-->
                            <a href="#myAnchor" rel="" id="anchor1" class="anchorLink hidden-xs"><div class="jump-bottom"><img src="'.get_template_directory_uri().'/images/bottom-doen-arrow.png"  alt=""/></div></a>
                        <!--end-jump-to-bottom-->
            </figure>';
	wp_reset_query();
	return $list;
}

add_shortcode('slider','slider_shortcode');


/*
Service Shortcode
=================
*/

add_shortcode( 'services', 'display_service' );
function display_service(){
    // Define the query
    $args = array(
        'post_type' => 'service',
        'post_status' => 'publish' ,
		'order' => 'ASC' ,
    );

    $query = new WP_Query( $args ); ?>



        <?php $count = 0;
        while ($query->have_posts()) : $query->the_post();
       	$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
		$idd = get_the_ID();
			$subheading =  get_post_meta( get_the_ID(), '_services_subheading', true );
			$contactlink =  get_post_meta( get_the_ID(), '_services_contact', true );
			
			 
			
			
			
			
			
        if($count % 4 == 0) { ?>
 
       <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12  col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1">

        <?php } ?>




<div class="row">
                             <div class="col-xs-12 col-sm-6 col-lg-6 <?php if($count == 1) echo "col-xs-push-0 col-lg-push-6"; ?>">
                                    	<img src="<?php echo $feat_image[0]; ?>" class="img-responsive services-img"  alt=""/> 
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-lg-6 p-t-60 <?php if($count == 1) echo "col-xs-pull-0 col-lg-pull-6"; ?>">
                                    	<h1 class="m-b-20"><?php the_title(); ?></h1>
                                        <h6 class="m-b-30"><?php echo esc_html ($subheading);  ?> </h6>
                                       	<?php the_content(); ?>
                                        <a href="<?php echo esc_url ($contactlink); ?>" class="btn btn-warning m-t-30">Contact Us Now</a>
                                    </div>
                                    
                                </div>




	

        <?php if($count % 4 == 3) { ?>   
         
        <?php } 
            $count++;
        endwhile;
        if($count % 4 != 0) { ?>
     
    <?php } ?>

      </div>
        </div>
           </div>
             
           
<?php     
    wp_reset_postdata();
    wp_reset_query();
}

/*
Portfolio Shortcode
=====================*/
function sumer_portfolio_shortcode_func($atts) {
	extract(shortcode_atts(array(

	), $atts));

	$args = array( 'post_type' => 'portfolio', 'posts_per_page' => -1 );
	$l = new WP_Query( $args );

	if($l->have_posts()) {

		$output = '<div class="latest-work p-t-120 p-b-50">
                <div class="container">
                	<div class="row">
                		<div class="col-xs-12 col-sm-12 col-lg-12">
                        	<h1 class="text-center green text-uppercase bold">our latest works</h1>
                        </div>
                	</div>
				</div><div class="cube-portfolio">';
			$output .= '<!-- Filters Container--><div class="isotope-filters">';
				$terms = get_terms('portfolio_category');
				$count = count($terms);
				$output .= '<button data-filter="" class="active">All</button>';
				if ( $count > 0 ){
					foreach ( $terms as $term ) {
						$termname = strtolower($term->name);
						$termname = str_replace(' ', '-', $termname);
						$output .= '<button data-filter=".'.$termname.'">'.$term->name.'</button>';
					
					}
				}
			$output .= '</div><!--/end Filters Container-->';

			$output .= '<!-- grid container --><div class="isotope popup-gallery">';

			while ( $l->have_posts() ) {
				$l->the_post();

				
				$attachment_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
				$thumb_url = wp_get_attachment_url( get_post_thumbnail_id() );

				$terms = get_the_terms( get_the_ID(), 'portfolio_category' );
				if ($terms && !is_wp_error($terms)) {
					$links = array();
					foreach ($terms as $term) {
						$links[] = $term->name;
					}
					$tax_links = join(" ", str_replace(' ', '-', $links));
					$tax = strtolower($tax_links);
				} else {
					$tax = '';
				}

				$cat_output = join(", ", $links);

				$output .= '<div class="item  '.$tax.'">';
					

						$output .= '<img src="'.$attachment_src[0].'" class="img-responsive imgg"  alt="'. get_the_title() .'"/>';

						$output .= '<div class="details">
                                	<a title="Vee Code" href="'.$thumb_url.'" class="zoom-icon"><img src="'.get_template_directory_uri().'/images/zoom-icon.png" alt=""/></a>
                                    <h5>'.get_the_title().'</h5>
                                </div>';

					
				$output .= '</div>';

			}

			$output .= '</div><!-- /grid container -->';
		$output .= '</div> </div>';

	}

return $output;

}
add_shortcode('sumer_portfolio', 'sumer_portfolio_shortcode_func');

/*
Social Shortcode
=====================*/
function social_shortcode($atts, $content = null){

extract( shortcode_atts( array(	
	'facebook' => '#',
	'twitter' => '#',
	'linkedin' => '#',
	


	), $atts, 'social' ) );
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );

return'
<ul class="list-unstyled">
                                	<li class="text-uppercase"><a href="'.$facebook.'" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                                    <li class="text-uppercase"><a href="'.$twitter.'" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                                    <li class="text-uppercase"><a href="'.$linkedin.'" target="_blank"><i class="fa fa-linkedin-square"></i> linkedin</a></li>
                                </ul>


';

}

add_shortcode('social','social_shortcode');

/**
 * Handle Team shortcode.
 *
 * @param  array $attr Array of shortcode attributes.
 * @return string $output HTML
 */
function maintainn_team_shortcode( $attr = array() ) {
	// Get post object.
	$post = get_post();
	// Get team members attached to this page.
	$members = get_post_meta( $post->ID, '_maintainn_team_meta', true );
	$output = '';
	// Return empty string, if we don't have members.
	if ( empty( $members ) ) {
		return $output;
	}
	// We have team members and now we can output them.
	$output .= ' <div class="container">
            	<div class="row m-t-80">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     	<h1 class="text-uppercase text-center">Management Team</h1>
                     </div>
                </div>
            	<div class="row m-t-50 m-b-60">';
	foreach ( $members as $member ) {
		$output .= '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="team-box">';
		$output .= '<img src="' . esc_attr( $member['photo'] ) . '" class="img-responsive center-block" alt="' . esc_attr( $member['fullname'] ) . '" />';
		$output .= '<h4 class="m-t-30">' . esc_attr( $member['fullname'] ) . '</h4>';
		$output .= ' <h5 class="blue text-uppercase">' . esc_attr( $member['position'] ) . '</h5>';
		$output .= '</div></div>';
	}
	$output .= '</div></div>';
	return $output;
}
add_shortcode( 'maintainn_team', 'maintainn_team_shortcode' );