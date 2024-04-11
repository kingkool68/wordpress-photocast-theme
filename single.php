<?php get_header(); ?>
<div id="header-ads" class="banner-ads"><script type="text/javascript"><!--
google_ad_client = "pub-9571026409625337";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_ad_type = "text_image";
//2007-08-02: RH-blog-headerbanner
google_ad_channel = "2221790727";
google_color_border = "EEEEEE";
google_color_bg = "FFFFFF";
google_color_link = "FFFFFF";
google_color_text = "666666";
google_color_url = "0099FF";
google_ui_features = "rc:6";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
    <div id="content" class="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="post" id="post-<?php the_ID(); ?>">
            <span class="post-date"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></span>
            <h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

            <div class="entrytext">
            <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

            <?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

            </div>
        <p class="postmetadata alt">
                    Posted at <?php the_time('g:i a') ?> in <?php the_category(', ') ?>

                        <br /><?php edit_post_link('Edit this entry.', '', ''); ?>
                </p>
        <div id="related-content">

            <div id="related-links">
            <h5>Related Posts</h5>
            <?php related_posts(); ?>
            <h5>Recent Posts</h5>
            <?php recent_posts(); ?>
            </div>
                      <div id="ads">
            <script type="text/javascript"><!--
google_ad_client = "pub-9571026409625337";
google_ad_width = 300;
google_ad_height = 250;
google_ad_format = "300x250_as";
google_ad_type = "text_image";
//2007-07-29: RH-blog-lrgSquare
google_ad_channel = "7066055371";
google_color_border = "EEEEEE";
google_color_bg = "FFFFFF";
google_color_link = "FFFFFF";
google_color_text = "999999";
google_color_url = "0099FF";
//-->
</script><script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
            </div>
        </div>
        </div>

            <?php comments_template(); ?>

  <?php endwhile; else: ?>

        <p>Sorry, no posts matched your criteria.</p>

  <?php endif; ?>
    </div>

<?php get_footer(); ?>
