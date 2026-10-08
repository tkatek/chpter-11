{{-- Canva source page(s) 9: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'New Vocabulary',
        'subtitle' => 'Listen, read the meanings, and notice each word or phrase in the example.',
        'card_type' => 'image',
        'grid_class' => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-4',
        'popup' => 'card',
        'image_text_style' => 'overlay',
        'items' => [
            [
                'text' => 'wearable technology',
                'subtitle' => 'electronic devices worn on the body that collect information',
                'example' => '<strong class="text-indigo-700 dark:text-indigo-300">Wearable technology</strong> can monitor athletes&#x27; performance.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/wearable-technology.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/wearable-technology.mp3'),
            ],
            [
                'text' => 'vital signs',
                'subtitle' => 'important signs of a person\'s physical condition, such as heart rate',
                'example' => 'The device monitors the athlete&#x27;s <strong class="text-indigo-700 dark:text-indigo-300">vital signs</strong>.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/vital-signs.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/vital-signs.mp3'),
            ],
            [
                'text' => 'real-time',
                'subtitle' => 'happening or available immediately as something happens',
                'example' => 'Coaches receive <strong class="text-indigo-700 dark:text-indigo-300">real-time</strong> information about performance.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/real-time.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/real-time.mp3'),
            ],
            [
                'text' => 'overtraining',
                'subtitle' => 'training too much without enough recovery',
                'example' => 'The data can show whether an athlete is <strong class="text-indigo-700 dark:text-indigo-300">overtraining</strong>.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/overtraining.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/overtraining.mp3'),
            ],
            [
                'text' => 'advanced analytics',
                'subtitle' => 'detailed analysis of data to identify patterns and support decisions',
                'example' => '<strong class="text-indigo-700 dark:text-indigo-300">Advanced analytics</strong> can help coaches develop strategies.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/advanced-analytics.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/advanced-analytics.mp3'),
            ],
            [
                'text' => 'simulate',
                'subtitle' => 'to create a realistic model of a situation',
                'example' => 'VR can <strong class="text-indigo-700 dark:text-indigo-300">simulate</strong> realistic game situations.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/simulate.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/simulate.mp3'),
            ],
            [
                'text' => 'spatial awareness',
                'subtitle' => 'the ability to understand where you are in relation to objects or other people',
                'example' => 'Golf and baseball require strong <strong class="text-indigo-700 dark:text-indigo-300">spatial awareness</strong>.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/spatial-awareness.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/spatial-awareness.mp3'),
            ],
            [
                'text' => 'injury rehabilitation',
                'subtitle' => 'the process of recovering physically after an injury',
                'example' => 'VR can support <strong class="text-indigo-700 dark:text-indigo-300">injury rehabilitation</strong>.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/injury-rehabilitation.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/injury-rehabilitation.mp3'),
            ],
            [
                'text' => 'passive experience',
                'subtitle' => 'an experience in which you mainly watch or receive information without actively participating',
                'example' => 'Watching sport is no longer simply a <strong class="text-indigo-700 dark:text-indigo-300">passive experience</strong>.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/passive-experience.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/passive-experience.mp3'),
            ],
            [
                'text' => 'human judgement',
                'subtitle' => 'the ability of people to make decisions using experience and understanding',
                'example' => 'Technology should support <strong class="text-indigo-700 dark:text-indigo-300">human judgement</strong>.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/human-judgement.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/human-judgement.mp3'),
            ],
            [
                'text' => 'dependence on',
                'subtitle' => 'a situation in which someone relies heavily on something',
                'example' => 'Too much <strong class="text-indigo-700 dark:text-indigo-300">dependence on</strong> data can create problems.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/dependence-on.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/dependence-on.mp3'),
            ],
            [
                'text' => 'replace',
                'subtitle' => 'to take the place of something or someone',
                'example' => 'Technology should not <strong class="text-indigo-700 dark:text-indigo-300">replace</strong> human judgement.',
                'image' => materialAsset('slider/B2/Advanced/chapter-11/img/slide8/replace.webp'),
                'sound' => materialAsset('slider/B2/Advanced/chapter-11/audios/vocabulary/replace.mp3'),
            ],
        ],
        'page_title' => 'New Vocabulary',
    ];
@endphp

@include('slider.vocab.image-card', ['content' => $content])

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
