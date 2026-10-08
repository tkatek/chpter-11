{{-- Canva source page(s) 6: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'The Impact of Technology on Sport',
        'subtitle' => 'Watch the interview. How is technology changing sport?',
        'video' => materialAsset('slider/B2/Advanced/chapter-11/videos/technology-in-sport.mp4'),
        'transcript' => [
            'Sports have always been an important part of our lives, whether we take part in them or simply enjoy watching them. However, in recent years, technology has transformed the way athletes train and the way fans experience sport.',
            'But how exactly is technology changing sport? To answer this question, we spoke to a sports technology expert.',
            'Interviewer: How can technology help athletes improve their performance?',
            'Expert: Wearable technology is one of the most important developments. Fitness trackers, smart watches and other devices can monitor an athlete\'s vital signs, such as heart rate, and provide real-time information about performance. Coaches can use this information to make training more effective. For example, they can identify whether an athlete is overtraining or not getting enough rest.',
            'Interviewer: Does this mean that coaches no longer need to rely on their own observations?',
            'Expert: Not at all. Data can help coaches make more informed decisions, but experience is still important. In fact, I\'d argue that technology should support human judgement rather than replace it.',
            'Interviewer: What other types of technology are being used in training?',
            'Expert: Data analysis and advanced analytics are becoming increasingly important. Coaches can analyse information from matches and training sessions to identify strengths and weaknesses, evaluate performance and develop strategies. For example, they can analyse an opponent\'s previous matches to decide which tactics are most likely to succeed.',
            'Interviewer: Can technology also help athletes practise situations that are difficult to recreate in real life?',
            'Expert: Yes. Virtual reality, or VR, can simulate realistic game situations without athletes actually being on the field or court. This can be particularly useful in sports such as golf and baseball, where spatial awareness is important. VR can also support injury rehabilitation by allowing athletes to practise certain movements safely while they recover.',
            'Interviewer: What about the fans? How has technology changed their experience of sport?',
            'Expert: Streaming platforms allow people to watch matches and highlights from almost anywhere in the world. Social media also allows fans to interact with athletes, teams and other supporters. I would point out that watching sport is no longer simply a passive experience. Fans can discuss, react to and share sporting events in real time.',
            'Interviewer: But can we always trust technology to make the right decision?',
            'Expert: That\'s an important question. Technology can process huge amounts of information, but it doesn\'t always understand the context of a situation in the same way a human does. I\'d argue that too much dependence on data could sometimes create problems.',
            'Interviewer: So, should technology replace human decision-making in sport?',
            'Expert: No. I would argue that technology should be used as a tool, not as a complete replacement for human judgement. The challenge is to find the right balance.',
            'Overall, technology is creating new opportunities for athletes, coaches and fans. Wearables, data analysis, virtual reality, streaming and social media are all changing sport. But perhaps the most important question is not whether technology belongs in sport, but how we can use it effectively while keeping the human side of sport at the centre.',
        ],
        'isQuiz' => false,
        'page_title' => 'The Impact of Technology on Sport',
    ];
@endphp

@include('slider.video.interactive', ['content' => $content])

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
