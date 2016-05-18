<?php get_template_part('includes/header'); ?>
<?php get_template_part('includes/inner-banner'); ?>
<div class="container p-b-50 p-t-60">
  <div class="row">
    
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'single'); ?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
        <?php get_template_part('includes/sidebar'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
