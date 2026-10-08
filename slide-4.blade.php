{{-- Canva source page(s) 4: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Pick a Number!',
        'subtitle' => 'Students choose a number from 1–8. They read the sentence and correct the word(s) in brackets.',
        'show_images' => false,
        'items' => [
            [
                'number' => 1,
                'question_title' => 'Correct the statement',
                'question' => 'The presenter (told) that sports generated a lot of income.',
                'answer' => 'The presenter said that sports generated a lot of income.',
            ],
            [
                'number' => 2,
                'question_title' => 'Correct the statement',
                'question' => 'The presenter said that (we) earned money through merchandise.',
                'answer' => 'The presenter said that they earned money through merchandise.',
            ],
            [
                'number' => 3,
                'question_title' => 'Correct the statement',
                'question' => 'The presenter said that companies (pay) teams and athletes.',
                'answer' => 'The presenter said that companies paid teams and athletes.',
            ],
            [
                'number' => 4,
                'question_title' => 'Correct the statement',
                'question' => 'The presenter said that athletes (was) paid for their performance.',
                'answer' => 'The presenter said that athletes were paid for their performance.',
            ],
            [
                'number' => 5,
                'question_title' => 'Correct the statement',
                'question' => 'The presenter said that (our) team attracted millions of viewers.',
                'answer' => 'The presenter said that their team attracted millions of viewers.',
            ],
            [
                'number' => 6,
                'question_title' => 'Correct the statement',
                'question' => 'The presenter said that sports (are) a huge business.',
                'answer' => 'The presenter said that sports were a huge business.',
            ],
            [
                'number' => 7,
                'question_title' => 'Correct the statement',
                'question' => 'The presenter said that (we) were there to explain how sports made money.',
                'answer' => 'The presenter said that they were there to explain how sports made money.',
            ],
            [
                'number' => 8,
                'question_title' => 'Correct the statement',
                'question' => 'Original statement: “Sports reach worldwide audiences.”
The presenter said that sports (had reached) worldwide audiences.',
                'answer' => 'The presenter said that sports reached worldwide audiences.',
            ],
        ],
        'page_title' => 'Pick a Number!',
    ];
@endphp

@include('slider.game.question-answer', ['content' => $content])
