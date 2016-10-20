<?php get_header(); ?>




<div class=container>


 <section class="journal">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article>
          <img class="photoProfile" src="" alt="photo de profile"><h3 class="titre_section">  <?php the_author();?> </h3>
          <div class="date_du_post">
              <h5 class="date_gauche"> <?php the_date(); ?></h5>
              <h5 class="date_droite"></h5>
          </div>
      </article>


      <div class="journal_corps">
          <figure>
            <img src="" alt="photo article" width="430px">
          </figure>

          <article>
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
          </article>
      </div>

<?php endwhile; else : ?>
	<p><?php _e( "Désolé, aucun post n'est disponnible" ); ?></p>
<?php endif; ?>

    </section>

</div>

<?php get_footer(); ?>
