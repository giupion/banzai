
<?php get_header();//index homepage sito
//con ultimi articoli su letteura non dovrebbe farti vedere page ma è lunica e no nfa altrimenti
//è il template di tutte le pagine che vado a creare con wordpress
//se clicclo su categorie mi manda su homepage quindi creo archive
//fdhjsdbfkdjbs
?>

<div class="container">

    <h1 class="text-center">archivio:<?php bloginfo( 'name' ); ?></h1>
   
    <h2 class="text-center"><?php bloginfo( 'description' ); ?></h2>
    </div>
    <div class="container">
  <div class="row">
    <div class="col-8">
      Column
    </div>
    <div class="col-4">
      <?php get_sidebar();?>
    </div>
    
  </div>
</div>


<?php get_footer();?>