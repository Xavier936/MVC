<?php //se hace el mapeo
require_once 'controller/errors.php';
class App{
    function __construct(){
        echo "<p>Nueva App</p>"; 

        $url = $_GET['url']; // se obtiene la url que se genera

        $url = rtrim($url,'/');
        $url = explode('/', $url); // bsca el separador
        //var_dump($url);

        $archivoController = 'controller/' . $url[0] . '.php';
        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }else {
            $controller = new Errores();
        }
        

    }
}
?>