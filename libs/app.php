<?php //se hace el mapeo
require_once 'controller/errors.php';
class App{
    function __construct(){
        //echo "<p>Nueva App</p>"; 
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url,'/');
        $url = explode('/', $url); // bsca el separador
        //var_dump($url);

        if(empty($url[0])){//si no se especifica una url accede a main
            $archivoController = 'controller/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            return false;
        }      
        
        $archivoController = 'controller/' . $url[0] . '.php';
        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }else {
            $controller = new Errores();
        }
        

    }
}
?>