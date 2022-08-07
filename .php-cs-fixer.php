<?php

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);;

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@PSR12' => true,
    '@PhpCsFixer' => true,
    'strict_param' => true,
    'array_syntax' => ['syntax' => 'short'],
    'php_unit_test_class_requires_covers' => false,
    'concat_space' => ['spacing' => 'one'],
    'types_spaces' => ['space' => 'single'],
    'php_unit_internal_class' => []
])
    ->setRiskyAllowed(true)
    ->setFinder($finder);
