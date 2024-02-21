<?php get_header();?>
<div class="container text-center ">
    
    <h1 class="text-center my-3 text-dark fs-3"><?php bloginfo( 'name' ); ?></h1>
    <h2 class="text-center my-3  text-dark"><?php bloginfo( 'description' ); ?></h2>
<?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        the_title('<h2 >', '</h2>');
                        /* the_content(); */
                        the_post_thumbnail();
                        the_excerpt();
                    endwhile;
                else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;
                ?>

</div>
<div id="root"></div>


    <div class="container ">
  <div class="row">
    <div class="col-8">
    Articolo Tokyo
    </div>
    <div class="col-4">
      <?php get_sidebar();?>
    </div>
    
  </div>
</div>
<h1>Lista Utenti</h1>
<div id="app"></div>

    <script src="./assets/js/custom-script.js"></script>
   

    <?php get_footer();?>