<?php
// phpcs:ignoreFile
/**
 * @file
 * A database agnostic dump for testing purposes.
 *
 * This file was generated by the Drupal 9.2.10 db-tools.php script.
 */

use Drupal\Core\Database\Database;

$connection = Database::getConnection();

$connection->schema()->createTable('node_type', array(
  'fields' => array(
    'type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '32',
    ),
    'name' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'base' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
    ),
    'module' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
    ),
    'description' => array(
      'type' => 'text',
      'not null' => TRUE,
      'size' => 'medium',
    ),
    'help' => array(
      'type' => 'text',
      'not null' => TRUE,
      'size' => 'medium',
    ),
    'has_title' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'tiny',
      'unsigned' => TRUE,
    ),
    'title_label' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'custom' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'tiny',
      'default' => '0',
    ),
    'modified' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'tiny',
      'default' => '0',
    ),
    'locked' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'tiny',
      'default' => '0',
    ),
    'disabled' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'tiny',
      'default' => '0',
    ),
    'orig_type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
  ),
  'primary key' => array(
    'type',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('node_type')
->fields(array(
  'type',
  'name',
  'base',
  'module',
  'description',
  'help',
  'has_title',
  'title_label',
  'custom',
  'modified',
  'locked',
  'disabled',
  'orig_type',
))
->values(array(
  'type' => 'article',
  'name' => 'Article',
  'base' => 'node_content',
  'module' => 'node',
  'description' => 'Use <em>articles</em> for time-sensitive content like news, press releases or blog posts.',
  'help' => '',
  'has_title' => '1',
  'title_label' => 'Title',
  'custom' => '1',
  'modified' => '1',
  'locked' => '0',
  'disabled' => '0',
  'orig_type' => 'article',
))
->values(array(
  'type' => 'page',
  'name' => 'Basic page',
  'base' => 'node_content',
  'module' => 'node',
  'description' => "Use <em>basic pages</em> for your static content, such as an 'About us' page.",
  'help' => '',
  'has_title' => '1',
  'title_label' => 'Title',
  'custom' => '1',
  'modified' => '1',
  'locked' => '0',
  'disabled' => '0',
  'orig_type' => 'page',
))
->execute();
