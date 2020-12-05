<?php

/*
 * This file should only be accessed as a cron job. Example crontab entry:
 *
 * * * * * * /path/to/php/bin /path/to/resources/cron.php 1>> /dev/null 2>&1
 */

use Bayfront\Container\NotFoundException;
use Bayfront\CronScheduler\Cron;
use Bayfront\CronScheduler\FilesystemException;

define('IS_CRON', true);

require(dirname(__FILE__, 2) . '/public/index.php'); // Modify this path if necessary

/**
 * @var Cron $cron
 */

try {

    $cron = get_from_container('cron');

} catch (NotFoundException $e) {
    die($e->getMessage());
}

/*
 * ############################################################
 * Add cron jobs below
 * ############################################################
 */



/*
 * ############################################################
 * Stop adding cron jobs
 * ############################################################
 */

try {

    $result = $cron->run();

} catch (FilesystemException $e) {
    die($e->getMessage());
}

log_debug('Completed running ' . $result['count'] . ' cron jobs', [
    'result' => $result
]);