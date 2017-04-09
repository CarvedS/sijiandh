<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
        
	<?php wp_head(); ?>
	
    


</head>

<body <?php body_class(); ?>>
	
<div id="wrapper">


<div class="col-md-12">
<div class="header-section">
<h1 class="text-center"><a href="<?php echo esc_url( home_url( '/' )) ;?>   " ><?php echo get_bloginfo('name'); ?></a></h1>
<p class="text-center"><?php bloginfo('description'); ?> </p>
</h1>

</div>
</div>



        <!-- Page content -->
        <div id="page-content-wrapper">
                 
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
       
<div class="col-md-3">
    

   <!-- Sidebar -->
        <div id="sidebar-wrapper">



       
   
          

 <?php nadzhq_minimal_sidebar_nav() ;?>    

    
        </div>
     <!--End Sidebar -->



</div>