<?php

function hlm_preprocess_html(&$vars) {
  global $theme_path;
  // Add conditional CSS for IE7 and below.
   $vars['head_title'] = implode(' :: ', array(drupal_get_title(), variable_get('site_name')));  
}


?>