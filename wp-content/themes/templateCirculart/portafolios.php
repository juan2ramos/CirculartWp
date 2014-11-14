<?php
/*
Template Name: portafolios
*/
?>
<?php get_header(); ?>

<section id="portafolio">
    <h2 class="portafolio">Portafolios</h2>
    <ul>
    <?php $home = new WP_Query('category_name=portafolios');

                while ( $home->have_posts() ) : $home->the_post();
                    ?>

    
        <li>

            <img src="<?php
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(430, 335), false, '');
                        echo $src[0];
                        ?>" alt=""/>

            <div class="contend-portafolio">
                <?php the_content(); ?> 
            </div>
        </li>

                <?php endwhile?>

    </ul>
</section>
<?php get_footer(); ?>