<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form Autocomplete',
    'description' => 'Double Opt-In for the TYPO3 CMS Form Framework',
    'category' => 'plugin',
    'state' => 'stable',
    'version' => '11.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'form' => '11.5.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
