<?php

  register_nav_menus([
    "Primary_menu" => ("main menu")
  ]);


  
 


function mytheme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');


function custom_blog_thumbnail_size() {
  add_image_size('blog-thumb', 400, 400, true); // 400x400 px, cropped
}
add_action('after_setup_theme', 'custom_blog_thumbnail_size');


function handle_contact_form_submission() {
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cf-submit'])) {
      $name    = sanitize_text_field($_POST['name']);
      $email   = sanitize_email($_POST['email']);
      $message = sanitize_textarea_field($_POST['message']);

      $admin_email = get_option('admin_email'); // Get site admin email
      $subject = "New Contact Form Submission from $name";
      $headers = "From: $name <$email>\r\n";
      $headers .= "Reply-To: $email\r\n";
      $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

      $email_body = "Name: $name\n";
      $email_body .= "Email: $email\n";
      $email_body .= "Message:\n$message\n";

      if (wp_mail($admin_email, $subject, $email_body, $headers)) {
          echo "<p style='color: green;'>Message sent successfully!</p>";
      } else {
          echo "<p style='color: red;'>Failed to send the message. Please try again.</p>";
      }
  }
}

// Call the function in the footer to process the form
add_action('wp_footer', 'handle_contact_form_submission');


wp_mail('mayura96k@gmail.com', 'Test Email', 'This is a test email from WordPress.');


?>