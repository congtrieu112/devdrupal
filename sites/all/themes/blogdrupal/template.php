<?php
function blogdrupal_html_head_alter(&$head_elements) {
  
}
function blogdrupal_root_template(){
    Global $base_url;

    return  $base_url.'/'. drupal_get_path('theme', 'blogdrupal');
    
}

