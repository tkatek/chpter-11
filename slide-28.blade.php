{{-- Canva source page(s) 30: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Thanks',
        'subtitle' => 'Great job! You’ve completed this lesson.',
        'page_title' => 'Thanks!',
    ];
@endphp

@extends('slider.simple-layout')

@section('style')
<style>
.lesson-complete {
    --ink: #15203b;
    --muted: #53627f;
    --blue: #4361ee;
    --blue-deep: #3152ec;
    --line: #c9d5ff;
    --panel-head: #eef2ff;
    width: 100%;
    min-height: 100dvh;
    padding: 16px 28px 24px;
    color: var(--ink);
    font-family: "Plus Jakarta Sans", sans-serif;
}
.complete-shell { width: 100%; max-width: 1290px; margin: 0 auto; }
.complete-hero { text-align: center; }
.complete-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 30px;
    padding: 5px 20px;
    border-radius: 999px;
    background: #f0f3ff;
    color: var(--blue);
    font-size: 13px;
    font-weight: 850;
    letter-spacing: .25em;
}
.complete-hero h1 {
    margin: 8px 0 2px;
    color: var(--blue);
    font-size: clamp(50px, 5vw, 76px);
    font-weight: 850;
    letter-spacing: -.055em;
    line-height: 1;
}
.complete-hero .complete-lead {
    margin: 0;
    font-size: clamp(19px, 1.7vw, 24px);
    font-weight: 800;
    line-height: 1.35;
}
.complete-hero .complete-copy {
    margin: 3px 0 0;
    color: var(--muted);
    font-size: clamp(16px, 1.35vw, 20px);
    line-height: 1.45;
}
.complete-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 26px;
    margin-top: 26px;
}
.complete-card {
    min-width: 0;
    min-height: 468px;
    padding: 18px;
    border: 1.5px solid var(--line);
    border-radius: 20px;
    background: rgba(255, 255, 255, .76);
    box-shadow: 0 18px 45px -38px rgba(49, 82, 236, .5);
}
.complete-card h2 {
    margin: 0 0 16px;
    padding: 10px 16px;
    border-radius: 11px;
    background: var(--panel-head);
    color: var(--blue);
    font-size: 27px;
    font-weight: 850;
    letter-spacing: -.025em;
    line-height: 1.25;
}
.task-block { padding: 0 8px; }
.task-block + .task-block {
    margin-top: 18px;
    padding-top: 18px;
    border-top: 1px solid #dbe2f2;
}
.task-label {
    display: block;
    margin: 0;
    font-size: 18px;
    font-weight: 850;
    line-height: 1.4;
}
.task-copy {
    margin: 2px 0 8px;
    font-size: 17px;
    line-height: 1.55;
}
.sentence-line {
    margin: 0;
    font-size: 17px;
    line-height: 1.65;
}
.complete-inline {
    width: 13ch;
    max-width: 100%;
    margin: 0 4px;
    padding: 6px 8px;
    border: 1px solid #93a4c8;
    border-radius: 8px;
    background: #fff;
    color: var(--ink);
    font: inherit;
    font-weight: 700;
    vertical-align: middle;
}
.complete-field {
    display: block;
    width: 100%;
    min-width: 0;
    margin-top: 12px;
    padding: 13px 14px;
    border: 1px solid #93a4c8;
    border-radius: 10px;
    background: #fff;
    color: var(--ink);
    font: inherit;
    font-size: 17px;
    line-height: 1.5;
    resize: vertical;
}
.grammar-field { min-height: 96px; }
.reflection-field { min-height: 158px; }
.complete-inline:focus,
.complete-field:focus {
    border-color: var(--blue);
    outline: 3px solid rgba(67, 97, 238, .15);
    outline-offset: 1px;
}
.repeat-area { margin-top: 26px; text-align: center; }
.repeat-button {
    display: inline-flex;
    width: min(390px, 100%);
    min-height: 56px;
    align-items: center;
    justify-content: center;
    border: 0;
    border-radius: 999px;
    background: linear-gradient(135deg, #4164f5, #3152ec);
    color: #fff;
    box-shadow: 0 15px 30px -18px rgba(49, 82, 236, .9);
    cursor: pointer;
    font-size: 18px;
    font-weight: 850;
}
.repeat-button:hover { filter: brightness(1.06); transform: translateY(-1px); }
.repeat-button:focus-visible { outline: 4px solid rgba(99, 102, 241, .25); outline-offset: 4px; }
.repeat-note { margin: 8px 0 0; color: var(--muted); font-size: 16px; }
.dark .lesson-complete { --ink:#eef2ff; --muted:#aab5d0; --line:#405489; --panel-head:#263654; }
.dark .complete-badge { background:#263654; color:#aebcff; }
.dark .complete-card { background:rgba(15, 25, 43, .82); }
.dark .task-block + .task-block { border-color:#334155; }
.dark .complete-inline,
.dark .complete-field { border-color:#526582; background:#101c30; color:#eef2ff; }
@media (max-width: 820px) {
    .lesson-complete { padding-inline: 16px; }
    .complete-grid { grid-template-columns: 1fr; }
    .complete-card { min-height: 0; }
}
@media (max-width: 520px) {
    .complete-card { padding: 13px; border-radius: 16px; }
    .complete-card h2 { font-size: 23px; }
    .complete-inline { display: block; width: 100%; margin: 7px 0; }
}
</style>
@endsection

@section('content')
<main class="lesson-complete">
    <div class="complete-shell">
        <header class="complete-hero">
            <span class="complete-badge">WELL DONE</span>
            <h1>{{ $content['title'] }}</h1>
            <p class="complete-lead">{{ $content['subtitle'] }}</p>
            <p class="complete-copy">Take a moment to finish the activities below before moving on.</p>
        </header>

        <div class="complete-grid">
            <section class="complete-card" aria-labelledby="exit-ticket-title">
                <h2 id="exit-ticket-title">Exit Ticket</h2>

                <div class="task-block">
                    <label class="task-label" for="exit-vocab">1. Vocabulary</label>
                    <p class="task-copy">Complete:</p>
                    <p class="sentence-line">
                        Coaches can use
                        <input id="exit-vocab" class="complete-inline" aria-label="Missing vocabulary word">
                        information to monitor an athlete’s performance while training is taking place.
                    </p>
                </div>

                <div class="task-block">
                    <label class="task-label" for="exit-question">2. Grammar</label>
                    <p class="task-copy">Report the question:</p>
                    <p class="sentence-line">“Can technology make sport safer?”</p>
                    <p class="sentence-line">→ The interviewer asked ____________________.</p>
                    <textarea id="exit-question" class="complete-field grammar-field" aria-label="Reported question"></textarea>
                </div>
            </section>

            <section class="complete-card" aria-labelledby="reflection-title">
                <h2 id="reflection-title">3. Reflection</h2>
                <div class="task-block">
                    <p class="task-copy">In one sentence:</p>
                    <label class="task-label" for="exit-reflection">Do you think technology improves sport? Why?</label>
                    <textarea id="exit-reflection" class="complete-field reflection-field"></textarea>
                </div>
            </section>
        </div>

        <div class="repeat-area">
            <button id="repeatLessonButton" class="repeat-button" type="button">Repeat the Lesson</button>
            <p class="repeat-note">Review the lesson and practise again.</p>
        </div>
    </div>
</main>
@endsection

@section('script')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const repeatButton = document.getElementById('repeatLessonButton');

    repeatButton?.addEventListener('click', () => {
        try {
            if (window.parent && typeof window.parent.goToSlide === 'function') {
                window.parent.goToSlide(0);
                return;
            }
        } catch (_) {
            // Cross-origin parent access can fail; the navigation message remains available.
        }

        window.parent?.postMessage({ type: 'BEC_NAV', action: 'first' }, '*');
    });
});
</script>
@endsection
