{{-- Canva source page(s) 13: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Reporting Questions',
        'subtitle' => 'We use reporting verbs to tell someone what question was asked.',
        'page_title' => 'Reporting Questions',
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

/* Slide 12: grammar board matching the platform's four-panel lesson theme. */
.reporting-board{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:20px;margin-top:26px}
.reporting-panel{min-width:0;padding:22px 24px;border:1px solid #dbe4f0;border-top-width:4px;border-radius:20px;background:#fff;box-shadow:0 14px 34px -30px rgba(30,41,59,.45)}
.reporting-panel h2{padding-bottom:13px;margin-bottom:18px;border-bottom:1px solid currentColor;color:#172554;font-size:24px}
.reporting-wh{border-top-color:#0284c7;background:linear-gradient(180deg,#fff 0%,#f0f9ff 100%)}
.reporting-wh h2{color:#075985;border-bottom-color:#bae6fd}
.reporting-yesno{border-top-color:#7c3aed;background:linear-gradient(180deg,#fff 0%,#f5f3ff 100%)}
.reporting-yesno h2{color:#5b21b6;border-bottom-color:#ddd6fe}
.reporting-wh-examples{border-top-color:#16a34a;background:linear-gradient(180deg,#fff 0%,#f0fdf4 100%)}
.reporting-wh-examples h2{color:#166534;border-bottom-color:#bbf7d0}
.reporting-yesno-examples{border-top-color:#d97706;background:linear-gradient(180deg,#fff 0%,#fffbeb 100%)}
.reporting-yesno-examples h2{color:#92400e;border-bottom-color:#fde68a}
.reporting-formula{display:grid;grid-template-columns:minmax(0,1.35fr) auto minmax(0,1fr) auto minmax(0,.8fr);align-items:center;gap:9px;padding:17px;margin-top:18px;border:1px solid #bae6fd;border-radius:15px;background:#eaf5ff;color:#64748b;font-size:20px;font-weight:800;text-align:center}
.reporting-formula span{display:flex;align-items:center;justify-content:center;min-height:56px;padding:10px 12px;border:1px solid #e2e8f0;border-radius:11px;background:#fff;color:#4338ca}
.reporting-formula-yesno{grid-template-columns:minmax(0,.8fr) auto minmax(0,1.15fr) auto minmax(0,1.2fr);border-color:#ddd6fe;background:#ede9fe}
.reporting-example-list{display:grid;gap:11px}
.reporting-example-row{padding:14px 16px;border:1px solid #bbf7d0;border-radius:14px;background:rgba(255,255,255,.86)}
.reporting-example-row p{margin:0;font-size:16px;line-height:1.5}
.reporting-example-row .reported-arrow{font-size:21px;line-height:1.2}
.reporting-example-row .reported-result{padding:0;background:transparent}
.reporting-table-wrap{overflow:hidden;border:1px solid #fde68a;border-radius:14px;background:rgba(255,255,255,.9)}
.reporting-table{width:100%;border-collapse:collapse;table-layout:fixed}
.reporting-table th,.reporting-table td{padding:13px 14px;border-right:1px solid #e2e8f0;border-bottom:1px solid #e2e8f0;text-align:left;vertical-align:top;font-size:16px;line-height:1.5}
.reporting-table th{background:#fff7dc;color:#92400e;font-weight:800}
.reporting-table th:last-child,.reporting-table td:last-child{border-right:0}
.reporting-table tr:last-child td{border-bottom:0}
.reporting-table strong{color:#4338ca}
.reporting-remember{grid-column:1/-1;margin-top:0;border-left:4px solid #d97706;background:linear-gradient(90deg,#fffbeb 0%,#fffdf7 100%)}
.reporting-remember h2{display:flex;align-items:center;gap:12px;color:#172554}
.reporting-remember h2::before{content:'💡';display:grid;place-items:center;width:40px;height:40px;border:1px solid #fde68a;border-radius:10px;background:#fff7d6;font-size:22px}
.reporting-remember-list{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:8px 28px;margin:0;padding-left:22px}
.reporting-remember-list li{font-size:16px;line-height:1.55}
.reporting-check{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px;margin-top:18px}
.reporting-check>div{padding:14px 16px;border:1px solid #fde68a;border-radius:13px;background:rgba(255,255,255,.78)}
.reporting-check h3{margin:0 0 6px;font-size:17px}
.reporting-check p{margin:0;font-size:16px;line-height:1.55}
.dark .reporting-panel{background:#141f30;border-color:#334155}.dark .reporting-wh{border-top-color:#38bdf8}.dark .reporting-yesno{border-top-color:#a78bfa}.dark .reporting-wh-examples{border-top-color:#4ade80}.dark .reporting-yesno-examples{border-top-color:#fbbf24}
.dark .reporting-panel h2{color:#e2e8f0;border-bottom-color:#334155}.dark .reporting-formula{background:#1d3049;border-color:#334e70}.dark .reporting-formula-yesno{background:#292354}.dark .reporting-formula span{background:#111e32;border-color:#334155;color:#c7d2fe}.dark .reporting-example-row,.dark .reporting-table-wrap,.dark .reporting-check>div{background:#101b2d;border-color:#334155}.dark .reporting-table th{background:#292419;color:#fcd34d}.dark .reporting-table th,.dark .reporting-table td{border-color:#334155}.dark .reporting-remember{background:#292419}
@media(max-width:900px){.reporting-board{grid-template-columns:1fr}.reporting-remember{grid-column:auto}}
@media(max-width:640px){.reporting-panel{padding:18px}.reporting-formula,.reporting-formula-yesno{grid-template-columns:1fr;gap:7px}.reporting-formula>i{display:none}.reporting-table th,.reporting-table td{padding:10px 9px;font-size:14px}.reporting-remember-list,.reporting-check{grid-template-columns:1fr}}
</style>
@endsection
@section('content')
<main class="lesson11">
@include('slider.components.title-subtitle')
<div class="reporting-board">
    <section class="reporting-panel reporting-wh">
        <h2>Wh-questions</h2>
        <p>For questions with question words (who, what, when, where, why, how), we use the <strong>question word + subject + verb in statement order</strong>.</p>
        <div class="reporting-formula" aria-label="Question word plus subject plus verb">
            <span>question word</span><i aria-hidden="true">+</i><span>subject</span><i aria-hidden="true">+</i><span>verb</span>
        </div>
    </section>

    <section class="reporting-panel reporting-yesno">
        <h2>Yes/No questions</h2>
        <p>For yes/no questions, we use <strong>asked + if/whether + subject + verb in statement order</strong>.</p>
        <div class="reporting-formula reporting-formula-yesno" aria-label="Asked plus if or whether plus subject and verb">
            <span>asked</span><i aria-hidden="true">+</i><span>if / whether</span><i aria-hidden="true">+</i><span>subject + verb</span>
        </div>
    </section>

    <section class="reporting-panel reporting-wh-examples">
        <h2>Wh-question examples</h2>
        <div class="reporting-example-list">
            <div class="reporting-example-row"><p>“How can technology help athletes improve their performance?”</p><span class="reported-arrow" aria-hidden="true">↓</span><p class="reported-result">The interviewer asked <strong>how technology could help athletes improve</strong> their performance.</p></div>
            <div class="reporting-example-row"><p>“What other types of technology are being used in training?”</p><span class="reported-arrow" aria-hidden="true">↓</span><p class="reported-result">The interviewer asked <strong>what other types of technology were being used</strong> in training.</p></div>
            <div class="reporting-example-row"><p>“Why is human judgement still important?”</p><span class="reported-arrow" aria-hidden="true">↓</span><p class="reported-result">The interviewer asked <strong>why human judgement was still important</strong>.</p></div>
            <div class="reporting-example-row"><p>“How has technology changed the experience of sport?”</p><span class="reported-arrow" aria-hidden="true">↓</span><p class="reported-result">The interviewer asked <strong>how technology had changed</strong> the experience of sport.</p></div>
        </div>
    </section>

    <section class="reporting-panel reporting-yesno-examples">
        <h2>Yes/No examples</h2>
        <div class="reporting-table-wrap">
            <table class="reporting-table">
                <thead><tr><th>Direct question</th><th>Reported question</th></tr></thead>
                <tbody>
                    <tr><td>“Does this mean that coaches no longer need to rely on their own observations?”</td><td>The interviewer asked <strong>if this meant that coaches no longer needed</strong> to rely on their own observations.</td></tr>
                    <tr><td>“Can technology also help athletes practise?”</td><td>The interviewer asked <strong>if technology could also help athletes practise</strong>.</td></tr>
                    <tr><td>“Can we always trust technology?”</td><td>The interviewer asked <strong>whether they could always trust technology</strong>.</td></tr>
                    <tr><td>“Should technology replace human decision-making?”</td><td>The interviewer asked <strong>whether technology should replace</strong> human decision-making.</td></tr>
                </tbody>
            </table>
        </div>
    </section>

    <aside class="reporting-panel reporting-remember">
        <h2>Key points to remember</h2>
        <ul class="reporting-remember-list">
            <li>We keep the question word (who, what, when, where, why, how).</li>
            <li>We use <strong>statement word order</strong> (not question word order).</li>
            <li>We use <strong>if/whether</strong> for yes/no questions.</li>
            <li>We do not use quotation marks.</li>
            <li>Pronouns and tense may change depending on the context.</li>
        </ul>
        <div class="reporting-check">
            <div><h3>Incorrect</h3><p><s>How could technology help?</s><br><s>Whether can technology help?</s><br><s>How technology could help?</s></p></div>
            <div><h3>Correct reported clauses</h3><p>… <strong>how technology could help</strong>.<br>… <strong>whether technology could help</strong>.</p></div>
        </div>
    </aside>
</div>
</main>
@endsection
