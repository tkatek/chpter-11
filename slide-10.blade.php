{{-- Canva source page(s) 11: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Vocabulary in Context',
        'subtitle' => 'Choose the best word or phrase to complete each sentence.',
        'type' => 'questions_only',
        'shuffle_options' => false,
        'questions' => [
            [
                'prompt' => 'Fitness trackers and smart watches are examples of ______ that can monitor an athlete’s performance.',
                'options' => [
                    'spatial awareness',
                    'wearable technology',
                    'injury rehabilitation',
                    'human judgement',
                ],
                'correct' => 'wearable technology',
            ],
            [
                'prompt' => 'The device continuously records the athlete’s heart rate and other ______ during training.',
                'options' => [
                    'vital signs',
                    'strategies',
                    'strengths and weaknesses',
                    'streaming platforms',
                ],
                'correct' => 'vital signs',
            ],
            [
                'prompt' => 'Coaches can receive ______ information about an athlete’s performance while training is taking place.',
                'options' => [
                    'passive',
                    'advanced',
                    'real-time',
                    'virtual',
                ],
                'correct' => 'real-time',
            ],
            [
                'prompt' => 'The coach reduced the intensity of the training session after noticing that the athlete was showing signs of ______.',
                'options' => [
                    'fan engagement',
                    'overtraining',
                    'simulation',
                    'rehabilitation',
                ],
                'correct' => 'overtraining',
            ],
            [
                'prompt' => 'Coaches use ______ to examine large amounts of performance data and identify useful patterns.',
                'options' => [
                    'advanced analytics',
                    'spatial awareness',
                    'wearable technology',
                    'human judgement',
                ],
                'correct' => 'advanced analytics',
            ],
            [
                'prompt' => 'Virtual reality allows athletes to ______ realistic game situations without actually being on the field.',
                'options' => [
                    'replace',
                    'rely',
                    'simulate',
                    'engage',
                ],
                'correct' => 'simulate',
            ],
            [
                'prompt' => 'Golfers and baseball players need strong ______ to understand where they are in relation to other objects.',
                'options' => [
                    'vital signs',
                    'spatial awareness',
                    'advanced analytics',
                    'real-time information',
                ],
                'correct' => 'spatial awareness',
            ],
            [
                'prompt' => 'Although technology can provide valuable data, it should not completely ______ because coaches still need experience and understanding.',
                'options' => [
                    'create new possibilities',
                    'identify strengths and weaknesses',
                    'replace human judgement',
                    'monitor vital signs',
                ],
                'correct' => 'replace human judgement',
            ],
        ],
        'page_title' => 'Vocabulary in Context',
    ];
@endphp

@include('slider.game.multi-choice-all-in-one', ['content' => $content])
