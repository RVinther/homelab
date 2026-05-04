<?php
$CONFIG = array (
  'trusted_domains' =>
  array (
    0 => 'cloud.home',
    1 => 'homelab',
    2 => 'homelab.tail28c233.ts.net',
  ),
  'default_phone_region' => 'DK',
  'memcache.local' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => array(
    'host' => 'nextcloud-redis-master',
    'port' => 6379,
  ),
);