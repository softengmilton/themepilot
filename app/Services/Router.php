<?php

namespace App\Services;

class Router
{
    /**
     * Registered API routes
     *
     * @var array
     */
    protected $routes = [];

    /**
     * API namespace
     *
     * @var string
     */
    protected $namespace;

    /**
     * Constructor
     *
     * @param string $namespace API namespace (e.g., 'my-plugin/v1')
     */
    public function __construct($namespace)
    {
        $this->namespace = $namespace;
        add_action('rest_api_init', [$this, 'registerRoutes']);
    }

    /**
     * Register a GET route
     *
     * @param string $route Route path
     * @param callable $callback Callback function
     * @param array $args Additional arguments
     * @return Router
     */
    public function get($route, $callback, $args = [])
    {
        return $this->addRoute('GET', $route, $callback, $args);
    }

    /**
     * Register a POST route
     *
     * @param string $route Route path
     * @param callable $callback Callback function
     * @param array $args Additional arguments
     * @return Router
     */
    public function post($route, $callback, $args = [])
    {
        return $this->addRoute('POST', $route, $callback, $args);
    }

    /**
     * Register a PUT route
     *
     * @param string $route Route path
     * @param callable $callback Callback function
     * @param array $args Additional arguments
     * @return Router
     */
    public function put($route, $callback, $args = [])
    {
        return $this->addRoute('PUT', $route, $callback, $args);
    }

    /**
     * Register a PATCH route
     *
     * @param string $route Route path
     * @param callable $callback Callback function
     * @param array $args Additional arguments
     * @return Router
     */
    public function patch($route, $callback, $args = [])
    {
        return $this->addRoute('PATCH', $route, $callback, $args);
    }

    /**
     * Register a DELETE route
     *
     * @param string $route Route path
     * @param callable $callback Callback function
     * @param array $args Additional arguments
     * @return Router
     */
    public function delete($route, $callback, $args = [])
    {
        return $this->addRoute('DELETE', $route, $callback, $args);
    }

    /**
     * Add a route to the collection
     *
     * @param string $method HTTP method
     * @param string $route Route path
     * @param callable $callback Callback function
     * @param array $args Additional arguments
     * @return Router
     */
    protected function addRoute($method, $route, $callback, $args = [])
    {
        $this->routes[] = [
            'methods' => $method,
            'route' => $route,
            'callback' => $callback,
            'args' => $args
        ];

        return $this;
    }

    /**
     * Register all routes with WordPress
     */
    public function registerRoutes()
    {
        foreach ($this->routes as $route) {
            register_rest_route(
                $this->namespace,
                $route['route'],
                array_merge([
                    'methods' => $route['methods'],
                    'callback' => $route['callback'],
                    'permission_callback' => isset($route['args']['permission_callback'])
                        ? $route['args']['permission_callback']
                        : [$this, 'defaultPermissionCallback']
                ], $route['args'])
            );
        }
    }

    /**
     * Default permission callback
     *
     * @return bool
     */
    public function defaultPermissionCallback()
    {
        return current_user_can('manage_options');
    }

    /**
     * Generate URL for a route
     *
     * @param string $route Route name
     * @return string|false
     */
    public function url($route)
    {
        return rest_url($this->namespace . '/' . trim($route, '/'));
    }
}
