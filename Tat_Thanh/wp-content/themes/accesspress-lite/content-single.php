<?php
/**
 * @package AccesspressLite
 */
?>
<?php
$accesspresslite_options = accesspress_default_setting_value();
$accesspresslite_settings = get_option( 'accesspresslite_options', $accesspresslite_options );
$cat_event = $accesspresslite_settings['event_cat'];
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
            
		<div class="entry-meta">
			<?php accesspresslite_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'accesspress-lite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
