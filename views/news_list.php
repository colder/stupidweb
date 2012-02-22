<?php
$news     = array_reverse(glob(__ROOT__.'/contents/news/*'));
$_page    = isset($_page_params[2]) ? (int)$_page_params[2]-1 : 0;
$_perpage = 5;

$selected_news = array_slice($news, $_page*$_perpage, $_perpage);

$first = true;

foreach ($selected_news as $file) {
    list($id, $simpleTitle) = explode('-', basename($file));
    $_lines = file($file);
    $title = $_lines[0];
    $title_formatted = preg_replace("/[^\w-]+/", "-", trim($simpleTitle)).'.html';
    $date  = $_lines[1];
    $id    = (int)$id;
    $text  = trim(implode("", array_slice($_lines, 2)));

    if (!$first) {
        echo '<div class="news-separator"></div>';
    }
    $first = false;
    echo '
<div class="news-item">
    <div class="title">
        <h2><a href="/news/'.$date.'/'.$id.'/'.$title_formatted.'">'.$title.'</a></h2>
        <div class="date">'.date('D, j F Y', strtotime($date)).'</div>
    </div>
    <div class="text">'.Markdown($text).'</div>
</div>';
}

echo '<div class="news-nav">';
if (($_page+1)*$_perpage < count($news)) {
    echo '<div class="news-nav-right"><a href="/news/page/'.($_page+2).'">Older Entries</a></div>';
}
if ($_page > 0) {
    echo '<div class="news-nav-left"><a href="/news/page/'.$_page.'">Newer Entries</a></div>';
}
echo '</div>';
