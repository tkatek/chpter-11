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
