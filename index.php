<?php
require 'template.php';

$array = array(
	"titulo" => "Titulo da página",
	"nome"   => "Patricia Gomes",
	"idade"  => '20'
);

$tpl = new Template('template.phtml');
$tpl->render($array);
?>