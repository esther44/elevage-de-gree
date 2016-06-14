<!--Page accueil-->

<div class="home">
<!--R�cup�re le header-->
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
            <!--R�cup�re la Sidebar-->
        <?php else : ?>
            <p>D�sol�, aucun article ne correspond � vos crit�res.</p>
        <?php endif; ?>
    </section>
</div>
<?php get_footer(); ?>
</div>
</body>
</html>
