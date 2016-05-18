<?php
add_action( 'cmb2_admin_init', 'cmb2_whatwe_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_whatwe_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_whatwedo_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'whatwe_metabox',
        'title'         => __( 'What We Do Metabox', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type]
		'show_on' => array( 'key' => 'page-template', 'value' => 'what-we-do.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

   $cmb->add_field( array(
		'name' => __( 'Our areas of specialization', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'special',
		'type' => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );
	
	$cmb->add_field( array(
		'name' => __( 'Languages and platforms used by our company', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'language',
		'type' => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );
	$cmb->add_field( array(
		'name' => __( 'Technologies used', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'tech',
		'type' => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );
    

}

/*Service Metabox
=================*/

add_action( 'cmb2_admin_init', 'cmb2_service_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_service_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_services_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'service_metabox',
        'title'         => __( 'Service Sub Heading', 'cmb2' ),
        'object_types'  => array( 'service', ), // Post type]
		
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

   // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Sub Heading', 'cmb2' ),
        'desc'       => __( 'Please enter your sub heading', 'cmb2' ),
        'id'         => $prefix . 'subheading',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        
        
    ) );
	// Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Contact Us Link', 'cmb2' ),
        'desc'       => __( 'Please enter your link', 'cmb2' ),
        'id'         => $prefix . 'contact',
        'type'       => 'text_url',
        
       
    ) );
    

}

/**
 * Register Team Members metabox as repeatable group fields.
 */
function maintainn_team_members_metabox() {
	$prefix = '_maintainn_team_';
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Team Members', 'maintainn-demo' ),
		'object_types' => array( 'page' ),
		'show_on' => array( 'key' => 'page-template', 'value' => 'team.php' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'meta',
		'type'        => 'group',
		'description' => '',
		'options'     => array(
			'group_title'   => __( 'Member', 'maintainn-demo' ),
			'add_button'    => __( 'Add Another Member', 'maintainn-demo' ),
			'remove_button' => __( 'Remove', 'maintainn-demo' ),
			'sortable'      => true
		)
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Fullname', 'maintainn-demo' ),
		'id'   => 'fullname',
		'type' => 'text'
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Position', 'maintainn-demo' ),
		'id'   => 'position',
		'type' => 'text',
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Photo', 'maintainn-demo' ),
		'id'   => 'photo',
		'type' => 'file',
		'options' => array(
			'url' => false
		)
	) );
}
add_action( 'cmb2_init', 'maintainn_team_members_metabox' );
