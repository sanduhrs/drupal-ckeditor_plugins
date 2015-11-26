<?php

/**
 * @file
 * Contains \Drupal\ckeditor_plugins\Plugin\CKEditorPlugin\DrupalImage.
 */

namespace Drupal\ckeditor_plugins\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "autogrow" plugin.
 *
 * @CKEditorPlugin(
 *   id = "autogrow",
 *   label = @Translation("Autogrow"),
 *   module = "ckeditor_plugins"
 * )
 */
class AutogrowContextual extends Autogrow implements CKEditorPluginContextualInterface {

  /**
   * {@inheritdoc}
   */
  public function isEnabled(Editor $editor) {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'ckeditor_plugins') . '/js/plugins/autogrow/plugin.js';
  }

}
