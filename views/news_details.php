<?php
$news_id = sprintf("%03d", $_page_params[2]);

$news     = glob(__ROOT__.'/contents/news/'.$news_id.'-*');

if (!empty($news)) {
    $_lines = file($news[0]);
    $title = $_lines[0];
    $date  = $_lines[1];
    $text  = trim(implode("", array_slice($_lines, 2)));

    echo '
<div class="header-box-right">
    <a href="/news/">Back to list</a>
</div>
<div class="markdown" path="news/'.basename($news[0]).'">
    <div class="news-item">
        <div class="title">
            <h2>'.$title.'</h2>
            <div class="date">'.date('D, j F Y', strtotime($date)).'</div>
        </div>
        <div class="text">'.Markdown($text).'</div>
    </div>
</div>';

} else {
    require __ROOT__.'/views/404.php';
}
