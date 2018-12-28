<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package AccesspressLite
 */

get_header(); ?>
<div class="ak-container">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'accesspress-lite' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'accesspress-lite' ); ?></p>
				</div><!-- .page-content -->
                
                <div class="number404">
                <?php esc_html_e('404' , 'accesspress-lite' ); ?> 
                <span><?php esc_html_e('error' , 'accesspress-lite' ); ?></span>   
                </div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
</div>
<?php get_footer(); ?>