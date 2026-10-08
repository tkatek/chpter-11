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
