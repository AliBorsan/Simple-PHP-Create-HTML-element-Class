<?php
// PHP create HTML element Class by : Ali Borsan
class HTML_element
{
    private $attributes = [];
    private $tag;
    public function __construct($tag)
    {
    $this->tag = $tag;
    }
    public function setAttributes(array $args){
        $this->attributes =  $args;
    }
    public function getAttributes(){
        return $this->attributes;
    }

    // This method construct the creation of an HTML container element
    public function container_html($innerHTML = '')
    {
    $container_html = "<{$this->tag}";
    foreach ($this->attributes as $key => $value) {
    $container_html .= ' ' . $key . '="' . $value . '"';
    }$container_html .= '>';
    $container_html .= $innerHTML;
    $container_html .= "</$this->tag>";
    return $container_html;
    }
    // This method construct the creation of an HTML input element
    public function input_html($innerHTML = '')
    {
        $input_html = "<{$this->tag}";
        foreach ($this->attributes as $key => $value) {
        $input_html .= ' ' . $key . '="' . $value . '"';
        }
        $input_html .= ' />';

    return $input_html;
    }
    // This method construct the creation of an HTML image element
        public function image_html($innerHTML = '')
    {
    $image_html = "<{$this->tag}";
    foreach ($this->attributes as $key => $value) {
    $image_html .= ' ' . $key . '="' . $value . '"';
    }$image_html .= ' >';

    return $image_html;
    }
}
