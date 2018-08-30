<?php

return [
    'bp_amount' => [
        'man3' => 10,
        'swe1' => 8,
        'swe6' =>7,
    ],
    
    'bp_amount2' => [10,8,7],
    
    'process_area_name_lists' =>[
        'man3' => 'MAN3',
        'swe1' => 'SWE1',
        'swe6' => 'SWE6',
    ],
    
    'guideline_amount' => [
        'man3' => 48,
        'swe1' => 22,
        'swe6' =>18, 
    ],
    
    'process_area_info' =>[
        'MAN.3' => [
            'process_area_name' => 'MAN3',
            'bp_amount' => 10,
            'guideline_amount' => 48,
        ],
        'SWE.1' => [
            'process_area_name' => 'SWE1',
            'bp_amount' => 8,
            'guideline_amount' => 22,
        ],
        'SWE.6' => [
            'process_area_name' => 'SWE6',
            'bp_amount' => 7,
            'guideline_amount' => 18,
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