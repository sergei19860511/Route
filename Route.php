<?php

class Route
{
    private $routes;

    public function __construct()
    {
        $this->routes = include __DIR__ . '/routes.php';
    }

    private function getURI() {

        if (!empty($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] == '/') {
            return $_SERVER['REQUEST_URI'];
        }
        return trim($_SERVER['REQUEST_URI'], '/');
    }

    /**
     * @return string 'Возвращает название файла'
     */
    public function run() {

        $uri = $this->getURI();
        $pathFile = '404.php';
        foreach ($this->routes as $uriPattern => $path) {
            if(preg_match("~$uriPattern~", $uri)) {
                $pathFile = $path;
            }
        }
        return $pathFile;
    }
}
