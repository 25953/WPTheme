<?php 
get_header();
?>
<div class="container">
<main>
  <div>
    <h2>De zoekresultaten voor <em class="zoek-term-in-kop"><?php echo get_search_query(); ?></em></h2>
<?php
 if ( have_posts() ) :
 while ( have_posts() ) : the_post() ?>
<article class="bericht">
<a href="<?php the_permalink() ?>">
  <h3>
    <?php the_title()?>
  </h3>
</a>
<?php the_content()?>
</article>
<?php endwhile;
else :
echo 'Geen berichten gevonden voor de zoekterm <em class="zoek-term-in-kop">'.get_search_query();?></em>
<?php
endif;
?>
</div>
<aside>
<?php dynamic_sidebar('widget_aside'); ?>
</aside>
</main>
</div>
<?php
get_footer();
?>
