<!--Page accueil-->

<div class="home">
<!--Récupère le header-->
<?php get_header(); ?>

<!--Contenus-->
<div class="content row center-block">
    <!--Contenus-->
    <section class="col-md-12 row center-block home_content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                    <!--Afficher le titre de l'article-->
                    <h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <!--Afficher le contenu de l'article -->
                    <div class="post_content">
                        <?php the_content(); ?>
                    </div>
            <?php endwhile; ?>
            <!--Récupère la Sidebar-->
        <?php else : ?>
            <p>Désolé, aucun article ne correspond à vos critères.</p>
        <?php endif; ?>
    </section>
</div>
<?php get_footer(); ?>
</div>
</body>
</html>
