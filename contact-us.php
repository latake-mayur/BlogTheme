<?php

//Template Name: Contact

get_header();
?>

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
    <div class="left-shape">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/breadcrumb-shape.png" alt="img">
    </div>
    <div class="right-shape">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/breadcrumb-shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Contact Us
                </li>
            </ul>
        </div>
    </div>
</div>



<!-- Contact Section Start -->
<section class="contact-section-33 fix section-padding pt-0">
    <div class="container">
        <div class="contact-wrapper-2">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="map-items">
                        <div class="googpemap">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.5686434275394!2d73.8060933738576!3d18.4578843710887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2952db1cef7af%3A0x8cf0f07a4dfb420b!2sCodestrup%20Infotech%20Private%20Limited!5e0!3m2!1sen!2sin!4v1741602944743!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-content">
                        <h2>Ready to Get Started?</h2>
                        <p>
                            Have questions or need assistance? We're here to help! Get in touch with us for any
                            inquiries, support, or feedback.
                        </p>
                        <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" id="contact-form" method="POST"
                            class="contact-form-items">
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt">
                                        <span>Your name*</span>
                                        <input type="text" name="name" id="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <span>Your Email*</span>
                                        <input type="email" name="email" id="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="form-clt">
                                        <span>Write Message*</span>
                                        <textarea name="message" id="message" placeholder="Write Message"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                    <button type="submit" name="cf-submit" class="theme-btn">
                                        Send Message <i class="fa-solid fa-arrow-right-long"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
<h2><?php handle_contact_form_submission(); ?>
</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cta Section Start -->
<section class="cta-section section-padding pb-0">
    <div class="rokect-shape float-bob-y">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/rokect.png" alt="img">
    </div>
    <div class="container">
        <div class="cta-wrapper bg-cover" style="background-image: url('assets/img/cta-bg.jpg');">
            <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/Avatar.png" alt="img">
            </div>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Stay Connected With <br> Rupees24
            </h2>
            <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                <a href="contact.html"> <span class="theme-btn"> talk TO A SPECIALIST </span><span class="arrow-btn"><i
                            class="fa-regular fa-arrow-up-right"></i></span></a>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();

?>