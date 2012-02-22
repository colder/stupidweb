<?php

function display_markdown($file) {
    echo '<div class="markdown" path="'.$file.'">';
    echo MarkDownRenderer::getFromPath($file)->render();
    echo '</div>';
}
