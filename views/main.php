<div class="twocols">
    <div class="twocols-left">
        <?php
            foreach (glob(__ROOT__.'/contents/highlights/*') as $file) {
                $_lines = file($file);
                $title = $_lines[0];
                $text  = trim(implode("", array_slice($_lines, 2)));

                echo '
       <h2>'.$title.'</h2>';

                echo Markdown($text);
            }
        ?>
    </div>

    <div class="twocols-right">
        <div id="news">
            <div class="news-item">
                <div class="title">
                    <h2>PHANTM Continued</h2>
                    <div class="date">The 18th of August 2010</div>
                </div>
                <div class="text">
                    <?php
$_text = <<<TXT
Seven months ago, I mentioned _PHANTM_, a tool that statically analyzes PHP
code in order to detect and report type mismatch. I've actively continued
working on it since then, mainly as a research project for EPFL but also as a
fun way to occupy my free time.

### PHANTM, statically checking your types since 2010

So, what's the point of checking types? Contrary to what people might want to believe, PHP is used to do more than manipulating strings out of files, databases, and forms. In a real application, it is in fact rare to see a case where an implicit type conversion is actually wanted (concatenation or string interpolation aside). Even though PHP will handle them gracefully in most cases, it is usually an indication of either bad input handling, or simply laziness. It is arguable that a code without implicit type conversions will be better understood, leaving less room for unexpected behaviors and/or bugs.
TXT;
                        echo Markdown($_text);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
