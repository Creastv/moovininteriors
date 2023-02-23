<?php
$galeria = get_field( 'zdjecia_nowe', get_the_id() );
?>
<article id="post-<?php the_ID(); ?>" class="single-post hentry">
    <?php the_content(); ?>
    <?php if($galeria){ ?>
    <div class="realization-gallery">
        <?php foreach($galeria as $dodaj_zdjecie) { 
foreach($dodaj_zdjecie as $img) { ?>
        <div class="wr">
            <a data-fancybox="gallery" href="<?php echo wp_get_attachment_image_url( $img[0]['zdjecie'], 'full' ); ?>">
                <?php echo wp_get_attachment_image($img[0]['zdjecie'], 'large' ); ?>
            </a>
        </div>
        <?php }
} ?>
    </div>
    <?php } ?>

</article>
