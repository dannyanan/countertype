<main class="home">

<?php get_sidebar(); ?> <!--Loads in Sidebar Navigation Content-->

<section class="content">
  <?php 

  // query
  $the_query = new WP_Query(array(
    'post_type'			  => 'post',
    'meta_key'		  	=> 'order',
    'orderby'		    	=> 'order',
    'order'			    	=> 'ASC'
  )); 

  if ( $the_query->have_posts() ) : 
      while ( $the_query->have_posts() ) : $the_query->the_post();
  ?>
  <a class="typeface" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <section class="thumb"><?php the_post_thumbnail()?></section>
      <ul>
        <li><?php the_field('catalog_number')?></li>
        <li>&nbsp;&ndash;&nbsp;</li>
        <li><?php the_field('typeface_name')?></li>
        <li>&nbsp;&ndash;&nbsp;</li>
        <li><?php the_field(' typeface_category')?></li>
        <li>&nbsp;&ndash;&nbsp;</li>
        <li>Price:&nbsp;<?php the_field('typeface_price')?></li>
      </ul>
  </a>
    <?php
      endwhile;
  else :
      _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
  endif;

  ?>

</section>

</main>