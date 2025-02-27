<?php

$dir = $vendorDir = __DIR__;
while (!file_exists($dir . '/composer.json') || !is_dir($dir . '/vendor')) {
    if ($dir === \dirname($dir)) {
        break;
    }
    $dir = \dirname($dir);
}

require $dir . '/vendor/autoload.php';

use PhpCsFixer\Finder;

$finder = (new Finder())
    ->in([__DIR__ . '/src'])
    ->in([__DIR__ . '/tests'])
    ->name('*.php');

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'phpdoc_summary' => false,
        'blank_line_after_opening_tag' => false,
        'concat_space' => ['spacing' => 'one'],
        'array_syntax' => ['syntax' => 'short'],
        // Removes @param and @return tags that don't provide any useful information.
        'no_superfluous_phpdoc_tags' => true,
        // add declare strict type to every file
        'declare_strict_types' => false,
        // use native phpunit methods
        'php_unit_construct' => true,
        // Enforce camel case for PHPUnit test methods
        'php_unit_method_casing' => ['case' => 'camel_case'],
        'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false],
        'php_unit_test_case_static_method_calls' => true,
        // comparisons should always be strict
        'strict_comparison' => true,
        // functions should be used with $strict param set to true
        'strict_param' => true,
        'array_indentation' => true,
        'compact_nullable_typehint' => true,
        'visibility_required' => false,
    ])
    ->setFinder($finder);
