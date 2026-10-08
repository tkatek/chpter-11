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
    /* The spin-wheel component draws labels as SVG text inside #wheel-svg (viewBox 1000).
       CSS px on SVG text = user units, so this scales the segment labels directly. */
    #wheel-svg text {
        font-size: 28px !important;
        font-weight: 800 !important;
    }
</style>
