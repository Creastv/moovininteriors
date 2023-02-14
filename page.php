<?php
get_header();

while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" class="hentry">
    <div class="entry-content">
        <?php
		the_content();
		?>
    </div>
    <footer class="entry-footer"></footer>
</article>

<?php endwhile;
get_footer();
