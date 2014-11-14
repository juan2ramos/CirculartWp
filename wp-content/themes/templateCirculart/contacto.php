<?php
/*
Template Name: contacto
*/
?>
<?php get_header(); ?>
<section id="contacto">
    <ul>
    <?php $home = new WP_Query('category_name=contacto');

                while ( $home->have_posts() ) : $home->the_post();
                    ?>
        <li>
            <img src="<?php
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(430, 335), false, '');
                        echo $src[0];
                        ?>" alt=""/>
            <div class="name-contact">
                <div class="contend-p"><span class="arrow"></span><p><?php the_title(); ?></p></div>
                <div class="contend-p">
                    <div class="contend-arrow">
                        <span class="arrow-top"></span>
                        <span class="arrow-buttom"></span>
                    </div>
                    <div class="width"> <?php the_content(); ?> </div>

                </div>
            </div>
        </li>

 <?php endwhile?>
                    </ul>



<?php get_footer(); ?>