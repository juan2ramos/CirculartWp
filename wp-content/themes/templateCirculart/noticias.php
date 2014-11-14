<?php
/*
Template Name: noticias
*/
?>
<?php get_header(); ?>
<section id="noticias">
    
    <?php $home = new WP_Query('category_name=noticias');

                while ( $home->have_posts() ) : $home->the_post();
                    ?>
    <article>
        <h2 class="noticias"><?php the_title(); ?></h2>
        <img src="<?php
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(430, 335), false, '');
                        echo $src[0];
                        ?>" alt=""/>
                        <?php the_content(); ?> 

    </article>
    <?php endwhile?>
</section>

<?php get_footer(); ?>