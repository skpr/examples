<?php

use Drupal\Core\Config\BootstrapConfigStorageFactory;
use Drupal\Core\Database\Database;
use Skpr\SkprConfig;

$skpr = SkprConfig::create()->load();

$settings['container_yamls'][] = __DIR__ . '/services.yml';

$settings['allow_authorize_operations'] = FALSE;

$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => $skpr->get('mysql.default.database') ?: 'local',
  'username' => $skpr->get('mysql.default.username') ?: 'drupal',
  'password' => $skpr->get('mysql.default.password') ?: 'drupal',
  'host' => $skpr->get('mysql.default.proxy') ?: '127.0.0.1',
);

$config['cron_safe_threshold'] = '0';
$settings['file_public_path'] = 'sites/default/files';
$config['system.file']['path']['temporary'] = '/mnt/temporary';
$settings['file_private_path'] = '/mnt/private';

$settings['hash_salt'] = !empty($settings['hash_salt']) ? $settings['hash_salt'] : 'xxxxxxxxxxxxxxxxxxxx';

$settings['trusted_host_patterns'][] = '^127\.0\.0\.1$';
foreach ($skpr->hostNames() as $hostname) {
  $settings['trusted_host_patterns'][] = '^' . preg_quote($hostname) . '$';
}

$config['prometheus_exporter_token_access.settings']['access_token'] = $skpr->get('skpr.token') ?: '';

$config['elasticsearch_connector.cluster.default']['url'] = $skpr->get('elasticsearch.writer.endpoint', 'https://localhost:9200');
$config['elasticsearch_connector.cluster.default']['options']['username'] = $skpr->get('elasticsearch.writer.username', 'admin');
$config['elasticsearch_connector.cluster.default']['options']['password'] = $skpr->get('elasticsearch.writer.password', 'admin');
$config['elasticsearch_connector.cluster.default']['options']['rewrite']['rewrite_index'] = TRUE;
$config['elasticsearch_connector.cluster.default']['options']['rewrite']['index']['prefix'] = $skpr->get('elasticsearch.writer.index_prefix', 'local_');

$settings['php_storage']['twig'] = [
  'directory' => ($skpr->get('mount.local') ?: DRUPAL_ROOT . '/..') . '/.php',
];

$settings['config_sync_directory'] = DRUPAL_ROOT . '/../config-export';

$settings['deployment_identifier'] = getenv('SKPR_VERSION') ?? \Drupal::VERSION;
