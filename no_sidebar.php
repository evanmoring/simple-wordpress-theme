<?php /* Template Name: NoSidebar */ ?>
  <head>
<link href="<?php echo get_stylesheet_uri();?>" rel="stylesheet">
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=.75">
        <meta name="description" content=<?php echo get_bloginfo( 'description' ); ?>>
	
	
   </head>       


<body>



<div id = 'content'>
<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
			endwhile; endif;
			?>
   </div> 



    
</body>
