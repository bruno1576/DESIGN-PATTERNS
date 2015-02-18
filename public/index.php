<?php


require_once('template/topo.php');
require_once('template/menu.php');
require_once('template/rodape.php');

$rota = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

$path = str_replace("/", "", $rota['path']);

$rotasValidas = array("home" => 1, "Formulario" => 2);

$arquivo = "src/" . $path . ".php";

$urllimpa = str_replace("/", "", $_SERVER['REQUEST_URI']);


if ($urllimpa == "") {
    require_once('src/home.php');
} elseif (array_key_exists($path, $rotasValidas)) {

    require_once($arquivo);


} else {

    header('HTTP/1.0 404 Not Found');
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested could not be found.";

    exit();

}




  