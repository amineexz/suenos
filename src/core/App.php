<?php

class App {

    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $url = $this->parseUrl();

        $controller = !empty($url[0]) ? ucfirst(strtolower($url[0])) . 'Controller' : 'HomeController';
        $controllerFile = ROOT . 'controllers/' . $controller . '.php';

        require_once ROOT . 'utils/Config.php';
        Config::load();
        if (!Config::isInstalled() && $controller !== 'SetupController') {
            header('Location: /setup');
            exit;
        }

        if (file_exists($controllerFile)) {
            unset($url[0]);
        } else {
            $this->show404();
            exit;
        }

        require_once $controllerFile;
        $controller = new $controller();

        $method = !empty($url[1]) ? $url[1] : 'index';

        if (method_exists($controller, $method)) {
            unset($url[1]);
        } else {
            $this->show404();
            exit;
        }

        $params = !empty($url) ? array_values($url) : [];

        call_user_func_array([$controller, $method], $params);
    }

    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }

    private function show404() {
        http_response_code(404);
        require_once ROOT . 'views/404.php';
    }
}

?>