{{-- Canva source page(s) 15: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Rewrite the sentences',
        'subtitle' => 'Rewrite each sentence as a reported question.',
        'inline_answers' => true,
        'hide_hints' => true,
        'storage_version' => 'sport-questions-v1',
        'questions' => [
            [
                'prompt' => 'The interviewer asked, “How can wearable technology help athletes?”',
                'prefix' => 'The interviewer asked',
                'suffix' => '.',
                'answers' => [
                    'how wearable technology could help athletes',
                ],
            ],
            [
                'prompt' => 'The coach asked, “Can data analysis improve our training strategies?”',
                'prefix' => 'The coach asked',
                'suffix' => '.',
                'answers' => [
                    'if data analysis could improve their training strategies',
                    'whether data analysis could improve their training strategies',
                ],
            ],
            [
                'prompt' => 'The interviewer wondered, “Why is human judgement still important?”',
                'prefix' => 'The interviewer wondered',
                'suffix' => '.',
                'answers' => [
                    'why human judgement was still important',
                ],
            ],
            [
                'prompt' => 'The expert explained, “How does virtual reality support injury rehabilitation?”',
                'prefix' => 'The expert explained',
                'suffix' => '.',
                'answers' => [
                    'how virtual reality supported injury rehabilitation',
                ],
            ],
            [
                'prompt' => 'The interviewer asked, “Should technology replace human decision-making in sport?”',
                'prefix' => 'The interviewer asked',
                'suffix' => '.',
                'answers' => [
                    'if technology should replace human decision-making in sport',
                    'whether technology should replace human decision-making in sport',
                ],
            ],
        ],
        'page_title' => 'Rewrite the sentences',
    ];
@endphp

@include('slider.game.type-correct-format', ['content' => $content])
