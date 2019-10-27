<main class="typeface--single">

<?php get_sidebar(); ?> <!--Loads in Sidebar Navigation Content-->

    <section class="content">

        <a href="<?php echo get_home_url(); ?>">&lt; back to home</a>
        <header>
            <section class="typeface__top">   
                <h6><?php the_field('typeface_name'); ?> &mdash;&mdash;</h6>
                <ul>
                    <li><?php the_field('catalog_number'); ?></li>
                    <li>&nbsp;-&nbsp;</li>
                    <li><?php the_field('typeface_name'); ?></li>
                    <li>&nbsp;-&nbsp;</li>
                    <li><?php the_field('typeface_category'); ?></li>
                </ul>
            </section>
            <section class="typeface__description">
                <p><?php the_field('typeface_description'); ?></p>
            </section>
        </header>
        
        <section class="typeface__hero">
            <img src="<?php the_field('typeface_hero'); ?>" alt="Orwell">
        </section>

        <section class="typeface__typeTester">
            <?php get_template_part('content', 'typetester'); ?> <!--Content for TypeTester-->
        </section>

        <section class="typeface__spec spec1">
            <img src="<?php the_field('typeface_specimen_1'); ?>" alt="">
        </section>

        <section class="typeface__spec spec2">
            <img src="<?php the_field('typeface_specimen_2'); ?>" alt="">
        </section>

    </section>
    
</main>

