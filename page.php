<?php get_header(); ?>

    <div clss="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="content">
        <h2><?php the_title(); ?></h2>
            <div class="entrytext">
            <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

            <?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

            </div>
        </div>
    <?php endwhile;
    endif; ?>
    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
