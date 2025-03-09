<?php
function sampov(string $text): string
{
    preg_match_all('/\b\p{L}+\b/u', strtolower($text), $low);
    $words = $low[0];
    $word = array_count_values($words);
    return array_search(max($word), $word);
}
$text = "Хай текст текст текст текст текст текст Пока";
echo sampov($text);