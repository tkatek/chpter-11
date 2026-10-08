{{-- Canva source page(s) 23,26: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Match the paragraph with the most appropriate heading.',
        'subtitle' => 'Drag the best heading to each numbered paragraph. One heading is extra.',
        'sentences' => [
            '<p class="text-justify"><strong>1.</strong> Use of technology in sports is supposed to be able to provide accurate and instant feedback, with better decision-making and reduced errors compared to human intervention. But is that always the case?</p><p class="mt-4">Heading: {{1}}</p>',
            '<p class="text-justify"><strong>2.</strong> The annual tennis tournament Wimbledon made the decision this year to replace their line judges. These have traditionally been men and women who judge whether the ball is in or out of bounds, but they were switched out for AI that analyses camera footage, which should be faster and more accurate. Despite this, the electronic line calling system failed just a week into the 2025 championship. The ball-tracking technology was turned off by a person accidentally. This meant a point had to be replayed, which resulted in Sonay Kartal controversially winning the game. If technology needs humans to operate it in the first place, whose fault is it in situations like these where things go wrong?</p><p class="mt-4">Heading: {{2}}</p>',
            '<p class="text-justify"><strong>3.</strong> In football, referees often come under fire for their decision-making. But VAR, that&#x27;s &#x27;video assistant referee&#x27;, is regularly used in football these days too. A referee can ask for a VAR check, which means that if they are unsure of something, like the awarding of a penalty, they can double-check their own judgement. However, last football season, VAR made oversights which angered a lot of managers, players and fans. They said the system was not fit for purpose and even favoured some teams over others. Despite this, the Premier League&#x27;s chief football officer, Tony Scholes, said during the middle of last year&#x27;s season that standards were actually higher than ever. &quot;Before VAR, 82% of the decisions made were deemed to be correct. In the season so far, that figure is 96%,&quot; he said.</p><p class="mt-4">Heading: {{3}}</p>',
            '<p class="text-justify"><strong>4.</strong> So, why do we still not trust technology if it often improves a situation? Professor Gina Neff from Cambridge University says that we have a very strong, in-built sense of fairness. &quot;The machine makes decisions based on the set of rules it&#x27;s been programmed to adjudicate,&quot; she said. &quot;Right now, in many areas where AI is touching our lives, we feel like humans understand the context much better than the machine.&quot;</p><p class="mt-4">Heading: {{4}}</p>',
            '<p class="text-justify"><strong>5.</strong> Whether you trust it or not, technology is here to stay, including in the world of sport.</p><p class="mt-4">Heading: {{5}}</p>',
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
