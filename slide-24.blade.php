{{-- Canva source page(s) 25,26: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Use the words from the list to complete the summary of the article.',
        'subtitle' => 'Drag words from the bank into the summary. Two words are extra.',
        'sentences' => [
            'Plenty of technology is used in sport. {{1}} assists referees in football, and this year {{2}} were replaced with a technology that is supposedly faster and more {{3}}. Though it doesn\'t always go smoothly, and technology has even been accused of {{4}} some teams over others because of {{5}} it\'s made.',
        ],
        'answers' => [
            'VAR',
            'line judges',
            'accurate',
            'favouring',
            'oversights',
        ],
        'word_bank' => [
            'trust',
            'under fire',
            'accurate',
            'line judges',
            'oversights',
            'favouring',
            'VAR',
        ],
        'shuffle_bank' => false,
        'bank_layout' => 'all',
        'page_title' => 'Use the words from the list to complete the summary of the article.',
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
