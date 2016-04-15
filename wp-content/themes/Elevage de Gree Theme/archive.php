<!--R�cup�re le header-->
<?php get_header(); ?>

<!--Contenus-->
<div id="content">
    <!--Si il y a des articles, parmi les articles, afficher celui/ceux qu'il faut-->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="post" id="post-<?php the_ID(); ?>">
                <!--Afficher le titre de l'article-->
                <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <!--Afficher informations postmetadata (date, auteur, cat�gorie, commentaires, auteur...)-->
                <p class="postmetadata">
                    <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?>
                    | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>   </p>
                <!--Afficher le contenu de l'article -->
                <div class="post_content">
                    <!--the_excertp() affiche l'extrait de l'article en cours -->
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<!--R�cup�re la Sidebar-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div>
</body>
</html>