<?php
    class output {
        private $template;
        private $pagevars = [];

        public function __construct($template) {
            $this->template = $template;
        }

        public function set($var, $val) {
            $this->pagevars[$var] = $val;
        }

        public function render() {
            # NOTE: Be careful with extract() as security issues can arise from misuse
            extract($this->pagevars);
            ob_start();
            require_once($this->template);
            echo ob_get_clean();
        }
    }
?>
