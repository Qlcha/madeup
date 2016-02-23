<?php get_header(); ?>
    <section>
        <!--    Contenu des derniers articles -->
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2> <?php the_title(); ?> </h2>
                <p>  <?php the_content() ?></p>
                <p>  &copy; <?php the_author() ?>, <?php the_date('') ?> </p>

            </article>
        <?php endwhile;  ?>
    </section>
<?php  comments_template(); ?>
<?php get_footer(); ?>