<?php

get_header();
the_post();

?>
<!-- Faq Section Start -->
<section class="faq-section section-padding pb-0">
    <div class="faq-overlay">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/faq-overlay.png" alt="img" />
    </div>
    <div class="faq-shape">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/faq-shape.png" alt="img" />
    </div>
    <div class="container">
        <div class="faq-wrapper">
            <div class="row g-4 justify-content-between">
                <!-- <div class="col-xl-5 col-lg-6"> -->
                <div class="faq-content">
                    <div class="section-title">
                        <div class="sub-title bg-color-2 wow fadeInUp">
                            <span>Blog</span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            <?php the_title(); ?>
                        </h2>
                    </div>
                    <?php if (has_post_thumbnail()): ?>
                        <img width="100%" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'blog-thumb'); ?>"
                            alt="<?php the_title(); ?>" />
                    <?php else: ?>
                        <img width="100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/default-image.png"
                            alt="Default Image" />
                    <?php endif; ?>
                    <h5><?php echo get_the_date() ?></h5>
                    <h5><?php echo get_the_author() ?></h5>
                    <p class=" wow fadeInUp" data-wow-delay=".5s">
                        <?php the_content(); ?>
                    </p>
                    <ul class="faq-list">
                        <li class="wow fadeInUp" data-wow-delay=".3s">
                            <i class="fa-regular fa-circle-check"></i>
                            <?php comment_form(); ?>
                        </li>
                        
                    </ul>
                </div>
            </div>

        </div>
        <!-- </div> -->
    </div>
</section>



<?php

get_footer();

?>