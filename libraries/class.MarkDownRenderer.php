<?php

class MarkDownRenderer {
    public static function getFromFile($path) {
        switch (dirname($path)) {
            case 'news':
                return new MarkDownNewsRenderer($path)
            case 'highlights':
                return new self($path)
            case 'about':
                return new self($path)
        }
    }

    public function render() {

    }
}

class MarkDownNewsRenderer extends MarkDownRenderer {
    public function render() {

    }
}
