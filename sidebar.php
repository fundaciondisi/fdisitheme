<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">

				<aside id="lmenu" class="widget">
					<?php if(exite_categoria('Menu latera')==1): ?>
					<ul>
						<?php
							global $post;
							$args = array('category' => get_cat_ID('Menu lateral') );
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :	setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); ?>" class="btn btn-mini"><?php the_title(); ?></a></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</aside>
			
				<?php dynamic_sidebar( 'sidebar-1' ); ?>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Sesión', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php //wp_meta(); ?>
					</ul>
				</aside>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>