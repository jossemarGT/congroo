<article <?php post_class(get_post_meta($post->ID, 'post-thumbnail-bg-tone')); ?>>
  <header class="excerpt-header">
    <img class="bg-img"
    src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )[0]; ?>"
    >
    <div class="header-body">
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php get_template_part('templates/entry-meta'); ?>
      <a class="round-link share-facebook" href="<?php the_permalink(); ?>" title="<?php _e('Share this post', 'roots'); ?>">
        <span class="icon glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only"><?php _e('Share this post', 'roots'); ?></span>
      </a>
      <a class="round-link read-more"
        href="<?php the_permalink(); ?>"
        data-post-id="<?php echo $post->ID; ?>"
        title="<?php _e('Read more', 'roots'); ?>">
        <span class="icon glyphicon glyphicon-chevron-right"></span>
      </a>
      <a class="round-link share-facebook" href="<?php the_permalink(); ?>" title="<?php _e('Tweet this post', 'roots'); ?>">
        <span class="icon glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only"><?php _e('Tweet this post', 'roots'); ?></span>
      </a>
    </div>
  </header>
  <div class="entry-summary sr-only">
    <?php //the_excerpt(); ?>
  </div>
  <div class="entry-content container">
  </div>
</article>
