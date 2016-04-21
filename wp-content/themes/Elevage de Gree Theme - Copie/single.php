<!-- un article -->

<!--Récupère le header-->
<?php get_header(); ?>

<!--Contenus-->
<div class="content row center-block article">
    <!--Contenus-->
    <section class="col-md-9 row center-block">
        <!--Si il y a des articles, parmi les articles, afficher celui/ceux qu'il faut-->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="post row" id="post-<?php the_ID(); ?>">
                    <!--Afficher le titre de l'article-->
                    <h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <!--Afficher informations postmetadata (date, auteur, catégorie, commentaires, auteur...)-->
                    <!--                        <p class="postmetadata">-->
                    <!--                            --><?php //the_time('j F Y') ?><!-- par -->
                    <?php //the_author() ?><!-- |-->
                    <!--                            Cat&eacute;gorie: --><?php //the_category(', ') ?>
                    <!--                        </p>-->
                    <!--Afficher le contenu de l'article -->
                    <div class="post_content">
                        <?php the_content(); ?>
                        <!--Affiche les commentaires des articles (du fichier comments.php)-->
                        <!--                            <div class="comments-template"> -->
                        <?php //comments_template(); ?><!-- </div>-->
                    </div>
                </article>
            <?php endwhile; ?>
            <div class="prev_next">
                <!--nom des articles suivants et précédents-->
                <?php previous_post_link('&laquo; %link', '%title', true); ?> - <?php next_post_link('%link &raquo;', '%title', true); ?>
            </div>
            <!--Lien permettant de modifier la page dans l'administration-->
            <?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
        <?php else : ?>
            <p>Désolé, aucun article ne correspond à vos critères.</p>
        <?php endif; ?>
    </section>

    <!--Récupère la Sidebar-->
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
</body>
</html>