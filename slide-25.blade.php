{{-- Canva source page(s) 27: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Speaking Task: Sport in the Digital Age',
        'subtitle' => 'Prepare your ideas, then record your description.',
        'vertical_alignment' => 'top',
        'callout_position' => 'beside',
        'callout_text' => <<<'HTML'
<div class="speaking-guide">
    <p class="speaking-lead">Record a 1-minute audio about ONE sport of your choice.</p>

    <ol class="speaking-prompts">
        <li>What sport have you chosen?</li>
        <li>Where is it played?</li>
        <li>What equipment is used?</li>
        <li>How has technology helped players improve their performance?</li>
    </ol>

    <details class="speaking-language">
        <summary>Useful language</summary>
        <ul>
            <li>I’ve chosen…</li>
            <li>It is played…</li>
            <li>Players use equipment such as…</li>
            <li>Technology has helped players by…</li>
            <li>For example, …</li>
            <li>As a result, players can…</li>
            <li>Overall, technology has made it possible for players to…</li>
        </ul>
    </details>

    <p><strong>Challenge:</strong> Include one specific example of technology used in the sport and explain how it benefits the players.</p>
    <p><strong>Example opening:</strong> I’ve chosen tennis. It is played on a court, and players use rackets and tennis balls. Technology has helped tennis players improve their performance in several ways…</p>

    <div class="speaking-stats" aria-label="Task timing and attempts">
        <p><span>Time</span><strong>1 minute</strong></p>
        <p><span>Preparation</span><strong>30 seconds</strong></p>
        <p><span>Recording</span><strong>1 attempt</strong></p>
    </div>
</div>
HTML,
        'page_title' => 'Speaking Task: Sport in the Digital Age',
    ];


    $user = auth()->user();
    $content['user'] = $user;
    $content['user_avatar'] = $user->getFirstMediaUrl('avatars', 'thumb') ?: 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&background=6366f1&color=fff&bold=true';
    $content['pusher'] = [
        'key' => config('chatify.pusher.key'),
        'cluster' => config('chatify.pusher.options.cluster'),
        'channel' => "slide-$slide->id",
    ];
@endphp

@extends('slider.chat.live-audio')

@section('style')
@parent
<style>
    #mainTitle,
    #mainSubtitle {
        width: min(1400px, calc(100% - 64px));
        max-width: 1400px;
        margin-inline: auto !important;
        text-align: left !important;
    }

    .live-writing-row {
        width: 100%;
        max-width: 1400px;
        grid-template-columns: minmax(0, 1.55fr) minmax(420px, .95fr);
        gap: 30px;
        align-items: center;
        margin: 1.25rem auto 0;
        padding-inline: 32px;
    }

    /* The audio layout uses its own wrapper in some lesson builds. */
    div:has(> .live-guide-wrap):has(> main) {
        display: grid !important;
        width: 100% !important;
        max-width: 1400px !important;
        grid-template-columns: minmax(0, 1.55fr) minmax(420px, .95fr) !important;
        gap: 30px !important;
        align-items: center !important;
        margin: 1.25rem auto 0 !important;
        padding-inline: 32px !important;
    }

    .live-writing-row .live-guide-wrap,
    .live-writing-row main {
        min-width: 0;
        padding: 0;
    }

    .live-writing-row .live-guide-wrap > div { margin-top: 0; }
    .live-writing-row main,
    div:has(> .live-guide-wrap):has(> main) > main {
        align-self: center;
        padding: 0 !important;
    }
    .live-writing-row #composerContainer,
    .live-writing-row #cardsContainer { justify-content: center; }
    .live-writing-row .input-composer-card { width: 100%; max-width: 380px; }

    .live-subtitle-callout {
        display: block !important;
        width: 100% !important;
        max-width: none !important;
        margin: 0 !important;
        padding: 24px 26px !important;
        border: 1px solid #c7d2fe !important;
        border-radius: 20px !important;
        background: rgba(238, 242, 255, .9) !important;
        color: #1e293b;
        box-shadow: 0 18px 42px -34px rgba(67, 56, 202, .45) !important;
    }

    .live-subtitle-callout-text { color: #1e293b !important; }
    .speaking-guide { display: grid; gap: 16px; font-size: 16px; line-height: 1.55; }
    .speaking-guide p { margin: 0; }
    .speaking-lead { font-weight: 800; }
    .speaking-prompts { margin: 0; padding-left: 1.65rem; }
    .speaking-prompts li { padding-left: .25rem; }
    .speaking-prompts li + li { margin-top: 5px; }
    .speaking-language {
        border-top: 1px solid #cbd5e1;
        border-bottom: 1px solid #dbe2ee;
        padding-block: 12px;
    }
    .speaking-language summary {
        cursor: pointer;
        font-weight: 800;
        list-style-position: outside;
    }
    .speaking-language summary:focus-visible { outline: 3px solid #a5b4fc; outline-offset: 4px; }
    .speaking-language ul { margin: 12px 0 0; padding-left: 1.4rem; columns: 2; column-gap: 28px; }
    .speaking-language li { break-inside: avoid; }
    .speaking-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        border-top: 1px solid #cbd5e1;
        padding-top: 16px;
    }
    .speaking-stats p { padding: 0 18px; }
    .speaking-stats p:first-child { padding-left: 0; }
    .speaking-stats p + p { border-left: 1px solid #d8deea; }
    .speaking-stats span,
    .speaking-stats strong { display: block; }
    .speaking-stats span { color: #64748b; font-size: 12px; font-weight: 800; }
    .speaking-stats strong { margin-top: 2px; color: #172033; font-size: 15px; }

    .dark .live-subtitle-callout {
        background: #1e293b !important;
        border-color: #475569 !important;
        color: #e2e8f0;
    }
    .dark .live-subtitle-callout-text,
    .dark .speaking-stats strong { color: #e2e8f0 !important; }
    .dark .speaking-language,
    .dark .speaking-stats { border-color: #475569; }
    .dark .speaking-stats p + p { border-color: #475569; }
    .dark .speaking-stats span { color: #94a3b8; }

    @media (max-width: 900px) {
        #mainTitle,
        #mainSubtitle { width: min(calc(100% - 32px), 720px); }
        .live-writing-row,
        div:has(> .live-guide-wrap):has(> main) {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
            padding-inline: 16px !important;
        }
        .live-writing-row main { padding-top: 0; }
    }

    @media (max-width: 560px) {
        .live-subtitle-callout { padding: 20px !important; }
        .speaking-language ul { columns: 1; }
        .speaking-stats { grid-template-columns: 1fr; gap: 10px; }
        .speaking-stats p { padding: 0; }
        .speaking-stats p + p { border-left: 0; }
    }

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
