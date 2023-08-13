<?php

namespace App\Http;

class Request {
    private $method;
    private $uri;
    private $params;

    public function __construct($method, $uri, $params = []) {
        $this->method = $method;
        $this->uri = $uri;
        $this->params = $params;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getURI() {
        return $this->uri;
    }

    public function getParams() {
        return $this->params;
    }
}

class Router {
    private $routes = [];

    public function addRoute($method, $path, $action) {
        $this->routes[] = ['method' => $method, 'path' => $path, 'action' => $action];
    }

    public function route(Request $request) {
        foreach ($this->routes as $route) {
            if ($request->getMethod() === $route['method'] && $request->getURI() === $route['path']) {
                $action = $route['action'];
                if (is_callable($action)) {
                    return $action($request);
                }
            }
        }
        // Handle route not found
        echo "Route not found!";
    }
}

// Criar uma instância do Router
$router = new Router();

// Adicionar rotas
$router->addRoute('GET', '/api/users', function ($request) {
    echo "List of users";
});

$router->addRoute('GET', '/api/posts', function ($request) {
    echo "List of posts";
});

// Criar uma instância do Request
$request = new Request('GET', '/api/users');

// Roteamento
$router->route($request);