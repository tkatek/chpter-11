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
