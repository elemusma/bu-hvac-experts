<?php
echo '<footer>';
echo '<section class="position-relative" style="padding-top:50px;">';

echo wp_get_attachment_image(114,'full','',[
    'class'=>'w-100 h-100 position-absolute bg-img'
]);

echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-lg-3 col-md-4 col-6 text-center pb-5" data-aos="flip-down">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
$logoFooter = get_field('logo_footer','options');

if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
}

echo '</a>';
echo '</div>';
echo '<div class="col-12">';

wp_nav_menu(array(
'menu' => 'Footer Menu',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center text-white text-uppercase'
));

echo '</div>';
echo '<div class="col-12 text-center text-white">';

echo '<p class="mb-0">Phone: <a href="tel:+1' . get_field('phone','options') . '" class="text-white">' . get_field('phone','options') . '</a> <span class="ml-3 mr-3">|</span> Address: ' . get_field('address','options') . ' <span class="ml-3 mr-3">|</span> Email: <a href="mailto:' . get_field('email','options') . '" target="_blank" class="text-white">' . get_field('email','options') . '</a><span></span></p>';

echo '<div class="si pt-4 pb-4 d-flex flex-wrap justify-content-center">';

if(have_rows('social_icons','options')): while(have_rows('social_icons','options')): the_row(); 
$socialLink = get_sub_field('link');

echo '<a href="' . $socialLink['url'] . '" target="' . $socialLink['target'] ? $socialLink['target'] : '_self' . '" class="si-link">';

echo '<div class="si-individual" style="">';

$socialIcon = get_sub_field('image'); 
echo wp_get_attachment_image($socialIcon['id'],'full','',['class'=>'img-si']);

echo '</div>';
echo '</a>';
endwhile; else : endif;

echo '<div class="text-gray-1 pt-4">';

the_field('website_message','options');

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '<div class="text-center" style="background:#d9d9d9;padding:10px 0px;margin:10px 0px;">';
    echo '<p class="" style="margin:0;"><a href="https://buildupuniversity.com" target="_blank" rel="noopener noreferrer" style="color:#848484;text-decoration:none;">WEB DEVELOPMENT &amp; DESIGN</a> BY BUILDUP</p>';
echo '</div>';
echo '</footer>';

if(get_field('footer', 'options')) { the_field('footer', 'options'); }
if(get_field('footer_code')) { the_field('footer_code'); }

wp_footer();

echo '</body>';
echo '</html>';
?>