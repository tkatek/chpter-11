{{-- Canva source page(s) 2: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Learning Objectives',
        'subtitle' => 'By the end of the lesson, students will be able to:',
        'type' => 'type4',
        'objectives' => [
            'Identify the main ideas and specific details in listening and reading texts about the role of technology in sport.',
            'Use vocabulary related to technology, sports performance and fairness accurately in context.',
            'Report Wh- and Yes/No questions using appropriate word order and tense changes.',
            'Explain how technology can improve athletes’ training and performance using relevant examples.',
            'Discuss the advantages and disadvantages of technology in sport and justify their opinions with supporting reasons and examples.',
            'Give a short, organised spoken description of a sport, including where it is played, the equipment used, and how technology supports players’ performance.',
        ],
        'page_title' => 'Learning Objectives',
    ];
@endphp

@include('slider.other.learning-objectives', ['content' => $content])

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
