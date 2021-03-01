<?php get_header(); ?>
<div class="pageContainer">
<h1>Search Results</h1>
<?php
// Start the main loop
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        the_title('<h2>', '</h2>');
		the_excerpt();
    endwhile;
endif;
?>
</div>

<?php get_footer(); ?>