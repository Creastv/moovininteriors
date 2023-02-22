<?php
get_header();
if ( have_posts() ) : 
$term = get_queried_object(); 
$styles = get_terms( 'Style', 'orderby=count&hide_empty=0' );
?>
<?php if($term->taxonomy == 'Style' || is_category( get_cat_ID( 'Realizacje') )) { ?>
<div class="terms-style">
    <p>Wybierz styl który Cię interesuje</p>
    <ul class="terms-style__nav">
        <li class="<?php echo $term->name == 'Realizacje' ? 'active' : false ;?>"><a href="<?php echo get_category_link(get_cat_ID( 'Realizacje')); ?>"> Wszystkie style</a></li>
        <?php foreach($styles as $style) { ?>
        <li class=" <?php echo $style->name == $term->name ? 'active' : false;  ?>"><a href="<?php echo get_term_link( $style ); ?>"><?php echo $style->name; ?></a></li>
        <?php } ?>
    </ul>
    <?php if($term->taxonomy == 'Style') { ?>
    <div class="terms-style__con">
        <h1><?php echo $term->name; ?></h1>
        <p><?php echo $term->description; ?></p>
    </div>
    <?php } ?>
</div>
<?php  }; ?>

<div class="posts-wraper">
    <?php while ( have_posts() ) : the_post();

    if(is_post_type('mieszkania')){
        get_template_part( 'templates-parts/content/content', 'flats' ); 
    } else {
        get_template_part( 'templates-parts/content/content', 'posts' ); 
    }
    endwhile; ?>
    <?php if(paginate_links()) { ?>
    <div class="go-pagination">
        <?php pagination_bars(); ?>
    </div>
    <?php } ?>
</div>
<?php else :
    echo "<h1 class='text-center'>Nic nie znaleziono</h1> ";
endif;
get_footer();
