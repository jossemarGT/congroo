<article <?php post_class('fade-effect'); ?>>
  <header class="excerpt-header">
    <img class="bg-img"
    src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )[0]; ?>"
    >
    <div class="header-body">
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php get_template_part('templates/entry-meta'); ?>
      <a class="read-more" href="<?php the_permalink(); ?>" title="Read more">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only"><?php _e('Read more'); ?></span>
      </a>
    </div>
  </header>
  <div class="entry-summary sr-only">
    <?php the_excerpt(); ?>
  </div>
</article>
