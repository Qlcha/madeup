<?php get_header(); ?>
<section>
    <!-- contenu des derniers articles-->

    <?php while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <p> &copy; <?php the_author(); ?>, <?php the_date(''); ?></p>
            <a href="<?php the_permalink(); ?>" class="more">Дальше</a>
            <p><?php comments_popup_link('Нет комментариев', '1 комментарий', 'комментариев: %'); ?></p>
            <?php if(has_post_thumbnail()) { ?>
                <p><?php the_post_thumbnail('thumbnail'); ?></p>
            <?php } ?>
        </article>
    <?php endwhile; ?>
    <!-- instruction pour la pagination-->
    <ul id="pagination">
        <li><?php previous_posts_link('назад'); ?></li>
        <li><?php next_posts_link('вперед'); ?></li>
    </ul>
</section>

<?php get_footer(); ?>
