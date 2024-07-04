<?php
// // PHP create HTML element Class by : Ali Borsan
require_once 'HTML_element.Class.php';

//Defining an array for the attributes
$main_attributes = array('id' => 'main', 'class' => 'container', 'name' => 'main', 'style' => 'font-size:1.2em;color:#714d0a');
$attributes_empty = [];
$main = new HTML_element('main');
$main->setAttributes($main_attributes);
//Create input element
//Defining an array for the attributes
$input_attributes = array('type' => 'text','id' => 'input', 'class' => 'input', 'name' => 'text-input', 'style' => 'font-size:1.2em;color:#714d0a','value' => 'Test');
$input = new  HTML_element('input');
$input->setAttributes($input_attributes);
$text_input =  $input->input_html();
//Create button element
//Defining an array for the attributes
$button_attributes = array('type' => 'submit','id' => 'button', 'class' => 'btn', 'name' => 'submit', 'style' => 'font-size:1.2em;color:#714d0a','value' => 'Submit');
$button = new HTML_element('input');
$button->setAttributes($button_attributes);
$submit_button =  $button->input_html();
// Create a form headding 
$headding_attributes = array('id' => 'headding', 'class' => 'headding', 'style' => 'font-size:1.2em;color:brown');
$headding = new HTML_element('h3');
$headding->setAttributes($headding_attributes);
$form_headding = $headding->container_html('Simple form');
//Create form element
$form = new HTML_element('form');
// putting the attributes directly inside an array as an argument of the method setAttributes()
$form->setAttributes(['name' => 'gen-form',' action' => htmlspecialchars($_SERVER['PHP_SELF']) , 'class' => 'form',
'method' => 'post']);
//pack the inputs inside the form
$simple_form = $form->container_html($text_input . $submit_button);
// create after form image
$image_attributes = array('src' => 'output-dom.JPG','id' => 'img', 'class' => 'img', 'height' => '300px','width' => '700px');
$image = new  HTML_element('img');
$image->setAttributes($image_attributes);
$image_output =  $image->image_html();
//Create a div container
$container_attributes = array('id' => 'form-container', 'class' => 'container', 'name' => 'form-container', 'style' => 'font-size:1.2em;color:#714d0a');
$container = new HTML_element('div');
$container->setAttributes($container_attributes);
// pack the form inside the container
echo $container->container_html($form_headding .$simple_form . $image_output);
// the output of the form
if(isset($_POST['submit'])){

    $output = $_POST['text-input'];
    echo $output;
}
