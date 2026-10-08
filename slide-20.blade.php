{{-- Canva source page(s) 21: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Sports Fields',
        'subtitle' => 'Match each sport to the place where it is played.',
        'type' => 'text',
        'compact_viewport' => true,
        'show_category_labels' => true,
        'category_columns_xl' => 8,
        'category_max_width' => 'max-w-[1400px]',
        'initial_visible_slots' => 1,
        'categories' => [
            'Court' => [
                'basketball',
                'tennis',
                'volleyball',
                'badminton',
                'squash',
            ],
            'Pool' => [
                'swimming',
                'water polo',
                'diving',
            ],
            'Rink' => [
                'ice hockey',
                'ice skating',
            ],
            'Course' => [
                'golf',
                'horse racing',
            ],
            'Pitch' => [
                'football',
                'cricket',
                'hockey',
                'rugby',
            ],
            'Track' => [
                'athletics',
                'cycling',
                'car racing',
            ],
            'Ring' => [
                'boxing',
                'karate',
                'wrestling',
            ],
            'Field' => [
                'baseball',
                'American football',
                'polo',
            ],
        ],
        'page_title' => 'Sports Fields',
    ];
@endphp

@include('slider.game.drag-and-drop', ['content' => $content])
