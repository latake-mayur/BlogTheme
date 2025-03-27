<?php get_header(); ?>

<div class="breadcrumb-wrapper bg-cover"
  style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/breadcrumb.jpg');">
  <div class="left-shape">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/breadcrumb-shape.png" alt="img">
  </div>
  <div class="right-shape">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/breadcrumb-shape-2.png" alt="img">
  </div>
  <div class="container">
    <div class="page-heading">
      <div class="breadcrumb-sub-title">
        <h1 class="wow fadeInUp" data-wow-delay=".3s">Blog</h1>
      </div>
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
        <li>
          <a href="<?php echo home_url(); ?>/">Home</a>
        </li>
        <li>
          <i class="fa-solid fa-chevron-right"></i>
        </li>
        <li>Blog</li>
      </ul>
    </div>
  </div>
</div>

<!-- Blog Section Start -->
<section class="blog-section fix section-bg section-padding pt-0">

  <div class="container">
    <div class="row">
      <?php
      if (have_posts()):
        while (have_posts()):
          the_post(); ?>
          <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="service-card-items">
              <h3 class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <div class="service-thumb">
                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('blog-thumb', array('class' => 'img-fluid')); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-image.png" alt="Default Image"
                      width="400" height="400" />
                  <?php endif; ?>
                </a>
              </div>
              <div class="content">
                <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                <a href="<?php the_permalink(); ?>" class="service-btn">Read more <i
                    class="fa-solid fa-chevrons-right"></i></a>
              </div>
            </div>
          </div>
        <?php endwhile;
      else: ?>
        <p class="text-center">No blog posts found.</p>
      <?php endif; ?>
    </div>


  </div>
</section>

<?php get_footer(); ?>