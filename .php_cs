<?php

// https://mlocati.github.io/php-cs-fixer-configurator/

$rules = [
    '@PSR2' => true,

    // Arrays
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'trim_array_spaces' => true,
    'no_whitespace_before_comma_in_array' => true,
    'whitespace_after_comma_in_array' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'trailing_comma_in_multiline_array' => true,
    'not_operator_with_successor_space' => true,

    // General
    'indentation_type' => true,
    'single_quote' => true,
    'no_unused_imports' => true,
    'no_useless_else' => true,
    'no_useless_return' => true,
    'no_extra_blank_lines' => true,
    'no_whitespace_in_blank_line' => true,
    'linebreak_after_opening_tag' => true,
    'no_blank_lines_after_class_opening' => true,
    'no_blank_lines_after_phpdoc' => true,
    'cast_spaces' => true,
    'concat_space' => [
        'spacing' => 'none',
    ],
    'blank_line_before_statement' => true,
    'method_chaining_indentation' => true,
    'ordered_imports' => [
        'sort_algorithm' => 'alpha',
    ],
    'single_line_comment_style' => [
        'comment_types' => [
            'hash',
        ],
    ],
    'return_type_declaration' => [
        'space_before' => 'none',
    ],

    // Docs
    'phpdoc_types' => true,
    'phpdoc_indent' => true,
    'phpdoc_to_comment' => true,
    'phpdoc_trim' => true,
    'phpdoc_align' => true,
    'phpdoc_summary' => true,
    'phpdoc_separation' => true,
    'phpdoc_scalar' => true,
    'phpdoc_order' => true,
    'phpdoc_inline_tag' => true,
    'phpdoc_return_self_reference' => true,
    'phpdoc_var_without_name' => true,
    'phpdoc_var_annotation_correct_order' => true,
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    'phpdoc_add_missing_param_annotation' => [
        'only_untyped' => false,
    ],
];

$excludes = [
    'coverage',
    'docs',
    'vendor',
];

return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude($excludes)
            ->in([
                __DIR__.'/config',
                __DIR__.'/src',
                __DIR__.'/tests',
            ])
            ->ignoreDotFiles(true)
            ->ignoreVCS(true)
    );
