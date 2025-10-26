<?php

namespace Dev\LaravelHighway;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

abstract class Highway
{
    protected static $namespace = 'App';

    protected static $use_context_name_for_path = true;

    private static function _route(string $route, array $parameters = []): string
    {
        $url = route($route, $parameters);

        return $url;
    }

    public static function route(string $route, array $parameters = []): string
    {
        return self::_route($route, $parameters);
    }

    public static function redirect(string $route, array $parameters = [])
    {
        return redirect()->secure(static::route($route, $parameters));
    }

    public static function raw(mixed $page, string $path = '/', string $method = 'show', string $routeType = 'get')
    {
        self::_method($page, $path, $method, $routeType, true);
    }

    public static function file(mixed $page, string $path = '/', string $method = 'show')
    {
        self::_method($page, $path, $method, 'get');
    }

    public static function get(mixed $page, string $path = '/', string $method = 'show')
    {
        self::_method($page, $path, $method, 'get');
    }

    public static function post(mixed $page, string $path, string $method)
    {
        self::_method($page, $path, $method, 'post');
    }

    public static function put(mixed $page, string $path, string $method)
    {
        self::_method($page, $path, $method, 'put');
    }

    public static function patch(mixed $page, string $path, string $method)
    {
        self::_method($page, $path, $method, 'patch');
    }

    public static function delete(mixed $page, string $path, string $method)
    {
        self::_method($page, $path, $method, 'delete');
    }

    public static function any(mixed $page, string $path, string $method)
    {
        self::_method($page, $path, $method, 'any');
    }

    public static function _namespace()
    {
        return static::$namespace;
    }

    private static function _method(mixed $entity, string $path, mixed $method, mixed $routeType = 'get', bool $rawPath = false)
    {
        $id = static::get_class_name($entity);

        $path = $rawPath ? $path : self::_path($id, $path);

        $routeName = self::_routeName(strtolower($id), $method);

        $methodName = self::_methodName($method);

        $namespace = static::_namespace();

        $context_name = static::get_class_name();

        $class = self::_get_controller_path($namespace, $context_name, $id);

        if (!method_exists($class, $methodName)) {
            if ($routeType == 'get') {
                Route::$routeType($path, function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return App::call($class . '@view', [
                        'entity' => $entity,
                        'type' => $methodName,
                        'namespace' => $namespace,
                        'routeName' => $routeName,
                        'contextName' => $context_name
                    ]);
                })->name($routeName);
            } else {
                Route::$routeType($path, function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return App::call($class . '@action', [
                        'entity' => $entity,
                        'type' => $methodName,
                        'namespace' => $namespace,
                        'routeName' => $routeName,
                        'contextName' => $context_name
                    ]);
                })->name($routeName);
            }
        } else {
            Route::$routeType($path, $class . '@' . $methodName)->name($routeName);
        }
    }

    private static function _get_controller_path(string $namespace, string $context_name, string $id)
    {
        $controller_class_in_context = $namespace . '\\Http\\Controllers\\' . $context_name . '\\' . $id . 'Controller';

        if (!class_exists($controller_class_in_context)) {
            return $namespace . '\\Http\\Controllers\\' . $id . 'Controller';
        }

        return $controller_class_in_context;
    }

    private static function _path(string $id, string $path)
    {
        $id = strtolower($id);

        $context_name = strtolower(static::get_class_name());

        if ($id == 'home') {
            return $path;
        }

        if (str_starts_with($path, '/')) {
            return $id . $path;
        }

        if ($context_name != 'web' && self::$use_context_name_for_path) {
            return $context_name . '/' . $id . '/' . $path;
        }

        return $id . '/' . $path;
    }

    private static function _methodName(string $method)
    {
        if (!str_contains($method, '.')) {
            return $method;
        }

        $result = '';

        $explodedMethod = explode('.', $method);

        foreach ($explodedMethod as $value) {
            $result .= ucfirst($value);
        }

        $result = lcfirst($result);

        return $result;
    }

    private static function _routeName(string $id, string $method)
    {
        $context_name = strtolower(static::get_class_name());

        $routeName = $id;

        $explodedMethod = explode('.', $method);

        foreach ($explodedMethod as $value) {
            $routeName .= '.' . strtolower($value);
        }

        return $context_name . '.' . $routeName;
    }

    public static function get_class_name(mixed $class = null)
    {
        if (empty($class)) {
            return ucfirst(last(explode('\\', static::class)));
        }

        return ucfirst(last(explode('\\', $class)));
    }
}
