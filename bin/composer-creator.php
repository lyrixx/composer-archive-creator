<?php

include __DIR__.'/../vendor/autoload.php';

use Sonata\Composer\ComposerApplication;

$app = new ComposerApplication(__DIR__.'/../config.yml', 'Composer Vendor');

$app->add(new \Sonata\Composer\Command\DownloadRepositoryCommand());
$app->add(new \Sonata\Composer\Command\DownloadDependenciesCommand());
$app->add(new \Sonata\Composer\Command\CreateArchiveCommand());
$app->add(new \Sonata\Composer\Command\PackageCommand());

$app->run();