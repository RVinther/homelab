<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\Redis',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'passwordsalt' => 'hdwkSNCGXZlhzKNdxH3zrg9fwydPHs',
  'secret' => 'xYWXEVGQWyvRlPt0NrsPXfqrdrBgkQ2qywgedXC+LxZo4o/t',
  'trusted_domains' => 
  array (
    0 => 'cloud.home',
    1 => 'homelab',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '33.0.3.2',
  'overwrite.cli.url' => 'http://localhost',
  'dbname' => 'nextcloud',
  'dbhost' => 'postgresql.cloud.svc.cluster.local',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'nextcloud',
  'dbpassword' => '2t3EsE115P0g6S',
  'instanceid' => 'ocpx2xqklijf',
  'installed' => true,
  'openmetrics_allowed_clients' => 
  array (
    0 => '127.0.0.1',
    1 => '10.42.0.0/16',
    2 => '10.43.0.0/16',
  ),
  'default_phone_region' => 'DK',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'nextcloud-redis-master',
    'port' => 6379,
    'password' => 'changeme',
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'loglevel' => 2,
  'maintenance' => false,
);
