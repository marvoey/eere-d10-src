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

$connection->schema()->createTable('search_index', array(
  'fields' => array(
    'word' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '50',
      'default' => '',
    ),
    'sid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
      'unsigned' => TRUE,
    ),
    'type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '16',
    ),
    'score' => array(
      'type' => 'float',
      'not null' => FALSE,
      'size' => 'normal',
    ),
  ),
  'primary key' => array(
    'word',
    'sid',
    'type',
  ),
  'indexes' => array(
    'sid_type' => array(
      'sid',
      'type',
    ),
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('search_index')
->fields(array(
  'word',
  'sid',
  'type',
  'score',
))
->values(array(
  'word' => 'aliquam',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'aliquet',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.892724',
))
->values(array(
  'word' => 'amet',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'ante',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.96498',
))
->values(array(
  'word' => 'aptent',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'arcu',
  'sid' => '1',
  'type' => 'node',
  'score' => '3.71593',
))
->values(array(
  'word' => 'article',
  'sid' => '1',
  'type' => 'node',
  'score' => '26',
))
->values(array(
  'word' => 'article',
  'sid' => '2',
  'type' => 'node',
  'score' => '26',
))
->values(array(
  'word' => 'auctor',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.906287',
))
->values(array(
  'word' => 'auctorproin',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'augue',
  'sid' => '1',
  'type' => 'node',
  'score' => '3',
))
->values(array(
  'word' => 'bibendum',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'blandit',
  'sid' => '1',
  'type' => 'node',
  'score' => '3.76746',
))
->values(array(
  'word' => 'blue',
  'sid' => '1',
  'type' => 'node',
  'score' => '29',
))
->values(array(
  'word' => 'class',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'condimentum',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.938382',
))
->values(array(
  'word' => 'congue',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.93105',
))
->values(array(
  'word' => 'consectetur',
  'sid' => '1',
  'type' => 'node',
  'score' => '3',
))
->values(array(
  'word' => 'consequat',
  'sid' => '1',
  'type' => 'node',
  'score' => '4.78393',
))
->values(array(
  'word' => 'conubia',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'curabitur',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'cursus',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.86679',
))
->values(array(
  'word' => 'dapibus',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.90629',
))
->values(array(
  'word' => 'diam',
  'sid' => '1',
  'type' => 'node',
  'score' => '3.90629',
))
->values(array(
  'word' => 'dictum',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.882818',
))
->values(array(
  'word' => 'dignissim',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'donec',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.87634',
))
->values(array(
  'word' => 'dui',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'duis',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.942091',
))
->values(array(
  'word' => 'egestas',
  'sid' => '1',
  'type' => 'node',
  'score' => '2.97286',
))
->values(array(
  'word' => 'eget',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.8894',
))
->values(array(
  'word' => 'egetmorbi',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.896076',
))
->values(array(
  'word' => 'eleifend',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.863659',
))
->values(array(
  'word' => 'elementum',
  'sid' => '1',
  'type' => 'node',
  'score' => '3',
))
->values(array(
  'word' => 'embed',
  'sid' => '1',
  'type' => 'node',
  'score' => '26',
))
->values(array(
  'word' => 'erat',
  'sid' => '1',
  'type' => 'node',
  'score' => '3',
))
->values(array(
  'word' => 'eros',
  'sid' => '1',
  'type' => 'node',
  'score' => '2.76243',
))
->values(array(
  'word' => 'etiam',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'euismod',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'facilisis',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'faucibus',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.869951',
))
->values(array(
  'word' => 'felis',
  'sid' => '1',
  'type' => 'node',
  'score' => '2.60047',
))
->values(array(
  'word' => 'fermentum',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'feugiat',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'finibus',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'fringilla',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.889397',
))
->values(array(
  'word' => 'fusce',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'gravida',
  'sid' => '1',
  'type' => 'node',
  'score' => '3.70328',
))
->values(array(
  'word' => 'hendrerit',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.902857',
))
->values(array(
  'word' => 'himenaeos',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'iaculis',
  'sid' => '1',
  'type' => 'node',
  'score' => '2.65362',
))
->values(array(
  'word' => 'image',
  'sid' => '1',
  'type' => 'node',
  'score' => '26',
))
->values(array(
  'word' => 'image',
  'sid' => '2',
  'type' => 'node',
  'score' => '26',
))
->values(array(
  'word' => 'imperdiet',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'inceptos',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'integer',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'interdum',
  'sid' => '1',
  'type' => 'node',
  'score' => '4.71952',
))
->values(array(
  'word' => 'ipsum',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.78555',
))
->values(array(
  'word' => 'justo',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.83706',
))
->values(array(
  'word' => 'lacinia',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'laoreet',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'lectus',
  'sid' => '1',
  'type' => 'node',
  'score' => '3',
))
->values(array(
  'word' => 'leo',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'libero',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'ligula',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'litora',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'lobortis',
  'sid' => '1',
  'type' => 'node',
  'score' => '4.75065',
))
->values(array(
  'word' => 'lorem',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'luctus',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.90629',
))
->values(array(
  'word' => 'maecenas',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.866793',
))
->values(array(
  'word' => 'magna',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.961087',
))
->values(array(
  'word' => 'massa',
  'sid' => '1',
  'type' => 'node',
  'score' => '3.8861',
))
->values(array(
  'word' => 'mattis',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.945829',
))
->values(array(
  'word' => 'mauris',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.91869',
))
->values(array(
  'word' => 'maximus',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'media',
  'sid' => '1',
  'type' => 'node',
  'score' => '26',
))
->values(array(
  'word' => 'metus',
  'sid' => '1',
  'type' => 'node',
  'score' => '2.74636',
))
->values(array(
  'word' => 'molestie',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'mollis',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.85133',
))
->values(array(
  'word' => 'morbi',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.8478',
))
->values(array(
  'word' => 'nam',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'nec',
  'sid' => '1',
  'type' => 'node',
  'score' => '2.9689',
))
->values(array(
  'word' => 'neque',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.96109',
))
->values(array(
  'word' => 'nibh',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.86679',
))
->values(array(
  'word' => 'nisi',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.8861',
))
->values(array(
  'word' => 'nisl',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'non',
  'sid' => '1',
  'type' => 'node',
  'score' => '4.52624',
))
->values(array(
  'word' => 'nostra',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'nullam',
  'sid' => '1',
  'type' => 'node',
  'score' => '2.91193',
))
->values(array(
  'word' => 'nunc',
  'sid' => '1',
  'type' => 'node',
  'score' => '3.86737',
))
->values(array(
  'word' => 'odio',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'only',
  'sid' => '2',
  'type' => 'node',
  'score' => '26',
))
->values(array(
  'word' => 'orci',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'ornare',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.927431',
))
->values(array(
  'word' => 'pellentesque',
  'sid' => '1',
  'type' => 'node',
  'score' => '3',
))
->values(array(
  'word' => 'per',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'pharetra',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'phasellus',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.86055',
))
->values(array(
  'word' => 'placerat',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.86679',
))
->values(array(
  'word' => 'png',
  'sid' => '1',
  'type' => 'node',
  'score' => '29',
))
->values(array(
  'word' => 'porta',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'porttitor',
  'sid' => '1',
  'type' => 'node',
  'score' => '2.86995',
))
->values(array(
  'word' => 'posuere',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.81394',
))
->values(array(
  'word' => 'potenti',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.886095',
))
->values(array(
  'word' => 'praesent',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.86055',
))
->values(array(
  'word' => 'pretium',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.989021',
))
->values(array(
  'word' => 'proin',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'pulvinar',
  'sid' => '1',
  'type' => 'node',
  'score' => '3.7527',
))
->values(array(
  'word' => 'purus',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.997306',
))
->values(array(
  'word' => 'quam',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.98493',
))
->values(array(
  'word' => 'quis',
  'sid' => '1',
  'type' => 'node',
  'score' => '4',
))
->values(array(
  'word' => 'quisque',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.86995',
))
->values(array(
  'word' => 'rhoncus',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.993146',
))
->values(array(
  'word' => 'risus',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.85721',
))
->values(array(
  'word' => 'rutrum',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.78318',
))
->values(array(
  'word' => 'sagittis',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.8208',
))
->values(array(
  'word' => 'sapien',
  'sid' => '1',
  'type' => 'node',
  'score' => '4.91645',
))
->values(array(
  'word' => 'sapiensed',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'scelerisque',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.81014',
))
->values(array(
  'word' => 'sed',
  'sid' => '1',
  'type' => 'node',
  'score' => '5.91948',
))
->values(array(
  'word' => 'sem',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.909743',
))
->values(array(
  'word' => 'semper',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.968904',
))
->values(array(
  'word' => 'single',
  'sid' => '2',
  'type' => 'node',
  'score' => '26',
))
->values(array(
  'word' => 'sit',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'sociosqu',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'sodales',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'suscipit',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.86366',
))
->values(array(
  'word' => 'suspendisse',
  'sid' => '1',
  'type' => 'node',
  'score' => '2.67632',
))
->values(array(
  'word' => 'taciti',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'tempor',
  'sid' => '1',
  'type' => 'node',
  'score' => '2.8241',
))
->values(array(
  'word' => 'tincidunt',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.879565',
))
->values(array(
  'word' => 'torquent',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'tortor',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'tristique',
  'sid' => '1',
  'type' => 'node',
  'score' => '2.92027',
))
->values(array(
  'word' => 'turpis',
  'sid' => '1',
  'type' => 'node',
  'score' => '3.79765',
))
->values(array(
  'word' => 'ullamcorper',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.90629',
))
->values(array(
  'word' => 'ultricies',
  'sid' => '1',
  'type' => 'node',
  'score' => '1',
))
->values(array(
  'word' => 'vehicula',
  'sid' => '1',
  'type' => 'node',
  'score' => '0.876337',
))
->values(array(
  'word' => 'vel',
  'sid' => '1',
  'type' => 'node',
  'score' => '8.81035',
))
->values(array(
  'word' => 'velit',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.95723',
))
->values(array(
  'word' => 'vestibulum',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'vitae',
  'sid' => '1',
  'type' => 'node',
  'score' => '3.99731',
))
->values(array(
  'word' => 'vivamus',
  'sid' => '1',
  'type' => 'node',
  'score' => '2',
))
->values(array(
  'word' => 'volutpat',
  'sid' => '1',
  'type' => 'node',
  'score' => '1.96109',
))
->values(array(
  'word' => 'with',
  'sid' => '1',
  'type' => 'node',
  'score' => '26',
))
->values(array(
  'word' => 'with',
  'sid' => '2',
  'type' => 'node',
  'score' => '26',
))
->execute();
