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
                'suffix' => '',
                'answers' => [
                    'how wearable technology could help athletes.',
                ],
            ],
            [
                'prompt' => 'The coach asked, “Can data analysis improve our training strategies?”',
                'prefix' => 'The coach asked',
                'suffix' => '',
                'answers' => [
                    'if data analysis could improve their training strategies',
                    'whether data analysis could improve their training strategies.',
                ],
            ],
            [
                'prompt' => 'The interviewer wondered, “Why is human judgement still important?”',
                'prefix' => 'The interviewer wondered',
                'suffix' => '',
                'answers' => [
                    'why human judgement was still important.',
                ],
            ],
            [
                'prompt' => 'The expert explained, “How does virtual reality support injury rehabilitation?”',
                'prefix' => 'The expert explained',
                'suffix' => '',
                'answers' => [
                    'how virtual reality supported injury rehabilitation.',
                ],
            ],
            [
                'prompt' => 'The interviewer asked, “Should technology replace human decision-making in sport?”',
                'prefix' => 'The interviewer asked',
                'suffix' => '',
                'answers' => [
                    'if technology should replace human decision-making in sport',
                    'whether technology should replace human decision-making in sport.',
                ],
            ],
        ],
        'page_title' => 'Rewrite the sentences',
    ];
@endphp

@include('slider.game.type-correct-format', ['content' => $content])

{{-- Local layout polish only: 2 + 2 + 1 card arrangement (question 5 spans both
     columns) and compact vertical spacing so the slide fits a desktop viewport
     without unnecessary scrolling. No theme colors, fonts, borders or shadows change. --}}
<style>
    /* Question cards: two equal columns; question 5 fills the whole final row. */
    .verb-card:last-child {
        grid-column: 1 / -1;
    }

    /* Drop the artificial card height floor and trim vertical padding. */
    .verb-card {
        min-height: 0;
        padding: 15px 18px;
    }

    /* Tighter question label and answer line spacing. */
    .verb-card > label {
        margin-bottom: 8px;
        line-height: 1.45;
    }

    .verb-card > div {
        line-height: 1.75;
    }

    /* Compact the header, status bar and button row spacing. */
    main .header-spacing {
        margin-bottom: 14px;
    }

    #gameStatus {
        margin-bottom: 12px;
    }

    #gameStatus .grid-cols-4 > div {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    main div.max-w-2xl {
        margin-bottom: 12px;
    }

    /* Reduce the page's vertical padding (component default: py-7). */
    .min-h-\[100dvh\].flex.justify-center {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
</style>
