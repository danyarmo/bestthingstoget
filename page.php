<?php 
//page.php controls the layout of the pages corresponding to menu links
get_header(); // header goes here

if(have_posts()) :
    while(have_posts()) : the_post();

     ?>

    <h2> <?php the_title(); ?></h2>
    <?php the_content( ); ?>

<?php endwhile;

else :
    echo '<p>No content found</p>' ;

endif;

get_footer();

?>