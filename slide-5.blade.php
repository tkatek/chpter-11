{{-- Canva source page(s) 5: https://canva.link/2q0owwdnfy54l3f --}}
@php
    $content['questions'] = [
        'What types of technology are used to help referees and officials in sport?',
        'Do you think technology makes sporting decisions more accurate? Why or why not?',
        'How would you feel if a technology-based decision changed the result of a match you were watching?',
        'Can technology always understand the context of a sporting situation, or is human judgement sometimes necessary?',
        'If you were a referee, would you prefer to make decisions yourself or rely on technology? Why?',
    ];
    $content['title'] = 'Lead-in Discussion: Technology in Sport';
    $content['page_title'] = 'Lead-in Discussion: Technology in Sport';
@endphp

@include('slider.game.spin-wheel', ['content' => $content])

<style>
    #wheel text,
    #spinWheel text,
    .spin-wheel text,
    [class*="wheel"] svg text {
        font-size: 14px !important;
        font-weight: 800 !important;
    }
</style>

<script>
    (() => {
        const contextPrototype = window.CanvasRenderingContext2D?.prototype;
        if (!contextPrototype || contextPrototype.__chapter11WheelFontBoost) return;

        const originalFillText = contextPrototype.fillText;
        contextPrototype.fillText = function (text, x, y, maxWidth) {
            const label = String(text ?? '');
            const shouldEnlarge = this.canvas && label.length > 8 && label.toUpperCase() !== 'READY?';

            if (!shouldEnlarge) {
                return originalFillText.apply(this, arguments);
            }

            const originalFont = this.font;
            this.font = originalFont.replace(/(\d+(?:\.\d+)?)px/, (_, size) => `${Math.round(Number(size) * 1.12 * 10) / 10}px`);
            const result = maxWidth === undefined
                ? originalFillText.call(this, text, x, y)
                : originalFillText.call(this, text, x, y, maxWidth);
            this.font = originalFont;
            return result;
        };
        contextPrototype.__chapter11WheelFontBoost = true;

        window.dispatchEvent(new Event('resize'));
    })();
</script>
