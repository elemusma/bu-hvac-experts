<?php

// owl carousel
wp_enqueue_style('owl.carousel.min', get_theme_file_uri('/owl-carousel/owl.carousel.min.css'));
wp_enqueue_style('owl.theme.default', get_theme_file_uri('/owl-carousel/owl.theme.default.min.css'));
// lightbox
wp_enqueue_style('lightbox-css', get_theme_file_uri('/lightbox/lightbox.min.css'));

// start of process
echo '<section class="position-relative ' . get_field('classes') . '" style="' . get_field('style') . '" id="' . get_field('id') . '">';

echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo get_template_part('partials/content-block');

echo '<div class="col-12">';

echo wp_get_attachment_image(147,'full','',array(
    'class'=>'w-100 h-auto'
));

echo '</div>';

echo '</div>';
echo '</div>';

echo '<div class="process-carousel owl-carousel owl-theme">';


$partnerPhotos = get_field('process_gallery');
$counterPartner = 0;
if( $partnerPhotos ): 
foreach( $partnerPhotos as $partnerPhoto ): 
$counterPartner++;

echo '<div class="col col-portfolio overflow-h" style="padding:0px;margin-top:15px;margin-bottom:15px;">';

echo '<div class="position-relative overflow-h" data-aos="fade-up" data-aos-delay="' . $counterPartner . '00">';

echo '<a href="' . wp_get_attachment_image_url($partnerPhoto['id'], 'full') . '" data-lightbox="image-set-process">';

echo wp_get_attachment_image($partnerPhoto['id'], 'full','',[
    'class'=>'img-partners img-hover',
    'style'=>'height:350px;object-fit:cover;'
]);

echo '<div class="position-absolute pt-4 w-100 text-center bg-accent" style="bottom:0;left:0;">';

// echo wp_get_attachment_image(316,'full','',[
//     'class'=>'h-auto position-absolute',
//     'style'=>'top:-25px;
//     width: 200px;
//     left: 50%;
//     transform: translate(-50%, 0);
//     object-fit: contain;object-position:bottom;'
// ]);

echo '<svg id="Layer_2" class="h-auto position-absolute" style="top:-25px;
    width: 200px;
    left: 50%;
    transform: translate(-50%, 0);
    object-fit: contain;object-position:bottom;" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 452.63 126.5">
  <g id="Layer_1-2" data-name="Layer 1">
    <path class="cls-1" style="stroke-width:0px;fill:var(--accent-primary);" d="M208.15,0c12.38,0,24.76,0,37.15,0,.44.07.87.18,1.31.19,4.72.17,9.45.27,14.17.5,7.22.35,14.45.69,21.66,1.22,8.62.64,17.26,1.24,25.83,2.29,12.43,1.52,24.86,3.21,37.22,5.24,21.06,3.47,41.79,8.34,61.85,15.76,10.38,3.84,20.47,8.3,29.54,14.74,7.38,5.24,13.82,11.26,15.76,20.67v5.33c-1.3,6.72-5.19,11.83-10.15,16.25-6.68,5.96-14.43,10.24-22.5,13.94-12.98,5.96-26.56,10.23-40.37,13.79-13.72,3.54-27.61,6.26-41.6,8.49-13.94,2.22-27.95,3.95-42.01,5.19-8.98.79-17.97,1.44-26.97,1.94-8.43.47-16.88.92-25.33.95-15.13.05-30.25-.13-45.38-.42-8.16-.16-16.32-.65-24.46-1.2-8.67-.58-17.34-1.22-25.97-2.19-11.49-1.3-22.97-2.73-34.4-4.49-18.17-2.79-36.12-6.64-53.72-12-13.07-3.98-25.85-8.69-37.71-15.58-6.5-3.78-12.58-8.11-17.2-14.18-3.7-4.86-5.66-10.24-4.59-16.42.89-5.09,3.63-9.2,7.09-12.88,5.48-5.81,12.14-10.02,19.16-13.68,12.69-6.62,26.16-11.2,39.89-15.05,16.65-4.66,33.59-8.03,50.68-10.66,14.55-2.24,29.16-4.02,43.84-5.13,9.19-.69,18.38-1.35,27.58-1.86,5.97-.33,11.96-.38,17.94-.57.56-.02,1.12-.13,1.68-.19Z"/>
  </g>
</svg>';

echo '<div class="position-relative pb-1">';
echo '<h4 class="text-white text-shadow" style="margin:0px;transform: translate(0, -30px);font-size:3rem;line-height:0.5;"><em>' . $counterPartner . '</em></h4>';

echo '<h4 class="text-black pt-2" style="font-family: \'proxima_novabold\';font-style:italic;">' . $partnerPhoto['title'] . '</h4>';

echo '</div>';
echo '</div>';
echo '</a>';
echo '</div>';
echo '</div>';

endforeach; endif;

echo '</div>';

// <div class="container">
// <div class="row">
// <div class="col-12">

// </div>
// </div>
// </div>

echo '</section>';

// owl carousel
wp_enqueue_script('jquery-min', get_theme_file_uri('/owl-carousel/jquery.min.js'));
wp_enqueue_script('owl-carousel', get_theme_file_uri('/owl-carousel/owl.carousel.min.js'));
wp_enqueue_script('owl-carousel-custom', get_theme_file_uri('/owl-carousel/owl-carousels.js'));
// lightbox
wp_enqueue_script('lightbox-min-js', get_theme_file_uri('/lightbox/lightbox.min.js'));
wp_enqueue_script('lightbox-js', get_theme_file_uri('/lightbox/lightbox.js'));

// end of process