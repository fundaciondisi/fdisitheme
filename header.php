<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>Fundación DISI</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<meta name='author' content='César M. Cristóbal' />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
		<nav id="access" role="navigation">
			<div class="menu">
				<ul>
					<?php if(exite_categoria('menu')==1): ?>
					<?php
					global $post;
					$args = array('category' =>  get_cat_ID('menu'));
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<li class="current_page_item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
					<?php endif; ?>

					<?php if(exite_categoria('Noticias')==1): ?>
					<li class="current_page_item">
						<?php
							wp_list_categories('style=none&include='.get_cat_ID('Noticias'));
						?>
					</li>
					<?php endif; ?>
					<li class="page_item page-item">
						<a title="Cursos" href="<?php echo esc_url( home_url( '/moodle/' ) ); ?>">Cursos</a>
					</li> 
					<li class="page_item page-item">
						<a title="Wiki" href="<?php echo esc_url( home_url( '/wiki/' ) ); ?>">Wiki</a>
					</li> 
				</ul>
			</div>
		</nav><!-- #access -->
			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<h2 id="site-description">Desarrollo-Investigación-Sostenibilidad-Innovación</h2>
			</hgroup>
			
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/headers/cab.png" id="imagencab"/>
			</a>
			

			<?php /*
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="only-search<?php if ( $header_image ) : ?> with-image<?php endif; ?>">
				<?php get_search_form(); ?>
				</div>
			<?php
				else :
			*/?>
				<?php get_search_form(); ?>
			<?php //endif; ?>

			
	</header><!-- #branding -->


	<div id="main">
