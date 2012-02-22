<?php

class MarkDownRenderer {
    public static function getFromPath($path) {
        switch (dirname($path)) {
            case 'news':
                return new MarkDownNewsRenderer($path);
            case 'highlights':
                return new self($path);
            case 'about':
                return new self($path);
        }
    }

    protected $_path = "";
    protected $_name = "";

    public function __construct($_path) {
        $this->_name = $_path;
        $this->_path = __ROOT__.'/contents/'.$_path;
    }

    public function getHTML() {
        return Markdown(file_get_contents($this->_path));
    }

    public function render() {
        echo $this->getHTML();
    }
}

class MarkDownNewsRenderer extends MarkDownRenderer {
    public function getHTML() {
        $_lines = file($this->_path);
        $title = $_lines[0];
        $date  = $_lines[1];
        $text  = trim(implode("", array_slice($_lines, 2)));
        return '
    <div class="news-item">
        <div class="title">
            <h2>'.$title.'</h2>
            <div class="date">'.date('D, j F Y', strtotime($date)).'</div>
        </div>
        <div class="text">'.Markdown($text).'</div>
    </div>';

    }
}
