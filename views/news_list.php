<?php
$news     = array_reverse(glob(__ROOT__.'/contents/news/*'));
$_page    = isset($_page_params[2]) ? (int)$_page_params[2]-1 : 0;
$_perpage = 5;

$selected_news = array_slice($news, $_page*$_perpage, $_perpage);

foreach ($selected_news as $file) {
    $_lines = file($file);
    $title = $_lines[0];
    $date  = $_lines[1];
    $text  = trim(implode("", array_slice($_lines, 2)));

    echo '
<div class="news-item">
    <div class="title">
        <h2>'.$title.'</h2>
        <div class="date">'.date('D, j F Y', strtotime($date)).'</div>
    </div>
    <div class="text">'.Markdown($text).'</div>
</div>';
}
