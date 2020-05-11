<?php

/**
 * Config for PHP-CS-Fixer ver2
 */

$rules = [
    '@PSR2' => true,
    'array_syntax' => ['syntax' => 'short'],
    'no_multiline_whitespace_before_semicolons' => true,
    'no_short_echo_tag' => true,
    'no_unused_imports' => true,
];

$excludes = [
    'vendor',
    'node_modules',
    'storage',
    'public',
    'nova',
    'bootstrap/cache',
];

return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setLineEnding("\r\n")
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude($excludes)
            ->notName('README.md')
            ->notName('*.xml')
            ->notName('*.yml')
    );
