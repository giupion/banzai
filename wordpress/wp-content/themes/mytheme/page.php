

<?php get_header();//index homepage sito
//con ultimi articoli su letteura non dovrebbe farti vedere page ma è lunica e no nfa altrimenti
//è il template di tutte le pagine che vado a creare con wordpress?>

<div class="container text-center">

    <h1 class="text-center "><?php bloginfo( 'name' ); ?></h1>
    <?php
                    if ( is_user_logged_in() ) {
                        echo '<h1 class="text-center my-3 ">Benvenuto TokyoLover!</h1>';
                    } else {
                        echo '<h1 class="text-center my-3 ">Benvenuto visitatore!</h1>';
                    }
                ?>
    <h2 class="text-center my-3 fs-3"><?php bloginfo( 'description' ); ?></h2>
    </div>

    



    <div class="container">
  <div class="row">
    <div class="col-8">
    
    </div>
    <div class="col-4">
      <?php get_sidebar();?>
    </div>
    
  </div>
</div>


<?php get_footer();?>