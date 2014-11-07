<article <?php post_class('fade-effect'); ?>>
  <header class="header excerpt-header">
    <img class="bg-img"
    src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )[0]; ?>"
    >
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_template_part('templates/entry-meta'); ?>
    <a href="<?php the_permalink(); ?>"><span class="sr-only"><?php _e('Read more'); ?></span><a>
  </header>
  <div class="entry-summary sr-only">
    <?php the_excerpt(); ?>
  </div>
</article>
