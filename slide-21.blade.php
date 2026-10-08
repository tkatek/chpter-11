{{-- Canva source page(s) 22: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Can We Trust Technology in Sport?',
        'subtitle' => 'Read the article, then complete the activities that follow. The article refers to the 2025 sporting season.',
        'page_title' => 'Can We Trust Technology in Sport?',
    ];
@endphp

@extends('slider.simple-layout')

@section('content')
    <div class="min-h-[100dvh] w-full overflow-x-hidden font-sans">
        <div class="mx-auto flex min-h-[100dvh] w-full max-w-[1440px] items-start justify-center px-3 py-7 sm:px-5">
            <main class="w-full">
                @include('slider.components.title-subtitle')

                <article aria-label="Reading passage" class="mx-auto mt-4 h-fit w-full max-w-[760px] rounded-[1.6rem] border border-indigo-200/80 bg-white/95 p-4 text-left shadow-[0_18px_48px_rgba(15,23,42,.1)] dark:border-indigo-500/30 dark:bg-slate-900/95 sm:mt-5 sm:p-6 lg:max-w-[1020px] xl:max-w-[1240px]">
                    <div class="flex gap-4">
                        <span class="w-1.5 shrink-0 self-stretch rounded-full bg-gradient-to-b from-sky-400 via-indigo-500 to-violet-500" aria-hidden="true"></span>
                        <div class="min-w-0 flex-1">
                            <div class="text-[.68rem] font-black uppercase tracking-[.18em] text-indigo-600 dark:text-indigo-300">Reading</div>
                            <div class="mt-3 grid gap-3 sm:mt-4">
                                <p class="m-0 text-sm font-semibold leading-[1.58] text-slate-700 dark:text-slate-200 sm:text-[.95rem]"><span class="font-black text-indigo-600 dark:text-indigo-300">1.</span> Use of technology in sports is supposed to be able to provide accurate and instant feedback, with better decision-making and reduced errors compared to human intervention. But is that always the case?</p>
                                <p class="m-0 text-sm font-semibold leading-[1.58] text-slate-700 dark:text-slate-200 sm:text-[.95rem]"><span class="font-black text-indigo-600 dark:text-indigo-300">2.</span> The annual tennis tournament Wimbledon made the decision this year to replace their line judges. These have traditionally been men and women who judge whether the ball is in or out of bounds, but they were switched out for AI that analyses camera footage, which should be faster and more accurate. Despite this, the electronic line calling system failed just a week into the 2025 championship. The ball-tracking technology was turned off by a person accidentally. This meant a point had to be replayed, which resulted in Sonay Kartal controversially winning the game. If technology needs humans to operate it in the first place, whose fault is it in situations like these where things go wrong?</p>
                                <p class="m-0 text-sm font-semibold leading-[1.58] text-slate-700 dark:text-slate-200 sm:text-[.95rem]"><span class="font-black text-indigo-600 dark:text-indigo-300">3.</span> In football, referees often come under fire for their decision-making. But VAR, that&#x27;s &#x27;video assistant referee&#x27;, is regularly used in football these days too. A referee can ask for a VAR check, which means that if they are unsure of something, like the awarding of a penalty, they can double-check their own judgement. However, last football season, VAR made oversights which angered a lot of managers, players and fans. They said the system was not fit for purpose and even favoured some teams over others. Despite this, the Premier League&#x27;s chief football officer, Tony Scholes, said during the middle of last year&#x27;s season that standards were actually higher than ever. &quot;Before VAR, 82% of the decisions made were deemed to be correct. In the season so far, that figure is 96%,&quot; he said.</p>
                                <p class="m-0 text-sm font-semibold leading-[1.58] text-slate-700 dark:text-slate-200 sm:text-[.95rem]"><span class="font-black text-indigo-600 dark:text-indigo-300">4.</span> So, why do we still not trust technology if it often improves a situation? Professor Gina Neff from Cambridge University says that we have a very strong, in-built sense of fairness. &quot;The machine makes decisions based on the set of rules it&#x27;s been programmed to adjudicate,&quot; she said. &quot;Right now, in many areas where AI is touching our lives, we feel like humans understand the context much better than the machine.&quot;</p>
                                <p class="m-0 text-sm font-semibold leading-[1.58] text-slate-700 dark:text-slate-200 sm:text-[.95rem]"><span class="font-black text-indigo-600 dark:text-indigo-300">5.</span> Whether you trust it or not, technology is here to stay, including in the world of sport.</p>
                            </div>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </div>
@endsection

@section('style')
<style>
    /* Local mobile fix only: the platform shell's fixed mobile chrome (logo header +
       prev/next nav row + progress bar, ≈110px) overlays the top of the slide viewport
       on phones/tablets. Push the slide content below it and compensate full-height
       min-heights so nothing sits behind the chrome. Desktop (>=1024px) is unchanged. */
    @media (max-width: 1023px) {
        body > .slide-layout > .relative.z-10 {
            padding-top: 112px;
        }
        body > .slide-layout > .relative.z-10 .min-h-\[100dvh\] {
            min-height: calc(100dvh - 112px);
        }
    }
</style>
@endsection
