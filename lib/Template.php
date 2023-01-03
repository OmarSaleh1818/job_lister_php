<?php

class Template {
    //Path To Template
    protected $template;
    //vars Passed In
    protected $vars = array();

    //Consructor
    public function __construct($template) {
        $this->template = $template ;
    }

    //To get A Template Variablres
    public function __get($key) {
        return $this->vars[$key];
    }

    //To Set Them
    public function __set($key, $value) {
        $this->vars[$key] = $value;
    }

    //Use AS A String
    public function __toString() {
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template);

        return ob_get_clean();
    }


}