{{-- Canva source page(s) 16: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Correct the Mistake',
        'subtitle' => 'Rewrite each sentence using statement word order.',
        'stacked_full_input' => true,
        'stacked_grid_cols_2' => false,
        'auto_grow_inputs' => false,
        'hide_hints' => true,
        'storage_version' => 'sport-questions-corrections-v1',
        'questions' => [
            [
                'prompt' => 'The interviewer asked how could technology help athletes improve their performance.',
                'answers' => [
                    'The interviewer asked how technology could help athletes improve their performance.',
                ],
            ],
            [
                'prompt' => 'The coach wondered whether did technology replace human judgement.',
                'answers' => [
                    'The coach wondered whether technology replaced human judgement.',
                ],
            ],
            [
                'prompt' => 'The expert explained how could virtual reality support injury rehabilitation.',
                'answers' => [
                    'The expert explained how virtual reality could support injury rehabilitation.',
                ],
            ],
        ],
        'page_title' => 'Correct the Mistake',
    ];
@endphp

@include('slider.game.type-correct-format', ['content' => $content])

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
