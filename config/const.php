<?php

return [
    // 'bp_amount' => [
    //     'man3' => 10,
    //     'swe1' => 8,
    //     'swe6' => 7,
    //     'sup8' => 9,
    // ],
    

    // 'process_area_name_lists' =>[
    //     'man3' => 'MAN3',
    //     'swe1' => 'SWE1',
    //     'swe6' => 'SWE6',
    //     'sup8' => 'SUP8',
    // ],
    
    // 'guideline_amount' => [
    //     'man3' => 48,
    //     'swe1' => 22,
    //     'swe6' => 18, 
    //     'sup8' => 24,
    // ],
    
    'process_area_info' =>[
        'MAN3' => [
            'process_area_name' => 'MAN3',
            'bp_amount' => 10,
            'guideline_amount' => 48,
        ],
        'MAN5' => [
            'process_area_name' => 'MAN5',
            'bp_amount' => 7,
            'guideline_amount' => 0, //現状存在せず
        ],
        'ACQ4' => [
            'process_area_name' => 'ACQ4',
            'bp_amount' => 5,
            'guideline_amount' => 9,
        ],
        'SYS1' => [
            'process_area_name' => 'SYS1',
            'bp_amount' => 6,
            'guideline_amount' => 0, //現状存在せず
        ],
        'SYS2' => [
            'process_area_name' => 'SYS2',
            'bp_amount' => 8,
            'guideline_amount' => 18,
        ],
        'SYS3' => [
            'process_area_name' => 'SYS3',
            'bp_amount' => 8,
            'guideline_amount' => 12,
        ],
        'SYS4' => [
            'process_area_name' => 'SYS4',
            'bp_amount' => 9,
            'guideline_amount' => 22,
        ],
        'SYS5' => [
            'process_area_name' => 'SYS5',
            'bp_amount' => 7,
            'guideline_amount' => 18,
        ],
        'SWE1' => [
            'process_area_name' => 'SWE1',
            'bp_amount' => 8,
            'guideline_amount' => 22,
        ],
        'SWE2' => [
            'process_area_name' => 'SWE2',
            'bp_amount' => 9,
            'guideline_amount' => 13,
        ],
        'SWE3' => [
            'process_area_name' => 'SWE3',
            'bp_amount' => 8,
            'guideline_amount' => 14,
        ],
        'SWE4' => [
            'process_area_name' => 'SWE4',
            'bp_amount' => 7,
            'guideline_amount' => 15,
        ],
        'SWE5' => [
            'process_area_name' => 'SWE5',
            'bp_amount' => 9,
            'guideline_amount' => 22,
        ],
        'SWE6' => [
            'process_area_name' => 'SWE6',
            'bp_amount' => 7,
            'guideline_amount' => 18,
        ],
        'SPL2' => [
            'process_area_name' => 'SPL2',
            'bp_amount' => 13,
            'guideline_amount' => 0, //現状存在せず
        ],
        'REU2' => [
            'process_area_name' => 'REU2',
            'bp_amount' => 8,
            'guideline_amount' => 0, //現状存在せず
        ],
        'SUP1' => [
            'process_area_name' => 'SUP1',
            'bp_amount' => 9,
            'guideline_amount' => 20,
        ],
        'SUP2' => [
            'process_area_name' => 'SUP2',
            'bp_amount' => 5,
            'guideline_amount' => 0, //現状存在せず
        ],
        'SUP4' => [
            'process_area_name' => 'SUP4',
            'bp_amount' => 8,
            'guideline_amount' => 0, //現状存在せず
        ],
        'SUP8' => [
            'process_area_name' => 'SUP8',
            'bp_amount' => 9,
            'guideline_amount' => 24,
        ],
        'SUP9' => [
            'process_area_name' => 'SUP9',
            'bp_amount' => 9,
            'guideline_amount' => 18,
        ],
        'SUP10' => [
            'process_area_name' => 'SUP10',
            'bp_amount' => 8,
            'guideline_amount' => 29,
        ],
    ],
    
    'result_kinds' => [
        0 => 'F',
        1 => 'L',
        2 => 'P',
        3 => 'N',
    ],
    
    'back_ground' => [
        'F' => 'bg-success',
        'L' => 'bg-info',
        'P' => 'bg-warning',
        'N' => 'bg-danger',
        '' => '',
    ],
    
];


?>