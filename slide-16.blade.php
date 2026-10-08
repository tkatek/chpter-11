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
