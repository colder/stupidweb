<div class="twocols">
    <div class="twocols-left">
      <div class="content">
        <?php
            foreach (glob(__ROOT__.'/contents/highlights/*') as $file) {
                $_lines = file($file);
                $title = $_lines[0];
                $text  = trim(implode("", array_slice($_lines, 2)));

                echo '
        <div class="markdown" path="highlights/'.basename($file).'">
        <h2>'.$title.'</h2>';

                echo Markdown($text);
                echo '
        </div>';
            }
        ?>
      </div>
    </div>

    <div class="twocols-right">
      <div class="content">
        <div id="news">
        <?php
            if (isset($_page_params[3])) {
                require __ROOT__.'/views/news_details.php';
            } else {
                require __ROOT__.'/views/news_list.php';
            }
        ?>
        </div>
      </div>
    </div>
</div>
