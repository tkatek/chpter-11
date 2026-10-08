{{-- Canva source page(s) 24,26: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Choose the correct option based on the content of the article.',
        'subtitle' => 'Choose the correct answer based on the article.',
        'type' => 'questions_only',
        'shuffle_options' => false,
        'questions' => [
            [
                'prompt' => 'Wimbledon replaced line judges with AI this year.',
                'options' => [
                    'True',
                    'False',
                    'Not given',
                ],
                'correct' => 'True',
            ],
            [
                'prompt' => 'The match that Sonay Kartal won was controversial because…',
                'options' => [
                    'she only won because of a human-caused error.',
                    'she won despite technology failing.',
                    'she won in a replay that was not needed.',
                ],
                'correct' => 'she only won because of a human-caused error.',
            ],
            [
                'prompt' => 'VAR is used in football…',
                'options' => [
                    'in replacement of a referee.',
                    'to support referees who are unsure of their decisions.',
                    'to the anger of managers, players and fans.',
                ],
                'correct' => 'to support referees who are unsure of their decisions.',
            ],
            [
                'prompt' => 'What does \'this\' refer to in the following sentence? Despite this, the Premier League\'s chief football officer, Tony Scholes, said during the middle of last year\'s season that standards have never been higher.',
                'options' => [
                    'referees making oversights',
                    'the football season changing',
                    'VAR oversights and the subsequent anger',
                ],
                'correct' => 'VAR oversights and the subsequent anger',
            ],
            [
                'prompt' => 'VAR has caused there to be less accurate decision-making by referees.',
                'options' => [
                    'True',
                    'False',
                    'Not given',
                ],
                'correct' => 'False',
            ],
        ],
        'passage_title' => 'Can We Trust Technology in Sport?',
        'passage' => [
            'Use of technology in sports is supposed to be able to provide accurate and instant feedback, with better decision-making and reduced errors compared to human intervention. But is that always the case?',
            'The annual tennis tournament Wimbledon made the decision this year to replace their line judges. These have traditionally been men and women who judge whether the ball is in or out of bounds, but they were switched out for AI that analyses camera footage, which should be faster and more accurate. Despite this, the electronic line calling system failed just a week into the 2025 championship. The ball-tracking technology was turned off by a person accidentally. This meant a point had to be replayed, which resulted in Sonay Kartal controversially winning the game. If technology needs humans to operate it in the first place, whose fault is it in situations like these where things go wrong?',
            'In football, referees often come under fire for their decision-making. But VAR, that\'s \'video assistant referee\', is regularly used in football these days too. A referee can ask for a VAR check, which means that if they are unsure of something, like the awarding of a penalty, they can double-check their own judgement. However, last football season, VAR made oversights which angered a lot of managers, players and fans. They said the system was not fit for purpose and even favoured some teams over others. Despite this, the Premier League\'s chief football officer, Tony Scholes, said during the middle of last year\'s season that standards were actually higher than ever. "Before VAR, 82% of the decisions made were deemed to be correct. In the season so far, that figure is 96%," he said.',
            'So, why do we still not trust technology if it often improves a situation? Professor Gina Neff from Cambridge University says that we have a very strong, in-built sense of fairness. "The machine makes decisions based on the set of rules it\'s been programmed to adjudicate," she said. "Right now, in many areas where AI is touching our lives, we feel like humans understand the context much better than the machine."',
            'Whether you trust it or not, technology is here to stay, including in the world of sport.',
        ],
        'page_title' => 'Choose the correct option based on the content of the article.',
    ];
@endphp

@include('slider.game.multi-choice-all-in-one', ['content' => $content])
