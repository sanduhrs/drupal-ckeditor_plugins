<?php

/**
 * @file
 * Contains \Drupal\ckeditor_plugins\Plugin\CKEditorPlugin\DrupalImage.
 */

namespace Drupal\ckeditor_plugins\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "autogrow" plugin.
 *
 * @CKEditorPlugin(
 *   id = "autogrow",
 *   label = @Translation("Autogrow")
 * )
 */
class Autogrow extends PluginBase implements CKEditorPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'ckeditor_plugins') . '/js/plugins/autogrow/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return array(
      'autoGrow_bottomSpace' => 0,
      'autoGrow_maxHeight' => 0,
      'autoGrow_minHeight' => 200,
      'autoGrow_onStartup' => TRUE,
    );
  }

}
