<?php
/**
* THEME SETTINGS
*/
function bootstrap_form_system_theme_settings_alter(&$form, $form_state) {
  
  $form['development_tools'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('DEVELOPMENT TOOLS'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
    '#weight'=> -20
  );
  
  $form['development_tools']['bootstrap_wireframes'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Activate Wireframes'),
    '#default_value' => theme_get_setting('bootstrap_wireframes'),
    '#description'   => t('Very useful for checking the boxes of your regions.'),
  );
  $form['development_tools']['bootstrap_css_prototyping'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Activate Prototyping tool'),
    '#default_value' => theme_get_setting('bootstrap_css_prototyping'),
    '#description'   => t('Edit your content directly in the browser. <strong>Works only in WebKit-based browsers like Chrome or Safari</strong>. <a href="http://www.css-101.org/articles/trick-for-rapid-prototyping/demo.html" target="_blank">Check the demo</a>.'),
  );
  $form['development_tools']['bootstrap_grid_system'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Activate Grid system'),
    '#default_value' => theme_get_setting('bootstrap_grid_system'),
    '#description'   => t('To change the default grid system, generate your own .png file through <a href="http://gridulator.com/" target="_blank">http://gridulator.com/</a>.<br />Then, put your file in the <strong>/images</strong> folder and modify the <strong>line 78</strong> in the <strong>theme-settings.css</strong> file.'),
  );
  $form['development_tools']['bootstrap_display_viewport'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Activate Viewport Display'),
    '#default_value' => theme_get_setting('bootstrap_display_viewport'),
    '#description'   => t('Show the current viewport window size. Useful for responsive webdesign.'),
  );
  $form['development_tools']['bootstrap_html5_placeholder'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Activate placeholder attribute for all webforms'),
    '#default_value' => theme_get_setting('bootstrap_html5_placeholder'),
    '#description'   => t('Alter all the webforms and put the label value into the HTML5 <strong>placeholder</strong> attribute.<br />For custom changes, please check the <strong>template.php</strong> file <strong>line 160</strong>.'),
  );
  
}
