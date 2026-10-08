{{-- Canva source page(s) 22: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Can We Trust Technology in Sport?',
        'subtitle' => 'Read the article, then complete the activities that follow. The article refers to the 2025 sporting season.',
        'page_title' => 'Can We Trust Technology in Sport?',
    ];
@endphp

@extends('slider.simple-layout')
@section('style')
<style>
.lesson11 { max-width:1200px; margin:auto; padding:36px 24px; color:#1e293b; font-family:"Plus Jakarta Sans",sans-serif; }
.lesson11-grid { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:22px; }
.lesson11-card { min-width:0; padding:24px; border:1px solid #cbd5e1; border-radius:20px; background:#fff; box-shadow:0 12px 30px -25px #312e8166; }
.lesson11 h2 { margin:0 0 16px; color:#3730a3; font-size:23px; line-height:1.4; font-weight:800; }
.lesson11 h3 { margin:16px 0 8px; font-size:19px; font-weight:800; }
.lesson11 p,.lesson11 li,.lesson11 td,.lesson11 th { font-size:18px; line-height:1.7; }
.lesson11 p + p { margin-top:12px; }
.lesson11 ul { list-style:disc; padding-left:22px; }
.lesson11 li + li { margin-top:8px; }
.lesson11 strong,.lesson11 mark { color:#4338ca; font-weight:800; }
.lesson11 mark { background:#eef2ff; border-radius:4px; padding:2px 4px; }
.lesson11-form { display:flex; align-items:center; flex-wrap:wrap; justify-content:center; gap:12px; padding:20px; background:#eff6ff; border:1px solid #bfdbfe; border-radius:14px; font-size:21px; font-weight:800; margin-bottom:18px; }
.lesson11-form span { padding:10px 16px; border-radius:10px; background:white; color:#4338ca; }
.lesson11-note { padding:20px 24px; margin-top:22px; background:#fffbeb; border:1px solid #f6dfa0; border-radius:16px; }
.lesson11-table { width:100%; border-collapse:collapse; }
.lesson11-table th,.lesson11-table td { padding:12px; text-align:left; border-bottom:1px solid #cbd5e1; vertical-align:top; }
.lesson11-table th { color:#3730a3; }
.lesson11-wide { grid-column:1/-1; }
.lesson11-tabs { display:flex; flex-wrap:wrap; gap:10px; margin-bottom:22px; }
.lesson11-tabs button { padding:12px 16px; border:1px solid #c7d2fe; border-radius:12px; background:white; color:#334155; font-size:17px; font-weight:800; }
.lesson11-tabs button[aria-selected="true"] { background:#eef2ff; border-color:#4f46e5; color:#4338ca; }
.lesson11-tabs button:focus-visible { outline:3px solid #818cf8; outline-offset:3px; }
.lesson11 [hidden] { display:none; }
.lesson11-reading p { text-align:justify; }
.dark .lesson11 { color:#e2e8f0; }
.dark .lesson11 h1 span { background-image:none; color:#a5b4fc; }
.dark .lesson11 .reported-arrow { color:#a5b4fc; }
.dark .lesson11-card { background:#141f30; border-color:#334155; }
.dark .lesson11 h2,.dark .lesson11 strong,.dark .lesson11-table th { color:#a5b4fc; }
.dark .lesson11 mark { background:#253451; color:#c7d2fe; }
.dark .lesson11-form { background:#1d3049; border-color:#334e70; }
.dark .lesson11-form span { background:#111e32; color:#c7d2fe; }
.dark .lesson11-note { background:#292419; border-color:#65532d; }
.dark .lesson11-table td,.dark .lesson11-table th { border-color:#334155; }
.dark .lesson11-tabs button { background:#141f30; border-color:#334155; color:#e2e8f0; }
.dark .lesson11-tabs button[aria-selected="true"] { background:#29365a; color:#c7d2fe; border-color:#818cf8; }
@media(max-width:800px) { .lesson11-grid { grid-template-columns:1fr; } }
@media(max-width:480px) { .lesson11 { padding:28px 16px; } .lesson11-card { padding:18px; } .lesson11 p,.lesson11 li,.lesson11 td,.lesson11 th { font-size:17px; } .lesson11-form { font-size:18px; gap:8px; padding:12px; } .lesson11-form span { padding:8px; } }

.lesson11-field{display:block;width:100%;min-width:0;margin-top:12px;padding:14px;border:1px solid #94a3b8;border-radius:12px;background:white;color:#1e293b;font:inherit;font-size:18px;line-height:1.7}
.lesson11 summary{cursor:pointer;font-size:18px;font-weight:800;color:#4338ca}.lesson11 details{margin-top:18px}.lesson11 details p{margin-top:12px}
.dark .lesson11-field{background:#101b2d;color:#e2e8f0;border-color:#475569}.dark .lesson11 summary{color:#a5b4fc}
.lesson11-grammar{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:20px}.lesson11-grammar .lesson11-card:nth-child(1){border-top:5px solid #0284c7}.lesson11-grammar .lesson11-card:nth-child(2){border-top:5px solid #059669}.lesson11-grammar .lesson11-card:nth-child(3){border-top:5px solid #7c3aed}
.lesson11-grammar .lesson11-form{font-size:18px;padding:12px}.lesson11-grammar .lesson11-table td,.lesson11-grammar .lesson11-table th{font-size:16px;padding:10px 6px}
@media(max-width:1100px){.lesson11-grammar{grid-template-columns:1fr}}

.reported-example{margin-top:16px}.reported-direct,.reported-result{padding:14px 18px;border-radius:12px;background:#eff6ff}.reported-result{background:#f0fdf4}.reported-arrow{display:block;text-align:center;color:#4f46e5;font-size:26px;font-weight:800}.dark .reported-direct{background:#20314e}.dark .reported-result{background:#19372e}.lesson11-grammar-two{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:24px}@media(max-width:900px){.lesson11-grammar-two{grid-template-columns:1fr}}

/* Slide 21 reading layout */
.reading-layout{display:grid;grid-template-columns:minmax(0,1.48fr) minmax(300px,.72fr);align-items:start;gap:24px;margin-top:24px}
.reading-accordion{display:grid;gap:11px}
.reading-section{overflow:hidden;border:1px solid #dbe3f0;border-radius:16px;background:rgba(255,255,255,.94);box-shadow:0 12px 28px -28px rgba(30,41,59,.6)}
.reading-section[open]{border-color:#c7d2fe;box-shadow:0 15px 30px -26px rgba(79,70,229,.45)}
.reading-section summary{display:flex;align-items:center;gap:13px;min-height:58px;padding:12px 16px;color:#172554;font-size:17px;font-weight:800;list-style:none;cursor:pointer}
.reading-section summary::-webkit-details-marker{display:none}
.reading-section summary:focus-visible{outline:3px solid #818cf8;outline-offset:-3px}
.reading-index{display:grid;place-items:center;flex:0 0 34px;width:34px;height:34px;border-radius:10px;background:#eef2ff;color:#4f46e5;font-size:15px;font-weight:900}
.reading-section[open] .reading-index{background:#4f46e5;color:#fff}
.reading-summary-text{flex:1}
.reading-chevron{flex:0 0 auto;width:10px;height:10px;margin-right:4px;border-right:2px solid #6366f1;border-bottom:2px solid #6366f1;transform:rotate(45deg);transition:transform .18s ease}
.reading-section[open] .reading-chevron{transform:rotate(225deg)}
.reading-body{padding:0 20px 18px 63px;border-top:1px solid #eef2f7}
.reading-body p{margin:14px 0 0;color:#334155;font-size:16px;line-height:1.58;text-align:left}
.reading-visual{position:sticky;top:18px;overflow:hidden;border:1px solid #dbe3f0;border-radius:22px;background:#fff;box-shadow:0 20px 42px -30px rgba(30,41,59,.55)}
.reading-visual-frame{position:relative;aspect-ratio:4/5;overflow:hidden;background:#e2e8f0}
.reading-visual img{width:100%;height:100%;object-fit:cover;object-position:55% center}
.reading-visual-label{position:absolute;left:16px;top:16px;padding:8px 12px;border:1px solid rgba(255,255,255,.58);border-radius:999px;background:rgba(15,23,42,.72);color:#fff;font-size:13px;font-weight:800;backdrop-filter:blur(8px)}
.reading-visual-caption{padding:17px 18px 16px}
.reading-visual-caption strong{display:block;margin-bottom:5px;color:#172554;font-size:18px}
.reading-visual-caption p{margin:0;color:#64748b;font-size:14px;line-height:1.5}
.reading-credit{display:inline-block;margin-top:10px;color:#64748b;font-size:11px;line-height:1.4;text-decoration:underline;text-underline-offset:2px}
.dark .reading-section,.dark .reading-visual{border-color:#334155;background:#141f30}.dark .reading-section[open]{border-color:#6366f1}.dark .reading-section summary,.dark .reading-visual-caption strong{color:#e2e8f0}.dark .reading-body{border-color:#334155}.dark .reading-body p,.dark .reading-visual-caption p{color:#cbd5e1}.dark .reading-index{background:#253451;color:#c7d2fe}.dark .reading-section[open] .reading-index{background:#6366f1;color:#fff}.dark .reading-credit{color:#94a3b8}
@media(prefers-reduced-motion:reduce){.reading-chevron{transition:none}}
@media(max-width:900px){.reading-layout{grid-template-columns:1fr}.reading-visual{position:relative;top:auto;max-width:560px;margin-inline:auto}.reading-visual-frame{aspect-ratio:16/9}}
@media(max-width:560px){.reading-body{padding:0 16px 16px}.reading-section summary{padding:11px 13px}.reading-body p{font-size:15px}.reading-visual-caption{padding:14px}}
</style>
@endsection
@section('content')
<main class="lesson11">
@include('slider.components.title-subtitle')
<div class="reading-layout">
    <article class="reading-accordion" aria-label="Article paragraphs">
        <details class="reading-section" open>
            <summary><span class="reading-index">1</span><span class="reading-summary-text">Paragraph 1</span><span class="reading-chevron" aria-hidden="true"></span></summary>
            <div class="reading-body"><p>Use of technology in sports is supposed to be able to provide accurate and instant feedback, with better decision-making and reduced errors compared to human intervention. But is that always the case?</p></div>
        </details>
        <details class="reading-section" open>
            <summary><span class="reading-index">2</span><span class="reading-summary-text">Paragraph 2</span><span class="reading-chevron" aria-hidden="true"></span></summary>
            <div class="reading-body"><p>The annual tennis tournament Wimbledon made the decision this year to replace their line judges. These have traditionally been men and women who judge whether the ball is in or out of bounds, but they were switched out for AI that analyses camera footage, which should be faster and more accurate. Despite this, the electronic line calling system failed just a week into the 2025 championship. The ball-tracking technology was turned off by a person accidentally. This meant a point had to be replayed, which resulted in Sonay Kartal controversially winning the game. If technology needs humans to operate it in the first place, whose fault is it in situations like these where things go wrong?</p></div>
        </details>
        <details class="reading-section">
            <summary><span class="reading-index">3</span><span class="reading-summary-text">Paragraph 3</span><span class="reading-chevron" aria-hidden="true"></span></summary>
            <div class="reading-body"><p>In football, referees often come under fire for their decision-making. But VAR, that&#x27;s &#x27;video assistant referee&#x27;, is regularly used in football these days too. A referee can ask for a VAR check, which means that if they are unsure of something, like the awarding of a penalty, they can double-check their own judgement. However, last football season, VAR made oversights which angered a lot of managers, players and fans. They said the system was not fit for purpose and even favoured some teams over others. Despite this, the Premier League&#x27;s chief football officer, Tony Scholes, said during the middle of last year&#x27;s season that standards were actually higher than ever. &quot;Before VAR, 82% of the decisions made were deemed to be correct. In the season so far, that figure is 96%,&quot; he said.</p></div>
        </details>
        <details class="reading-section">
            <summary><span class="reading-index">4</span><span class="reading-summary-text">Paragraph 4</span><span class="reading-chevron" aria-hidden="true"></span></summary>
            <div class="reading-body"><p>So, why do we still not trust technology if it often improves a situation? Professor Gina Neff from Cambridge University says that we have a very strong, in-built sense of fairness. &quot;The machine makes decisions based on the set of rules it&#x27;s been programmed to adjudicate,&quot; she said. &quot;Right now, in many areas where AI is touching our lives, we feel like humans understand the context much better than the machine.&quot;</p></div>
        </details>
        <details class="reading-section">
            <summary><span class="reading-index">5</span><span class="reading-summary-text">Paragraph 5</span><span class="reading-chevron" aria-hidden="true"></span></summary>
            <div class="reading-body"><p>Whether you trust it or not, technology is here to stay, including in the world of sport.</p></div>
        </details>
    </article>

    <figure class="reading-visual">
        <div class="reading-visual-frame">
            <img src="{{ materialAsset('slider/B2/Advanced/chapter-11/img/slide21/var-review.jpg') }}" alt="A football referee checking a decision using a pitch-side VAR monitor">
            <span class="reading-visual-label">VAR in action</span>
        </div>
    </figure>
</div>
</main>
@endsection
