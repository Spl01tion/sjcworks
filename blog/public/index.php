<?php

/**
 * Recupera a URL da requisição GET, utilizando 'home' como padrão caso não seja fornecida.
 *
 * @param string|null $url A URL da requisição GET, ou null se não fornecida.
 *
 * @return string A URL recuperada, ou 'home' se não fornecida.
 */
$url = $_GET['url'] ?? 'home';
$url = explode("/", $url);

$page_name = trim($url[0]);
$filename = "../app/pages/".$page_name.".php";

if(file_exists($filename))
{
	require_once $filename;
}else
{
	require_once "../app/pages/404.php";
}

//Testes
//print_r($url);