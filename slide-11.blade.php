{{-- Canva source page(s) 12: https://canva.link/2q0owwdnfy54l3f --}}
@php
    // Canva page 12 (practice.4) — exact teacher wording.
    // Answer key: 1-F | 2-E | 3-B | 4-D | 5-C | 6-A
    // right_order lists pair ids so the endings appear in the teacher's A-F order.
    $content = [
        'page_title' => 'Match the Phrases',
        'title' => 'Match the Phrases',
        'subtitle' => '',
        'vertical_alignment' => 'top',
        'activity_title' => 'Match the phrases',
        'instruction' => 'Match 1–6 with A–F to complete the sentences.',
        'left_label' => 'Sentence beginnings',
        'right_label' => 'Sentence endings',
        'shuffle_right' => false,
        'right_order' => [
            'pair-6',
            'pair-3',
            'pair-5',
            'pair-4',
            'pair-2',
            'pair-1',
        ],
        'pairs' => [
            [
                'id' => 'pair-1',
                'left' => ['type' => 'word', 'text' => '1. Coaches use data analysis to'],
                'right' => ['type' => 'word', 'text' => 'F. develop more effective strategies.'],
            ],
            [
                'id' => 'pair-2',
                'left' => ['type' => 'word', 'text' => '2. Athletes can use virtual reality to'],
                'right' => ['type' => 'word', 'text' => 'E. simulate realistic game situations.'],
            ],
            [
                'id' => 'pair-3',
                'left' => ['type' => 'word', 'text' => '3. Advanced analytics can help coaches identify'],
                'right' => ['type' => 'word', 'text' => 'B. strengths and weaknesses in an athlete’s performance.'],
            ],
            [
                'id' => 'pair-4',
                'left' => ['type' => 'word', 'text' => '4. Streaming platforms allow fans to'],
                'right' => ['type' => 'word', 'text' => 'D. watch matches and highlights from almost anywhere.'],
            ],
            [
                'id' => 'pair-5',
                'left' => ['type' => 'word', 'text' => '5. Social media has increased'],
                'right' => ['type' => 'word', 'text' => 'C. fan engagement with teams and athletes.'],
            ],
            [
                'id' => 'pair-6',
                'left' => ['type' => 'word', 'text' => '6. Coaches can use technology to evaluate'],
                'right' => ['type' => 'word', 'text' => 'A. matches and training sessions in greater detail.'],
            ],
        ],
    ];
@endphp

@include('slider.game.matching-pairs', ['content' => $content])

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
