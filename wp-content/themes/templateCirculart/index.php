<?php get_header(); ?>

<section id="que-es">
    
    <?php $home = new WP_Query('category_name=home');

                while ( $home->have_posts() ) : $home->the_post();
                    ?>
                    <h2 class="que-es"><?php the_title(); ?></h2>
                    <article>
				        <img src="<?php
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(430, 335), false, '');
                        echo $src[0];
                        ?>" alt=""/>
				         <p> <?php the_content(); ?> </p>
	
				    </article>
                <?php endwhile?>
                    </ul>

    
</section>
<?php get_footer(); ?>