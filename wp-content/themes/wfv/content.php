<div class="container post">
    <?php if ( is_single() ) : ?>
        <h3 class="entry-title"><?php the_title(); ?></h3>
    <?php else : ?>
    <h3 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h3>
    <?php endif; ?>
    <?php the_content(); ?>

    <div class="post-meta">
        <i><?php the_time('d.m.Y') ?> <?php the_time() ?></i>
        <?php if ( comments_open() && ! is_single() ) : ?>
            <div class="pull-right"><?php comments_popup_link( 'комментировать', '1 комментарий', 'комментарии (%)' ); ?></div>
        <?php endif; // comments_open() ?>
    </div>
</div>
