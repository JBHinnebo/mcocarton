<?php get_header(); ?>

<?php

if(!empty($_GET['type']) && !empty($_GET['code'])) {
  if ('error' == $_GET['type']) {
    if (1 == $_GET['code']) {
      $message_error = 'Tous les champs sont obligatoire';
    }
    else {
      $message_error = 'Une erreur s\'est produite pendant l\'envoi du mail, merci de réessayer';
    }
  }
  else {
    $message_success = 'Votre message a bien été envoyé, merci. Je vous répondrai au plus vite.';
  }
}

 ?>

<section id="main">

    <h3>  ATELIER CARTON</h3>

    <section class="flex_contact">

        <article class="article_1_contact">
            <h4>Renseignements & Informations</h4>
            <p>
                Vous souhaitez avoir quelques informations complémentaires sur les ateliers que vous sont proposés... N'hésitez pas à nous contacter.
                Nous vous répondrons dans les plus brefs délais et nous pourrons convenir ensemble d'une date pour venir découvrir les ateliers.
                Vous pouvez aussi prendre directement rendez-vous auprés du secrétariat de l'ADEP:
            </p>
            <p>
                <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
                <span>+33 3 20 02 79 68<span> <br>
		<span><i class="fa fa-skype fa-2x" aria-hidden="true"></i> <a href="skype:[Michel Castelain]?call">Skype</a> </span>
            <p>

        </article>



    <!--////////contact form ///////-->
        <form class="formulaire_contact" action="cible.php" method="post">


            <i class="fa fa-user bigicon"></i><br>
            <input type="text" name="lastname" placeholder="NOM">
            <br>
            <i class="fa fa-user bigicon"></i><br>
            <input type="text" name="firstname" placeholder="PRENOM">
            <br>
            <i class="fa fa-envelope-o bigicon"></i><br>
            <input type="text" name="email" placeholder="EMAIL">
            <br>
            <i class="fa fa-phone-square bigicon"></i><br>
            <input type="text" name="tel" placeholder="TELEPHONE">
            <br>
            <i class="fa fa-pencil-square-o bigicon"></i><br>
            <textarea name="" id="" cols="30" rows="10" name="message" placeholder="Veuillez nous laisser votre message, nous vous répondrons dans les plus brefs délais."></textarea><br>
            <button type="submit" class="button-formulaire" >contacter</button>
        </form>
        <!--////////end contact form///////-->
    </section>

</section>



<?php get_footer(); ?>
