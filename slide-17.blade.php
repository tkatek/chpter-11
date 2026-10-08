{{-- Canva source page(s) 18: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Listening: Is Technology Leading the Game?',
        'subtitle' => 'You will hear six people talking about technology in sport. Listen and choose the best answer A, B or C.',
        'type' => 'questions_only',
        'shuffle_options' => false,
        'questions' => [
            [
                'prompt' => 'Speaker 1 — Football fan. What does the speaker think VAR has achieved?',
                'options' => [
                    'It has made football matches more entertaining.',
                    'It has improved the accuracy of refereeing decisions.',
                    'It has reduced the need for referees.',
                ],
                'correct' => 'It has improved the accuracy of refereeing decisions.',
            ],
            [
                'prompt' => 'Speaker 2 — Tennis player. Why does the speaker mention Hawk-Eye?',
                'options' => [
                    'It can help reduce human errors in tennis.',
                    'It has made tennis players train harder.',
                    'It has completely replaced human decisions.',
                ],
                'correct' => 'It can help reduce human errors in tennis.',
            ],
            [
                'prompt' => 'Speaker 3 — Motor-racing fan. What does the speaker believe is the main benefit of the halo?',
                'options' => [
                    'It makes F1 cars faster.',
                    'It protects drivers from serious head injuries.',
                    'It makes races easier for drivers to control.',
                ],
                'correct' => 'It protects drivers from serious head injuries.',
            ],
            [
                'prompt' => 'Speaker 4 — Sports journalist. What concern does the speaker raise about technology?',
                'options' => [
                    'Some people may use technology to gain an unfair advantage.',
                    'Technology is making sporting events too expensive to watch.',
                    'Athletes are becoming less interested in technology.',
                ],
                'correct' => 'Some people may use technology to gain an unfair advantage.',
            ],
            [
                'prompt' => 'Speaker 5 — Young athlete. What problem does the speaker mention?',
                'options' => [
                    'Technology is not useful for improving performance.',
                    'Some athletes and teams may not be able to afford the latest technology.',
                    'Fitness watches are no longer popular with athletes.',
                ],
                'correct' => 'Some athletes and teams may not be able to afford the latest technology.',
            ],
            [
                'prompt' => 'Speaker 6 — Sports commentator. What is the speaker’s overall opinion about technology in sport?',
                'options' => [
                    'Technology should be completely removed from sport.',
                    'Technology is always beneficial, whatever the circumstances.',
                    'Technology can improve sport if it is properly controlled.',
                ],
                'correct' => 'Technology can improve sport if it is properly controlled.',
            ],
        ],
        'audio' => materialAsset('slider/B2/Advanced/chapter-11/audios/is-technology-leading-the-game.mp3'),
        'page_title' => 'Listening: Is Technology Leading the Game?',
    ];
@endphp

@include('slider.game.multi-choice-all-in-one', ['content' => $content])

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
