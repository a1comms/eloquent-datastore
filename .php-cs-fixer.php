<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->ignoreDotFiles(false)
    ->ignoreVCSIgnored(true)
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP81Migration'        => true,
        '@PHP80Migration:risky'  => true,
        'heredoc_indentation'    => false,
        '@PhpCsFixer'            => true,
        '@PhpCsFixer:risky'      => true,
        'strict_comparison'      => false,
        'binary_operator_spaces' => [
            'default'   => 'align',
            'operators' => [
                '='  => 'align',
                '=>' => 'align',
            ],
        ],
    ])
    ->setFinder($finder)
;

return $config;
