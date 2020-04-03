<?php get_header(); ?>

<!-- Page d'erreur 404 -->
<div class="container">
  <div class="row m-5">
    <h1 class="text-center m-2">
      <?php _e( 'You are trying to access a page which does not exist!', 'btre_theme' ); ?>
    </h1>
    <p class="text-center m-5">
      <?php _e( 'Please come to the previous page or try another URL address.', 'btre_theme' ); ?>
    </p>
  </div>
</div>

<?php get_footer(); ?>