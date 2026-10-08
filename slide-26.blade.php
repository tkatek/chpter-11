{{-- Canva source page(s) 28: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Writing Task',
        'subtitle' => 'Writing — Argumentative Essay',
        'callout_position' => 'beside',
        'callout_text' => <<<'HTML'
<div class="writing-task-guide">
    <div class="writing-section-label"><span>YOUR TASK</span></div>
    <p class="writing-instruction">Write an argumentative essay of 180–220 words.</p>

    <div class="writing-prompt">
        Technology is changing sport in many ways.<br>
        Do the advantages of technology in sport outweigh the disadvantages?
    </div>

    <div class="writing-section-label writing-essay-label"><span>IN YOUR ESSAY</span></div>
    <ul class="writing-requirements">
        <li>Introduce the topic clearly.</li>
        <li>Discuss at least two advantages of technology in sport.</li>
        <li>Discuss at least two disadvantages.</li>
        <li>Support your ideas with relevant examples.</li>
        <li>Give your own opinion.</li>
        <li>Reach a clear conclusion.</li>
    </ul>

    <details class="writing-help">
        <summary>Useful language</summary>
        <div class="writing-help-content">
            <h3>Introducing the topic</h3>
            <ul><li>Technology has become an increasingly important part of modern sport.</li><li>There is no doubt that technology has changed the way sport is played and judged.</li><li>However, there is some debate about whether these changes are entirely positive.</li></ul>
            <h3>Discussing advantages</h3>
            <ul><li>One major advantage is that...</li><li>Another benefit is that...</li><li>This can help to...</li><li>For example, ...</li><li>As a result, ...</li></ul>
            <h3>Discussing disadvantages</h3>
            <ul><li>On the other hand, ...</li><li>However, technology also has some drawbacks.</li><li>One concern is that...</li><li>Another disadvantage is that...</li><li>For instance, ...</li></ul>
            <h3>Giving your opinion</h3>
            <ul><li>In my view, ...</li><li>I would argue that...</li><li>Personally, I believe that...</li><li>Although there are some disadvantages, I believe that...</li></ul>
            <h3>Concluding</h3>
            <ul><li>In conclusion, ...</li><li>Overall, ...</li><li>Taking everything into consideration, ...</li><li>Technology can benefit sport as long as...</li></ul>
        </div>
    </details>

    <details class="writing-help">
        <summary>Suggested structure</summary>
        <div class="writing-help-content">
            <p><strong>Paragraph 1 – Introduction</strong><br>Introduce technology in sport and the debate.</p>
            <p><strong>Paragraph 2 – Advantages</strong><br>Discuss fairness, safety, accuracy, performance, etc.</p>
            <p><strong>Paragraph 3 – Disadvantages</strong><br>Discuss cost, unfair access, misuse, dependence on technology, etc.</p>
            <p><strong>Paragraph 4 – Conclusion</strong><br>Summarise the main points and state your opinion clearly.</p>
        </div>
    </details>
</div>
HTML,
        'placeholder' => 'Write your 180–220-word argumentative essay here…',
        'model_answer' => 'Technology has become an increasingly important part of modern sport. From video refereeing to equipment designed to protect athletes, it has changed the way sports are played and judged. Although technology has several disadvantages, I believe its benefits are greater when it is used responsibly.

One major advantage is that technology can make sport fairer. For example, VAR can help referees make more accurate decisions by reviewing important moments during football matches. Similarly, Hawk-Eye can reduce human errors in tennis by providing an additional source of information. Technology can also make sport safer. The halo system in Formula 1, for instance, protects drivers’ heads and has helped prevent serious injuries.

However, there are some disadvantages. Advanced technology can be expensive, meaning that wealthier teams and athletes may have access to better equipment than others. This could create an unfair advantage. In addition, technology can sometimes be misused. Athletes may use specially designed equipment or other technological developments to gain an advantage that goes beyond their natural ability.

In conclusion, technology can make sport fairer, safer and more accurate, but it can also create inequality and opportunities for cheating. In my view, technology is beneficial as long as clear rules are in place and all competitors have a fair opportunity to use it.',
        'page_title' => 'Writing Task',
    ];
@endphp

@extends('slider.chat.live')

@section('style')
@parent
<style>
    .slide-layout {
        --layout-bg: #f8fbff;
        --layout-text: #111b47;
        --ambient-one: rgba(94, 114, 255, .13);
        --ambient-two: rgba(67, 118, 255, .08);
        --ambient-three: rgba(61, 210, 180, .08);
        font-family: "Plus Jakarta Sans", sans-serif;
    }

    .header-spacing {
        margin-bottom: 26px !important;
        padding-inline: 24px !important;
    }

    .header-spacing h1 {
        font-size: clamp(48px, 4.25vw, 72px) !important;
        letter-spacing: -.055em !important;
        line-height: .98 !important;
    }

    .header-spacing p {
        margin-top: 10px !important;
        color: #11183f !important;
        font-size: clamp(18px, 1.45vw, 25px) !important;
        line-height: 1.25 !important;
    }

    .live-writing-row {
        width: min(1480px, calc(100% - 64px)) !important;
        max-width: 1480px !important;
        grid-template-columns: minmax(0, .9fr) minmax(0, 1fr) !important;
        gap: 26px !important;
        align-items: stretch !important;
        margin: 0 auto !important;
        padding: 0 !important;
    }

    .live-writing-row .live-guide-wrap,
    .live-writing-row main {
        min-width: 0;
        height: 100%;
        padding: 0 !important;
    }

    .live-writing-row .live-guide-wrap > div,
    .live-writing-row #composerContainer {
        height: 100%;
        margin: 0 !important;
    }

    .live-subtitle-callout {
        display: block !important;
        width: 100% !important;
        max-width: none !important;
        min-height: clamp(590px, calc(100dvh - 240px), 654px);
        padding: 29px 30px !important;
        border: 1.5px solid #c9d4ff !important;
        border-radius: 18px !important;
        background: rgba(248, 250, 255, .72) !important;
        box-shadow: 0 18px 48px -42px rgba(41, 69, 190, .55) !important;
        backdrop-filter: blur(12px);
    }

    .live-subtitle-callout-text {
        color: #111a4b !important;
        font-size: 16px !important;
        font-weight: 500 !important;
        line-height: 1.48 !important;
    }

    .writing-task-guide { display: flex; flex-direction: column; }
    .writing-section-label {
        display: flex;
        align-items: center;
        gap: 18px;
        color: #4d67ef;
        font-size: 14px;
        font-weight: 900;
        letter-spacing: .27em;
        line-height: 1;
    }
    .writing-section-label::after {
        content: "";
        height: 1px;
        flex: 1;
        background: #b8c7ff;
    }
    .writing-instruction {
        margin: 18px 0 15px;
        color: #101a4a;
        font-size: 18px;
        font-weight: 650;
        line-height: 1.45;
    }
    .writing-prompt {
        padding: 10px 19px 12px 25px;
        border-left: 7px solid #4967f2;
        border-radius: 11px;
        background: linear-gradient(90deg, rgba(229, 233, 255, .95), rgba(224, 230, 255, .67));
        color: #324bb9;
        font-size: 19px;
        font-weight: 850;
        line-height: 1.6;
    }
    .writing-essay-label { margin-top: 22px; }
    .writing-requirements {
        display: grid;
        gap: 7px;
        margin: 18px 0 16px;
        padding: 0;
        list-style: none;
        color: #111a4b;
        font-size: 17px;
        line-height: 1.35;
    }
    .writing-requirements li {
        position: relative;
        padding-left: 28px;
    }
    .writing-requirements li::before {
        content: "";
        position: absolute;
        top: .48em;
        left: 5px;
        width: 11px;
        height: 11px;
        border-radius: 50%;
        background: #4c68ef;
        box-shadow: 0 2px 6px rgba(76, 104, 239, .28);
    }
    .writing-help {
        margin-top: 10px;
        border: 0;
        border-radius: 11px;
        background: rgba(229, 234, 255, .8);
        overflow: hidden;
    }
    .writing-help summary {
        padding: 13px 20px;
        color: #273daa;
        cursor: pointer;
        font-size: 16px;
        font-weight: 850;
        list-style: none;
    }
    .writing-help summary::-webkit-details-marker { display: none; }
    .writing-help summary::before {
        content: "▶";
        display: inline-block;
        margin-right: 16px;
        font-size: 15px;
        transform-origin: center;
        transition: transform .2s ease;
    }
    .writing-help[open] summary::before { transform: rotate(90deg); }
    .writing-help-content {
        max-height: 230px;
        overflow-y: auto;
        padding: 0 20px 17px 52px;
        color: #26335f;
        font-size: 14px;
    }
    .writing-help-content h3 { margin: 12px 0 5px; font-weight: 850; }
    .writing-help-content ul { margin: 0; padding-left: 18px; }
    .writing-help-content p { margin: 10px 0 0; }

    .live-writing-row .input-composer-card {
        width: 100% !important;
        max-width: none !important;
        min-height: clamp(590px, calc(100dvh - 240px), 654px);
        padding: 27px 29px !important;
        border: 1px solid #d9e0eb !important;
        border-radius: 18px !important;
        background: rgba(255, 255, 255, .88) !important;
        box-shadow: 0 18px 44px -32px rgba(15, 23, 42, .25) !important;
        backdrop-filter: blur(12px);
    }
    .input-composer-card > div { height: 100%; }
    .input-composer-card > div > div:first-child {
        min-height: 58px;
        margin-bottom: 20px !important;
        padding: 0 2px;
    }
    .input-composer-card > div > div:first-child > img { display: none; }
    .input-composer-card h3 {
        color: #11183f !important;
        font-size: 17px !important;
        font-weight: 850 !important;
        line-height: 1.15 !important;
    }
    .input-composer-card h3 + span {
        display: block;
        margin-top: 4px;
        color: #8d9ab7 !important;
        font-size: 12px !important;
        font-weight: 850 !important;
        letter-spacing: .06em !important;
    }
    .input-composer-card button[onclick="openModelAnswer()"] {
        padding: 12px 27px !important;
        border-color: #ffc88f !important;
        background: #fff9f3 !important;
        color: #c64608 !important;
        font-size: 15px !important;
        box-shadow: none !important;
    }
    .live-writing-row #myAnswer {
        min-height: 428px !important;
        padding: 20px !important;
        border: 1px solid #cfd9e8 !important;
        border-radius: 16px !important;
        background: rgba(249, 251, 255, .62) !important;
        color: #1c2748 !important;
        font-size: 17px !important;
        line-height: 1.7 !important;
        resize: both !important;
    }
    .live-writing-row #myAnswer::placeholder { color: #91a0bf; opacity: 1; }
    .live-writing-row #submit-btn-main {
        min-height: 56px;
        padding-block: 12px !important;
        background: #cbd5e1;
        font-size: 17px;
        font-weight: 850 !important;
    }
    #modelAnswerModal p { white-space: pre-line; }

    .dark .slide-layout { --layout-bg: #0f172a; --layout-text: #eef2ff; }
    .dark .header-spacing p { color: #eef2ff !important; }
    .dark .live-subtitle-callout,
    .dark .live-writing-row .input-composer-card { border-color: #405079 !important; background: rgba(20, 31, 53, .9) !important; }
    .dark .live-subtitle-callout-text,
    .dark .writing-instruction,
    .dark .writing-requirements,
    .dark .input-composer-card h3 { color: #eef2ff !important; }
    .dark .writing-prompt,
    .dark .writing-help { background: rgba(47, 62, 109, .62); color: #becaff; }
    .dark .live-writing-row #myAnswer { border-color: #465776 !important; background: rgba(15, 23, 42, .75) !important; color: #eef2ff !important; }

    @media (max-width: 1050px) {
        .live-writing-row {
            width: min(760px, calc(100% - 32px)) !important;
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
        .live-subtitle-callout,
        .live-writing-row .input-composer-card { min-height: 0; }
        .live-writing-row #myAnswer { min-height: 330px !important; }
    }

    @media (max-width: 560px) {
        .header-spacing h1 { font-size: 42px !important; }
        .live-subtitle-callout,
        .live-writing-row .input-composer-card { padding: 21px 18px !important; }
        .writing-prompt { font-size: 17px; }
        .writing-requirements { font-size: 16px; }
        .input-composer-card button[onclick="openModelAnswer()"] { padding-inline: 16px !important; }
    }
</style>
@endsection
