<?php get_header(); ?>

    <div id="content" class="narrowcolumn">

    <?php if (have_posts()) : ?>

        <h2 class="archive">Search Results</h2>

        <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
        </div>


        <?php while (have_posts()) : the_post(); ?>

            <div class="post">
                <span class="post-date"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></span>
                <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
                <p class="postmetadata">Posted at <?php the_time('g:i a') ?> in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
            </div>

        <?php endwhile; ?>

        <div class="navigation">
            <div class="previous_entries"><?php next_posts_link('&laquo; Previous Entries') ?></div>
            <div class="next_entries"><?php previous_posts_link('Next Entries &raquo;') ?></div>
        </div>

    <?php else : ?>

        <h2 class="center">No posts found. Try a different search?</h2>
        <?php include TEMPLATEPATH . '/searchform.php'; ?>

    <?php endif; ?>

    </div>

<?php get_footer(); ?>
