<?php get_header(); ?>

<main>
    <?php 
         if(have_posts( )) {
            while(have_posts( )) the_post();
         
         }
    ?>
    <?php the_title( );?>

    <?php the_content( );?>

    <?php end_while(); ?>

</main>


<?php get_footer(); ?>