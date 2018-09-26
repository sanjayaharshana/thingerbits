Thingerbits

get_header('standalone');

$get_meta = get_post_custom($post->ID);

$overridepos = $get_meta['_weblusive_sidebar_pos'];
$overridesidebar = $get_meta['_weblusive_sidebar_post'];

$sidebarPos = ($overridepos[0] == 'default') ?  weblusive_get_option('sidebar_pos') : $overridepos[0];
$sidebar = ($overridesidebar[0] == '') ?  weblusive_get_option('sidebar_portfolio') : $overridesidebar[0];

$parentpage = isset($_SESSION['sility_page_id']) ? $_SESSION['sility_page_id'] : '';

$hidenav = weblusive_get_option('hide_portfolio_navigation') ;
//$layout = weblusive_get_option('portfolio_single_layout');
get_template_part( 'library/includes/page-head' ); 
	
?>

<div class="sections pagecustom-<?php echo $post->ID?>"> 
	<div class="sections-wrapper clearfix">
		<section class="active">
			<div class="container">
				<div class="row">
					<?php if (!empty($sidebar) && $sidebarPos=='left'):?>
						<?php if(!$hidenav):?>
							<p class="button-row portfolio-button-row">
								<?php $prev_post = get_previous_post();
								if (!empty( $prev_post )): ?>
									<a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="button solid-button white"><?php _e('Prev Project', 'Thingerbits')?></a>
								<?php endif; ?>
								<?php $next_post = get_next_post();
								if (!empty( $next_post )): ?>
									<a href="<?php echo get_permalink( $next_post->ID ); ?>" class="button solid-button purple"><?php _e('Next Project', 'Thingerbits')?></a>
								<?php endif; ?>
							</p>
						<?php endif?>
						<aside id="sidebar" class="col-md-4"><div class="sidebar sidebar-left"><?php dynamic_sidebar($sidebar); ?></div></aside>
					<?php endif?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="<?php if (empty($sidebar) || $sidebarPos == 'full'):?>col-md-12<?php else:?>col-sm-8 col-md-8<?php endif?> main-content single-portfolio-post">
						<div class="portfolio-single-item">
							<?php the_content(); ?>
						</div>    
					</div>
					<?php endwhile; ?>	
					<?php if (!empty($sidebar) && $sidebarPos=='right'):?>
						<aside id="sidebar" class="col-md-4">
							<?php if(!$hidenav):?>
								<p class="button-row portfolio-button-row">
									<?php $prev_post = get_previous_post();
									if (!empty( $prev_post )): ?>
										<a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="button solid-button white"><?php _e('Prev Project', 'Thingerbits')?></a>
									<?php endif; ?>
									<?php $next_post = get_next_post();
									if (!empty( $next_post )): ?>
										<a href="<?php echo get_permalink( $next_post->ID ); ?>" class="button solid-button purple"><?php _e('Next Project', 'Thingerbits')?></a>
									<?php endif; ?>
								</p>
							<?php endif?>
							<div class="sidebar sidebar-right"><?php dynamic_sidebar($sidebar); ?></div></aside>
					<?php endif?>
				</div>
			</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>