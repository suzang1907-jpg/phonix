<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Routing\Router;

class RouteExportJavascript extends Command
{
    private $router;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'route:export-js';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export routes to javascript';

    public function __construct(Router $router)
    {
        parent::__construct();

        $this->router = $router;
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $routes = collect($this->router->getRoutes())->map(function ($route) {
            return [
                'uri' => $route->uri(),
                'name' => $route->getName(),
            ];
        })->filter()->all();

        $file = 'const routes = {' . PHP_EOL;

        foreach ($routes as $route) {
            $name = $route['name'] ?? null;

            if (empty($name)) {
                continue;
            }

            if (str_starts_with($name, 'sanctum')) {
                continue;
            }

            $file .= $this->addRouteToFile($route);
        }

        $file .= '};' . PHP_EOL;

        $file .= 'export default routes;';

        file_put_contents(resource_path('js/routes.js'), $file);

        $this->output->success('Done');
    }

    private function addRouteToFile($route): string
    {
        $text = "'" . $route['name'] . "':" . "'/" . $route['uri'] . "'";

        $text .= ',' . PHP_EOL;

        return $text;
    }
}