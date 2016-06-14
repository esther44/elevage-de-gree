<!-- un article -->

<!--Récupère le header-->
<?php get_header(); ?>

<!--Contenus-->
<div class="content row center-block article">
    <!--Contenus-->
    <section class="col-md-12 row center-block">
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

                    <?php foreach ((get_the_category()) as $cat) {
                        if (!($cat->cat_ID == '10' || $cat->cat_ID == '3' || $cat->cat_ID == '4' || $cat->cat_ID == '12')) echo '<span class="annee">' . $cat->cat_name . '</span>';
                    } ?>
                    <!--                        </p>-->
                    <!--Afficher le contenu de l'article -->
                    <div class="post_content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <div class="prev">
                <!--nom des articles suivants et précédents-->
                <?php previous_post_link('&laquo; %link', '%title', true); ?></div>
            <div class="next">
                <?php next_post_link('%link &raquo;', '%title', true); ?>
            </div>
            <!--Lien permettant de modifier la page dans l'administration-->
            <?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
        <?php else : ?>
            <p>Désolé, aucun article ne correspond à vos critères.</p>
        <?php endif; ?>
    </section>

    <!--Récupère la Sidebar-->
    <!--    --><?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>
</body>
</html>