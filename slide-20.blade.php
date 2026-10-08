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

{{-- Local mobile fix only: the platform shell's fixed mobile chrome (logo header +
     prev/next nav row + progress bar, ≈110px) overlays the top of the slide viewport
     on phones/tablets. Push the slide content below it and compensate full-height
     min-heights so nothing sits behind the chrome. Desktop (>=1024px) is unchanged. --}}
<style>
    @media (max-width: 1023px) {
        body > .slide-layout > .relative.z-10 {
            padding-top: 112px;
        }
        body > .slide-layout > .relative.z-10 .min-h-\[100dvh\] {
            min-height: calc(100dvh - 112px);
        }
    }
</style>
