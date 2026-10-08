{{-- Canva source page(s) 17: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Unscramble the Sentences',
        'subtitle' => 'Put the words in the correct order to make reported questions.',
        'type' => 'sentence',
        'questions' => [
            [
                'answer' => 'The interviewer asked how technology could help athletes improve their performance.',
            ],
            [
                'answer' => 'The coach asked if data analysis could improve their training strategies.',
            ],
            [
                'answer' => 'The interviewer wondered why human judgement was still important.',
            ],
            [
                'answer' => 'The interviewer asked whether technology should replace human decision-making in sport.',
            ],
        ],
        'page_title' => 'Unscramble the Sentences',
    ];
@endphp

@include('slider.game.unscramble', ['content' => $content])

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
