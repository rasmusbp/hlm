<?php

/**
 *  CSS3PIE Administrative settings form
 */
function css3pie_admin() {
  $form = array();
  $css3pie_theme_settings = FALSE;

  $form['css3pie_css_selectors'] = array(
    '#type' => 'textarea',
    '#title' => t('CSS Selectors'),
    '#required' => TRUE,
    '#cols' => 40,
    '#rows' => 3,
    '#prefix' => '<div class="css3pie-selector">',
    '#suffix' => '</div>',
    '#default_value' => variable_get('css3pie_css_selectors', ''),
    '#description' => t('Use normal CSS Selectors here .class or #id use new line per selector'),
  );

  if (variable_get('css3pie_css_use_js_mode', FALSE)) {
  
  $form['css3pie_css_comment'] = array(
    	'#type' => 'checkbox',
    	'#title' => t('Display namespace as comment in css file'),
    	'#description' => t('Renders the used namespace names in to css as comment'),
    	'#default_value' => variable_get('css3pie_css_comment', TRUE),
    	'#disabled' => TRUE,
  	);
  
  	$form['css3pie_css_use_php_wrapper'] = array(
    	'#type' => 'checkbox',
    	'#title' => t('Use PHP wrapper'),
    	'#description' => t("Old server doesn't have the right mime type for .htc files so you can use the php wrapper to simulate it (uses the PIE.php from css3pie package)."),
    	'#default_value' => variable_get('css3pie_css_use_php_wrapper', FALSE),
    	'#disabled' => TRUE,
  	);
  	
  }
  
  else {
  
  	$form['css3pie_css_comment'] = array(
    	'#type' => 'checkbox',
    	'#title' => t('Display namespace as comment in css file'),
    	'#description' => t('Renders the used namespace names in to css as comment'),
    	'#default_value' => variable_get('css3pie_css_comment', TRUE),
  	);
  
  	$form['css3pie_css_use_php_wrapper'] = array(
    	'#type' => 'checkbox',
    	'#title' => t('Use PHP wrapper'),
    	'#description' => t("Old server doesn't have the right mime type for .htc files so you can use the php wrapper to simulate it (uses the PIE.php from css3pie package)."),
    	'#default_value' => variable_get('css3pie_css_use_php_wrapper', FALSE),
  	);

  }
  
  $form['css3pie_css_use_js_mode'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use PIE JavaScript edition'),
    '#description' => t("Use PIE JavaScript edition instead of .htc file."),
    '#default_value' => variable_get('css3pie_css_use_js_mode', FALSE),
  );

  // if the current default theme has selectors in the info file set
  // we can use it, its the first variant of this feature and needs some
  // better rework
  if ($css3pie_theme_settings = theme_get_setting('css3pie', variable_get('theme_default'))) {

    $form['css3pie_css_use_theme_settings'] = array(
      '#type' => 'checkbox',
      '#title' => t('Use theme settings'),
      '#description' => t("Use selector settings from theme info file"),
      '#default_value' => variable_get('css3pie_css_use_theme_settings', TRUE),
    );
  }


  if(!file_exists(libraries_get_path('PIE') . '/PIE.htc')) {
    drupal_set_message(t('PIE library missing. Download PIE library from http://css3pie.com/ and add it to sites/all/libraries/PIE.'),'error');
  }

  $form = system_settings_form($form);
  $form['#submit'][] = 'css3pie_admin_submit';

  return $form;
}

/**
 * Rebuild the CSS file only on Save submit
 *
 * @param <type> $form
 * @param <type> $form_state
 */
function css3pie_admin_submit($form, &$form_state) {

  // check if submit button was pressed and rebuild the functionality
  // we must use "clicked_button" becaus values['op'] was unset by
  // system_settings_form_submit.
  $op = isset($form_state['clicked_button']['#value']) ? $form_state['clicked_button']['#value'] : '';
  if ($op == t('Save configuration')) {
    _css3pie_build_css3pie_functionality();
  }
}
