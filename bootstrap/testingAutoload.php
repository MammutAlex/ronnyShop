<?php
echo 'php '.realpath(__DIR__ . '/../artisan').' --env=\'testing\' migrate:refresh --seed';
passthru('php '.realpath(__DIR__ . '/../artisan').' --env=\'testing\' migrate:refresh --seed');
require realpath(__DIR__ . '/../vendor/autoload.php');
