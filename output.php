<?php
// // PHP create HTML element Class by : Ali Borsan
require_once 'HTML_element.Class.php';

//Defining an array for the attributes
$main_args = array('id' => 'main', 'class' => 'container', 'name' => 'main', 'style' => 'font-size:1.2em;color:#714d0a');
$args_empty = [];
$main = new HTML_element('main');
$main->setAttributes($main_args);
//Create input element
//Defining an array for the attributes
$input_args = array('type' => 'text','id' => 'input', 'class' => 'input', 'name' => 'text-input', 'style' => 'font-size:1.2em;color:#714d0a','value' => 'Test');
$input = new  HTML_element('input');
$input->setAttributes($input_args);
$text_input =  $input->input_html();
//Create button element
//Defining an array for the attributes
$button_args = array('type' => 'submit','id' => 'button', 'class' => 'btn', 'name' => 'submit', 'style' => 'font-size:1.2em;color:#714d0a','value' => 'Submit');
$button = new HTML_element('input');
$button->setAttributes($button_args);
$submit_button =  $button->input_html();
//Create form element
$form = new HTML_element('form');
// putting the attributes directly inside an array as an argument of the method setAttributes()
$form->setAttributes(['name' => 'gen-form',' action' => htmlspecialchars($_SERVER['PHP_SELF']) , 'class' => 'form',
'method' => 'post']);
//pack the inputs inside the form
$simple_form = $form->container_html($text_input . $submit_button);
//Create a div container
$container_args = array('id' => 'form-container', 'class' => 'container', 'name' => 'form-container', 'style' => 'font-size:1.2em;color:#714d0a');
$container = new HTML_element('div');
$container->setAttributes($container_args);
// pack the form inside the container
echo $container->container_html($simple_form);
// the output of the form
if(isset($_POST['submit'])){

    $output = $_POST['text-input'];
    echo $output;
}
