<!--permet d�afficher les articles un par un -->

<!--R�cup�re le header-->
<?php get_header(); ?>

<!--Contenus-->
<section id="content">
    <!--Si il y a des articles, parmi les articles, afficher celui/ceux qu'il faut-->
    <?php if (have_posts()) : ?>
        <!--nom des articles suivants et pr�c�dents-->
        <?php previous_post_link() ?> - <?php next_post_link() ?>
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
                </p>
                <!--Afficher le contenu de l'article -->
                <div class="post_content">
                    <?php the_content(); ?>
                    <!--Affiche les commentaires des articles (du fichier comments.php)-->
                    <div class="comments-template"> <?php comments_template(); ?> </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>D�sol�, aucun article ne correspond � vos crit�res.</p>
    <?php endif; ?>
</section>

<!--R�cup�re la Sidebar-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div>
</body>
</html>