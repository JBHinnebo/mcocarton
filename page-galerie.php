<?php get_header(); ?>


<!--////////CORPS DE TEXTE///////-->
        <section id="main">
            <h3>Mes Réalisations</h3>

<?php

	$args = array(
		'post_type' => 'portfolio'
	);

	$query = new WP_Query( $args );

?>

                <ul id="galleryPhoto">

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <li><a href="<?php the_permalink(); ?>">
				 <?php the_post_thumbnail('large'); ?>
        </a> </li>

<?php endwhile; endif; wp_reset_postdata(); ?>



                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-02.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-02.JPG'?>  alt="Présentoire Photophore" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-03.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-03.JPG'?>  alt="Vase" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-04.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-04.JPG'?>  alt="Lampe d'Ambiance" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-05.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-05.JPG'?>  alt="Lampe de Table" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-06.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-06.JPG'?>  alt="Support de Téléphone" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-07.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-07.JPG'?>  alt="Tabouret n°1" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-08.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-08.JPG'?>  alt="Bougeoir" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-09.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-09.JPG'?>  alt="Cadre Photo-relief" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-10.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-10.JPG'?>  alt="Cochon Rose" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-11.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-11.JPG'?>  alt="Ballon de Rugby" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-12.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-12.JPG'?>  alt="Table de Chevet" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-13.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-13.JPG'?>  alt="Fauteuil" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-15.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-15.JPG'?>  alt="Boite à Bigoux" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-16.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-16.JPG'?>  alt="Tabouret n°2" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-17.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-17.JPG'?>  alt="Boite à Crayons" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-18.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-18.JPG'?>  alt="Valise" ></a> </li>
                    <li><a href=<?php echo get_template_directory_uri().'/img/450px/gallery-21.JPG'?>><img src=<?php echo get_template_directory_uri().'/img/200px/gallery-21.JPG'?>  alt="Bibliothèque" ></a> </li>

                </ul>
        </section>


<script type="text/javascript">

var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $caption = $("<h5></h5>");


//An image to overlay
$overlay.append($image);

//A caption to overlay
$overlay.append($caption);

//Add overlay
$("body").append($overlay);

//Capture the click event on a link to an image
$("#galleryPhoto a").click(function(event){

  event.preventDefault();

  var imageLocation = $(this).attr("href");
  //Update overlay with the image linked in the link
  $image.attr("src", imageLocation);

  //Show the overlay.
  $overlay.show();

  //Get child's alt attribute and set caption
  var captionText = $(this).children("img").attr("alt");
  $caption.text(captionText);
});

//When overlay is clicked
$overlay.click(function(){
  //Hide the overlay
  $overlay.hide();
});

</script>


<?php get_footer(); ?>
