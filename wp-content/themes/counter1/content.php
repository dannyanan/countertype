<main class="home">

<?php get_sidebar(); ?> <!--Loads in Sidebar Navigation Content-->
<div id="menuButton">
  <button>|||</button>
</div>
<section class="content">


<?php while ( have_posts() ) : the_post() ?>

    <a class="typeface" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <section class="thumb"><?php the_post_thumbnail()?></section>
        <ul>
          <li><?php the_field('catalog_number')?></li>
          <li>&nbsp;&ndash;&nbsp;</li>
          <li><?php the_field('typeface_name')?></li>
          <li>&nbsp;&ndash;&nbsp;</li>
          <li><?php the_field('typeface_category')?></li>
          <li>&nbsp;&ndash;&nbsp;</li>
          <li>Price: $<?php the_field('typeface_price')?></li>
        </ul>
    </a>
<?php endwhile;




  ?>

</section>

</main>