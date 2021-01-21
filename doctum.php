<?php

require __DIR__.'/vendor/autoload.php';

use Doctum\Doctum;
use Doctum\RemoteRepository\GitHubRemoteRepository;
use Doctum\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$dir = __DIR__.'/src';

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in($dir);

$versions = GitVersionCollection::create($dir)
    ->add('1.x', 'RouteList 1.x')
    ->add('master', 'RouteList Dev');

$repo = new GitHubRemoteRepository('mtvbrianking/laravel-route-list', dirname($dir));

$options = [
    'theme' => 'default',
    'versions' => $versions,
    'title' => 'Laravel Route List',
    'build_dir' => __DIR__.'/docs/%version%',
    'cache_dir' => __DIR__.'/docs/cache/%version%',
    'remote_repository' => $repo,
    'default_opened_level' => 3,
];

return new Doctum($iterator, $options);
