<?php get_header(); ?>

    <div id="content" class="narrowcolumn">

        <?php if (have_posts()) : ?>

            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2 class="archive">Posts tagged '<?php echo single_cat_title(); ?>'</h2>

                <?php /* If this is a daily archive */
            } elseif (is_day()) { ?>
        <h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>

                 <?php /* If this is a monthly archive */
            } elseif (is_month()) { ?>
        <h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

                    <?php /* If this is a yearly archive */
            } elseif (is_year()) { ?>
        <h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

                  <?php /* If this is a search */
            } elseif (is_search()) { ?>
        <h2 class="pagetitle">Search Results</h2>

                  <?php /* If this is an author archive */
            } elseif (is_author()) { ?>
        <h2 class="pagetitle">Author Archive</h2>

                    <?php /* If this is a paged archive */
            } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2 class="pagetitle">Blog Archives</h2>

            <?php } ?>


            <?php while (have_posts()) : the_post(); ?>
        <div class="post">
                <span class="post-date"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></span>
                <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>

                <div class="entry">
                <?php the_content() ?>
                </div>

                <p class="postmetadata">Posted at <?php the_time('g:i a') ?> in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

            </div>

            <?php endwhile; ?>

        <div class="navigation">
            <div class="previous_entries"><?php next_posts_link('&laquo; Previous Entries') ?></div>
            <div class="next_entries"><?php previous_posts_link('Next Entries &raquo;') ?></div>
        </div>

    <?php else : ?>

        <h2 class="center">Not Found</h2>

    <?php endif; ?>
        <?php require TEMPLATEPATH . '/searchform.php'; ?>
    </div>
<?php get_footer(); ?>
