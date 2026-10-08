{{-- Canva source page(s) 1: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'type' => 'intro',
        'unit' => 'Sports Crazy!',
        'unit_number' => '4',
        'lesson' => 'Can Tech Make Sport Fairer?',
        'lesson_number' => '2',
        'subtitle' => 'Exploring fairness, accuracy, and the role of technology in modern sport.',
        'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide1.webp'),
        'image_alt' => 'Technology supporting fair decisions and athletes in sport.',
        'button' => 'Start Session',
        'page_title' => 'Can Tech Make Sport Fairer?',
    ];
@endphp

@include('slider.intro.intro-outro', ['content' => $content])
