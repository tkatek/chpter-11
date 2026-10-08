{{-- Canva source page(s) 19: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Technology in Sport',
        'subtitle' => 'Drag and drop each keyword next to its definition.',
        'sentences' => [
            '1. Used by athletes in many sports to monitor their fitness, they measure number of steps, distance covered, heart rate etc. {{1}}',
            '2. Used in football, tennis and rugby to track the ball to check if it has crossed the line. {{2}}',
            '3. Used in lots of sports to track players movement, fitness, acceleration, heart rate etc. {{3}}',
            '4. Used in various sports to assist referees in making decisions through VAR and to enhance the viewers experience. {{4}}',
        ],
        'answers' => [
            'Smart Watches',
            'Hawk Eye',
            'GPS Vests',
            'Video replay',
        ],
        'shuffle_bank' => false,
        'bank_layout' => 'all',
        'page_title' => 'Technology in Sport',
    ];
@endphp

@include('slider.game.drag-and-drop-blanks', ['content' => $content])

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
