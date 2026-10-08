{{-- Canva source page(s) 10: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Useful Phrases',
        'subtitle' => 'Listen and practise. Each audio contains only the phrase.',
        'page_title' => 'Useful Phrases',
    ];

    $phrases = [
        ['text' => 'take sport to new heights', 'file' => 'take-sport-to-new-heights.mp3'],
        ['text' => 'rely entirely on', 'file' => 'rely-entirely-on.mp3'],
        ['text' => 'make informed decisions', 'file' => 'make-informed-decisions.mp3'],
        ['text' => 'identify strengths and weaknesses', 'file' => 'identify-strengths-and-weaknesses.mp3'],
        ['text' => 'develop effective strategies', 'file' => 'develop-effective-strategies.mp3'],
        ['text' => 'create new possibilities', 'file' => 'create-new-possibilities.mp3'],
        ['text' => 'replace human judgement', 'file' => 'replace-human-judgement.mp3'],
        ['text' => 'find the right balance', 'file' => 'find-the-right-balance.mp3'],
    ];
@endphp

@extends('slider.simple-layout')

@section('style')
<style>
.phrase-slide {
    --ink: #11182b;
    --muted: #68738c;
    --line: #dfe5f0;
    --indigo: #4f5cf4;
    --violet: #7654f6;
    --soft: #eef2ff;
    width: min(1560px, calc(100% - 44px));
    max-width: 1560px;
    margin: 0 auto;
    padding: 42px 36px 32px;
    color: var(--ink);
    font-family: "Plus Jakarta Sans", sans-serif;
}
.phrase-heading { margin: 0 0 30px; }
.phrase-heading h1 {
    margin: 0;
    color: var(--indigo);
    font-size: clamp(42px, 4vw, 68px);
    font-weight: 800;
    letter-spacing: -0.055em;
    line-height: .98;
}
.phrase-heading p {
    margin: 13px 0 0;
    color: var(--muted);
    font-size: 18px;
    font-weight: 650;
}
.phrase-layout {
    display: grid;
    grid-template-columns: minmax(0, 2fr) minmax(300px, .72fr);
    gap: 24px;
    align-items: stretch;
    min-height: clamp(500px, 62vh, 560px);
}
.phrase-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-auto-rows: 1fr;
    gap: 18px;
}
.phrase-card {
    min-width: 0;
    min-height: 116px;
    display: grid;
    grid-template-columns: 48px minmax(0, 1fr) 46px;
    align-items: center;
    gap: 17px;
    padding: 17px 18px;
    border: 1px solid var(--line);
    border-radius: 18px;
    background: rgba(255, 255, 255, .96);
    box-shadow: 0 15px 34px -28px rgba(30, 41, 90, .7);
}
.phrase-number {
    display: grid;
    place-items: center;
    width: 46px;
    height: 46px;
    border: 1px solid #dbe2ff;
    border-radius: 13px;
    background: var(--soft);
    color: #4853dc;
    font-size: 14px;
    font-weight: 800;
}
.phrase-text {
    overflow-wrap: anywhere;
    font-size: 18px;
    font-weight: 800;
    line-height: 1.3;
}
.phrase-audio {
    display: grid;
    place-items: center;
    width: 42px;
    height: 42px;
    border: 0;
    border-radius: 999px;
    background: linear-gradient(145deg, var(--violet), #466ff7);
    color: #fff;
    box-shadow: 0 10px 20px -10px rgba(79, 92, 244, .9);
    cursor: pointer;
}
.phrase-audio:hover { filter: brightness(1.06); }
.phrase-audio:focus-visible { outline: 3px solid #9aa7ff; outline-offset: 3px; }
.phrase-audio svg { width: 21px; height: 21px; }
.photo-rail {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
    min-height: 100%;
}
.photo-slot {
    position: relative;
    overflow: hidden;
    display: grid;
    place-items: center;
    min-height: 238px;
    border: 2px dashed #bfc8e5;
    border-radius: 22px;
    background:
        linear-gradient(135deg, rgba(238, 242, 255, .96), rgba(247, 249, 255, .88)),
        repeating-linear-gradient(135deg, transparent 0 14px, rgba(79, 92, 244, .04) 14px 28px);
    color: #6f7a98;
}
.photo-slot-inner { text-align: center; }
.photo-slot svg { width: 36px; height: 36px; margin: 0 auto 10px; color: #8996c5; }
.photo-slot strong { display: block; color: #56607b; font-size: 15px; }
.photo-slot span { display: block; margin-top: 3px; font-size: 12px; font-weight: 700; }
.dark .phrase-slide { --ink:#edf1ff; --muted:#aab3cc; --line:#33415d; --soft:#253453; }
.dark .phrase-card { background: rgba(20, 31, 48, .96); }
.dark .phrase-number { border-color:#3c4e78; color:#c7d2fe; }
.dark .photo-slot { border-color:#4b5e88; background:linear-gradient(135deg,#19263c,#202f49); color:#aab5d4; }
.dark .photo-slot strong { color:#dbe3ff; }
@media (max-width: 1050px) {
    .phrase-slide { width: min(920px, calc(100% - 32px)); padding: 38px 20px; }
    .phrase-layout { grid-template-columns: 1fr; min-height: 0; }
    .photo-rail { grid-template-columns: 1fr; grid-template-rows: 260px; min-height: 0; }
    .photo-slot { min-height: 260px; }
}
@media (max-width: 680px) {
    .phrase-slide { width: 100%; padding: 30px 18px; }
    .phrase-list, .photo-rail { grid-template-columns: 1fr; }
    .photo-rail { grid-template-rows: 220px; }
    .phrase-card { min-height: 96px; }
    .photo-slot { min-height: 220px; }
    .phrase-heading p { font-size: 16px; }
}
</style>
@endsection

@section('content')
<main class="phrase-slide">
    <header class="phrase-heading">
        <h1>{{ $content['title'] }}</h1>
        <p>{{ $content['subtitle'] }}</p>
    </header>

    <div class="phrase-layout">
        <section class="phrase-list" aria-label="Useful phrases">
            @foreach ($phrases as $index => $phrase)
                <article class="phrase-card">
                    <span class="phrase-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <p class="phrase-text">{{ $phrase['text'] }}</p>
                    <button
                        class="phrase-audio"
                        type="button"
                        aria-label="Play {{ $phrase['text'] }}"
                        onclick="const audio=this.nextElementSibling; audio.currentTime=0; audio.play();"
                    >
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M11 5 6 9H3v6h3l5 4V5Z"/><path d="M15.5 8.5a5 5 0 0 1 0 7"/><path d="M18.5 5.5a9 9 0 0 1 0 13"/>
                        </svg>
                    </button>
                    <audio preload="none" src="{{ materialAsset('slider/B2/Advanced/chapter-11/audios/phrases/' . $phrase['file']) }}"></audio>
                </article>
            @endforeach
        </section>

        <aside class="photo-rail" aria-label="Photo placeholder">
            <div class="photo-slot">
                <div class="photo-slot-inner">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="8.5" cy="9" r="1.5"/><path d="m4 17 5-5 4 4 2-2 5 4"/>
                    </svg>
                    <strong>Photo placeholder</strong>
                    <span>01</span>
                </div>
            </div>
        </aside>
    </div>
</main>
@endsection
