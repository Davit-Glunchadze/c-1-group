<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package C-1-group
 */

$footer = get_field('footer');
$footer_logo = $footer['footer_logo'];
$logo_title = $footer ['logo_title'];
$socials = $footer['socials'];
$stores = $footer['stores'];

//echo '<pre>';
//print_r ($stores);
//echo '</pre>';

?>

	<footer id="colophon" class="site-footer">
		<div class="footer">
			<div class="logo-text">
				<a href="#"><img src="<?php echo $footer_logo?>" alt="footer logo"></a>
				<p><?php echo $logo_title?></p>
			</div>
			<nav id="footer-navigation" class="main-footer-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<div class="socials-store">
				<div class="social">
                    <?php foreach ($socials as $social): ?>
    					<?php if (!empty($social['link']) && !empty($social['image'])): ?>
    					    <a href="<?php echo esc_url($social['link']); ?>" target="_blank" rel="noopener noreferrer">
    					        <img src="<?php echo esc_url($social['image']); ?>" alt="Social icon">
    					    </a>
    					<?php endif; ?>
					<?php endforeach; ?>

                </div>
				<p>Discover our app</p>
				<div class="stores">
					<?php foreach ($stores as $store): ?>
    					<?php if (!empty($store['link']) && !empty($store['image'])): ?>
    					    <a href="<?php echo esc_url($store['link']); ?>" target="_blank" rel="noopener noreferrer">
    					        <img src="<?php echo esc_url($store['image']); ?>" alt="Social icon">
    					    </a>
    					<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		
		
		<p class="reserved">All rights reserved@travelgoo.co</p>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
