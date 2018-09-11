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
            'guideline_amount' => 11,
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
        'SUP8' => [
            'process_area_name' => 'SUP8',
            'bp_amount' => 9,
            'guideline_amount' => 24,
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