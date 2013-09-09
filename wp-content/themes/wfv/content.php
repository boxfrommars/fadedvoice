<div class="container post">
    <?php if ( is_single() ) : ?>
        <h3 class="entry-title"><?php the_title(); ?></h3>
    <?php else : ?>
    <h3 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h3>
    <?php endif; ?>
    <?php the_content(); ?>
    <?php if ( comments_open() && ! is_single() ) : ?>
        <div class="comments-link">
            <?php comments_popup_link( 'комментировать', __( 'One comment so far', 'twentythirteen' ), 'комментарии (%)' ); ?>
        </div>
    <?php endif; // comments_open() ?>
</div>
