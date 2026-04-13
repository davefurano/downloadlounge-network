<?php
echo "DOCUMENT_ROOT: " . $_SERVER['DOCUMENT_ROOT'] . "
";
$paths = [
    $_SERVER['DOCUMENT_ROOT'] . '/index.html',
    $_SERVER['DOCUMENT_ROOT'] . '/downloadloungecom/index.html',
    '/data0/downloadlounge.com/public_html/index.html',
    '/data0/downloadlounge.com/public_html/downloadloungecom/index.html',
];
foreach($paths as $p) {
    if(file_exists($p)) {
        $content = file_get_contents($p);
        preg_match('/thumb-icon\{font-size:([^;]+)/', $content, $m);
        echo "EXISTS: $p (" . strlen($content) . " bytes) icon=" . ($m[1] ?? 'not found') . "
";
    } else {
        echo "MISSING: $p
";
    }
}
?>