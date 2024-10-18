<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }
if(get_field('header_code')) { the_field('header_code'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php 
}
wp_head(); 
?>
</head>
<body <?php body_class(); ?>>
<?php
if(get_field('body','options')) { the_field('body','options'); }
if(get_field('body_code')) { the_field('body_code'); }
// echo '<div class="blank-space"></div>';


echo '<header class="position-fixed z-3 w-100" style="top:0;left:0;padding:10px 0px 8px;">';
echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;background:#021d47;opacity:.5;"></div>';
	
echo '<div class="nav">';
echo '<div class="container">';
echo '<div class="row align-items-center justify-content-between">';

echo '<div class="col-lg-4 col-6">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",[
    'class'=>'h-auto',
    'style'=>'width:250px;max-width:100%;transition:all 1s ease-in-out;',
    'id'=>'logo-main']); 
}

echo '</a>';
echo '</div>';

echo '<div class="col-lg-4 col-6 text-right text-white">';
	
echo '<a style="padding-right:15px;" class="d-md-block d-none" href="/#contact">Contact</a>';
	
echo '<a class="handel phone-nav" style="padding-left:15px;font-size:2rem;" href="tel:+1' . get_field('phone','options') . '">' . get_field('phone','options') . '</a>';
echo '</div>';

// echo '<div class="col-lg-4 col-6 desktop-hidden">';
// echo '<a id="navToggle" class="nav-toggle">';
// echo '<div>';
// echo '<div class="line-1 bg-accent"></div>';
// echo '<div class="line-2 bg-accent"></div>';
// echo '<div class="line-3 bg-accent"></div>';
// echo '</div>';
// echo '</a>';
// echo '</div>';

// echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
// echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-white desktop-hidden" id="navItems">';

// echo '<div class="pt-5 pb-5">';
// echo '<div class="close-menu">';
// echo '<div>';
// echo '<span id="navMenuClose" class="close h2 text-gray" style="float:right;">X</span>';
// echo '</div>';
// echo '</div>';
// echo '<a href="' . home_url() . '">';

// $logo = get_field('logo','options'); 
// if($logo){
// echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
// }

// echo '</a>';
// echo '</div>';
// wp_nav_menu(array(
// 'menu' => 'primary',
// 'menu_class'=>'menu list-unstyled mb-0'
// )); 
// echo '</div>'; // end of col for navigation



echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';

?>