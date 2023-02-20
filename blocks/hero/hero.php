<?php
$bg = get_field( 'background_image' );
$hedline = get_field( 'hedline' );
$des = get_field( 'desc' );

$btnMain = get_field( 'main_link' );
$btnRevers = get_field( 'rev_link' );
if ($btnMain) {
    $btnMain_url = $btnMain['url'];
    $btnMain_title = $btnMain['title'];
    $btnMain_target = $btnMain['target'] ? $btnMain['target'] : '_self';
}
if ($btnRevers) {
    $$btnRevers_url = $btnRevers['url'];
    $btnRevers_title = $btnRevers['title'];
    $btnRevers_target = $btnRevers['target'] ? $btnRevers['target'] : '_self';
}
?>


<div class="b-hero" style="background-image:url(<?php echo $bg; ?>)">
    <div class="container">
        <div class="row">
            <div class="b-hero__wraper">
                <div class="b-hero__col text-center">
                    <?php if ($hedline) { ?>
                    <h1><?php echo $hedline; ?></h1>
                    <?php } ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46">
                        <path id="Shape_23_copy_9" data-name="Shape 23 copy 9" d="M1892.233,674.234v-5.656l-5.922-5.922-2.828,2.828L1875,657l-8.484,8.484-2.828-2.828-5.922,5.922v5.656L1852,680l5.766,5.766v5.656l5.922,5.922,2.828-2.829L1875,703l8.484-8.484,2.828,2.829,5.922-5.922v-5.656L1898,680Zm0,3.58,2.185,2.186-2.185,2.186Zm-5.656-2.828,5.014,5.014-5.014,5.014Zm5.124,5.656V690.67l-5.013-5.014Zm-5.013-6.3,5.013-5.014v10.027Zm-.11-.642V663.674l5.014,5.014Zm-16.968,17.5V680.643l5.39,5.39,5.39-5.39V691.2l-.11.11-5.28,5.28-5.28-5.28Zm5.766-16.858,5.014-5.014v10.027Zm4.9,5.656-5.014,5.014V674.986Zm-5.28-6.033-5.28-5.279,5.28-5.28,5.28,5.28Zm-.376.376-5.014,5.014V669.33Zm.11.642v10.028L1869.719,680Zm11.2,10.67-5.014,5.014V680.643l2.9,2.9Zm-4.9-5.656,5.013-5.014v10.028Zm-.111-.643V669.33l5.014,5.014Zm-5.922-16.7-5.656,5.656-1.037-1.038,6.693-6.693,6.694,6.693-1.038,1.038Zm-10.936,11.688,5.013-5.014v10.027Zm4.9-5.656-5.014,5.014V663.674Zm-5.014,6.3,5.014,5.014-5.014,5.014Zm5.124,5.656V690.67l-5.013-5.014Zm.266,11.046,5.656,5.656,5.656-5.656,1.038,1.038L1875,699.42l-6.693-6.694Zm11.688-.376,5.013-5.013v10.027Zm5.013-17.61-5.013-5.014,5.013-5.014ZM1875,657.753l8.108,8.107-1.038,1.038-7.07-7.07-7.07,7.07-1.037-1.038Zm-11.578,17.234v10.028L1858.408,680Zm-5.124,4.371V669.33l5.014,5.014Zm5.124-15.683V673.7l-5.014-5.014Zm-5.656,18.512L1855.579,680l2.186-2.186ZM1852.752,680l5.014-5.014v2.076L1854.827,680l2.938,2.938v2.076Zm5.546.642,5.014,5.014-5.014,5.014Zm5.124,5.656v10.027l-5.014-5.014Zm.532,0,5.014,5.013-5.014,5.014ZM1875,702.248l-8.107-8.108,1.037-1.037,7.07,7.07,7.07-7.07,1.038,1.037Zm11.578-5.921V686.3l5.014,5.013Zm5.656-13.388,2.938-2.938-2.938-2.938v-2.076l5.014,5.014-5.014,5.014Z" transform="translate(-1852 -657)" fill="#fff" />
                    </svg>
                    <?php if ($des) { ?>
                    <p><?php echo $des; ?></p>
                    <?php } ?>
                    <div class="b-hero__buttons">
                        <?php if($btnMain) { ?>
                        <a class="btn header-contact__btn" href="<?php echo esc_url( $btnMain_url ); ?>" target="<?php echo esc_attr( $btnMain_target ); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="9" viewBox="0 0 18 9">
                                <path id="Shape_1" data-name="Shape 1" d="M2448,301.6a3.56,3.56,0,0,1-.249.313q-1.954,1.95-3.914,3.9c-.217.215-.429.244-.619.086a.39.39,0,0,1-.072-.532,1.586,1.586,0,0,1,.174-.2q1.547-1.542,3.094-3.08c.048-.048.093-.1.167-.176h-15.988a1.293,1.293,0,0,1-.295-.029.388.388,0,0,1-.3-.384.393.393,0,0,1,.3-.384,1.355,1.355,0,0,1,.3-.03q7.865,0,15.73,0h.257c-.075-.079-.12-.13-.168-.177l-3.155-3.143c-.208-.207-.242-.42-.1-.6a.4.4,0,0,1,.56-.078,1.738,1.738,0,0,1,.182.164q1.927,1.916,3.853,3.834a3.39,3.39,0,0,1,.248.314Z" transform="translate(-2429.999 -296.999)" fill="#fff" />
                            </svg>
                            <span> <?php echo esc_html( $btnMain_title ); ?></span>
                        </a>
                        <?php } ?>

                        <?php if($btnRevers) { ?>
                        <a class="btn-revers header-contact__btn" href="<?php echo esc_url( $btnRevers_url ); ?>" target="<?php echo esc_attr( $btnRevers_target ); ?>">
                            <?php echo esc_html( $btnRevers_title ); ?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="scroll-down">
                <svg class="scroll-down__bg" xmlns="http://www.w3.org/2000/svg" width="209.998" height="60.997" viewBox="0 0 209.998 60.997">
                    <path id="Shape_698" data-name="Shape 698" d="M1934.612,614.4a60.463,60.463,0,0,0-104.262-4.865,15.692,15.692,0,0,0-1.432,2.283A60.571,60.571,0,0,1,1776,643h210A60.517,60.517,0,0,1,1934.612,614.4Z" transform="translate(-1775.999 -581.999)" fill="#fff" />
                </svg>
                <span class="scroll-down__ani"></span>
            </div>
        </div>
    </div>
    <div class="go__bg"></div>
    <div class="go__bg__two"></div>
</div>
