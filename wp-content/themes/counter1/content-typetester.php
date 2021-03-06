<div id="typeTester">
        <section class="options">
            <!--TITLE -->
            <section class="testIt">
                <h6>Test It!</h6>
            </section>
            <!--END TITLE-->

            <!--FONT SIZE-->
            <section class="fontSize">
                <label for="size" id="label--size">
                    Size 
                    <span id="sizeDetail">24px</span>
                </label>
                <input type="range" id="size" min="8" max="120" value="24">
            </section>
            <!--END FONT SIZE-->

            <!--LINE HEIGHT / LEADING OPTION-->
            <section class="lineHeight">
                <label for="leading" id="label--leading">
                    Leading 
                    <span id="leadingDetail">100%</span>
                </label>
                <input type="range" id="leading" min="50" max="300" value="110">
            </section>
            <!--END LINE HEIGHT-->

            <!-- KERNING OPTION-->
            <section class="letterSpacing">
                <label for="kerning" id="label--kerning">
                    Kerning 
                    <span id="kerningDetail">0px</span>
                </label>
                <input type="range" id="kerning" min="-10" max="100" value="0">
            </section> 
            <!--END KERNING-->

            <!--ALIGNMENT OPTION-->
            <section class="align">
                <ul>
                    <li class="alignBtn alignLeft" data-value="left"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/alignLeft.svg"></li>
                    <li class="alignBtn alignCenter" data-value="center"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/alignCenter.svg"></li>
                    <li class="alignBtn alignRight" data-value="right"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/alignRight.svg"></li>
                </ul>
            </section>
            <!--END ALIGNMENT-->

            <!--LIGHTSWITCH OPTION-->
            <section class="lights">
                <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/on.svg" data-src-on="<?php echo get_bloginfo( 'template_directory' );?>/img/on.svg" data-src-off="<?php echo get_bloginfo( 'template_directory' );?>/img/off.svg" id="switch">
                <h6 class="status">on</h6>
            </section>
            <!--END LIGHTSWITCH-->

            <!-- TYPEFACE SELECTION OPTION -->
            <!--
                <select onchange="updateFont(this.value)">
                    <option value="sans-serif">Sans Serif</option>
                    <option value="serif">Serif</option>
                    <option value="monospace">  Monospace</option>
                    <option value="cursive">Cursive</option>
                </select> 
            -->
        </section> <!--ENDS TOP OPTIONS SECTION-->
        
        <section id="typeSpecimen" data-font-family="<?php the_field('typeface_name'); ?>">
            <p contenteditable="true">THIS TEXT IS EDITABLE</p>
        </section>

        <!-- <section class="opentype">
            <h6>Stylistic Alternatives</h6>
            <ul class="otList">
                <li><button id="ss00">01</button></li>
                <li><button id="ss01">02</button></li>
                <li><button id="ss02">03</button></li>
                <li><button id="ss03">04</button></li>
                <li><button id="ss04">05</button></li>
                <li><button id="ss05">06</button></li>
            </ul>
        </section> -->

    </div>