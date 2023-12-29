<?php

get_header();

$url_parts = explode('/', rtrim(home_url($_SERVER['REQUEST_URI']), '/'));
$url_name = end($url_parts);
if ($url_name == 'model') {
    require get_template_directory() . '/pages/model.php';
} else if ($url_name == 'about'){
    require get_template_directory() . '/pages/about.php';
} else if ($url_name == 'contact'){
    require get_template_directory() . '/pages/contactus.php';
} else if ($url_name == 'sage'){
    require get_template_directory() . '/pages/sage.php';
} else if ($url_name == 'lead_generation'){
    require get_template_directory() . '/pages/leadgeneration.php';
}

get_footer();
