<?php
  //Template Name: Home
?>

<?php
  get_header();
?>

<div class="clear"></div>
<br />
<br />
<div class="w50 time-descricao">
  <h2><?php the_field('chamada_topo')?></h2>
  <p><?php the_field('descricao_topo')?></p>
  <br />

  <a target="_blank" href="https://wa.me/5532991200367">Entre em contato</a>
</div><!--w50-->
<div class="w50 time-imagem">
  <img src="<?php echo get_theme_root_uri(); ?>/testewp/images/equipe.png" />
</div><!--w50-->
<div class="clear"></div>
</div><!--center-->
</section><!--topo-->
<div class="circle"><i class="fas fa-angle-down"></i></div>

<section class="clientes-slider">

<div class="center">
<div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">
<img src="<?php echo get_theme_root_uri(); ?>/testewp/images/amazon.jpg" />
<img src="<?php echo get_theme_root_uri(); ?>/testewp/images/uber.jpg" />
<img src="<?php echo get_theme_root_uri(); ?>/testewp/images/walmart.jpg" />
<img src="<?php echo get_theme_root_uri(); ?>/testewp/images/amazon.jpg" />
<img src="<?php echo get_theme_root_uri(); ?>/testewp/images/uber.jpg" />
<img src="<?php echo get_theme_root_uri(); ?>/testewp/images/walmart.jpg" />
</div>
</div><!--center-->
</section>


<section class="diferenciais">

<div class="center">
  <h2>Conheça um pouco do meu trabalho</h2>
</div>

</section>

<section class="sobre-time">
<div class="center">
<div class="center">

  <?php echo do_shortcode('[caf_filter id="58"]'); ?>



</div><!--w50-->
<div class="center">
<?php
$query = new WP_Query($args);
    while ($query->have_posts() ) : $query->the_post(); ?>
    <article>
         <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
    </article>
    
  <?php endwhile; ?>
</div>
<div class="clear"></div>
</div>
</section>

<section class="depoimentos">
<div class="center">
<h2>Depoimentos</h2>
<div class="depoimentos-box">
  <div class="depoimento-single">
    <p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
    <p>Guilherme Grillo</p>
    <img src="<?php echo get_theme_root_uri(); ?>/testewp/images/autor.jpg" />
  </div><!--depoimento-single-->
  <div class="depoimento-single">
    <p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
    <p>Guilherme Grillo</p>
    <img src="<?php echo get_theme_root_uri(); ?>/testewp/images/autor.jpg" />
  </div><!--depoimento-single-->
  <div class="depoimento-single">
    <p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
    <p>Guilherme Grillo</p>
    <img src="<?php echo get_theme_root_uri(); ?>/testewp/images/autor.jpg" />
  </div><!--depoimento-single-->
</div><!--depoimentos-box-->
</div>
</section>

<?php
  get_footer();
?>


