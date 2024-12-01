<?php
  $formtext = get_field('formtext');
?>

<section class="contactForm">
<article>
  <header>
    <h1 class="ContactHeader"><?php echo $formtext; ?></h1>
  </header>
    <?php echo do_shortcode ('[contact-form-7 id="75513d2" title="GreenMarineContact"]'); ?>
  </section>
</article>
  <section id="scrolltotopbutton">
    <?php get_template_part ("template-parts/scrolltotop"); ?>
  </section>