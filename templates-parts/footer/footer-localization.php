<?php
$loc = get_field('localization', 'options');
?>
<?php if($loc) { ?>
<div class="f__loc">
    <svg xmlns="http://www.w3.org/2000/svg" width="14.989" height="20" viewBox="0 0 14.989 20">
        <path id="Shape_697" data-name="Shape 697" d="M1129.389,6130a35,35,0,0,1-3.2-3.541,25.083,25.083,0,0,1-3.025-4.674,11.025,11.025,0,0,1-1.082-3.342,7.165,7.165,0,0,1,1.034-4.841,7.333,7.333,0,0,1,5.245-3.506,7.508,7.508,0,0,1,8.154,10.088,19.021,19.021,0,0,1-2.464,4.633,36.353,36.353,0,0,1-4.23,5c-.063.063-.13.123-.2.184Zm.116-15.933a3.436,3.436,0,1,0,3.437,3.439A3.438,3.438,0,0,0,1129.506,6114.066Z" transform="translate(-1122.011 -6109.999)" fill="#fff" />
    </svg>
    <p><?php echo $loc; ?></p>
</div>
<?php } ?>
