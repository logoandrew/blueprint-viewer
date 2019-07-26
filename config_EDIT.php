<?php
$config = [

    // THESE ARE USED UNLESS OVERRIDDEN
    'standard_page_names' => [
        'Primary Brand',          // page 1
        'Sub-Brands',             // page 2
        'Standard Template',      // page 3
        'System Templates',       // page 4
        'Custom Content Panels',  // page 5
        'Report Template',        // page 6
        'Report Data Templates',  // page 7
        'Sketches'                // page 8 (will only be used if there is a page 8)
    ],


    // EDIT OR COPY/PASTE VALUES BELOW (1 SET FOR EACH BLUEPRINT)
    'bp1' => [
        'blueprint_folder' => '01_Core',
        'brand' => FALSE,
        'palette' => FALSE,
        'num_pages' => 1,
        'page_name_override' => [
            1 => 'Core Elements'
        ],
        'google_link' => FALSE
    ],
    'bp2' => [
        'blueprint_folder' => '02_Brand_Palette',
        'brand' => 'Brand',
        'palette' => 'Palette',
        'num_pages' => 8,
        'page_name_override' => [
            ''
        ],
        'google_link' => "https://link.to.google.sheet"
    ],
    'bp3' => [
        'blueprint_folder' => '03_BrandX_PaletteX',
        'brand' => 'Brand X',
        'palette' => 'Palette X',
        'num_pages' => 9,
        'page_name_override' => [
            8 => 'Sketch',
            9 => 'Print Bridge Mockup'
        ],
        'google_link' => "https://link.to.google.sheet"
    ]
];

return $config;
