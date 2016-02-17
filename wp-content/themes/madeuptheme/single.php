<?php get_header(); ?>
    <section>
        <!--    Contenu des derniers articles -->
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2> <?php the_title(); ?> </h2>
                <p>  <?php the_content() ?></p>
                <p>  Article écrit par <?php the_author() ?> en date <?php the_date('') ?> </p>

            </article>
        <?php endwhile;  ?>
    </section>
<?php  comments_template(); ?>
<?php get_footer(); ?>