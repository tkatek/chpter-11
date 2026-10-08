<?php
$src = file_get_contents(__DIR__ . '/../slide-21.blade.php');

function between(string $src, string $start, string $end): string {
    $i = strpos($src, $start);
    if ($i === false) { fwrite(STDERR, "no start marker: $start\n"); exit(1); }
    $i += strlen($start);
    $j = strpos($src, $end, $i);
    if ($j === false) { fwrite(STDERR, "no end marker: $end\n"); exit(1); }
    return substr($src, $i, $j - $i);
}

$style = between($src, "@section('style')", "@endsection");
$contentHtml = between($src, "@section('content')", "@endsection");

function materialAsset(string $path): string { return 'https://picsum.photos/seed/varreview/800/1000'; }

$phpBlock = between($src, '@php', '@endphp');
eval($phpBlock);

$titleStub = '<h1 style="margin:0 0 10px;font-size:34px;line-height:1.25;font-weight:800;color:#3730a3;"><span>'
    . htmlspecialchars($content['title']) . '</span></h1><p style="margin:0 0 6px;color:#475569;font-size:17px;line-height:1.5;">'
    . htmlspecialchars($content['subtitle']) . '</p>';

$blade = str_replace("@include('slider.components.title-subtitle')", $titleStub, $contentHtml);
$blade = preg_replace('/\{\{(.+?)\}\}/s', '<?= htmlspecialchars(($1)) ?>', $blade);

ob_start();
eval('?>' . $blade);
$html = ob_get_clean();

$page = "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n<meta charset=\"utf-8\">\n"
    . "<link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;650;700;800&display=swap\" rel=\"stylesheet\">\n"
    . "<style>html,body{margin:0;padding:0;background:#f2f5fc;min-height:100%;}</style>\n"
    . $style . "\n</head>\n<body>\n" . $html . "\n</body>\n</html>\n";

file_put_contents(__DIR__ . '/slide-21-preview.html', $page);
echo "written " . strlen($page) . " bytes\n";
