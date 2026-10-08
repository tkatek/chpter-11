{{-- Canva source page(s) 12: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Match the Phrases',
        'subtitle' => 'Match 1–6 with A–F to complete the sentences.',
        'sentences' => [
            '1. Coaches use data analysis to {{1}}',
            '2. Athletes can use virtual reality to {{2}}',
            '3. Advanced analytics can help coaches identify {{3}}',
            '4. Streaming platforms allow fans to {{4}}',
            '5. Social media has increased {{5}}',
            '6. Coaches can use technology to evaluate {{6}}',
        ],
        'answers' => [
            'develop more effective strategies.',
            'simulate realistic game situations.',
            'strengths and weaknesses in an athlete’s performance.',
            'watch matches and highlights from almost anywhere.',
            'fan engagement with teams and athletes.',
            'matches and training sessions in greater detail.',
        ],
        'word_bank' => [
            'matches and training sessions in greater detail.',
            'strengths and weaknesses in an athlete’s performance.',
            'fan engagement with teams and athletes.',
            'watch matches and highlights from almost anywhere.',
            'simulate realistic game situations.',
            'develop more effective strategies.',
        ],
        'shuffle_bank' => false,
        'bank_layout' => 'all',
        'page_title' => 'Match the Phrases',
    ];
@endphp

@include('slider.game.drag-and-drop-blanks', ['content' => $content])
