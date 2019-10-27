<aside class="sidebar">
	<main>
		<section class="sidebar__about">
			<h2>About <span>&mdash;&mdash;</span></h2>
			<p>Countertype.xyz is a little place on the internet where you can buy typefaces made by Counter Brand & Type&mdash;a tiny, but mighty, Florida-based branding design studio, led by Michael Forrest and friends.</p>
		</section>
		<nav class="sidebar__nav--primary">
			<h2>Typefaces <span>&mdash;&mdash;</span></h2>	
			<?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>	
		</nav>
	</main>
	<section class="sidebar__nav--secondary">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary-nav' ) ); ?>	
	</section>
</aside>