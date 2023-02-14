</div>
</div>
</main>

<?php get_template_part('templates-parts/footer/footer', 'form'); ?>
<?php get_template_part('templates-parts/footer/footer', 'get-know'); ?>
<?php get_template_part('templates-parts/footer/footer', 'opinions'); ?>
<?php get_template_part('templates-parts/footer/footer', 'cta'); ?>

<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
    <div class="container-fluid">
        <div class="row">
            <?php get_template_part('templates-parts/footer/footer', 'localization'); ?>
            <hr>
            <div class="f__main__wraper ">
                <div class="col">
                    <?php get_template_part('templates-parts/footer/footer', 'main'); ?>
                </div>
                <div class="col">
                    <?php get_template_part('templates-parts/footer/footer', 'contact'); ?>
                </div>
            </div>
            <hr>
            <div class="f__info__wraper ">
                <div class="col"><?php get_template_part('templates-parts/footer/footer', 'info'); ?>
                </div>
                <div class="col"><?php get_template_part('templates-parts/footer/footer', 'socialmedia'); ?></div>
            </div>
        </div>
    </div>
    <svg id="bg-footer" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="546px" height="273px" viewBox="0 0 546 273" style="enable-background:new 0 0 546 273;" xml:space="preserve">
        <path fill="#FFFFFF" d="M8.9,273l59.3-59.3v24.7L33.6,273h8.9l25.8-25.8V273h7.8l59.3-59.3V273h6.3v-59.3l59.3,59.3h9.4l59.4-59.3V273
	h6.3v-59.3l59.4,59.3h9.4l59.3-59.3V273h6.3v-59.3l59.3,59.3h7.8v-25.8l25.8,25.8h8.9l-34.7-34.7v-24.7l59.3,59.3h8.9l-68.3-68.3
	v-67.2l-70.3-70.3l-33.6,33.6L273,0L172.2,100.8l-33.6-33.6l-70.3,70.3v67.2L0,273H8.9z M471.4,265.6L411.8,206l59.6-59.6V265.6z
	 M410.5,79.3l59.6,59.6l-59.6,59.6V79.3z M202.7,265.6L143.1,206l59.6-59.6V265.6z M209,265.6V146.5l59.6,59.6L209,265.6z
	 M273,201.6l-62.7-62.7L273,76.1l62.7,62.7L273,201.6z M337,265.6L277.5,206l59.6-59.6V265.6z M273,67.2l-67.2,67.2L193.5,122
	L273,42.5l79.5,79.5l-12.3,12.3L273,67.2z M343.3,265.6V146.5l59.6,59.6L343.3,265.6z M404.2,79.3v119.1l-59.6-59.6L404.2,79.3z
	 M273,8.9l96.3,96.3L357,117.6l-84-84l-84,84l-12.3-12.3L273,8.9z M141.8,79.3l59.6,59.6l-59.6,59.6V79.3z M135.5,79.3v119.1
	l-59.6-59.6L135.5,79.3z M74.6,146.5l59.6,59.6l-59.6,59.6V146.5z" />
    </svg>
</footer>
<span id="go-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path id="Icon_material-arrow-upward" data-name="Icon material-arrow-upward" d="M6,18l2.115,2.115,8.385-8.37V30h3V11.745l8.37,8.385L30,18,18,6Z" transform="translate(-6 -6)" />
    </svg>
</span>
<?php wp_footer(); ?>
</body>

</html>
