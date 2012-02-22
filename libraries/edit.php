<?php

function display_markdown($file) {
    echo '<div class="markdown" path="'.$file.'">';
    echo Markdown(file_get_contents(__ROOT__.'/contents/'.$file));
    echo '</div>';
}
