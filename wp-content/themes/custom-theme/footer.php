<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom-theme
 */

?>

	<footer class="site-footer p-4">
		<div class="ui stackable sixteen column grid">
			<div class="ui nine wide column">
				<div class="flex-container">
					<h2>Our Social Channels</h2>
						<div class="flex-row">
						<a href="https://www.facebook.com/twelvethegreen"><img src="<?php echo home_url(); ?>/wp-content/uploads/2020/08/Instagram-white.svg" alt=""></a>
						<a href="https://www.instagram.com/twelvethegreen/"><img src="<?php echo home_url(); ?>/wp-content/uploads/2020/08/Facebook-white.svg" alt=""></a>
						
						<p>e-mail - hello@twelevethegreen.co.uk</p>
						<!-- <br>Telephone - 01494 873031</p> -->
				    </div>
				</div>
			</div>
			<div class="ui four wide column">
			</div>
			<div class="ui three wide column">
				<p>Twelve The Green<br>
				   12 The Green, <br>
				   Chalfont St Giles,<br> 
				   Buckinghamshire, <br>
				   HP8 4QF</p>
				<p>© Twelve The Green 2020 </p>   
			</div>
		</div>
		
		<?php wp_footer(); ?>

	</footer><!-- #colophon -->

	</div><!-- #page -->

	</body>
</html>
