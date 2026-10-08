<?php
$src = file_get_contents(__DIR__ . '/../slide-9.blade.php');

function between(string $src, string $start, string $end): string {
    $i = strpos($src, $start);
    if ($i === false) { fwrite(STDERR, "no start marker: $start\n"); exit(1); }
    $i += strlen($start);
    $j = strpos($src, $end, $i);
    if ($j === false) { fwrite(STDERR, "no end marker: $end\n"); exit(1); }
    return substr($src, $i, $j - $i);
}

$style = between($src, "@section('style')", "@endsection");
$content = between($src, "@section('content')", "@endsection");

function materialAsset(string $path): string { return '#'; }

// Evaluate the @php data block to get $content and $phrases
$phpBlock = between($src, '@php', '@endphp');
eval($phpBlock);

$blade = $content;
$blade = preg_replace('/\{\{(.+?)\}\}/s', '<?= htmlspecialchars(($1)) ?>', $blade);
$blade = str_replace(['@foreach', '@endforeach'], ['<?php foreach', '<?php endforeach'], $blade);
// Re-add parens/colons: @foreach($phrases as $index => $phrase) became '<?php foreach($phrases ...' which is valid PHP as-is
ob_start();
eval('?>' . $blade);
$html = ob_get_clean();

$page = "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n<meta charset=\"utf-8\">\n"
    . "<link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;650;700;800&display=swap\" rel=\"stylesheet\">\n"
    . "<style>html,body{margin:0;padding:0;background:#f2f5fc;min-height:100%;}</style>\n"
    . $style . "\n</head>\n<body>\n" . $html . "\n</body>\n</html>\n";

file_put_contents(__DIR__ . '/slide-9-preview.html', $page);
echo "written " . strlen($page) . " bytes\n";
