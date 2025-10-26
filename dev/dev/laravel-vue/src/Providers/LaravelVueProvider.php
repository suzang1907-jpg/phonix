<?php

namespace Dev\LaravelVue\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelVueProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('vue', function (mixed $object) {
            return "<?php echo Dev\PHPActions\Action::build(Dev\LaravelVue\Actions\Vue\VueObject::class)->data(['object' => {$object}])->run()->getData('object') ?>";
        });
    }
}
