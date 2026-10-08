{{-- Canva source page(s) 3: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Sports Business Challenge',
        'subtitle' => 'Drag each phrase into the correct category.',
        'type' => 'text',
        'show_category_labels' => true,
        'category_columns_xl' => 3,
        'categories' => [
            'Ways sport generates income' => [
                'ticket sales',
                'sponsorships',
                'brand partnerships',
            ],
            'Ways sport reaches audiences' => [
                'broadcasting rights',
                'attract millions of viewers',
            ],
            'Things fans buy' => [
                'merchandise',
            ],
        ],
        'page_title' => 'Sports Business Challenge',
    ];
@endphp

@include('slider.game.drag-and-drop', ['content' => $content])
