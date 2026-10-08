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
    .lesson12 {
        max-width: 1240px;
        margin: 0 auto;
        padding: 30px 18px 36px;
        color: #1e293b;
        font-family: "Plus Jakarta Sans", sans-serif;
    }

    .grammar-columns {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px;
        margin-top: 26px;
        align-items: stretch;
    }

    .grammar-panel {
        min-width: 0;
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 20px;
        box-shadow: 0 16px 38px -30px rgba(30, 41, 59, .5);
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .grammar-panel-wh { border-top: 4px solid #0284c7; }
    .grammar-panel-yn { border-top: 4px solid #7c3aed; }

    .panel-body { padding: 20px 22px 22px; display: flex; flex-direction: column; flex: 1; }

    .panel-heading { margin: 0 0 10px; }
    .panel-heading h2 {
        margin: 0;
        font-size: 22px;
        font-weight: 900;
        letter-spacing: -.02em;
        line-height: 1.25;
    }

    .grammar-panel-wh .panel-heading h2 { color: #075985; }
    .grammar-panel-yn .panel-heading h2 { color: #5b21b6; }

    .panel-rule {
        margin: 0;
        font-size: 16px;
        line-height: 1.6;
        color: #334155;
    }

    .panel-rule strong { color: #4338ca; font-weight: 800; }
    .grammar-panel-yn .panel-rule strong { color: #6d28d9; }

    .formula {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px;
        margin-top: 14px;
        border: 1px solid;
        border-radius: 14px;
        font-size: 15px;
        font-weight: 800;
        text-align: center;
        color: #64748b;
    }

    .grammar-panel-wh .formula { background: #eaf5ff; border-color: #bae6fd; }
    .grammar-panel-yn .formula { background: #ede9fe; border-color: #ddd6fe; }

    .formula span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 42px;
        padding: 8px 14px;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        background: #fff;
        color: #4338ca;
    }

    .grammar-panel-yn .formula span { color: #6d28d9; }
    .formula i { font-style: normal; font-weight: 900; color: #94a3b8; }

    .examples-title {
        margin: 18px 0 10px;
        font-size: 11px;
        font-weight: 900;
        letter-spacing: .14em;
        text-transform: uppercase;
        color: #64748b;
    }

    .example-list { display: grid; gap: 10px; }

    .example-card {
        border: 1px solid #e8edf5;
        border-radius: 14px;
        background: rgba(255, 255, 255, .72);
        padding: 10px;
    }

    .ex-label {
        display: block;
        margin-bottom: 2px;
        font-size: 10px;
        font-weight: 900;
        letter-spacing: .14em;
        text-transform: uppercase;
    }

    .ex-box { border-radius: 10px; padding: 9px 12px; }
    .ex-box p { margin: 0; font-size: 15px; line-height: 1.5; }

    .ex-direct { background: #eff6ff; border: 1px solid #dbeafe; }
    .ex-direct .ex-label { color: #0369a1; }
    .ex-direct p { font-weight: 800; color: #0f172a; }

    .ex-arrow {
        display: block;
        padding: 2px 0;
        text-align: center;
        color: #4f46e5;
        font-size: 15px;
        font-weight: 900;
        line-height: 1.1;
    }

    .ex-reported { background: #f0fdf4; border: 1px solid #dcfce7; }
    .ex-reported .ex-label { color: #15803d; }
    .ex-reported p { font-weight: 600; color: #1e293b; }
    .ex-reported p strong { color: #047857; font-weight: 900; }

    .key-points {
        margin-top: 22px;
        background: #fffdf7;
        border: 1px solid #fde68a;
        border-left: 4px solid #d97706;
        border-radius: 18px;
        padding: 20px 22px;
        box-shadow: 0 16px 38px -30px rgba(30, 41, 59, .45);
    }

    .key-points h2 {
        display: flex;
        align-items: center;
        gap: 12px;
        margin: 0 0 14px;
        font-size: 20px;
        font-weight: 900;
        color: #172554;
    }

    .key-points h2::before {
        content: '💡';
        display: grid;
        place-items: center;
        width: 38px;
        height: 38px;
        border: 1px solid #fde68a;
        border-radius: 10px;
        background: #fff7d6;
        font-size: 20px;
    }

    .key-points ul {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 8px 28px;
        margin: 0;
        padding-left: 22px;
    }

    .key-points li { font-size: 15px; line-height: 1.55; color: #334155; }
    .key-points li strong { color: #4338ca; font-weight: 800; }

    .check-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
        margin-top: 16px;
    }

    .check-box { border-radius: 12px; padding: 12px 14px; }
    .check-box h3 { margin: 0 0 6px; font-size: 13px; font-weight: 900; letter-spacing: .06em; text-transform: uppercase; }
    .check-box p { margin: 0; font-size: 15px; line-height: 1.6; }

    .check-incorrect { background: #fff1f2; border: 1px solid #fecdd3; }
    .check-incorrect h3 { color: #be123c; }
    .check-incorrect p { color: #9f1239; }
    .check-incorrect s { opacity: .75; }

    .check-correct { background: #f0fdf4; border: 1px solid #bbf7d0; }
    .check-correct h3 { color: #15803d; }
    .check-correct p { color: #166534; }
    .check-correct p strong { font-weight: 900; }

    .dark .lesson12 { color: #e2e8f0; }
    .dark .grammar-panel { background: #141f30; border-color: #334155; }
    .dark .panel-heading h2 { color: #e2e8f0; }
    .dark .panel-rule { color: #cbd5e1; }
    .dark .panel-rule strong { color: #c7d2fe; }
    .dark .grammar-panel-yn .panel-rule strong { color: #ddd6fe; }
    .dark .formula { color: #94a3b8; }
    .dark .grammar-panel-wh .formula { background: #1d3049; border-color: #334e70; }
    .dark .grammar-panel-yn .formula { background: #292354; border-color: #443a80; }
    .dark .formula span { background: #111e32; border-color: #334155; color: #c7d2fe; }
    .dark .formula i { color: #64748b; }
    .dark .example-card { background: #101b2d; border-color: #334155; }
    .dark .ex-direct { background: #20314e; border-color: #3b4f75; }
    .dark .ex-direct p { color: #e2e8f0; }
    .dark .ex-arrow { color: #a5b4fc; }
    .dark .ex-reported { background: #19372e; border-color: #2f6b52; }
    .dark .ex-reported p { color: #e2e8f0; }
    .dark .ex-reported p strong { color: #86efac; }
    .dark .key-points { background: #292419; border-color: #65532d; box-shadow: none; }
    .dark .key-points h2 { color: #e2e8f0; }
    .dark .key-points li { color: #cbd5e1; }
    .dark .key-points li strong { color: #c7d2fe; }
    .dark .check-incorrect { background: rgba(80, 19, 34, .4); border-color: #9f5c68; }
    .dark .check-incorrect h3, .dark .check-incorrect p { color: #fecdd3; }
    .dark .check-correct { background: rgba(6, 78, 59, .35); border-color: #2f6b52; }
    .dark .check-correct h3, .dark .check-correct p { color: #bbf7d0; }

    @media (max-width: 960px) {
        .grammar-columns { grid-template-columns: 1fr; }
    }

    @media (max-width: 640px) {
        .lesson12 { padding: 24px 14px 30px; }
        .panel-body { padding: 16px; }
        .key-points ul { grid-template-columns: 1fr; }
        .check-grid { grid-template-columns: 1fr; }
    }
</style>
@endsection

@section('content')
<main class="lesson12">
    @include('slider.components.title-subtitle')

    <div class="grammar-columns">
        <section class="grammar-panel grammar-panel-wh" aria-labelledby="whQuestionsHeading">
            <div class="panel-body">
                <div class="panel-heading">
                    <h2 id="whQuestionsHeading">Wh-questions</h2>
                </div>

                <p class="panel-rule">
                    For questions with question words (who, what, when, where, why, how), we use the
                    <strong>question word + subject + verb in statement order</strong>.
                </p>

                <div class="formula" aria-label="Question word plus subject plus verb">
                    <span>question word</span><i aria-hidden="true">+</i><span>subject</span><i aria-hidden="true">+</i><span>verb</span>
                </div>

                <p class="examples-title">Wh-question examples</p>

                <div class="example-list">
                    <div class="example-card">
                        <div class="ex-box ex-direct">
                            <span class="ex-label">Direct question</span>
                            <p>“How can technology help athletes improve their performance?”</p>
                        </div>
                        <span class="ex-arrow" aria-hidden="true">↓</span>
                        <div class="ex-box ex-reported">
                            <span class="ex-label">Reported question</span>
                            <p>The interviewer asked <strong>how technology could help athletes improve</strong> their performance.</p>
                        </div>
                    </div>

                    <div class="example-card">
                        <div class="ex-box ex-direct">
                            <span class="ex-label">Direct question</span>
                            <p>“What other types of technology are being used in training?”</p>
                        </div>
                        <span class="ex-arrow" aria-hidden="true">↓</span>
                        <div class="ex-box ex-reported">
                            <span class="ex-label">Reported question</span>
                            <p>The interviewer asked <strong>what other types of technology were being used</strong> in training.</p>
                        </div>
                    </div>

                    <div class="example-card">
                        <div class="ex-box ex-direct">
                            <span class="ex-label">Direct question</span>
                            <p>“Why is human judgement still important?”</p>
                        </div>
                        <span class="ex-arrow" aria-hidden="true">↓</span>
                        <div class="ex-box ex-reported">
                            <span class="ex-label">Reported question</span>
                            <p>The interviewer asked <strong>why human judgement was still important</strong>.</p>
                        </div>
                    </div>

                    <div class="example-card">
                        <div class="ex-box ex-direct">
                            <span class="ex-label">Direct question</span>
                            <p>“How has technology changed the experience of sport?”</p>
                        </div>
                        <span class="ex-arrow" aria-hidden="true">↓</span>
                        <div class="ex-box ex-reported">
                            <span class="ex-label">Reported question</span>
                            <p>The interviewer asked <strong>how technology had changed</strong> the experience of sport.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="grammar-panel grammar-panel-yn" aria-labelledby="yesNoQuestionsHeading">
            <div class="panel-body">
                <div class="panel-heading">
                    <h2 id="yesNoQuestionsHeading">Yes/No questions</h2>
                </div>

                <p class="panel-rule">
                    For yes/no questions, we use
                    <strong>asked + if/whether + subject + verb in statement order</strong>.
                </p>

                <div class="formula" aria-label="Asked plus if or whether plus subject and verb">
                    <span>asked</span><i aria-hidden="true">+</i><span>if / whether</span><i aria-hidden="true">+</i><span>subject + verb</span>
                </div>

                <p class="examples-title">Yes/No examples</p>

                <div class="example-list">
                    <div class="example-card">
                        <div class="ex-box ex-direct">
                            <span class="ex-label">Direct question</span>
                            <p>“Does this mean that coaches no longer need to rely on their own observations?”</p>
                        </div>
                        <span class="ex-arrow" aria-hidden="true">↓</span>
                        <div class="ex-box ex-reported">
                            <span class="ex-label">Reported question</span>
                            <p>The interviewer asked <strong>if this meant that coaches no longer needed</strong> to rely on their own observations.</p>
                        </div>
                    </div>

                    <div class="example-card">
                        <div class="ex-box ex-direct">
                            <span class="ex-label">Direct question</span>
                            <p>“Can technology also help athletes practise?”</p>
                        </div>
                        <span class="ex-arrow" aria-hidden="true">↓</span>
                        <div class="ex-box ex-reported">
                            <span class="ex-label">Reported question</span>
                            <p>The interviewer asked <strong>if technology could also help athletes practise</strong>.</p>
                        </div>
                    </div>

                    <div class="example-card">
                        <div class="ex-box ex-direct">
                            <span class="ex-label">Direct question</span>
                            <p>“Can we always trust technology?”</p>
                        </div>
                        <span class="ex-arrow" aria-hidden="true">↓</span>
                        <div class="ex-box ex-reported">
                            <span class="ex-label">Reported question</span>
                            <p>The interviewer asked <strong>whether they could always trust technology</strong>.</p>
                        </div>
                    </div>

                    <div class="example-card">
                        <div class="ex-box ex-direct">
                            <span class="ex-label">Direct question</span>
                            <p>“Should technology replace human decision-making?”</p>
                        </div>
                        <span class="ex-arrow" aria-hidden="true">↓</span>
                        <div class="ex-box ex-reported">
                            <span class="ex-label">Reported question</span>
                            <p>The interviewer asked <strong>whether technology should replace</strong> human decision-making.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <aside class="key-points" aria-labelledby="keyPointsHeading">
        <h2 id="keyPointsHeading">Key points to remember</h2>
        <ul>
            <li>We keep the question word (who, what, when, where, why, how).</li>
            <li>We use <strong>statement word order</strong> (not question word order).</li>
            <li>We use <strong>if/whether</strong> for yes/no questions.</li>
            <li>We do not use quotation marks.</li>
            <li>Pronouns and tense may change depending on the context.</li>
        </ul>

        <div class="check-grid">
            <div class="check-box check-incorrect">
                <h3>Incorrect</h3>
                <p><s>How could technology help?</s><br><s>Whether can technology help?</s><br><s>How technology could help?</s></p>
            </div>
            <div class="check-box check-correct">
                <h3>Correct reported clauses</h3>
                <p>… <strong>how technology could help</strong>.<br>… <strong>whether technology could help</strong>.</p>
            </div>
        </div>
    </aside>
</main>
@endsection
