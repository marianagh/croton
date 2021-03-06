<?php

use Sami\Sami;
use Sami\Parser\Filter\TrueFilter;
use Symfony\Component\Finder\Finder;

/*
 * This will look for all PHP files in the directory and in folders
 */
$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__);

/*
 * This will set up some options in the documentation
 */
$sami = new Sami($iterator, array(
    'title' => 'Project Awesome', // This will be the name of the docs
    'build_dir' => __DIR__ . '/sami-docs', // This will be the folder the docs will be put in
    'cache_dir' => __DIR__ . '/sami-cache', // This will be generated by sami, but you can .gitignore it
    'default_opened_level' => 2,
));

/*
 * Include this section if you want sami to document
 * private and protected functions/properties
 */
$sami['filter'] = function () {
    return new TrueFilter();
};

return $sami;
