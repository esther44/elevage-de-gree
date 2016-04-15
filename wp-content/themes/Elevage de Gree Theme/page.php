<!--Récupère le header-->
<?php get_header(); ?>
<div id="content">
    <div class="content row center-block">
        <!--Contenus-->
        <section class="col-md-9 row center-block">
            <!--Si il y a des articles, parmi les articles, afficher celui/ceux qu'il faut-->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post row" id="post-<?php the_ID(); ?>">
                        <!--Afficher le titre de la page -->
                        <h2>
                            <a href="<?php the_permalink(); ?>" title="
                    <?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <!--Afficher le contenu de la page -->
                        <div class="content">
                            <!--the_excertp() affiche l'extrait de la page en cours -->
                            <?php //the_excerpt(); ?>
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
                <!--Lien permettant de modifier la page dans l'administration-->
                <?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
            <?php else : ?>
                <h2>Oooopppsss...</h2>
                <p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici
                    .</p> <?php include(TEMPLATEPATH . "/searchform.php"); ?>
            <?php endif; ?>
        </section>

        <!--Récupère la Sidebar-->
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
</div>
</body>
</html>