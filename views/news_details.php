<?php
$news_id = sprintf("%03d", $_page_params[2]);

$news     = glob(__ROOT__.'/contents/news/'.$news_id.'-*');

if (!empty($news)) {

    echo '
<div class="header-box-right">
    <a href="/news/">Back to list</a>
</div>
<div class="markdown" path="news/'.basename($news[0]).'">';

    MarkDownRenderer::getFromPath('news/'.basename($news[0]))->render();

    echo '
</div>';

} else {
    require __ROOT__.'/views/404.php';
}
