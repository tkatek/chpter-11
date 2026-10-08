{{-- Canva source page(s) 12: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content = [
        'title' => 'Match the Phrases',
        'subtitle' => 'Match 1–6 with A–F to complete the sentences.',
        'page_title' => 'Match the Phrases',
    ];

    // Canva page 12 (practice.4) — sentence beginnings, exact teacher wording.
    $beginnings = [
        1 => 'Coaches use data analysis to',
        2 => 'Athletes can use virtual reality to',
        3 => 'Advanced analytics can help coaches identify',
        4 => 'Streaming platforms allow fans to',
        5 => 'Social media has increased',
        6 => 'Coaches can use technology to evaluate',
    ];

    // Sentence endings, displayed in the teacher's A–F order.
    $endings = [
        'A' => 'matches and training sessions in greater detail.',
        'B' => 'strengths and weaknesses in an athlete’s performance.',
        'C' => 'fan engagement with teams and athletes.',
        'D' => 'watch matches and highlights from almost anywhere.',
        'E' => 'simulate realistic game situations.',
        'F' => 'develop more effective strategies.',
    ];

    // Teacher's answer key (Canva page 12): 1-F | 2-E | 3-B | 4-D | 5-C | 6-A
    $correctPairs = [1 => 'F', 2 => 'E', 3 => 'B', 4 => 'D', 5 => 'C', 6 => 'A'];

    $matchStorageKey = 'click-match-game-' . md5(request()->path()) . '-' . md5('sport-match-v1');
@endphp

@extends('slider.simple-layout')

@section('style')
<style>
    #clickMatchGame .match-actions {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: .6rem;
        margin-bottom: .7rem;
    }

    #clickMatchGame .match-hint {
        margin: 0 0 .9rem;
        text-align: center;
        font-size: .8rem;
        font-weight: 700;
        color: #64748b;
    }

    .dark #clickMatchGame .match-hint { color: #94a3b8; }

    #clickMatchGame .match-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px 20px;
        align-items: start;
    }

    #clickMatchGame .match-column {
        display: grid;
        gap: 10px;
    }

    #clickMatchGame .match-caption {
        margin: 0 0 2px;
        padding-left: 4px;
        font-size: 11px;
        font-weight: 900;
        letter-spacing: .14em;
        text-transform: uppercase;
        color: #64748b;
    }

    .dark #clickMatchGame .match-caption { color: #94a3b8; }

    #clickMatchGame .match-item {
        display: flex;
        align-items: center;
        gap: 12px;
        width: 100%;
        min-height: 54px;
        padding: 11px 13px;
        background: rgba(255, 255, 255, .96);
        border: 1.5px solid #e2e8f0;
        border-radius: 14px;
        box-shadow: 0 12px 26px -22px rgba(15, 23, 42, .55);
        text-align: left;
        cursor: pointer;
        transition: border-color .15s ease, background-color .15s ease, box-shadow .15s ease;
    }

    #clickMatchGame .match-item:hover {
        border-color: #a5b4fc;
        box-shadow: 0 14px 28px -20px rgba(79, 70, 229, .5);
    }

    #clickMatchGame .match-item:focus-visible {
        outline: 3px solid #c7d2fe;
        outline-offset: 2px;
    }

    .dark #clickMatchGame .match-item {
        background: rgba(15, 23, 42, .92);
        border-color: #334155;
    }

    .dark #clickMatchGame .match-item:hover { border-color: #6366f1; }

    #clickMatchGame .match-badge {
        flex: 0 0 32px;
        display: grid;
        place-items: center;
        width: 32px;
        height: 32px;
        border-radius: 10px;
        background: #eef2ff;
        border: 1px solid #dbe2ff;
        color: #4338ca;
        font-size: 14px;
        font-weight: 900;
        transition: background-color .15s ease, border-color .15s ease, color .15s ease;
    }

    .dark #clickMatchGame .match-badge {
        background: #253453;
        border-color: #3c4e78;
        color: #c7d2fe;
    }

    #clickMatchGame .match-text {
        flex: 1;
        min-width: 0;
        font-size: 15px;
        font-weight: 700;
        line-height: 1.45;
        color: #1e293b;
    }

    #clickMatchGame .match-pair-tag {
        flex: 0 0 auto;
        display: inline-flex;
        align-items: center;
        min-height: 26px;
        padding: 3px 10px;
        border-radius: 999px;
        background: #eef2ff;
        border: 1px solid #c7d2fe;
        color: #4338ca;
        font-size: 12px;
        font-weight: 900;
    }

    #clickMatchGame .match-pair-tag[hidden] { display: none; }

    .dark #clickMatchGame .match-text { color: #e2e8f0; }

    .dark #clickMatchGame .match-pair-tag {
        background: #1d3049;
        border-color: #334e70;
        color: #c7d2fe;
    }

    /* Selected: subtle purple highlight */
    #clickMatchGame .match-item.is-selected {
        border-color: #6366f1;
        background: #eef2ff;
        box-shadow: 0 0 0 3px #c7d2fe;
    }

    .dark #clickMatchGame .match-item.is-selected {
        background: #253453;
        border-color: #818cf8;
        box-shadow: 0 0 0 3px #33415d;
    }

    #clickMatchGame .match-item.is-selected .match-badge {
        background: #4f46e5;
        border-color: #4f46e5;
        color: #fff;
    }

    /* Paired: linked as a pair, neutral indigo */
    #clickMatchGame .match-item.is-paired { border-color: #818cf8; background: #f8faff; }
    .dark #clickMatchGame .match-item.is-paired { background: rgba(29, 48, 73, .55); border-color: #4f5f8f; }
    #clickMatchGame .match-item.is-paired .match-badge {
        background: #4f46e5;
        border-color: #4f46e5;
        color: #fff;
    }

    /* Checked states: platform success / error colors */
    #clickMatchGame .match-item.is-correct { border-color: #34d399; background: #f0fdf4; }
    .dark #clickMatchGame .match-item.is-correct { background: rgba(25, 55, 46, .55); border-color: #2f6b52; }
    #clickMatchGame .match-item.is-correct .match-badge {
        background: #059669;
        border-color: #059669;
        color: #fff;
    }
    #clickMatchGame .match-item.is-correct .match-pair-tag {
        background: #d1fae5;
        border-color: #a7f3d0;
        color: #047857;
    }
    .dark #clickMatchGame .match-item.is-correct .match-pair-tag {
        background: rgba(6, 78, 59, .55);
        border-color: #2f6b52;
        color: #a7f3d0;
    }

    #clickMatchGame .match-item.is-wrong { border-color: #fb7185; background: #fff1f2; }
    .dark #clickMatchGame .match-item.is-wrong { background: rgba(65, 16, 28, .5); border-color: #9f5c68; }
    #clickMatchGame .match-item.is-wrong .match-badge {
        background: #e11d48;
        border-color: #e11d48;
        color: #fff;
    }
    #clickMatchGame .match-item.is-wrong .match-pair-tag {
        background: #ffe4e6;
        border-color: #fecdd3;
        color: #be123c;
    }
    .dark #clickMatchGame .match-item.is-wrong .match-pair-tag {
        background: rgba(80, 19, 34, .55);
        border-color: #9f5c68;
        color: #fecdd3;
    }

    @media (max-width: 860px) {
        #clickMatchGame .match-grid { grid-template-columns: 1fr; }
    }

    @media (min-width: 640px) {
        #clickMatchGame .match-text { font-size: 16px; }
    }
</style>
@endsection

@section('content')
<main id="clickMatchGame" class="flex min-h-[100dvh] w-full flex-col items-center justify-start px-3 pb-6 pt-6 sm:px-5 sm:pt-7">
    @include('slider.components.title-subtitle')

    @include('slider.components.game-status')

    <div class="mx-auto w-full max-w-6xl">
        <div class="match-actions">
            <button
                type="button"
                class="inline-flex items-center justify-center rounded-xl border border-amber-200 bg-amber-50 px-3 py-2 text-xs font-black text-amber-800 shadow-sm shadow-amber-100 transition duration-200 hover:-translate-y-0.5 hover:bg-amber-100 hover:shadow-md dark:border-amber-400/30 dark:bg-amber-500/15 dark:text-amber-100 dark:shadow-none sm:px-4 sm:text-sm"
                id="btnRevealAnswers"
            >
                Reveal answers
            </button>
            <button
                type="button"
                class="hidden inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs font-black text-slate-800 shadow-sm shadow-slate-200/70 transition duration-200 hover:-translate-y-0.5 hover:bg-slate-50 hover:shadow-md dark:border-slate-700 dark:bg-slate-900 dark:text-slate-100 dark:shadow-none dark:hover:bg-slate-800 sm:px-4 sm:text-sm"
                id="btnRetakeTest"
            >
                Retake test
            </button>
            <button
                type="button"
                class="inline-flex items-center justify-center rounded-xl border border-stone-500/40 bg-gradient-to-r from-stone-700 via-stone-600 to-zinc-700 px-3 py-2 text-xs font-black text-white shadow-md shadow-stone-300/40 transition duration-200 hover:-translate-y-0.5 hover:from-stone-800 hover:via-stone-700 hover:to-zinc-800 hover:shadow-lg hover:shadow-stone-300/60 active:scale-95 dark:border-stone-400/30 dark:from-stone-200 dark:via-stone-100 dark:to-zinc-200 dark:text-stone-950 dark:shadow-none sm:px-4 sm:text-sm"
                id="checkAnswersBtn"
            >
                Check Answers
            </button>
        </div>

        <p class="match-hint">Click a sentence beginning, then click its ending. Click a matched item to unmatch it.</p>

        <div class="match-grid">
            <div class="match-column" role="group" aria-label="Sentence beginnings">
                <p class="match-caption">Sentence beginnings</p>
                @foreach($beginnings as $number => $text)
                    <button type="button" class="match-item" data-side="left" data-id="{{ $number }}">
                        <span class="match-badge">{{ $number }}</span>
                        <span class="match-text">{{ $text }}</span>
                        <span class="match-pair-tag" hidden></span>
                    </button>
                @endforeach
            </div>

            <div class="match-column" role="group" aria-label="Sentence endings">
                <p class="match-caption">Sentence endings</p>
                @foreach($endings as $letter => $text)
                    <button type="button" class="match-item" data-side="right" data-id="{{ $letter }}">
                        <span class="match-badge">{{ $letter }}</span>
                        <span class="match-text">{{ $text }}</span>
                        <span class="match-pair-tag" hidden></span>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const storageKey = @json($matchStorageKey);
        const correctPairs = @json($correctPairs);
        const totalPairs = Object.keys(correctPairs).length;

        const items = Array.from(document.querySelectorAll('.match-item'));
        const leftItems = items.filter((el) => el.dataset.side === 'left');
        const rightItems = items.filter((el) => el.dataset.side === 'right');
        const itemByKey = new Map(items.map((el) => [el.dataset.side + ':' + el.dataset.id, el]));

        const checkBtn = document.getElementById('checkAnswersBtn');
        const btnRevealAnswers = document.getElementById('btnRevealAnswers');
        const btnRetakeTest = document.getElementById('btnRetakeTest');
        const progressEl = document.getElementById('tilesCount');
        const correctEl = document.getElementById('correctCount');
        const mistakesEl = document.getElementById('mistakesCount');
        const timerEl = document.getElementById('gameTimer');

        const audio = {
            correct: new Audio('/slider/sounds/correct.wav'),
            wrong: new Audio('/slider/sounds/wrong.wav'),
            success: new Audio('/slider/sounds/success.wav'),
        };

        const play = (sound) => {
            if (!sound) return;
            sound.pause();
            sound.currentTime = 0;
            sound.play().catch(() => {});
        };

        let selection = null;   // { side, id }
        let pairs = {};         // leftId (string) -> rightId
        let marks = {};         // leftId -> 'correct' | 'wrong'
        let wrongTries = 0;
        let startTime = Date.now();
        let timerInt = null;

        const leftPartnerOf = (rightId) => Object.keys(pairs).find((leftId) => pairs[leftId] === rightId);

        const stateClasses = ['is-selected', 'is-paired', 'is-correct', 'is-wrong'];

        const clearItemState = (el) => el.classList.remove(...stateClasses);

        const resetItemVisuals = (el) => {
            clearItemState(el);
            el.querySelector('.match-pair-tag').hidden = true;
            el.setAttribute('aria-pressed', 'false');
        };

        const renderSelection = () => {
            items.forEach((el) => {
                if (selection && el.dataset.side === selection.side && el.dataset.id === selection.id) {
                    el.classList.add('is-selected');
                    el.setAttribute('aria-pressed', 'true');
                } else {
                    el.classList.remove('is-selected');
                }
            });
        };

        const renderPair = (leftId, state) => {
            const leftEl = itemByKey.get('left:' + leftId);
            const rightEl = itemByKey.get('right:' + pairs[leftId]);
            if (!leftEl || !rightEl) return;

            [leftEl, rightEl].forEach((el) => {
                el.classList.remove('is-correct', 'is-wrong');
                el.classList.add('is-paired');
            });

            const leftTag = leftEl.querySelector('.match-pair-tag');
            const rightTag = rightEl.querySelector('.match-pair-tag');
            leftTag.textContent = pairs[leftId];
            leftTag.hidden = false;
            rightTag.textContent = leftId;
            rightTag.hidden = false;

            if (state === 'correct') {
                leftEl.classList.add('is-correct');
                rightEl.classList.add('is-correct');
            } else if (state === 'wrong') {
                leftEl.classList.add('is-wrong');
                rightEl.classList.add('is-wrong');
            }
        };

        const unpairLeft = (leftId) => {
            const rightId = pairs[leftId];
            if (rightId === undefined) return;

            delete pairs[leftId];
            delete marks[leftId];

            resetItemVisuals(itemByKey.get('left:' + leftId));
            resetItemVisuals(itemByKey.get('right:' + rightId));
        };

        const unpairRight = (rightId) => {
            const leftId = leftPartnerOf(rightId);
            if (leftId === undefined) return;
            unpairLeft(leftId);
        };

        const renderAll = () => {
            items.forEach(resetItemVisuals);
            Object.keys(pairs).forEach((leftId) => renderPair(leftId, marks[leftId]));
            renderSelection();
        };

        const updateStatusUI = () => {
            const correctTotal = Object.keys(marks).filter((leftId) => marks[leftId] === 'correct').length;
            if (progressEl) progressEl.textContent = `${correctTotal}/${totalPairs}`;
            if (correctEl) correctEl.textContent = String(correctTotal);
            if (mistakesEl) mistakesEl.textContent = String(wrongTries);
        };

        const savePairs = () => {
            localStorage.setItem(storageKey, JSON.stringify({ pairs }));
        };

        const formatTime = (seconds) => {
            if (!isFinite(seconds) || seconds < 0) seconds = 0;
            const mins = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return `${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
        };

        const updateTimer = () => {
            if (!timerEl) return;
            timerEl.textContent = formatTime((Date.now() - startTime) / 1000);
        };

        const startTimer = () => {
            clearInterval(timerInt);
            updateTimer();
            timerInt = setInterval(updateTimer, 1000);
        };

        const updateActionButtons = ({ revealed = false } = {}) => {
            if (btnRevealAnswers) btnRevealAnswers.classList.toggle('hidden', revealed);
            if (btnRetakeTest) btnRetakeTest.classList.toggle('hidden', !revealed);
        };

        const handleItemClick = (el) => {
            const side = el.dataset.side;
            const id = el.dataset.id;

            // Pairing click: opposite sides selected.
            if (selection && selection.side !== side) {
                const leftKey = selection.side === 'left' ? selection.id : id;
                const rightKey = selection.side === 'right' ? selection.id : id;

                unpairLeft(String(leftKey));
                unpairRight(String(rightKey));

                pairs[String(leftKey)] = String(rightKey);
                selection = null;

                renderAll();
                savePairs();
                updateStatusUI();
                return;
            }

            // Same side (or nothing selected yet).
            if (selection && selection.side === side && selection.id === id) {
                selection = null; // toggle off
            } else if (pairs[String(id)] !== undefined || leftPartnerOf(String(id)) !== undefined) {
                // Clicking a matched item unmatches it and selects it for re-matching.
                if (side === 'left') unpairLeft(String(id));
                else unpairRight(String(id));

                selection = { side, id };
                savePairs();
                updateStatusUI();
            } else {
                selection = { side, id };
            }

            renderAll();
        };

        items.forEach((el) => {
            el.addEventListener('click', () => handleItemClick(el));
        });

        checkBtn?.addEventListener('click', () => {
            let allCorrect = true;

            leftItems.forEach((el) => {
                const leftId = String(el.dataset.id);
                const rightId = pairs[leftId];
                const isCorrect = rightId !== undefined && rightId === correctPairs[leftId];

                marks[leftId] = isCorrect ? 'correct' : 'wrong';
                if (!isCorrect) allCorrect = false;
            });

            if (!allCorrect) wrongTries += 1;
            if (allCorrect && totalPairs > 0) clearInterval(timerInt);

            play(allCorrect ? audio.success : audio.wrong);
            renderAll();
            updateStatusUI();
            savePairs();
        });

        btnRevealAnswers?.addEventListener('click', () => {
            pairs = {};
            marks = {};
            Object.keys(correctPairs).forEach((leftId) => {
                pairs[leftId] = correctPairs[leftId];
                marks[leftId] = 'correct';
            });

            selection = null;
            updateActionButtons({ revealed: true });
            clearInterval(timerInt);
            play(audio.correct);
            renderAll();
            updateStatusUI();
            savePairs();
        });

        const resetExercise = () => {
            pairs = {};
            marks = {};
            selection = null;
            wrongTries = 0;
            startTime = Date.now();

            localStorage.removeItem(storageKey);
            updateActionButtons({ revealed: false });
            renderAll();
            updateStatusUI();
            startTimer();
        };

        btnRetakeTest?.addEventListener('click', () => {
            window.resetSlide?.();
        });

        window.resetSlide = resetExercise;

        // Restore any saved progress from a previous visit.
        try {
            const saved = JSON.parse(localStorage.getItem(storageKey) || '{}') || {};
            if (saved && typeof saved.pairs === 'object') {
                pairs = {};
                Object.keys(saved.pairs).forEach((leftId) => {
                    const rightId = String(saved.pairs[leftId]);
                    if (itemByKey.has('left:' + leftId) && itemByKey.has('right:' + rightId)) {
                        pairs[leftId] = rightId;
                    }
                });
            }
        } catch (e) {
            pairs = {};
        }

        updateActionButtons({ revealed: false });
        renderAll();
        updateStatusUI();
        startTimer();

        window.stopSlideAudio = () => {
            clearInterval(timerInt);
            Object.values(audio).forEach((sound) => {
                sound.pause();
                sound.currentTime = 0;
            });
        };

        window.addEventListener('pagehide', window.stopSlideAudio);
        window.addEventListener('beforeunload', window.stopSlideAudio);
    });
</script>
@endsection
