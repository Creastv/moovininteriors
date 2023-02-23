<?php 
$title = get_field( 'title' );
$desc = get_field( 'desc' );
$tabs = get_field( 'tabs' );
?>

<div class="b-circle-tabs">
    <div class="b-circle-tabs__wraper">
        <div class="b-circle-tabs__col">
            <?php if($title) { ?>
            <h2 class="section-h"><?php echo $title; ?></h2>
            <?php } ?>
            <?php if($title) { ?>
            <?php echo $desc; ?>
            <?php } ?>
        </div>
        <?php if($tabs) { ?>
        <div class=" b-circle-tabs__col">
            <div class="tab" id="tabs">
                <div class="tabs-content-container">
                    <?php $i = 1; foreach($tabs as $tab) { ?>
                    <div class="tab-content <?php echo $i == 1 ? 'active-tab' : '' ; ?>" data-tab-content="tab<?php echo $i; ?>">
                        <h3><?php echo $tab['content_tabs']['title']; ?></h3>
                        <p><?php echo $tab['content_tabs']['desc']; ?></p>
                    </div>
                    <?php $i++; } ?>
                    <!-- <div class="tab-content active-tab" data-tab-content="tab1">
                        <h3>Proces projektowy1</h3>
                        <p>doświadczony zespół architektów opracujeukład funkcjonalny, projekt i wizualizacje</p>
                    </div>
                    <div class="tab-content" data-tab-content="tab2">
                        <h3>Proces projektowy2</h3>
                        <p>doświadczony zespół architektów opracujeukład funkcjonalny, projekt i wizualizacje</p>
                    </div>
                    <div class="tab-content " data-tab-content="tab3">
                        <h3>Proces projektowy3</h3>
                        <p>doświadczony zespół architektów opracujeukład funkcjonalny, projekt i wizualizacje</p>
                    </div>
                    <div class="tab-content " data-tab-content="tab4">
                        <h3>Proces projektowy4</h3>
                        <p>doświadczony zespół architektów opracujeukład funkcjonalny, projekt i wizualizacje</p>
                    </div>
                    <div class="tab-content " data-tab-content="tab5">
                        <h3>Proces projektowy5</h3>
                        <p>doświadczony zespół architektów opracujeukład funkcjonalny, projekt i wizualizacje</p>
                    </div> -->

                </div>
                <div class="tabs-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1263.98" height="432.965" viewBox="0 0 1263.98 432.965">
                        <g id="time_line" data-name="time line" transform="translate(-1274.119 -1294.042)">
                            <path id="Path_44" data-name="Path 44" d="M329.637,540l47.139-47.137v19.715L349.354,540H356.5l20.275-20.275V540h6.594l47.139-47.137V540h5.055l0-47.136L482.706,540h8.132l47.14-47.134V540h5.049V492.864L590.169,540H598.3l47.132-47.134V540h5.054V492.863L697.629,540h6.593V519.725L724.493,540h7.15L704.22,512.578V492.863L751.36,540h7.156l-54.294-54.284V431.985L647.965,375.73,621.1,402.592,540.5,322l-80.6,80.594L433.03,375.728l-56.257,56.255v53.731L322.49,540Zm369.528-5.608-47.626-47.631,47.626-47.628ZM650.49,385.4l47.63,47.628-47.63,47.628ZM484.238,534.392l-47.631-47.631,47.631-47.628Zm5.06,0V439.136l47.631,47.63Zm51.2-51.2L490.344,433.04,540.5,382.883l50.159,50.157Zm51.208,51.2-47.634-47.631,47.634-47.628ZM540.5,375.73l-53.732,53.731-9.859-9.863L540.5,356.015,604.089,419.6l-9.857,9.863ZM596.76,534.394V439.138L644.4,486.766Zm48.671-148.986v95.256L597.8,433.036ZM540.5,329.146l77.024,77.021-9.859,9.856L540.5,348.862l-67.165,67.161-9.858-9.856ZM435.561,385.407l47.631,47.628-47.631,47.628Zm-5.052,0v95.256l-47.63-47.628Zm-48.68,53.727,47.634,47.628-47.634,47.628Z" transform="translate(1365.51 1181.01)" fill="#5f021f" opacity="0.102" style="isolation: isolate" />
                            <path id="Ellipse_1" data-name="Ellipse 1" d="M1274.186,1715.2a827.445,827.445,0,0,1,218.087-181.508C1612.5,1464.576,1752.127,1425,1901,1425c256.5,0,485.556,117.482,636.4,301.691" transform="translate(0.314)" fill="none" stroke="#5f021f" stroke-width="1" stroke-dasharray="10 12" />

                            <g class="ico ico-1 active-tab" data-tab="tab1">
                                <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(1352 1619)" fill="#959595" stroke="#fff" stroke-width="3">
                                    <circle cx="8" cy="8" r="8" stroke="none" />
                                    <circle cx="8" cy="8" r="6.5" fill="none" />
                                </g>
                                <text id="Proces_projektowy_" data-name="Proces projektowy " transform="matrix(1, 0, 0, 1, 1357.158, 1495.786)" fill="#1a070d" font-size="21">
                                    <tspan x="-32.905" y="0">Proces</tspan>
                                    <tspan x="-54.438" y="26">projektowy </tspan>
                                </text>
                                <path id="Shape_24" data-name="Shape 24"
                                    d="M1376,1554.21v28.107a2.3,2.3,0,0,1-1.682,1.682h-34.353c-.1-.027-.2-.063-.3-.08a5.6,5.6,0,0,1-4.657-5.342q-.011-15.067,0-30.134a5.449,5.449,0,0,1,4-5.243c.266-.075.537-.135.806-.2h2.4a2.18,2.18,0,0,1,1.679,2.512v7.052h.376q8.464,0,16.928-.011a.918.918,0,0,0,.578-.256q4.132-4.1,8.238-8.23a3.849,3.849,0,0,1,1.509-1.066h.8a3.263,3.263,0,0,1,1.493,1.007q.557.6,1.155,1.155a3.351,3.351,0,0,1,1.036,1.522v.8a3.989,3.989,0,0,1-1.122,1.565c-1.056,1.036-2.1,2.089-3.142,3.136-.1.1-.189.205-.348.379.873,0,1.654,0,2.435,0a2.022,2.022,0,0,1,1.789.871A6.17,6.17,0,0,1,1376,1554.21Zm-32.114-.245v.487q0,8.867,0,17.736a2.071,2.071,0,0,1-2.24,2.249c-.547.006-1.1-.009-1.64.034a4.07,4.07,0,0,0-3.585,4.607,4.223,4.223,0,0,0,4.327,3.556q16.494.007,32.988,0c.662,0,.9-.233.9-.885q0-13.472,0-26.943c0-.635-.231-.867-.87-.87-1.108-.005-2.216.01-3.323-.008a.964.964,0,0,0-.771.313c-2.01,2.029-4.034,4.043-6.048,6.068a2.605,2.605,0,0,1-1.516.831,26.937,26.937,0,0,1-3.023.291c-3.082.037-6.165.014-9.248.014h-.463v7.49h16.376v-.417c0-.934,0-1.868,0-2.8,0-.529.269-.854.69-.849s.67.326.674.864v.12q0,4.844,0,9.689c0,1.123-.512,1.633-1.642,1.633q-6.545,0-13.091,0a1.712,1.712,0,0,1-.513-.055.668.668,0,0,1,.109-1.294,2.612,2.612,0,0,1,.4-.016q2.022,0,4.043,0h.413v-5.451h-7.49v9.188c0,.134,0,.268-.006.4a.651.651,0,0,1-.611.626.661.661,0,0,1-.727-.545,2.544,2.544,0,0,1-.021-.478q0-8.787,0-17.575v-.508c-.144-.008-.223-.016-.3-.017-.587,0-1.175.008-1.762-.011a.652.652,0,0,1-.662-.661.678.678,0,0,1,.607-.681,2.908,2.908,0,0,1,.439-.016h11.213c.1-.979.215-1.891.29-2.8a2.878,2.878,0,0,1,.933-1.931c.452-.427.889-.868,1.407-1.376Zm-7.521,20.823c.551-.383,1.06-.789,1.617-1.111a6.516,6.516,0,0,1,3.5-.617c.857.014,1.042-.179,1.042-1.02v-26.653c0-.107,0-.214,0-.32a.69.69,0,0,0-.72-.7c-.373-.013-.747,0-1.121,0a4.113,4.113,0,0,0-4.313,4.332q0,12.866,0,25.733Zm31.138-26.163-7.326,7.327,2.905,2.907,7.326-7.313Zm-9.258,27.153h7.482v-5.418h-7.482Zm15.228-27.239c.315-.326.66-.658.975-1.014a.658.658,0,0,0-.039-.969q-.975-1-1.981-1.977a.623.623,0,0,0-.9-.061c-.376.331-.707.714-1.026,1.043Zm-4.948-1.007,2.911,2.913.913-.91c-.958-.965-1.93-1.946-2.891-2.916Zm-9.34,9.664c-.082.775-.179,1.575-.246,2.377-.029.346.185.521.525.494.478-.038.953-.1,1.43-.152l.919-.1Z"
                                    fill="#959595" />
                            </g>
                            <g class="ico ico-2" data-tab="tab2">
                                <g id="Ellipse_4_copy" data-name="Ellipse 4 copy" transform="translate(1582 1478)" fill="#959595" stroke="#fff" stroke-width="3">
                                    <circle cx="8" cy="8" r="8" stroke="none" />
                                    <circle cx="8" cy="8" r="6.5" fill="none" />
                                </g>
                                <path id="Shape_24_copy" data-name="Shape 24 copy"
                                    d="M1607,1427.21v28.107a2.3,2.3,0,0,1-1.682,1.682h-34.352a2.984,2.984,0,0,0-.3-.08,5.6,5.6,0,0,1-4.657-5.342q-.011-15.067,0-30.133a5.45,5.45,0,0,1,4-5.243c.266-.075.537-.135.806-.2h2.4a2.18,2.18,0,0,1,1.678,2.513v7.052h.376q8.464,0,16.927-.011a.914.914,0,0,0,.578-.257q4.131-4.1,8.239-8.23a3.849,3.849,0,0,1,1.508-1.067h.8a3.266,3.266,0,0,1,1.493,1.007c.371.4.757.782,1.154,1.155a3.344,3.344,0,0,1,1.036,1.521v.8a3.978,3.978,0,0,1-1.122,1.564c-1.056,1.037-2.1,2.089-3.141,3.137-.1.1-.189.2-.348.379.873,0,1.654,0,2.435,0a2.021,2.021,0,0,1,1.789.871A5.988,5.988,0,0,1,1607,1427.21Zm-32.114-.246v.486q0,8.868,0,17.736a2.071,2.071,0,0,1-2.241,2.249c-.547.006-1.1-.01-1.64.034a4.071,4.071,0,0,0-3.586,4.607,4.224,4.224,0,0,0,4.328,3.556q16.494.006,32.988,0c.662,0,.9-.233.9-.885q0-13.472,0-26.943c0-.635-.231-.867-.87-.87-1.108,0-2.216.01-3.322-.008a.967.967,0,0,0-.771.313c-2.01,2.028-4.033,4.044-6.048,6.068a2.6,2.6,0,0,1-1.516.83,27.045,27.045,0,0,1-3.023.291c-3.082.037-6.165.013-9.247.013h-.463v7.491h16.376v-.417c0-.935,0-1.868,0-2.8,0-.528.269-.854.69-.849s.67.326.673.865c0,.04,0,.08,0,.12q0,4.844,0,9.689c0,1.123-.511,1.633-1.642,1.633q-6.546,0-13.091,0a1.711,1.711,0,0,1-.513-.055.667.667,0,0,1,.11-1.293,2.575,2.575,0,0,1,.4-.017h4.457v-5.45h-7.49v.5q0,4.344,0,8.688c0,.134.005.268-.007.4a.65.65,0,0,1-.61.626.661.661,0,0,1-.727-.546,2.547,2.547,0,0,1-.021-.478q0-8.788,0-17.576v-.508c-.145-.008-.223-.016-.3-.016-.587,0-1.175.008-1.761-.011a.652.652,0,0,1-.662-.662.677.677,0,0,1,.607-.681,2.911,2.911,0,0,1,.439-.015h11.213c.1-.98.215-1.891.29-2.8a2.879,2.879,0,0,1,.933-1.931c.452-.426.889-.868,1.407-1.376Zm-7.521,20.824c.552-.383,1.06-.79,1.617-1.111a6.509,6.509,0,0,1,3.5-.617c.857.014,1.042-.18,1.042-1.02v-26.653c0-.107.005-.214,0-.32a.69.69,0,0,0-.719-.7c-.373-.013-.747,0-1.12,0a4.114,4.114,0,0,0-4.314,4.332q0,12.866,0,25.733Zm31.138-26.163-7.326,7.327,2.905,2.907,7.325-7.314Zm-9.258,27.153h7.482v-5.418h-7.482Zm15.227-27.239c.315-.326.66-.658.975-1.015a.658.658,0,0,0-.039-.97q-.975-1-1.981-1.977a.623.623,0,0,0-.9-.061c-.375.331-.706.714-1.026,1.043Zm-4.948-1.008,2.911,2.913.913-.91-2.891-2.915Zm-9.341,9.665c-.082.775-.18,1.575-.246,2.377-.028.345.186.521.526.494.477-.038.953-.1,1.429-.152l.919-.1Z"
                                    fill="#959595" />
                                <text id="Zakup_materiałów_" data-name="Zakup materiałów " transform="matrix(1, 0, 0, 1, 1586.214, 1363.042)" fill="#1a070d" font-size="21">
                                    <tspan x="-28.634" y="0">Zakup</tspan>
                                    <tspan x="-54.3" y="26">materiałów </tspan>
                                </text>
                            </g>
                            <g class="ico ico-3" data-tab="tab3" transform="translate(18.786)">
                                <g id="Ellipse_4_copy_2" data-name="Ellipse 4 copy 2" transform="translate(1878 1419)" fill="#959595" stroke="#fff" stroke-width="3">
                                    <circle cx="8" cy="8" r="8" stroke="none" />
                                    <circle cx="8" cy="8" r="6.5" fill="none" />
                                </g>
                                <path id="Shape_24_copy_5" data-name="Shape 24 copy 5"
                                    d="M1906,1375.21v28.107a2.3,2.3,0,0,1-1.682,1.682h-34.352a3,3,0,0,0-.3-.08,5.6,5.6,0,0,1-4.657-5.342q-.011-15.067,0-30.133a5.45,5.45,0,0,1,4-5.243c.266-.075.537-.135.806-.2h2.4a2.18,2.18,0,0,1,1.678,2.513v7.052h.376q8.464,0,16.927-.011a.915.915,0,0,0,.578-.257q4.131-4.1,8.239-8.23a3.852,3.852,0,0,1,1.509-1.066h.8a3.266,3.266,0,0,1,1.493,1.007c.371.4.758.783,1.154,1.155a3.346,3.346,0,0,1,1.036,1.521v.8a3.981,3.981,0,0,1-1.121,1.564c-1.057,1.036-2.1,2.089-3.141,3.137-.1.1-.189.2-.348.379.873,0,1.654,0,2.435,0a2.022,2.022,0,0,1,1.789.871A6.056,6.056,0,0,1,1906,1375.21Zm-32.114-.246v.486q0,8.868,0,17.736a2.071,2.071,0,0,1-2.241,2.249c-.547.006-1.1-.01-1.64.034a4.071,4.071,0,0,0-3.586,4.607,4.224,4.224,0,0,0,4.328,3.556q16.494.006,32.988,0c.662,0,.9-.234.9-.885q0-13.473,0-26.944c0-.635-.231-.867-.87-.869-1.108-.005-2.216.009-3.322-.009a.967.967,0,0,0-.771.313c-2.01,2.028-4.033,4.044-6.048,6.068a2.6,2.6,0,0,1-1.516.831,27.218,27.218,0,0,1-3.023.291c-3.082.037-6.165.013-9.247.013h-.463v7.491h16.376v-.417c0-.935,0-1.868,0-2.8,0-.528.269-.853.69-.848s.67.325.673.864c0,.04,0,.08,0,.12q0,4.844,0,9.689c0,1.123-.511,1.633-1.642,1.633q-6.546,0-13.091,0a1.711,1.711,0,0,1-.513-.056.668.668,0,0,1,.11-1.293,2.562,2.562,0,0,1,.4-.017h4.457v-5.45h-7.49v.5q0,4.343,0,8.688c0,.134.005.268-.007.4a.649.649,0,0,1-.61.626.661.661,0,0,1-.727-.545,2.555,2.555,0,0,1-.021-.478q0-8.788,0-17.576v-.508c-.145-.008-.223-.016-.3-.016-.588,0-1.175.008-1.762-.01a.653.653,0,0,1-.663-.661.678.678,0,0,1,.608-.681,2.9,2.9,0,0,1,.439-.015h11.213c.1-.979.215-1.891.29-2.8a2.881,2.881,0,0,1,.933-1.931c.452-.426.889-.868,1.407-1.376Zm-7.521,20.823c.552-.383,1.06-.789,1.617-1.111a6.508,6.508,0,0,1,3.5-.617c.857.014,1.042-.179,1.042-1.02v-26.653c0-.107.005-.214,0-.321a.69.69,0,0,0-.719-.7c-.373-.013-.747,0-1.12,0a4.114,4.114,0,0,0-4.314,4.332q0,12.866,0,25.733Zm31.138-26.163-7.326,7.327,2.905,2.907,7.325-7.314Zm-9.258,27.153h7.482v-5.418h-7.482Zm15.227-27.239c.315-.326.66-.658.975-1.015a.658.658,0,0,0-.039-.969q-.975-1-1.981-1.977a.623.623,0,0,0-.9-.061c-.375.331-.706.713-1.026,1.043Zm-4.948-1.008,2.911,2.913.913-.91c-.958-.965-1.93-1.946-2.891-2.916Zm-9.34,9.665c-.082.775-.18,1.575-.247,2.377-.028.345.186.521.526.494.477-.038.953-.1,1.429-.152l.919-.1Z"
                                    fill="#959595" />
                                <text id="Nadzór_budżetowy_" data-name="Nadzór budżetowy " transform="matrix(1, 0, 0, 1, 1887.214, 1314.042)" fill="#1a070d" font-size="21">
                                    <tspan x="-33.351" y="0">Nadzór</tspan>
                                    <tspan x="-52.479" y="26">budżetowy </tspan>
                                </text>
                            </g>
                            <g class="ico ico-4" data-tab="tab4">
                                <g id="Ellipse_4_copy_3" data-name="Ellipse 4 copy 3" transform="translate(2197 1477)" fill="#959595" stroke="#fff" stroke-width="3">
                                    <circle cx="8" cy="8" r="8" stroke="none" />
                                    <circle cx="8" cy="8" r="6.5" fill="none" />
                                </g>
                                <path id="Shape_24_copy_6" data-name="Shape 24 copy 6"
                                    d="M2223,1434.21v28.107a2.3,2.3,0,0,1-1.681,1.682h-34.353a2.979,2.979,0,0,0-.3-.08,5.6,5.6,0,0,1-4.657-5.342q-.011-15.067,0-30.133a5.45,5.45,0,0,1,4-5.243c.266-.075.537-.135.806-.2h2.4a2.18,2.18,0,0,1,1.679,2.513v7.051h.376q8.464,0,16.928-.011a.917.917,0,0,0,.578-.257q4.132-4.1,8.239-8.23a3.85,3.85,0,0,1,1.509-1.067h.8a3.262,3.262,0,0,1,1.493,1.007q.557.6,1.154,1.155a3.345,3.345,0,0,1,1.036,1.521v.8a3.982,3.982,0,0,1-1.121,1.564c-1.056,1.036-2.1,2.089-3.142,3.137-.1.1-.189.2-.348.379.872,0,1.654,0,2.435,0a2.022,2.022,0,0,1,1.789.871A6.045,6.045,0,0,1,2223,1434.21Zm-32.113-.246v.487q0,8.868,0,17.736a2.071,2.071,0,0,1-2.24,2.249c-.547.006-1.1-.01-1.64.034a4.071,4.071,0,0,0-3.586,4.607,4.224,4.224,0,0,0,4.327,3.556q16.494.006,32.988,0c.662,0,.9-.234.9-.885q0-13.473,0-26.943c0-.635-.231-.867-.87-.869-1.108-.005-2.215.009-3.323-.009a.967.967,0,0,0-.771.313c-2.01,2.028-4.033,4.044-6.048,6.068a2.6,2.6,0,0,1-1.516.831,27.151,27.151,0,0,1-3.023.291c-3.082.037-6.165.013-9.248.013h-.463v7.491h16.376v-.417c0-.935,0-1.868,0-2.8,0-.528.269-.854.69-.848s.67.325.674.864c0,.04,0,.08,0,.12q0,4.844,0,9.689c0,1.123-.511,1.633-1.642,1.633q-6.545,0-13.091,0a1.718,1.718,0,0,1-.513-.056.668.668,0,0,1,.111-1.293,2.553,2.553,0,0,1,.4-.017h4.457v-5.45h-7.49v.5q0,4.343,0,8.687c0,.134.006.268-.006.4a.65.65,0,0,1-.611.626.662.662,0,0,1-.727-.545,2.555,2.555,0,0,1-.021-.478q0-8.788,0-17.575v-.508c-.145-.008-.223-.016-.3-.016-.587,0-1.175.008-1.761-.011a.652.652,0,0,1-.662-.661.677.677,0,0,1,.607-.681,2.927,2.927,0,0,1,.439-.015h11.212c.1-.979.215-1.89.29-2.8a2.877,2.877,0,0,1,.933-1.931c.451-.426.889-.868,1.406-1.376Zm-7.522,20.824c.552-.383,1.06-.789,1.617-1.111a6.51,6.51,0,0,1,3.5-.617c.857.014,1.042-.179,1.042-1.02v-26.653c0-.107,0-.214,0-.321a.69.69,0,0,0-.72-.7c-.373-.013-.747,0-1.12,0a4.114,4.114,0,0,0-4.313,4.332q0,12.866,0,25.733Zm31.138-26.163-7.325,7.327,2.9,2.907,7.326-7.314Zm-9.258,27.153h7.482v-5.418h-7.482Zm15.227-27.239c.316-.326.66-.658.976-1.015a.657.657,0,0,0-.039-.969q-.975-1-1.98-1.977a.623.623,0,0,0-.9-.061c-.376.331-.706.713-1.026,1.043Zm-4.948-1.008,2.911,2.913.913-.91-2.891-2.916Zm-9.34,9.665c-.082.775-.18,1.575-.246,2.377-.029.345.186.521.525.494.478-.038.953-.1,1.429-.152l.919-.1Z"
                                    fill="#959595" />
                                <text id="Kontrola_nad_harmonogramem_" data-name="Kontrola nad harmonogramem " transform="matrix(1, 0, 0, 1, 2199.214, 1373.042)" fill="#1a070d" font-size="21">
                                    <tspan x="-58.575" y="0">Kontrola nad</tspan>
                                    <tspan x="-83.118" y="26">harmonogramem </tspan>
                                </text>
                            </g>
                            <g class="ico ico-5" data-tab="tab5">
                                <g id="Ellipse_4_copy_4" data-name="Ellipse 4 copy 4" transform="translate(2454 1639)" fill="#959595" stroke="#fff" stroke-width="3">
                                    <circle cx="8" cy="8" r="8" stroke="none" />
                                    <circle cx="8" cy="8" r="6.5" fill="none" />
                                </g>
                                <path id="Shape_24_copy_7" data-name="Shape 24 copy 7"
                                    d="M2480,1585.21v28.107a2.3,2.3,0,0,1-1.682,1.682h-34.352c-.1-.027-.2-.063-.3-.08a5.6,5.6,0,0,1-4.657-5.342q-.011-15.067,0-30.134a5.45,5.45,0,0,1,4-5.242c.267-.075.537-.135.806-.2h2.4a2.18,2.18,0,0,1,1.678,2.512v7.052h.376q8.463,0,16.928-.011a.915.915,0,0,0,.578-.257q4.132-4.1,8.239-8.23a3.852,3.852,0,0,1,1.508-1.067h.8a3.265,3.265,0,0,1,1.493,1.007c.371.4.758.783,1.154,1.155a3.343,3.343,0,0,1,1.036,1.521v.8a3.981,3.981,0,0,1-1.121,1.564c-1.057,1.037-2.1,2.089-3.142,3.137-.1.1-.189.205-.349.379.873,0,1.654,0,2.435,0a2.02,2.02,0,0,1,1.789.871A6.009,6.009,0,0,1,2480,1585.21Zm-32.114-.246v.486q0,8.868,0,17.736a2.072,2.072,0,0,1-2.241,2.249c-.547.006-1.1-.01-1.64.034a4.071,4.071,0,0,0-3.586,4.607,4.225,4.225,0,0,0,4.327,3.556q16.494.006,32.988,0c.662,0,.9-.233.9-.885q0-13.472,0-26.943c0-.635-.231-.867-.87-.87-1.108,0-2.216.01-3.323-.008a.965.965,0,0,0-.771.313c-2.01,2.028-4.033,4.043-6.048,6.068a2.6,2.6,0,0,1-1.515.831,26.988,26.988,0,0,1-3.024.291c-3.082.038-6.165.014-9.247.014h-.463v7.49h16.376v-.416c0-.935,0-1.868,0-2.8,0-.529.269-.854.69-.849s.67.326.674.864v.12q0,4.844,0,9.689c0,1.123-.511,1.633-1.642,1.633q-6.546,0-13.091,0a1.709,1.709,0,0,1-.513-.055.667.667,0,0,1,.11-1.293,2.555,2.555,0,0,1,.4-.017h4.457v-5.45h-7.49v.5q0,4.343,0,8.687c0,.134.005.268-.007.4a.65.65,0,0,1-.61.626.662.662,0,0,1-.727-.546,2.549,2.549,0,0,1-.021-.478q0-8.788,0-17.576v-.508c-.145-.008-.223-.016-.3-.017-.587,0-1.175.009-1.761-.011a.652.652,0,0,1-.663-.661.677.677,0,0,1,.608-.681,2.9,2.9,0,0,1,.439-.016h11.213c.1-.98.215-1.891.29-2.8a2.878,2.878,0,0,1,.933-1.931c.452-.426.888-.868,1.407-1.376Zm-7.521,20.823c.552-.383,1.06-.789,1.617-1.111a6.508,6.508,0,0,1,3.5-.617c.857.014,1.042-.18,1.042-1.02v-26.653c0-.107,0-.214,0-.32a.69.69,0,0,0-.719-.7c-.373-.013-.747,0-1.12,0a4.114,4.114,0,0,0-4.314,4.332q0,12.866,0,25.733Zm31.138-26.163-7.325,7.327,2.9,2.906,7.325-7.314Zm-9.258,27.154h7.482v-5.419h-7.482Zm15.228-27.239c.315-.326.66-.658.975-1.015a.657.657,0,0,0-.039-.969q-.975-1-1.98-1.977a.623.623,0,0,0-.9-.061c-.376.331-.706.714-1.026,1.043Zm-4.948-1.008,2.911,2.913.914-.91-2.891-2.915Zm-9.34,9.665c-.082.775-.18,1.575-.247,2.377-.029.345.186.521.526.494.478-.038.953-.1,1.429-.152l.919-.1Z"
                                    fill="#959595" />
                                <text id="Sprawdzone_ekipy_" data-name="Sprawdzone ekipy " transform="matrix(1, 0, 0, 1, 2461.964, 1523.811)" fill="#1a070d" font-size="21">
                                    <tspan x="-56.837" y="0">Sprawdzone</tspan>
                                    <tspan x="-26.224" y="26">ekipy </tspan>
                                </text>
                            </g>
                        </g>

                    </svg>
                </div>


            </div>
        </div>
        <?php } ?>
    </div>
</div>
