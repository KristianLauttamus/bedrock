<?php

/**
 * Used for displaying the content for posts with the aside post format
 *
 * @since      0.1
 * @package    Theme_Boilerplate
 * @subpackage Content
 */

?>

<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<?php if ( is_singular( get_post_type() ) ) { ?>

		<header class="entry-header">
			<h1 class="entry-title"><?php single_post_title(); ?></h1>
			<?php echo apply_atomic_shortcode( 'entry_byline', '<div class="entry-byline">' . __( '[post-format-link] published on [entry-published] [entry-comments-link before=" | "] [entry-edit-link before=" | "]', 'theme-boilerplate' ) . '</div>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'theme-boilerplate' ) . '</span>', 'after' => '</p>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms before="Posted in " taxonomy="category"] [entry-terms before="| Tagged "]', 'theme-boilerplate' ) . '</div>' ); ?>
		</footer><!-- .entry-footer -->

	<?php } else { ?>

		<div class="entry-content">
			<?php the_content( __( 'Read more &rarr;', 'theme-boilerplate' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'theme-boilerplate' ) . '</span>', 'after' => '</p>' ) ); ?>
		</div><!-- .entry-content -->

	<?php } ?>

</article><!-- .hentry -->
