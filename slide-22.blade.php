{{-- Canva source page(s) 22,23,26: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Match the paragraph with the most appropriate heading.',
        'subtitle' => 'Drag the best heading to each numbered paragraph. One heading is extra.',
        'sentences' => [
            '<p><strong>Paragraph 1</strong> &mdash; Use of technology in sports is supposed to be able to provide accurate and instant feedback, with better decision-making and reduced errors compared to human intervention.</p><p class="mt-2">Heading: {{1}}</p>',
            '<p><strong>Paragraph 2</strong> &mdash; Despite this, the electronic line calling system failed just a week into the 2025 championship. The ball-tracking technology was turned off by a person accidentally.</p><p class="mt-2">Heading: {{2}}</p>',
            '<p><strong>Paragraph 3</strong> &mdash; They said the system was not fit for purpose and even favoured some teams over others. Despite this, the Premier League&#x27;s chief football officer, Tony Scholes, said during the middle of last year&#x27;s season that standards were actually higher than ever.</p><p class="mt-2">Heading: {{3}}</p>',
            '<p><strong>Paragraph 4</strong> &mdash; So, why do we still not trust technology if it often improves a situation? Professor Gina Neff from Cambridge University says that we have a very strong, in-built sense of fairness.</p><p class="mt-2">Heading: {{4}}</p>',
            '<p><strong>Paragraph 5</strong> &mdash; Whether you trust it or not, technology is here to stay, including in the world of sport.</p><p class="mt-2">Heading: {{5}}</p>',
        ],
        'answers' => [
            'How do they compare?',
            'A human error',
            'A mismatch of beliefs in accuracy',
            'Mistrust in tech',
            'We can’t change the future',
        ],
        'word_bank' => [
            'A human error',
            'We can’t change the future',
            'Mistrust in tech',
            'A mismatch of beliefs in accuracy',
            'Short-term changes',
            'How do they compare?',
        ],
        'shuffle_bank' => false,
        'bank_layout' => 'all',
        'page_title' => 'Match the paragraph with the most appropriate heading.',
    ];
@endphp

@include('slider.game.drag-and-drop-blanks', ['content' => $content])

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
