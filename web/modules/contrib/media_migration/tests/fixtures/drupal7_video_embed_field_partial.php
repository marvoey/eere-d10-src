<?php
// phpcs:ignoreFile
/**
 * @file
 * A database agnostic dump for testing purposes.
 *
 * This file was generated by the Drupal 9.2.6 db-tools.php script.
 */

use Drupal\Core\Database\Database;

$connection = Database::getConnection();

include 'drupal7_video_embed_field_partial' . DIRECTORY_SEPARATOR . 'field_config.php';
include 'drupal7_video_embed_field_partial' . DIRECTORY_SEPARATOR . 'field_config_instance.php';
include 'drupal7_video_embed_field_partial' . DIRECTORY_SEPARATOR . 'field_data_field_vid_emb.php';
include 'drupal7_video_embed_field_partial' . DIRECTORY_SEPARATOR . 'field_revision_field_vid_emb.php';
include 'drupal7_video_embed_field_partial' . DIRECTORY_SEPARATOR . 'node.php';
include 'drupal7_video_embed_field_partial' . DIRECTORY_SEPARATOR . 'node_revision.php';
include 'drupal7_video_embed_field_partial' . DIRECTORY_SEPARATOR . 'node_type.php';
include 'drupal7_video_embed_field_partial' . DIRECTORY_SEPARATOR . 'system.php';
