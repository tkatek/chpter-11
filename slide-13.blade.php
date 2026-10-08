{{-- Canva source page(s) 14: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Grammar Focus: Reporting Questions',
        'subtitle' => 'Choose the best answer (A, B, C or D).',
        'type' => 'questions_only',
        'shuffle_options' => false,
        'questions' => [
            [
                'prompt' => 'The interviewer asked, “How can technology help athletes improve their performance?”',
                'options' => [
                    'The interviewer asked how technology could help athletes improve their performance.',
                    'The interviewer asked how could technology help athletes improve their performance.',
                    'The interviewer asked if technology could help athletes improve their performance.',
                    'The interviewer asked what technology could help athletes improve their performance.',
                ],
                'correct' => 'The interviewer asked how technology could help athletes improve their performance.',
            ],
            [
                'prompt' => 'The interviewer asked, “Does this mean that coaches no longer need to rely on their own observations?”',
                'options' => [
                    'The interviewer asked what this meant that coaches no longer needed to rely on their own observations.',
                    'The interviewer asked if this meant that coaches no longer needed to rely on their own observations.',
                    'The interviewer asked whether did this mean that coaches no longer needed to rely on their own observations.',
                    'The interviewer asked how this meant that coaches no longer needed to rely on their own observations.',
                ],
                'correct' => 'The interviewer asked if this meant that coaches no longer needed to rely on their own observations.',
            ],
            [
                'prompt' => 'The interviewer asked, “What other types of technology are being used in training?”',
                'options' => [
                    'The interviewer asked whether other types of technology were being used in training.',
                    'The interviewer asked what were other types of technology being used in training.',
                    'The interviewer asked what other types of technology were being used in training.',
                    'The interviewer asked if what other types of technology were being used in training.',
                ],
                'correct' => 'The interviewer asked what other types of technology were being used in training.',
            ],
            [
                'prompt' => 'The interviewer asked, “Can technology also help athletes practise situations?”',
                'options' => [
                    'The interviewer asked what technology could also help athletes practise situations.',
                    'The interviewer asked how technology could also help athletes practise situations.',
                    'The interviewer asked can technology also help athletes practise situations.',
                    'The interviewer asked whether technology could also help athletes practise situations.',
                ],
                'correct' => 'The interviewer asked whether technology could also help athletes practise situations.',
            ],
            [
                'prompt' => 'The interviewer asked, “But can we always trust technology to make the right decision?”',
                'options' => [
                    'The interviewer asked whether we could always trust technology to make the right decision.',
                    'The interviewer asked how we could always trust technology to make the right decision.',
                    'The interviewer asked whether could we always trust technology to make the right decision.',
                    'The interviewer asked what we could always trust technology to make the right decision.',
                ],
                'correct' => 'The interviewer asked whether we could always trust technology to make the right decision.',
            ],
            [
                'prompt' => 'The interviewer asked, “Should technology replace human decision-making in sport?”',
                'options' => [
                    'The interviewer asked what technology should replace human decision-making in sport.',
                    'The interviewer asked whether technology should replace human decision-making in sport.',
                    'The interviewer asked how technology should replace human decision-making in sport.',
                    'The interviewer asked whether should technology replace human decision-making in sport.',
                ],
                'correct' => 'The interviewer asked whether technology should replace human decision-making in sport.',
            ],
        ],
        'page_title' => 'Grammar Focus: Reporting Questions',
    ];
@endphp

@include('slider.game.multi-choice-all-in-one', ['content' => $content])
