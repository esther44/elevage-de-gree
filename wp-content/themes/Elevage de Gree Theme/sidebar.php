<!--SIDEBAR-->
<!--<aside class="sidebar">-->
<aside class="sidebar">
    <ul>
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
            <!--Champ de recherche-->
            <li id="search">
                <?php include(TEMPLATEPATH . '/searchform.php'); ?>
            </li>
            <!--Calendrier-->
            <li id="calendar">
                <h2>Calendrier</h2><?php get_calendar(); ?>
            </li>
            <!--Cat�gories-->
            <li>
                <h2>Categories</h2>
                <!--sort_column=name � trier la liste par ordre alphab�tique,-->
                <!--optioncount=1? afficher le nombre de billets pour chaque cat�gorie. Si on avait pris le chiffre 0 � la place de 1, le nombre de billets ne s�afficherait pas.-->
                <!--hierarchical=0? ne permet pas l�affichage des sous-cat�gories. Si vous voulez les voir appara�tre, mettez 1 � la place de 0.-->
                <ul> <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=1'); ?> </ul>
            </li>
            <!--liste des pages du site -->
            <?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
            <!--liste des archives par mois-->
            <li>
                <h2>Archives</h2>
                <ul> <?php wp_get_archives('type=monthly'); ?>   </ul>
            </li>
        </ul>
        <!--liste blogroll (sites que l'on aime bien)-->
        <?php get_links_list(); ?>
        <!--infos meta-->
        <li><h2>Infos Meta</h2>
            <ul> <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
            </ul>
        </li>
    <?php endif; ?>
</aside>
<!--</aside>-->