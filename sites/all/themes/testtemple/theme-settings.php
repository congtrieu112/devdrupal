<?php

/*
 * setting temple 
 * soical setting
 */

function testtemplate_form_system_theme_settings_alter(&$form, &$form_state) {

    $form['facebook_url'] = array(
      '#type' => 'textfield',
      '#title' => 'Facebook Profile URL',
      '#description' => "Enter your Facebook Profile URL. Leave blank to hide.",
    );
}
