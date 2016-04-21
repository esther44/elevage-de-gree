<!--Liste des articles-->

<!--Récupère le header-->
<?php get_header(); ?>

<!--Contenus-->
<div class="content row center-block articles">
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
                    <!--Afficher le contenu de l'article -->
                    <div class="post_content">
                        <!--the_excertp() affiche l'extrait de l'article en cours -->
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>

    </section>


    <!--Récupère la Sidebar-->
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
</div>
</body>
</html>