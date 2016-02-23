<?php  /*Si il y a des commentaires */
if($comments): ?>
    <h3>  <?php  comments_number('Нет комментариев', '1 комментарий', 'комментариев: %') ?></h3>
    <ol>
        <?php foreach($comments as $comment) :   ?>
            <li>
                <strong><?php comment_author_link(); ?></strong>
                <p><?php comment_date('j M Y'); ?> a <?php comment_time(); ?> </p>
                <p><?php comment_text() ?></p>
            </li>
        <?php endforeach;   ?>
    </ol>


<?php endif; ?>
<?php include(TEMPLATEPATH.'/form_comment.php'); ?>
