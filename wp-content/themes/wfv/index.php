<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

    <div class="col-md-8">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('content'); ?>
            <?php comments_template(); ?>
        <?php endwhile; ?>
        <nav class="previous-next-bar container">
        <?php if ( get_next_posts_link() ) : ?>
            <div class="nav-previous pull-left"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentythirteen' ) ); ?></div>
        <?php endif; ?>

        <?php if ( get_previous_posts_link() ) : ?>
            <div class="nav-next pull-right"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?></div>
        <?php endif; ?>
        </nav>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>