{{-- Canva source page(s) 30: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Thanks',
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
    --panel-head: #e9ecfa;
    --field-line: #93a4c8;
    width: 100%;
    min-height: 100dvh;
    display: flex;
    flex-direction: column;
    padding: 14px 20px;
    color: var(--ink);
    font-family: "Plus Jakarta Sans", sans-serif;
}
.complete-shell { width: 100%; max-width: 1290px; margin: auto; }
.complete-hero { text-align: center; }
.complete-hero h1 {
    margin: 0 0 3px;
    color: var(--blue);
    font-size: clamp(38px, 3.6vw, 56px);
    font-weight: 850;
    letter-spacing: -.05em;
    line-height: 1.02;
}
.complete-hero .complete-copy {
    margin: 3px 0 0;
    color: var(--muted);
    font-size: clamp(14px, 1.1vw, 17px);
    line-height: 1.45;
}
.complete-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 20px;
    margin-top: 16px;
}
.complete-card {
    display: flex;
    flex-direction: column;
    min-width: 0;
    padding: 14px 16px 16px;
    border: 1.5px solid var(--line);
    border-radius: 18px;
    background: rgba(255, 255, 255, .78);
    box-shadow: 0 18px 45px -38px rgba(49, 82, 236, .5);
}
/* Photo placeholder: empty rounded card matching the exercise boxes; a photo
   can be dropped in later as <img class="photo-img" src="…" alt="…"> inside
   .photo-shape without any layout changes. */
.complete-photo {
    display: flex;
    min-width: 0;
    min-height: 230px;
}
.photo-shape {
    flex: 1;
    border: 1.5px solid var(--line);
    border-radius: 18px;
    background: #eef3ff;
    overflow: hidden;
}
.photo-shape img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.dark .photo-shape { background: #263654; }
.complete-head {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0 0 10px;
    padding: 7px 12px;
    border-radius: 12px;
    background: var(--panel-head);
}
.complete-num {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex: none;
    width: 27px;
    height: 27px;
    border-radius: 999px;
    background: var(--blue);
    color: #fff;
    font-size: 14px;
    font-weight: 850;
}
.complete-title {
    color: var(--blue);
    font-size: clamp(18px, 1.5vw, 21px);
    font-weight: 850;
    letter-spacing: -.02em;
    line-height: 1.2;
}
.task-body {
    display: flex;
    flex: 1;
    flex-direction: column;
    gap: 6px;
}
.task-copy {
    margin: 0;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.5;
}
.task-label { font-weight: 850; }
.sentence-line {
    margin: 0;
    font-size: 16px;
    line-height: 1.55;
}
.blank-gap {
    display: inline-block;
    width: clamp(90px, 12vw, 140px);
    min-width: 64px;
    height: 1em;
    margin: 0 2px;
    border-bottom: 2px solid var(--field-line);
}
.blank-gap--wide { width: clamp(140px, 20vw, 260px); }
.complete-field {
    display: block;
    width: 100%;
    min-width: 0;
    margin-top: auto;
    padding: 11px 13px;
    border: 1px solid var(--field-line);
    border-radius: 10px;
    background: #fff;
    color: var(--ink);
    font: inherit;
    font-size: 15.5px;
    line-height: 1.5;
    resize: vertical;
}
.complete-field::placeholder { color: #8794b5; }
.grammar-field { min-height: 56px; }
.reflection-field { min-height: 64px; }
.complete-field:focus {
    border-color: var(--blue);
    outline: 3px solid rgba(67, 97, 238, .15);
    outline-offset: 1px;
}
.repeat-area { margin-top: 16px; text-align: center; }
.repeat-button {
    display: inline-flex;
    width: min(330px, 100%);
    min-height: 56px;
    align-items: center;
    justify-content: center;
    border: 0;
    border-radius: 999px;
    background: linear-gradient(135deg, #4164f5, #3152ec);
    color: #fff;
    box-shadow: 0 15px 30px -18px rgba(49, 82, 236, .9);
    cursor: pointer;
    font-size: 17px;
    font-weight: 850;
    letter-spacing: .05em;
    text-transform: uppercase;
}
.repeat-button:hover { filter: brightness(1.06); transform: translateY(-1px); }
.repeat-button:focus-visible { outline: 4px solid rgba(99, 102, 241, .25); outline-offset: 4px; }
.repeat-note { margin: 8px 0 0; color: var(--muted); font-size: 15px; }
.dark .lesson-complete { --ink:#eef2ff; --muted:#aab5d0; --line:#405489; --panel-head:#263654; --field-line:#526582; }
.dark .complete-title { color:#aebcff; }
.dark .complete-card { background:rgba(15, 25, 43, .82); }
.dark .complete-field { background:#101c30; color:#eef2ff; }
.dark .complete-field::placeholder { color:#8fa0c5; }
@media (max-width: 880px) {
    .lesson-complete { padding-inline: 16px; }
    .complete-grid { grid-template-columns: 1fr; }
}
@media (max-width: 520px) {
    .complete-card { padding: 14px; border-radius: 16px; }
    .complete-head { margin-bottom: 12px; padding: 8px 12px; }
    .complete-num { width: 26px; height: 26px; font-size: 14px; }
    .complete-title { font-size: 19px; }
    .task-copy, .sentence-line { font-size: 16px; }
    .blank-gap { width: 84px; }
    .blank-gap--wide { width: 170px; }
    .repeat-button { min-height: 52px; font-size: 16px; }
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

@section('content')
<main class="lesson-complete">
    <div class="complete-shell">
        <header class="complete-hero">
            <h1>{{ $content['title'] }}</h1>
            <p class="complete-copy">Take a moment to finish the activities below before moving on.</p>
        </header>

        <div class="complete-grid">
            <section class="complete-card" aria-labelledby="vocab-title">
                <h2 class="complete-head" id="vocab-title">
                    <span class="complete-num" aria-hidden="true">1</span>
                    <span class="complete-title">Vocabulary</span>
                </h2>

                <div class="task-body">
                    <p class="task-copy">Complete:</p>
                    <p class="sentence-line">
                        Coaches can use
                        <span class="blank-gap" aria-hidden="true"></span>
                        information to monitor an athlete’s performance while training is taking place.
                    </p>
                    <input id="exit-vocab" class="complete-field" placeholder="Type your answer here…" aria-label="Missing vocabulary word">
                </div>
            </section>

            <div class="complete-photo" aria-hidden="true">
                <div class="photo-shape">
                    <!-- Photo added later: <img class="photo-img" src="…" alt="…"> -->
                </div>
            </div>

            <section class="complete-card" aria-labelledby="grammar-title">
                <h2 class="complete-head" id="grammar-title">
                    <span class="complete-num" aria-hidden="true">2</span>
                    <span class="complete-title">Grammar</span>
                </h2>

                <div class="task-body">
                    <p class="task-copy">Report the question:</p>
                    <p class="sentence-line">“Can technology make sport safer?”</p>
                    <p class="sentence-line">→ The interviewer asked <span class="blank-gap blank-gap--wide" aria-hidden="true"></span>.</p>
                    <textarea id="exit-question" class="complete-field grammar-field" placeholder="Type your answer here…" aria-label="Reported question"></textarea>
                </div>
            </section>

            <section class="complete-card" aria-labelledby="reflection-title">
                <h2 class="complete-head" id="reflection-title">
                    <span class="complete-num" aria-hidden="true">3</span>
                    <span class="complete-title">Reflection</span>
                </h2>

                <div class="task-body">
                    <p class="task-copy">In one sentence:
                        <label class="task-label" for="exit-reflection">Do you think technology improves sport? Why?</label>
                    </p>
                    <textarea id="exit-reflection" class="complete-field reflection-field" placeholder="Type your answer here…"></textarea>
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
