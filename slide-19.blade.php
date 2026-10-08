{{-- Canva source page(s) 20: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Sports Equipment',
        'subtitle' => 'Drag and drop each item into its correct group.',
        'type' => 'text',
        'compact_viewport' => true,
        'show_category_labels' => true,
        'category_columns_xl' => 5,
        'category_max_width' => 'max-w-[1400px]',
        'categories' => [
            'Basketball' => [
                'Trainers',
                'Jersey',
            ],
            'Swimming' => [
                'Goggles',
                'Swimming hat',
            ],
            'Football' => [
                'Shirt',
                'Boots',
            ],
            'Cycling' => [
                'Helmet',
                'Bike',
            ],
            'Boxing' => [
                'Gloves',
                'Shorts',
            ],
        ],
        'page_title' => 'Sports Equipment',
    ];
@endphp

@include('slider.game.drag-and-drop', ['content' => $content])
